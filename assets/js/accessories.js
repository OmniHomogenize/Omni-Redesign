
(function() {
    console.log("starting");
    var masterProduct = 3;
    var myPromise = new Promise(function (resolve, reject) {
		var request = new XMLHttpRequest();
		// Request a all Omni Products.
		request.open('GET', 'assets/js/products.json');
		// Set function to call when resource is loaded.
		request.onload = function () {
			if (request.status === 200) {
				resolve(request.response);
			} else {
				reject('Page loaded, but status not OK.');
			}
		};
		// Set function to call when loading fails.
		request.onerror = function () {
			reject('Aww, didn\'t work at all.');
		};
		request.send();
	});
	var getAccessories = function(){
		myPromise.then(function (result) {
			var products = JSON.parse(result);
			return products;
		}, function (result) {
			console.error(result);
		}).then(function(products){
			let productArray = products[0].products;
			masterProduct += -1;
			let accesoriesList = Object.values(productArray)[masterProduct];
			let masterAccessories = accesoriesList.product.related_products;
			let AccessorieProducts = [];
			for(let i=0;i<productArray.length;i++){
				if(masterAccessories.indexOf(productArray[i].product.id) !== -1){
					AccessorieProducts.push(productArray[i]);
				}
			}
			return AccessorieProducts;
		}).then(function(productsObj){
                init(productsObj);
		}).then(function(){
            initEvents();
        });
	};
    getAccessories();
    
    function ProductAccessories(arr){
        this.el = $('#accessories');
        this.listWrapper = $('.category-list-wrapper');
            this.catListEl = this.listWrapper.find('.cat-column');
            this.subListEl = this.listWrapper.find('.subcat-column');
        this.productWrapper = $('.product-list-accessories');
        this.products = arr;
        this.categoriesArr = this.getCategories(this.products);
        this.subCategoriesArr = this.getSubCategories(this.products);
        this.breadCrumbs = [];
        this.categoriesList = this.buildCatList(this.categoriesArr);
        //this.subCategoriesList = this.buildSubCatList(this.subCategoriesArr);
        var self = this;
        this.catListEl.on('click', '.cat-btn', this._clickCategory(self));

        // this.closeCompareCtrl.on('click', function() {
        //     self.el.addClass('show');
        //     $('.view').removeClass('view-compare');
        // });
    }

    ProductAccessories.prototype._clickCategory = function(self) {
        console.log('self: ',self);
        console.log('this: ',this);
        let catName = $(this)[0].innerText;
        console.log('CatName: ',catName);
		let crumbObj = {
			cat: catName
		};
		// this.productWrapper.empty();
		// var crumbsElement = extractCrumbs(crumbObj);
        // this.productWrapper.prepend(crumbsElement);
        // this.productWrapper.removeClass('hidden');
        // $('.breadcrumb').find('li:first-child').on('click', gobackCat);
		// $('.bc-back-button').on('click', gobackCat);
		// $('.back-to-cat').on('click', gobackCat);
		// subCatArray(productAccessories, catName);
    };

    ProductAccessories.prototype.clickedOnCategory = function(item) {

    }
    
    ProductAccessories.prototype.extractCrumbs = function(obj){
        let crumbsElement = '<ol class="breadcrumb">';
            crumbsElement += '<li class="breadcrumb-item bc-link">Categories</li>';
            crumbsElement += '<li class="breadcrumb-item">'+obj.cat+'</li>';
            if(obj.subCat){
                crumbsElement += '<li class="breadcrumb-item active">'+obj.subCat+'</li>';	
            }
            crumbsElement += '<ol>';
            crumbsElement += '<i class="bc-back-button glyphicon glyphicon-chevron-left bc-link"></i>';

        return crumbsElement;
	};

    ProductAccessories.prototype._categoryButtons = function() {
        var self = this;
        console.log(this.items);
        for(var i = 0; i < this.totalItems; ++i) {
            var compareItemWrapper = document.createElement('div');
            compareItemWrapper.className = 'compare-item';

            var compareItemEffectEl = document.createElement('div');
            compareItemEffectEl.className = 'compare-effect';
    
            compareItemEffectEl.innerHTML = this.items[i].getAttribute('data-info');
            compareItemWrapper.appendChild(compareItemEffectEl);
        this.compareWrapper.append(compareItemWrapper);
            }
        setTimeout(function() {
                self.el.removeClass('show');
                $('.view').addClass('view-compare');
            }, 25);

    }

    ProductAccessories.prototype.getCategories = function(arr){
        let catList = (function(a){
            for (let i = arr.length; i--;){
                if (a.indexOf(arr[i].product.cat_name) < 0){
                    a.push(arr[i].product.cat_name);
                } 
            }
            return a;
        })([]);
        return catList;
    }

    ProductAccessories.prototype.getSubCategories = function(arr){
        let subCatList = (function(a){
            for (let i = arr.length; i--;){
                if (a.indexOf(arr[i].product.sub_cat_name) < 0){
                    if(arr[i].product.sub_cat_name !== ""){
                        a.push(arr[i].product.sub_cat_name);
                    }
                } 
            }
            return a;
        })([]);
        return subCatList;
    }
    
    ProductAccessories.prototype.buildCatList = function(arr) {
		this.catListEl.empty();
		let list = document.createElement('div');
		$(list).addClass('btn-group-vertical');
		$(list).addClass('show-cat');
		for(let i=0;i<arr.length;i++){
			var item = document.createElement('button');
			$(item).append(arr[i]+'<i class="glyphicon glyphicon-chevron-right"></i>');
			$(item).addClass('list-group-item list-group-item-action cat-btn');
			$(item).attr('data-id', i+1);
			list.appendChild(item);
        }
        this.catListEl.append(list);
        console.log('LIST: ',list);
		return list;
    };
    
    ProductAccessories.prototype.buildSubCatList = function(arr) {
		this.subListEl.empty();
		let list = document.createElement('div');
		$(list).addClass('btn-group-vertical');
		$(list).addClass('show-cat');
		for(let i=0;i<arr.length;i++){
			var item = document.createElement('button');
			$(item).append(arr[i]+'<i class="glyphicon glyphicon-chevron-right"></i>');
			$(item).addClass('list-group-item list-group-item-action cat-btn');
			$(item).attr('data-id', i+1);
			list.appendChild(item);
        }
        this.subListEl.append(list);
        console.log('LIST: ',list);
		return list;
	};

    function initEvents(){
        console.log('starting events');
       
    }
    function init(arr){
        productAccessories = new ProductAccessories(arr);
    }
})();
