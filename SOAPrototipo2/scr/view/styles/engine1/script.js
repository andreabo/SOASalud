// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 5.4
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_fly(c,a,b){var d=jQuery;var f={position:"absolute",left:0,top:0,width:"100%",height:"100%",transform:"translate3d(0,0,0)"};var e=d("<div>").addClass("ws_effect").css(f).css({overflow:"visible"}).appendTo(b.parent());this.go=function(m,j,p){var i=!!c.revers;if(p){if(p>=1){i=1}if(p<=-1){i=0}}var h=-(c.distance||e.width()/4),k=Math.min(-h,Math.max(0,d(window).width()-e.offset().left-e.width())),g=(i?k:h),n=(i?h:k);var o=d(a.get(j)).clone().css(f).css({"z-index":1}).appendTo(e);var l=d(a.get(m)).clone().css(f).css({opacity:0,left:g,"z-index":3}).appendTo(e).show();l.animate({opacity:1},{duration:c.duration,queue:false});l.animate({left:0},{duration:2*c.duration/3,queue:false});setTimeout(function(){var q=b.find("ul").hide();o.animate({left:n,opacity:0},2*c.duration/3,function(){o.remove();q.css({left:-m+"00%"}).show();l.remove()})},c.duration/3);return m}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 5.4
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"fly",prev:"",next:"",duration:22*100,delay:50*100,width:960,height:360,autoPlay:true,playPause:true,stopOnHover:false,loop:false,bullets:true,caption:false,captionEffect:"slide",controls:true,onBeforeStep:0,images:0});