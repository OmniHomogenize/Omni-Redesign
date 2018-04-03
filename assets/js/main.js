$(document).ready(function () {

	jQuery(document).on('click', '.mega-dropdown', function (e) {
		e.stopPropagation();
	});
	
	//MODULE FUNCTIONING
	var quoteModule = $("#quote-module"),
		cartModule = $("#shopping-cart-module"),
		accountIcon = $(".header-icon-group #account-icon"),
		accountModule = $("#account-module"),
		closeModuleButton = $(".close-module"),
		editBtn = $(".glyphicon-pencil"),
		contactModule = $("#contact-module"),
		directoryModule = $("#directory-module"),
		directoryModuleBtn = $("img.logo"),
		contactModuleBtn = $(".open-contact"),
		contactExpertBtn = $(".top-footer").find('button'),
		darkOverlay = $(".dark-overlay"),
		videoFilter = $(".filter"),
		dropDownPanel = $('.dropdown-panel'),
		videoMessages = $('.search-message');
		

	function InitVideo(url) {
		this.paramObj = {};
		this._url = url;
		this.videoCategories = '';
		this.videoCatFlag = true;
		this.getUrl = function(){
			this._url = window.location.search;
			return this._url;
		};
		this.videoUrlParams = function(video) {
			if(!video){
				var regEx1 = /((?=\?)[^\&]+)(?:\b\w*-video\w*\b)/g;
				var regEx2 = /(?:[\b\w*video&])[^\&]*$/g;
				if (this._url.match(regEx1)) {
					var categoryString = this._url.match(regEx1)[0].split('?')[1];
					this.paramObj.catString = categoryString;
				}
				if (this._url.match(regEx2)) {
					var videoSelected = this._url.match(regEx2)[0].split('&')[1];
					this.paramObj.vidSelected = videoSelected;
				} else {
					return false;
				}
				if (this.paramObj.vidSelected.length) {
					this.parseParams(this.paramObj.vidSelected);
				}
			}else {
				this.paramObj.vidSelected = video;
				this.parseParams(video);
			}
			
		};
		this.videoSelection = function(video) {
			if (video !== undefined || video !== null) {
				console.log('Video is not null', video[0].nodeName);
				$('.videos').find('figure').removeClass('selected');
				video.find('figure').addClass('selected');
			} else {
				console.log('Video = null', video);
				$('.videos').find('figure').removeClass('selected');
			}
		};
		this.parseParams = function(videoString) {
			var videoStr = videoString.toLowerCase();
			videoStr = videoStr.split('-');
			var parsedVideoStr = '';
			for (var i = 0; i < videoStr.length; i++) {
				parsedVideoStr += videoStr[i] + ' ';
			}
			parsedVideoStr = parsedVideoStr.trim();
			if ($("h4[name*='" + parsedVideoStr + "']").length > 0) {
				var vid = $("h4[name*='" + parsedVideoStr + "']").offsetParent();
				if($("h4[name*='" + parsedVideoStr + "']").offsetParent()[0].nodeName === 'LI'){
					console.log('working');
					this.videoSelection(vid);
					$('html, body').animate({
						scrollTop: vid.offset().top - 120
					}, 1000);
					videoMessages[0].innerHTML = '<p>Search Term: <span>' + parsedVideoStr + '</span></p>';
				}else {
					videoMessages[0].innerHTML = '<p>Search Term: <span>' + parsedVideoStr + '</span> is not in this category</p>';
				}
				
				
			} else {
				videoMessages[0].innerHTML = '<p>Search Term: <span class="danger">' + parsedVideoStr + '</span>, is not returning any results. Try a simpler keyword.</p>';
			}
		};
		this.init = function(){
			if(this._url){
				this.videoUrlParams();
			}
			this.videoCategories = this.grabVideoCats();
			console.log(this.videoCategories);
		};
		this.search = function(e){
			e.preventDefault();
			var searchParam = e.currentTarget.children[0].children[0].value;
			searchParam = searchParam.replace(' ', '-');
			this.paramObj.vidSelected = searchParam;
			history.pushState(null, null, '?video&' + this.paramObj.vidSelected);
			this.videoUrlParams(this.paramObj.vidSelected);
			e.currentTarget.children[0].children[0].value = '';
		};
		this.grabVideoCats = function(){
			var videoCats = [];
			var videosArray = [];
			$('.videos').children().each(function(){
				videosArray.push($(this));
			});
			videosArray.forEach(function(video) {
				var cat = video.attr('data-category');
				var ln = cat.split(',');
				if (ln.length > 1) {
					for (var i = 0; i < ln.length; i++) {
						if (videoCats.indexOf(ln[i]) === -1) {
							videoCats.push(ln[i]);
						}

					}
				} else {
					if (videoCats.indexOf(cat) === -1) {
						videoCats.push(cat);
					}
				}
			});
			return videoCats;
		};
		this.buildDropDownList = function(){
			var list = '';
			for(var i=0;i<this.videoCategories.length;i++){
				list += '<span>'+this.videoCategories[i].trim()+'</span>';
			}
			dropDownPanel.prepend('<span>show all</span>');
			dropDownPanel.append(list);
			this.videoCatFlag = false;
		};
		this.createCatlist = function(){
			if (this.videoCatFlag) {
				this.buildDropDownList();
			}
			dropDownPanel.toggleClass('open');
		};
		this.filterByCat = function(el){
			var catSelected = el.currentTarget.textContent;
			var videos = $('li.video');
			for (var i = 0; i < videos.length; i++) {
				if(catSelected === 'show all'){
					if ($(videos[i]).hasClass('hidden')) {
						$(videos[i]).removeClass('hidden');
					}
				}else {
					var cats = $(videos[i]).data('category');
					if (cats.includes(catSelected)) {
						if ($(videos[i]).hasClass('hidden')) {
							$(videos[i]).removeClass('hidden');
						}
					} else {
						$(videos[i]).addClass('hidden');
					}
				}
			}
			videoMessages[0].innerHTML = '';
			this.showCatNames(catSelected);
		};
		this.showCatNames = function(cat){
			this.paramObj.catString = cat;
			cat = cat.replace('-', ' ');
			console.log('CatString: ', cat);
			if(cat !== 'show all'){
				console.log($('.video-category'));
				$('.video-category')[0].innerText = cat;
				$('.video-category').removeClass('hidden');
			}else {
				$('.video-category').innerHTML = '';
				$('.video-category').addClass('hidden');
			}
			
		}
	}
	var startVideoPage = new InitVideo(window.location.search);
	startVideoPage.init();
	var searchVideoBar = $('#search-video');
	searchVideoBar.on('submit', function(e){
		var self = e;
		startVideoPage.search(self);
	});
	videoFilter.on('click', function(){
		startVideoPage.createCatlist();
	});
	dropDownPanel.on('click', 'span', function (el) {
		var self = el;
		startVideoPage.filterByCat(self);
	});





	$('.filter-tab').on('click', function () {
		$('.filter-sidebar').toggleClass('open-filter');
	});

	$('.close-filter').on('click', function () {
		$('.filter-sidebar').removeClass('open-filter');
	});

	function showModuleOverlay(module) {
		console.log(module);
		darkOverlay.addClass('show');
		module.addClass('show');
	}
	directoryModuleBtn.on('click', function (e) {
		e.preventDefault();
		showModuleOverlay(directoryModule);
	});

	accountIcon.on('click', function () {
		showModuleOverlay(accountModule);
	});

	closeModuleButton.on('click', function () {
		$(this).parent().toggleClass('show');
		darkOverlay.toggleClass('show');
	});

	//CAROUSEL - SLIDERS
	if ($('#myCarousel1')) {
		$('#myCarousel1').carousel({
			interval: 4000
		});
	}
	if ($('#myCarousel2')) {
		$('#myCarousel2').carousel({
			interval: 4000
		});
	}
	if ($('.carousel')) {
		$('.carousel').carousel({
			interval: 4000
		});
	}
	var clickEvent = false;
	$('#myCarousel').on('click', function () {
		clickEvent = true;
		$('#main-nav .nav li').removeClass('active');
		$(this).parent().addClass('active');
	}).on('slid.bs.carousel', function () {
		if (!clickEvent) {
			var count = $('#main-nav .nav').children().length - 1;
			var current = $('#main-nav .nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if (count === id) {
				$('#main-nav .nav li').first().addClass('active');
			}
		}
		clickEvent = false;
	});

	//SEARCH FUNCTIONING
	var searchOpen = false;
	var searchIcon = $('.search-icon');
	var bigSearch = $('.big-search-field');
	var closeSearchIcon = $('.close-big-search');

	searchIcon.on('click', function () {
		if (!bigSearch.hasClass('show')) {
			bigSearch.addClass('show');
			bigSearch.find('input').focus();
			searchOpen = true;
		}
	});
	closeSearchIcon.on('click', function () {
		if (bigSearch.hasClass('show')) {
			bigSearch.removeClass('show');
			searchOpen = false;
		}
	});

	//CONTACT MODULE
	contactModuleBtn.on('click', function () {
		showModuleOverlay(contactModule);
	});
	contactExpertBtn.on('click', function () {
		showModuleOverlay(contactModule);
	});

	//SEARCH PAGE
	if ($('.search-page')) {
		$('.filter').find('h3').on('click', function () {
			var parentel = $(this)[0].parentElement;
			$(parentel).toggleClass('show-filter');
		});
	}

	//LOGIN PAGE 
	$('.login').on('click', '.register-btn', function () {
		$(this).parent().parent().parent().parent().toggleClass('hidden');
		$(this).parent().parent().parent().parent().parent().find('.register').toggleClass('hidden');
	});
	$('.register').on('click', '.cancel', function () {
		$(this).parent().parent().parent().parent().toggleClass('hidden');
		$(this).parent().parent().parent().parent().parent().find('.login').toggleClass('hidden');
	});

	//ACCOUNT PAGE
	editBtn.on('click', function () {
		$(this).parent().find('.glyphicon-remove').toggleClass('hidden');
		$(this).parent().find('.glyphicon-pencil').toggleClass('hidden');
		$(this).parent().find('address').toggleClass('hidden');
		$(this).parent().find('.edit').toggleClass('hidden');
	});
	$('.tab-content').on('click', '.glyphicon-remove', function () {
		$(this).parent().find('.glyphicon-remove').toggleClass('hidden');
		$(this).parent().find('.glyphicon-pencil').toggleClass('hidden');
		$(this).parent().find('address').toggleClass('hidden');
		$(this).parent().find('.edit').toggleClass('hidden');
	});
	$('.account-page').on('click', '.cancel-changes', function (event) {
		event.preventDefault();
		$(this).closest('.tab-content').find('.glyphicon-pencil').removeClass('hidden');
		$(this).closest('.tab-content').find('.glyphicon-remove').addClass('hidden');
		$(this).closest('.tab-content').find('address').toggleClass('hidden');
		$(this).closest('.tab-content').find('.edit').toggleClass('hidden');
	});
	$('.account-page').on('click', '.submit-changes', function (event) {
		event.preventDefault();
		$(this).closest('.tab-content').find('.glyphicon-pencil').removeClass('hidden');
		$(this).closest('.tab-content').find('.glyphicon-remove').addClass('hidden');
		$(this).closest('.tab-content').find('address').toggleClass('hidden');
		$(this).closest('.tab-content').find('.edit').toggleClass('hidden');
	});


	if ($('.video-page')) {
		$('.carousel').carousel({
			interval: false
		});
	}

	//Category Page Functioning
	var quickInfoModule = $('.quick-info');
	var closeQIbtn = quickInfoModule.find('.glyphicon-remove');
	var quickInfoBtn = $('.qiBtn');
	quickInfoBtn.on('mouseenter', function (event) {
		event.stopImmediatePropagation();
		event.preventDefault();
		var module = $(this).parent().parent().children()[3];
		$(module).addClass('show');
	});
	closeQIbtn.on('click', function (e) {
		e.preventDefault();
		$(this).parent().toggleClass('show');
	});

	$('.category-page .product').on('mouseleave', function (e) {
		e.stopImmediatePropagation();
		if ($('.quick-info.show', this).length > 0) {
			console.log('working yo!');
			$('.quick-info').removeClass('show');
		}
	});
	$('.quick-info').on('click', function (e) {
		e.preventDefault();
	});

	//STICKY HEADER Functioning
	var header = $("#main-nav");
	$(document).scroll(function () {
		if ($(this).scrollTop() > ($(".header-wrapper").height()) - header.height()) {
			header.css({ "position": "fixed", "top": "0", "z-index": "22" });
		} else {
			header.css({ "position": "relative", "z-index": "18" });
		}
	});

	//YOUR ACCOUNT MODULE FUNCTIONING
	accountModule.find('.account-buttons').on('click', 'button', function () {
		var buttonSelected = $(this).attr('data-id');
		$('.tab').addClass('hidden');
		accountModule.find('.' + buttonSelected).toggleClass('hidden');
		$('.account-buttons').find('button').removeClass('active');
		$(this).addClass('active');
	});
	accountModule.find('.login-btn').on('click', function () {
		accountModule.find('.login').toggleClass('hidden');
		accountModule.find('.shipping-address').toggleClass('hidden');
	});
	accountModule.find('.logout').on('click', function () {
		var tabs = accountModule.find('.tab');
		console.log(tabs);
		for (var i = 0; i < tabs.length; i++) {
			$(tabs[i]).addClass('hidden');
		}
		accountModule.find('.login-form').removeClass('hidden');
		accountModule.find('.login').removeClass('hidden');
	});

	//SHOPPING CART PAGE
	$('#estimate-shipping').on('click', function () {
		$(this).toggleClass('open');
		if ($(this).hasClass('open')) {
			setTimeout(function () {
				$('input[name="country"]').focus();
			}, 500);
		}
		$('.estimate-shipping').toggleClass('show-shipping');
	});


	//YOUR SHOPPING CART MODULE FUNCTIONING
	$('.dropdown-module').on('click', function () {
		if ($(this).hasClass('cart')) {
			if (quoteModule.hasClass('show-cart')) {
				toggleModule('quote');
			}
			toggleModule('cart');
		}
		if ($(this).hasClass('quote')) {
			if (cartModule.hasClass('show-cart')) {
				toggleModule('cart');
			}
			toggleModule('quote');
		}
	});

	$('.close-cart').on('click', function () {
		console.log($(this)[0].parentElement.id);
		if ($(this)[0].parentElement.id === 'quote-module') {
			toggleModule('quote');
		} else {
			toggleModule('cart');
		}
	});

	function toggleModule(module) {
		console.log('people stop!!!!');
		if (module === 'quote') {
			quoteModule.toggleClass('show-cart');
		} else {
			cartModule.toggleClass('show-cart');
		}
	}

	$(document.body).on('click', '.add-to-cart', function () {
		toggleModule('cart');
	});
	$('.continue-shopping').on('click', function () {
		toggleModule('cart');
	});



});
