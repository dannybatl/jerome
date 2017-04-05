/*
 * jQuery Reveal Plugin 1.0
 * www.ZURB.com
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */
(function($){$.fn.reveal=function(e){var t={animation:"fadeAndPop",animationspeed:300,closeonbackgroundclick:true,dismissmodalclass:"close-reveal-modal"};var e=$.extend({},t,e);return this.each(function(){function u(){i=false}function a(){i=true}var t=$(this),n=parseInt(t.css("top")),r=t.height()+n,i=false,s=$(".reveal-modal-bg");if(s.length==0){s=$('<div class="reveal-modal-bg" />').insertAfter(t)}t.bind("reveal:open",function(){s.unbind("click.modalEvent");$("."+e.dismissmodalclass).unbind("click.modalEvent");if(!i){a();if(e.animation=="fadeAndPop"){t.css({top:$(document).scrollTop()-r,opacity:0,visibility:"visible"});s.fadeIn(e.animationspeed/2);t.delay(e.animationspeed/2).animate({top:$(document).scrollTop()+n+"px",opacity:1},e.animationspeed,u())}if(e.animation=="fade"){t.css({opacity:0,visibility:"visible",top:$(document).scrollTop()+n});s.fadeIn(e.animationspeed/2);t.delay(e.animationspeed/2).animate({opacity:1},e.animationspeed,u())}if(e.animation=="none"){t.css({visibility:"visible",top:$(document).scrollTop()+n});s.css({display:"block"});u()}}t.unbind("reveal:open")});t.bind("reveal:close",function(){if(!i){a();if(e.animation=="fadeAndPop"){s.delay(e.animationspeed).fadeOut(e.animationspeed);t.animate({top:$(document).scrollTop()-r+"px",opacity:0},e.animationspeed/2,function(){t.css({top:n,opacity:1,visibility:"hidden"});u()})}if(e.animation=="fade"){s.delay(e.animationspeed).fadeOut(e.animationspeed);t.animate({opacity:0},e.animationspeed,function(){t.css({opacity:1,visibility:"hidden",top:n});u()})}if(e.animation=="none"){t.css({visibility:"hidden",top:n});s.css({display:"none"})}}t.unbind("reveal:close")});t.trigger("reveal:open");var o=$("."+e.dismissmodalclass).bind("click.modalEvent",function(){t.trigger("reveal:close")});if(e.closeonbackgroundclick){s.css({cursor:"pointer"});s.bind("click.modalEvent",function(){t.trigger("reveal:close")})}$("body").keyup(function(e){if(e.which===27){t.trigger("reveal:close")}})})}})(jQuery);