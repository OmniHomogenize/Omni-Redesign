$(document.body).on('click', '.cat-btn', function(e){
    console.log(e.currentTarget.innerText);
    var catName = e.currentTarget.innerText;
    var productsColumn = $('.product-list-accessories');
    var crumbObj = {
        cat: catName
    };
    productsColumn.empty();
    var crumbsElement = extractCrumbs(crumbObj);
    
    productsColumn.prepend(crumbsElement);
    productsColumn.removeClass('hidden');
    $('.breadcrumb').find('li:first-child').on('click', gobackCat);
    $('.bc-back-button').on('click', gobackCat);
    $('.back-to-cat').on('click', gobackCat);
    subCatArray(productAccessories, catName);
});

$(document.body).on('click', '.subcat-btn', function(e){
    var subCatName = e.currentTarget.innerText;
    var categoryname = $(e.target).parent().attr('data-category');
    var productsColumn = $('.product-list-accessories');
    if(subCatName !== 'Back to Categories'){
        var crumbObj = {
            cat: categoryname,
            subCat: subCatName
        };
        var crumbsElement = extractCrumbs(crumbObj);
        if(crumbsElement){
            $('.breadcrumb').remove();
        }
        productsColumn.prepend(crumbsElement);
        grabSubProducts(productAccessories, subCatName, categoryname);
    }else {
        gobackCat(e);
    }
    
});


var masterProduct = $('body').data('id');

var gobackCat = function(){
    var subColumn = $('.subcat-column');
    var catColumn = $('.cat-column');
    var productsColumn = $('.product-list-accessories');
    $('ol.breadcrumb').empty();
    catColumn.addClass('show-cat');
    catColumn.removeClass('hide-cat');
    subColumn.addClass('hide-subcat');
    subColumn.removeClass('show-subcat');
    productsColumn.addClass('hidden');		
};
$('.breadcrumb').find('li:first-child').on('click', gobackCat);
$('.bc-back-button').on('click', gobackCat);
$('.back-to-cat').on('click', gobackCat);
$(document.body).on('click', '.bc-link', gobackCat);


var extractCrumbs = function(crumbObj){
    var crumbsElement = '<ol class="breadcrumb">';
        crumbsElement += '<li class="breadcrumb-item bc-link">Categories</li>';
        crumbsElement += '<li class="breadcrumb-item">'+crumbObj.cat+'</li>';
        if(crumbObj.subCat){
            crumbsElement += '<li class="breadcrumb-item active">'+crumbObj.subCat+'</li>';	
        }
        crumbsElement += '<ol>';
        crumbsElement += '<i class="bc-back-button glyphicon glyphicon-chevron-left bc-link"></i>';

    return crumbsElement;
};

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

var productAccessories = {};

var getAccessories = function(){
    myPromise.then(function (result) {
        var products = JSON.parse(result);
        return products;
    }, function (result) {
        console.error(result);
    }).then(function(products){
        var productArray = products[0].products;
        masterProduct += -1;
        var accesoriesList = Object.values(productArray)[masterProduct];
        var masterAccessories = accesoriesList.product.related_products;
        var AccessorieProducts = [];
        for(var i=0;i<productArray.length;i++){
            if(masterAccessories.indexOf(productArray[i].product.id) !== -1){
                AccessorieProducts.push(productArray[i]);
            }
        }
        productAccessories = AccessorieProducts;
        return AccessorieProducts;
    }).then(function(ap){
        var catList = (function(a){
            for (var i = ap.length; i--;){
                if (a.indexOf(ap[i].product.cat_name) < 0){
                    a.push(ap[i].product.cat_name);
                } 
            }
            return a;
        })([]);
        var subCatList = (function(a){
            for (var i = ap.length; i--;){
                if (a.indexOf(ap[i].product.sub_cat_name) < 0){
                    if(ap[i].product.sub_cat_name !== ""){
                        a.push(ap[i].product.sub_cat_name);
                    }
                } 
            }
            return a;
        })([]);
        var lists = {
            categories: catList,
            subCategories: subCatList
        };
        return lists;
    }).then(function(listObject){
        buildCatList(listObject.categories);
        //getCategories();

    });
};
getAccessories();

var subCatArray = function(array, catname){
    var subCatArr = [];
    var catColumn = $('.cat-column');
    var subColumn = $('.subcat-column');
    for(var i=0;i<array.length;i++){
        if(array[i].product.cat_name === catname){
            subCatArr.push(array[i].product.sub_cat_name);
        }
    }
    var unique = subCatArr.filter(function(elem, index, self) {
        return index === self.indexOf(elem);
    });
    console.log('SubCat Array: ',unique);
    if(unique[0] !== ''){
        catColumn.removeClass('show-cat');
        catColumn.addClass('hide-cat');
        subColumn.removeClass('hide-subcat');
        subColumn.addClass('show-subcat');
        buildSubCatList(unique, catname);
    }else {
        grabCatProducts(productAccessories, catname);
    }
};

var buildCatList = function(AccessoriesList){
    if(AccessoriesList){
        $('.cat-column').append(buildList(AccessoriesList));
    }
};
var buildList = function(array) {
    $('.cat-column').empty();
    var list = document.createElement('div');
    $(list).addClass('btn-group-vertical');
    $(list).addClass('show-cat');
    for(var i=0;i<array.length;i++){
        var item = document.createElement('button');
        $(item).append(array[i]+'<i class="glyphicon glyphicon-chevron-right"></i>');
        $(item).addClass('list-group-item list-group-item-action cat-btn');
        $(item).attr('data-id', i+1);
        list.appendChild(item);
    }
    return list;
};

var buildSubCatList = function(AccessoriesList, catName){
    if(AccessoriesList){
        $('.subcat-column').append(buildSubList(AccessoriesList, catName));
    }
};
var buildSubList = function(array, catName) {
    $('.subcat-column').empty();
    var list = document.createElement('div');
    $(list).addClass('btn-group-vertical hide-cat').attr('data-category', catName);
    array.push("");
    for(var i=0;i<array.length;i++){
        var item = document.createElement('button');
        if(i !== (array.length -1)){
            $(item).append(array[i]+'<i class="glyphicon glyphicon-chevron-right"></i>')
                .addClass('list-group-item list-group-item-action subcat-btn')
                .attr('data-id', i+1);
        }else {
            $(item).append('Back to Categories<i class="glyphicon glyphicon-chevron-left"></i>')
                .addClass('list-group-item list-group-item-action subcat-btn back-to-cat');
        }
        list.appendChild(item);
    }
    return list;
};

var grabSubProducts = function(masterArr, subCatName, catName){
    var subProductsArr = [];
    for(var i=0;i<masterArr.length;i++){
        if(masterArr[i].product.sub_cat_name === subCatName && masterArr[i].product.cat_name === catName){
            subProductsArr.push(masterArr[i]);
        }
    }
    buildProducts(subProductsArr);
};
var grabCatProducts = function(masterArr, catName){
    var catProductsArr = [];
    for(var i=0;i<masterArr.length;i++){
        if(masterArr[i].product.cat_name === catName){
            catProductsArr.push(masterArr[i]);
        }
    }
    
    buildProducts(catProductsArr);
};

var buildProducts = function(prodArray){
    console.log('product list to grab:', prodArray);
    if(prodArray){
        $('.product-list-accessories').append(buildProductList(prodArray)).removeClass('hidden');
    }
};

var buildProductList = function(array) {
    $('.product-list-accessories').find('.items').remove();
    var list = document.createElement('ul');
    $(list).addClass('items');
    for(var i=0;i<array.length;i++){
        var item = '<li>';
                item += '<div class="item">';
                    item += '<a href="" class="product-name">'+array[i].product.product_name+'</a>';
                    item += '<div class="product-thumb">';
                        item += '<img src="'+array[i].product.images[0].thumbnail+'" alt="'+array[i].product.product_name+'">';
                    item += '</div>';
                    item += '<div class="product-col">';
                        item += '<span class="sku">SKU: '+array[i].product.sku+'</span>';
                        item += '<div class="price">Price: $'+array[i].product.price+'</div>';
                        item += '<div class="btn-group" role="group" aria-label="Basic example">';
                            item += '<button type="button" class="btn btn-solid">View Product</button>';
                            item += '<button type="button" class="btn btn-solid add-to-cart">Add to Cart</button>';
                        item += '</div>';
                    item += '</div>';
                item += '</div>';
            item += '</li>';
        $(list).append(item);
    }
    return $(list);
};