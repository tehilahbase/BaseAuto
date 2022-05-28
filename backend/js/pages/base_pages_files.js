/*
 *  Document   : base_pages_files.js
 *  Author     : TBDigital
 */
var BasePagesFiles=function(){var e=function(){var e,i,n,t=jQuery(".js-media-filter"),a=jQuery(".js-media-filter-items");jQuery(window).on("resize",function(){clearTimeout(i),i=setTimeout(function(){n=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,768>n?t.addClass("nav-stacked"):t.removeClass("nav-stacked")},150)}),jQuery(window).trigger("resize"),t.find("a").on("click",function(){var i=jQuery(this);e=i.data("category"),i.parent().hasClass("active")||(t.find("li").removeClass("active"),i.parent().addClass("active"),"all"===e?a.find(".block").parent().hide(0,function(){jQuery(this).show(0)}):a.find(".block").parent().hide(0,function(){a.find('[data-category="'+e+'"]').parent("div").show(0)}))})};return{init:function(){e()}}}();jQuery(function(){BasePagesFiles.init()});
