$(document).ready(function(e){$("#nav ul li a").bind("click",function(e){if($(this).parent().hasClass("external")){$(this).attr("target","_blank");return!0}e.preventDefault();$("html,body").animate({scrollTop:$(this.hash).offset().top},1e3)})});jQuery(function(e){e(function(){svgeezy.init()})});$(function(){$("#form-contact").submit(function(){$(this).attr("action","sendmail.php")});Modernizr.input.placeholder||$("input[placeholder],textarea[placeholder]").each(function(){$(this).data("placeholder",$(this).attr("placeholder"));$(this).focus(function(){$(this).val()==$(this).data("placeholder")&&$(this).val("")}).blur(function(){$(this).val()==""&&$(this).val($(this).data("placeholder"))}).blur()});$(".navbar-collapse a").click(function(){$(".navbar-collapse").collapse("hide")});$("body").scrollspy({target:".navbar-collapse"});$("a[data-rel]").each(function(){$(this).attr("rel",$(this).data("rel"))});$(".image-lightview").magnificPopup({type:"image",closeMarkup:'<span class="mfp-close"></span>'});$(".image-gallery").each(function(){$(this).magnificPopup({delegate:"a",type:"image",closeMarkup:'<span class="mfp-close"></span>',removalDelay:300,mainClass:"mfp-fade",gallery:{enabled:!0,preload:[1,3],tCounter:"%curr% of %total%",arrowMarkup:'<div class="mfp-arrow mfp-arrow-%dir%"></div>'},image:{titleSrc:"title",tError:'<a href="%url%">The image</a> could not be loaded.'}})})});