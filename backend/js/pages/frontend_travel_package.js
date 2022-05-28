/*
 *  Document   : frontend_travel_package.js
 *  Author     : TBDigital
 */
var FrontendTravelPackage=function(){var a=function(){new GMaps({div:"#js-map-travel",lat:19.542915,lng:-155.665857,zoom:8,disableDefaultUI:!0,scrollwheel:!1,draggable:!1,panControl:!1}).setMapTypeId(google.maps.MapTypeId.TERRAIN)};return{init:function(){a()}}}();jQuery(function(){FrontendTravelPackage.init()});