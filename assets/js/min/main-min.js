$(document).ready(function(){function e(e){this.paramObj={},this._url=e,this.videoCategories="",this.videoCatFlag=!0,this.getUrl=function(){return this._url=window.location.search,this._url},this.videoUrlParams=function(e){if(e)this.paramObj.vidSelected=e,this.parseParams(e);else{var t=/((?=\?)[^\&]+)(?:\b\w*-video\w*\b)/g,n=/(?:[\b\w*video&])[^\&]*$/g;if(this._url.match(t)){var i=this._url.match(t)[0].split("?")[1];this.paramObj.catString=i}if(!this._url.match(n))return!1;var s=this._url.match(n)[0].split("&")[1];this.paramObj.vidSelected=s,this.paramObj.vidSelected.length&&this.parseParams(this.paramObj.vidSelected)}},this.videoSelection=function(e){void 0!==e||null!==e?(console.log("Video is not null",e[0].nodeName),$(".videos").find("figure").removeClass("selected"),e.find("figure").addClass("selected")):(console.log("Video = null",e),$(".videos").find("figure").removeClass("selected"))},this.parseParams=function(e){var t=e.toLowerCase();t=t.split("-");for(var n="",i=0;i<t.length;i++)n+=t[i]+" ";if(n=n.trim(),$("h4[name*='"+n+"']").length>0){var s=$("h4[name*='"+n+"']").offsetParent();"LI"===$("h4[name*='"+n+"']").offsetParent()[0].nodeName?(console.log("working"),this.videoSelection(s),$("html, body").animate({scrollTop:s.offset().top-120},1e3),m[0].innerHTML="<p>Search Term: <span>"+n+"</span></p>"):m[0].innerHTML="<p>Search Term: <span>"+n+"</span> is not in this category</p>"}else m[0].innerHTML='<p>Search Term: <span class="danger">'+n+"</span>, is not returning any results. Try a simpler keyword.</p>"},this.init=function(){this._url&&this.videoUrlParams(),this.videoCategories=this.grabVideoCats(),console.log(this.videoCategories)},this.search=function(e){e.preventDefault();var t=e.currentTarget.children[0].children[0].value;t=t.replace(" ","-"),this.paramObj.vidSelected=t,history.pushState(null,null,"?video&"+this.paramObj.vidSelected),this.videoUrlParams(this.paramObj.vidSelected),e.currentTarget.children[0].children[0].value=""},this.grabVideoCats=function(){var e=[],t=[];return $(".videos").children().each(function(){t.push($(this))}),t.forEach(function(t){var n=t.attr("data-category"),i=n.split(",");if(i.length>1)for(var s=0;s<i.length;s++)-1===e.indexOf(i[s])&&e.push(i[s]);else-1===e.indexOf(n)&&e.push(n)}),e},this.buildDropDownList=function(){for(var e="",t=0;t<this.videoCategories.length;t++)e+="<span>"+this.videoCategories[t].trim()+"</span>";v.prepend("<span>show all</span>"),v.append(e),this.videoCatFlag=!1},this.createCatlist=function(){this.videoCatFlag&&this.buildDropDownList(),v.toggleClass("open")},this.filterByCat=function(e){for(var t=e.currentTarget.textContent,n=$("li.video"),i=0;i<n.length;i++)if("show all"===t)$(n[i]).hasClass("hidden")&&$(n[i]).removeClass("hidden");else{var s=$(n[i]).data("category");s.includes(t)?$(n[i]).hasClass("hidden")&&$(n[i]).removeClass("hidden"):$(n[i]).addClass("hidden")}m[0].innerHTML="",this.showCatNames(t)},this.showCatNames=function(e){this.paramObj.catString=e,e=e.replace("-"," "),console.log("CatString: ",e),"show all"!==e?(console.log($(".video-category")),$(".video-category")[0].innerText=e,$(".video-category").removeClass("hidden")):($(".video-category").innerHTML="",$(".video-category").addClass("hidden"))}}function t(e){console.log(e),p.addClass("show"),e.addClass("show")}function n(e){console.log("people stop!!!!"),"quote"===e?i.toggleClass("show-cart"):s.toggleClass("show-cart")}jQuery(document).on("click",".mega-dropdown",function(e){e.stopPropagation()});var i=$("#quote-module"),s=$("#shopping-cart-module"),o=$(".header-icon-group #account-icon"),a=$("#account-module"),l=$(".close-module"),r=$(".glyphicon-pencil"),c=$("#contact-module"),d=$("#directory-module"),h=$("img.logo"),g=$(".open-contact"),u=$(".top-footer").find("button"),p=$(".dark-overlay"),f=$(".filter"),v=$(".dropdown-panel"),m=$(".search-message"),C=$("#search-video"),b=new e(window.location.search);b.init(),C.on("submit",function(e){var t=e;b.search(t)}),f.on("click",function(){b.createCatlist()}),v.on("click","span",function(e){var t=e;b.filterByCat(t)}),$(".filter-tab").on("click",function(){$(".filter-sidebar").toggleClass("open-filter")}),$(".close-filter").on("click",function(){$(".filter-sidebar").removeClass("open-filter")}),h.on("click",function(e){e.preventDefault(),t(d)}),o.on("click",function(){t(a)}),l.on("click",function(){$(this).parent().toggleClass("show"),p.toggleClass("show")}),$("#myCarousel1")&&$("#myCarousel1").carousel({interval:4e3}),$("#myCarousel2")&&$("#myCarousel2").carousel({interval:4e3}),$(".carousel")&&$(".carousel").carousel({interval:4e3});var w=!1;$("#myCarousel").on("click",function(){w=!0,$("#main-nav .nav li").removeClass("active"),$(this).parent().addClass("active")}).on("slid.bs.carousel",function(){if(!w){var e=$("#main-nav .nav").children().length-1,t=$("#main-nav .nav li.active");t.removeClass("active").next().addClass("active");e===parseInt(t.data("slide-to"))&&$("#main-nav .nav li").first().addClass("active")}w=!1});var y=!1,k=$(".search-icon"),S=$(".big-search-field"),T=$(".close-big-search");k.on("click",function(){S.hasClass("show")||(S.addClass("show"),S.find("input").focus(),y=!0)}),T.on("click",function(){S.hasClass("show")&&(S.removeClass("show"),y=!1)}),g.on("click",function(){t(c)}),u.on("click",function(){t(c)}),$(".search-page")&&$(".filter").find("h3").on("click",function(){var e=$(this)[0].parentElement;$(e).toggleClass("show-filter")}),$(".login").on("click",".register-btn",function(){$(this).parent().parent().parent().parent().toggleClass("hidden"),$(this).parent().parent().parent().parent().parent().find(".register").toggleClass("hidden")}),$(".register").on("click",".cancel",function(){$(this).parent().parent().parent().parent().toggleClass("hidden"),$(this).parent().parent().parent().parent().parent().find(".login").toggleClass("hidden")}),r.on("click",function(){$(this).parent().find(".glyphicon-remove").toggleClass("hidden"),$(this).parent().find(".glyphicon-pencil").toggleClass("hidden"),$(this).parent().find("address").toggleClass("hidden"),$(this).parent().find(".edit").toggleClass("hidden")}),$(".tab-content").on("click",".glyphicon-remove",function(){$(this).parent().find(".glyphicon-remove").toggleClass("hidden"),$(this).parent().find(".glyphicon-pencil").toggleClass("hidden"),$(this).parent().find("address").toggleClass("hidden"),$(this).parent().find(".edit").toggleClass("hidden")}),$(".account-page").on("click",".cancel-changes",function(e){e.preventDefault(),$(this).closest(".tab-content").find(".glyphicon-pencil").removeClass("hidden"),$(this).closest(".tab-content").find(".glyphicon-remove").addClass("hidden"),$(this).closest(".tab-content").find("address").toggleClass("hidden"),$(this).closest(".tab-content").find(".edit").toggleClass("hidden")}),$(".account-page").on("click",".submit-changes",function(e){e.preventDefault(),$(this).closest(".tab-content").find(".glyphicon-pencil").removeClass("hidden"),$(this).closest(".tab-content").find(".glyphicon-remove").addClass("hidden"),$(this).closest(".tab-content").find("address").toggleClass("hidden"),$(this).closest(".tab-content").find(".edit").toggleClass("hidden")}),$(".video-page")&&$(".carousel").carousel({interval:!1});var q=$(".quick-info"),O=q.find(".glyphicon-remove");$(".qiBtn").on("mouseenter",function(e){e.stopImmediatePropagation(),e.preventDefault();var t=$(this).parent().parent().children()[3];$(t).addClass("show")}),O.on("click",function(e){e.preventDefault(),$(this).parent().toggleClass("show")}),$(".category-page .product").on("mouseleave",function(e){e.stopImmediatePropagation(),$(".quick-info.show",this).length>0&&(console.log("working yo!"),$(".quick-info").removeClass("show"))}),$(".quick-info").on("click",function(e){e.preventDefault()});var j=$("#main-nav");$(document).scroll(function(){$(this).scrollTop()>$(".header-wrapper").height()-j.height()?j.css({position:"fixed",top:"0","z-index":"22"}):j.css({position:"relative","z-index":"18"})}),a.find(".account-buttons").on("click","button",function(){var e=$(this).attr("data-id");$(".tab").addClass("hidden"),a.find("."+e).toggleClass("hidden"),$(".account-buttons").find("button").removeClass("active"),$(this).addClass("active")}),a.find(".login-btn").on("click",function(){a.find(".login").toggleClass("hidden"),a.find(".shipping-address").toggleClass("hidden")}),a.find(".logout").on("click",function(){var e=a.find(".tab");console.log(e);for(var t=0;t<e.length;t++)$(e[t]).addClass("hidden");a.find(".login-form").removeClass("hidden"),a.find(".login").removeClass("hidden")}),$("#estimate-shipping").on("click",function(){$(this).toggleClass("open"),$(this).hasClass("open")&&setTimeout(function(){$('input[name="country"]').focus()},500),$(".estimate-shipping").toggleClass("show-shipping")}),$(".dropdown-module").on("click",function(){$(this).hasClass("cart")&&(i.hasClass("show-cart")&&n("quote"),n("cart")),$(this).hasClass("quote")&&(s.hasClass("show-cart")&&n("cart"),n("quote"))}),$(".close-cart").on("click",function(){console.log($(this)[0].parentElement.id),n("quote-module"===$(this)[0].parentElement.id?"quote":"cart")}),$(document.body).on("click",".add-to-cart",function(){n("cart")}),$(".continue-shopping").on("click",function(){n("cart")})});