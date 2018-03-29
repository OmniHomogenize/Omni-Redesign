$(document).ready(function(){
	
	jQuery(document).on('click', '.mega-dropdown', function(e) {
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
		sortByDropdown = $(".sort-by-dropdown"),
		videoFilter = $(".filter"),
		dropDownPanel = $('.dropdown-panel'),
		videoCatFlag = true;
	
	videoFilter.on('click', function(){
		if(videoCatFlag){
			buildDropDownList();
		}
		grabVideoCats();
		$('.dropdown-panel').toggleClass('open');
	});
	$('.videos').find('.video').matchHeight();
	
	function buildDropDownList(){
		var list = '';
		for(var i=0;i<videoCategories.length;i++){
			list += '<span>'+videoCategories[i]+'</span>';
		}
		dropDownPanel.append(list);
		videoCatFlag = false;
	}
	
	var videoCategories = grabVideoCats();
	function grabVideoCats(){
		var videoCats = [];
		var videosArray = [];
		$('.videos').children().each(function(index, element){
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
	}

	console.log(videoCategories);
	


	$('.filter-tab').on('click', function () {
		$('.filter-sidebar').toggleClass('open-filter');
	});

	$('.close-filter').on('click', function () {
		$('.filter-sidebar').removeClass('open-filter');
	});

	function showModuleOverlay(module){
		console.log(module);
		darkOverlay.addClass('show');
		module.addClass('show');
	}
	directoryModuleBtn.on('click', function(e){
		e.preventDefault();
		showModuleOverlay(directoryModule);
	});

	accountIcon.on('click', function(){
		showModuleOverlay(accountModule);
	});

	closeModuleButton.on('click', function(){
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
	
	searchIcon.on('click', function(){
		if(!bigSearch.hasClass('show')){
			bigSearch.addClass('show');
			bigSearch.find('input').focus();
			searchOpen = true;
		}
	});
	closeSearchIcon.on('click', function(){
		if(bigSearch.hasClass('show')){
			bigSearch.removeClass('show');
			searchOpen = false;
		}
	});

	//CONTACT MODULE
	contactModuleBtn.on('click', function(){
		showModuleOverlay(contactModule);
	});
	contactExpertBtn.on('click', function(){
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
	$('.login').on('click', '.register-btn', function(){
		$(this).parent().parent().parent().parent().toggleClass('hidden');
		$(this).parent().parent().parent().parent().parent().find('.register').toggleClass('hidden');
	});
	$('.register').on('click', '.cancel', function(){
		$(this).parent().parent().parent().parent().toggleClass('hidden');
		$(this).parent().parent().parent().parent().parent().find('.login').toggleClass('hidden');
	});

	//ACCOUNT PAGE
	editBtn.on('click', function(){
		$(this).parent().find('.glyphicon-remove').toggleClass('hidden');
		$(this).parent().find('.glyphicon-pencil').toggleClass('hidden');
		$(this).parent().find('address').toggleClass('hidden');
		$(this).parent().find('.edit').toggleClass('hidden');
	});
	$('.tab-content').on('click', '.glyphicon-remove', function(){
		$(this).parent().find('.glyphicon-remove').toggleClass('hidden');
		$(this).parent().find('.glyphicon-pencil').toggleClass('hidden');
		$(this).parent().find('address').toggleClass('hidden');
		$(this).parent().find('.edit').toggleClass('hidden');
	});
	$('.account-page').on('click', '.cancel-changes', function(event){
		event.preventDefault();
		$(this).closest('.tab-content').find('.glyphicon-pencil').removeClass('hidden');
		$(this).closest('.tab-content').find('.glyphicon-remove').addClass('hidden');
		$(this).closest('.tab-content').find('address').toggleClass('hidden');
		$(this).closest('.tab-content').find('.edit').toggleClass('hidden');
	});
	$('.account-page').on('click', '.submit-changes', function(event){
		event.preventDefault();
		$(this).closest('.tab-content').find('.glyphicon-pencil').removeClass('hidden');
		$(this).closest('.tab-content').find('.glyphicon-remove').addClass('hidden');
		$(this).closest('.tab-content').find('address').toggleClass('hidden');
		$(this).closest('.tab-content').find('.edit').toggleClass('hidden');
	});
	

	if($('.video-page')){
		$('.carousel').carousel({
	   		interval: false
	 	});
	}

	//Category Page Functioning
	var quickInfoModule = $('.quick-info');
	var closeQIbtn = quickInfoModule.find('.glyphicon-remove');
	var quickInfoBtn = $('.qiBtn');
	quickInfoBtn.on('mouseenter', function(event){
		event.stopImmediatePropagation();
		event.preventDefault();
		var module = $(this).parent().parent().children()[3];
		$(module).addClass('show');
	});
	closeQIbtn.on('click', function(e){
		e.preventDefault();
		$(this).parent().toggleClass('show');
	});

	$('.category-page .product').on('mouseleave', function(e){
		e.stopImmediatePropagation();
		if ($('.quick-info.show', this).length > 0){
			console.log('working yo!');
			$('.quick-info').removeClass('show');
		}
	});
	$('.quick-info').on('click', function(e){
		e.preventDefault();
	});

	//STICKY HEADER Functioning
	var header = $("#main-nav");
	$(document).scroll(function() {
	    if($(this).scrollTop() > ($(".header-wrapper").height()) - header.height()) {
	        header.css({"position" : "fixed", "top" : "0", "z-index" : "22"});
	    } else {
	        header.css({"position" : "relative", "z-index" : "18"});
	    }
	});

	//YOUR ACCOUNT MODULE FUNCTIONING
	accountModule.find('.account-buttons').on('click', 'button', function(){
		var buttonSelected = $(this).attr('data-id');
		$('.tab').addClass('hidden');
		accountModule.find('.' + buttonSelected).toggleClass('hidden');
		$('.account-buttons').find('button').removeClass('active');
		$(this).addClass('active');
	});
	accountModule.find('.login-btn').on('click', function(e){
		accountModule.find('.login').toggleClass('hidden');
		accountModule.find('.shipping-address').toggleClass('hidden');
	});
	accountModule.find('.logout').on('click', function (e) {
		var tabs = accountModule.find('.tab');
		console.log(tabs);
		for(var i=0;i<tabs.length;i++){
				$(tabs[i]).addClass('hidden');
		}
		accountModule.find('.login-form').removeClass('hidden');
		accountModule.find('.login').removeClass('hidden');
	});

	//SHOPPING CART PAGE
	$('#estimate-shipping').on('click', function(){
		$(this).toggleClass('open');
		if($(this).hasClass('open')) {
			setTimeout(function () {
				$('input[name="country"]').focus();
			}, 500);
		}
		$('.estimate-shipping').toggleClass('show-shipping');
	});
	

	//YOUR SHOPPING CART MODULE FUNCTIONING
	$('.dropdown-module').on('click', function(){
		if ($(this).hasClass('cart')){
			if (quoteModule.hasClass('show-cart')) {
				toggleModule('quote');
			}
			toggleModule('cart');
		}
		if ($(this).hasClass('quote')){
			if (cartModule.hasClass('show-cart')){
				toggleModule('cart');
			}
			toggleModule('quote');
		}
	});

	$('.close-cart').on('click', function(){
		console.log($(this)[0].parentElement.id);
		if ($(this)[0].parentElement.id === 'quote-module'){
			toggleModule('quote');
		}else {
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

	$(document.body).on('click', '.add-to-cart', function(){
		toggleModule('cart');
	});
	$('.continue-shopping').on('click', function () {
		toggleModule('cart');
	});
	
	

});
