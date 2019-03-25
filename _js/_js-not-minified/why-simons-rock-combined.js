/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.3.2 (modified for fullpage.js)
 *
 */
(function(f){jQuery.fn.extend({slimScroll:function(g){var a=f.extend({width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},g);this.each(function(){function s(d){d=d||window.event;
var c=0;d.wheelDelta&&(c=-d.wheelDelta/120);d.detail&&(c=d.detail/3);f(d.target||d.srcTarget||d.srcElement).closest("."+a.wrapperClass).is(b.parent())&&m(c,!0);d.preventDefault&&!k&&d.preventDefault();k||(d.returnValue=!1)}function m(d,f,g){k=!1;var e=d,h=b.outerHeight()-c.outerHeight();f&&(e=parseInt(c.css("top"))+d*parseInt(a.wheelStep)/100*c.outerHeight(),e=Math.min(Math.max(e,0),h),e=0<d?Math.ceil(e):Math.floor(e),c.css({top:e+"px"}));l=parseInt(c.css("top"))/(b.outerHeight()-c.outerHeight());
e=l*(b[0].scrollHeight-b.outerHeight());g&&(e=d,d=e/b[0].scrollHeight*b.outerHeight(),d=Math.min(Math.max(d,0),h),c.css({top:d+"px"}));b.scrollTop(e);b.trigger("slimscrolling",~~e);u();p()}function C(){window.addEventListener?(this.addEventListener("DOMMouseScroll",s,!1),this.addEventListener("mousewheel",s,!1)):document.attachEvent("onmousewheel",s)}function v(){r=Math.max(b.outerHeight()/b[0].scrollHeight*b.outerHeight(),D);c.css({height:r+"px"});var a=r==b.outerHeight()?"none":"block";c.css({display:a})}
function u(){v();clearTimeout(A);l==~~l?(k=a.allowPageScroll,B!=l&&b.trigger("slimscroll",0==~~l?"top":"bottom")):k=!1;B=l;r>=b.outerHeight()?k=!0:(c.stop(!0,!0).fadeIn("fast"),a.railVisible&&h.stop(!0,!0).fadeIn("fast"))}function p(){a.alwaysVisible||(A=setTimeout(function(){a.disableFadeOut&&w||x||y||(c.fadeOut("slow"),h.fadeOut("slow"))},1E3))}var w,x,y,A,z,r,l,B,D=30,k=!1,b=f(this);if(b.parent().hasClass(a.wrapperClass)){var n=b.scrollTop(),c=b.parent().find("."+a.barClass),h=b.parent().find("."+
a.railClass);v();if(f.isPlainObject(g)){if("height"in g&&"auto"==g.height){b.parent().css("height","auto");b.css("height","auto");var q=b.parent().parent().height();b.parent().css("height",q);b.css("height",q)}if("scrollTo"in g)n=parseInt(a.scrollTo);else if("scrollBy"in g)n+=parseInt(a.scrollBy);else if("destroy"in g){c.remove();h.remove();b.unwrap();return}m(n,!1,!0)}}else{a.height="auto"==g.height?b.parent().height():g.height;n=f("<div></div>").addClass(a.wrapperClass).css({position:"relative",
overflow:"hidden",width:a.width,height:a.height});b.css({overflow:"hidden",width:a.width,height:a.height});var h=f("<div></div>").addClass(a.railClass).css({width:a.size,height:"100%",position:"absolute",top:0,display:a.alwaysVisible&&a.railVisible?"block":"none","border-radius":a.railBorderRadius,background:a.railColor,opacity:a.railOpacity,zIndex:90}),c=f("<div></div>").addClass(a.barClass).css({background:a.color,width:a.size,position:"absolute",top:0,opacity:a.opacity,display:a.alwaysVisible?
"block":"none","border-radius":a.borderRadius,BorderRadius:a.borderRadius,MozBorderRadius:a.borderRadius,WebkitBorderRadius:a.borderRadius,zIndex:99}),q="right"==a.position?{right:a.distance}:{left:a.distance};h.css(q);c.css(q);b.wrap(n);b.parent().append(c);b.parent().append(h);a.railDraggable&&c.bind("mousedown",function(a){var b=f(document);y=!0;t=parseFloat(c.css("top"));pageY=a.pageY;b.bind("mousemove.slimscroll",function(a){currTop=t+a.pageY-pageY;c.css("top",currTop);m(0,c.position().top,!1)});
b.bind("mouseup.slimscroll",function(a){y=!1;p();b.unbind(".slimscroll")});return!1}).bind("selectstart.slimscroll",function(a){a.stopPropagation();a.preventDefault();return!1});h.hover(function(){u()},function(){p()});c.hover(function(){x=!0},function(){x=!1});b.hover(function(){w=!0;u();p()},function(){w=!1;p()});b.bind("touchstart",function(a,b){a.originalEvent.touches.length&&(z=a.originalEvent.touches[0].pageY)});b.bind("touchmove",function(b){k||b.originalEvent.preventDefault();b.originalEvent.touches.length&&
(m((z-b.originalEvent.touches[0].pageY)/a.touchScrollStep,!0),z=b.originalEvent.touches[0].pageY)});v();"bottom"===a.start?(c.css({top:b.outerHeight()-c.outerHeight()}),m(0,!0)):"top"!==a.start&&(m(f(a.start).position().top,null,!0),a.alwaysVisible||c.hide());C()}});return this}});jQuery.fn.extend({slimscroll:jQuery.fn.slimScroll})})(jQuery);
/**
 * fullPage 2.6.2
 * https://github.com/alvarotrigo/fullPage.js
 * MIT licensed
 *
 * Copyright (C) 2015 alvarotrigo.com - A project by Alvaro Trigo
 */
(function(d,h,k,m,H){var l=d(h),n=d(k);d.fn.fullpage=function(c){function Da(a){a.find(".fp-slides").after('<div class="fp-controlArrow fp-prev"></div><div class="fp-controlArrow fp-next"></div>');"#fff"!=c.controlArrowColor&&(a.find(".fp-controlArrow.fp-next").css("border-color","transparent transparent transparent "+c.controlArrowColor),a.find(".fp-controlArrow.fp-prev").css("border-color","transparent "+c.controlArrowColor+" transparent transparent"));c.loopHorizontal||a.find(".fp-controlArrow.fp-prev").hide()}
function Ea(){q.append('<div id="fp-nav"><ul></ul></div>');z=d("#fp-nav");z.addClass(function(){return c.showActiveTooltip?"fp-show-active "+c.navigationPosition:c.navigationPosition});for(var a=0;a<d(".fp-section").length;a++){var b="";c.anchors.length&&(b=c.anchors[a]);var b='<li><a href="#'+b+'"><span></span></a>',g=c.navigationTooltips[a];"undefined"!==typeof g&&""!==g&&(b+='<div class="fp-tooltip '+c.navigationPosition+'">'+g+"</div>");b+="</li>";z.find("ul").append(b)}}function ba(){d(".fp-section").each(function(){var a=
d(this).find(".fp-slide");a.length?a.each(function(){I(d(this))}):I(d(this))});d.isFunction(c.afterRender)&&c.afterRender.call(this)}function ca(){var a;if(!c.autoScrolling||c.scrollBar){for(var b=l.scrollTop(),g=0,p=m.abs(b-k.querySelectorAll(".fp-section")[0].offsetTop),e=k.querySelectorAll(".fp-section"),f=0;f<e.length;++f){var h=m.abs(b-e[f].offsetTop);h<p&&(g=f,p=h)}a=d(e).eq(g)}if(!c.autoScrolling||c.scrollBar){if(!a.hasClass("active")){T=!0;b=d(".fp-section.active");g=b.index(".fp-section")+
1;p=U(a);e=a.data("anchor");f=a.index(".fp-section")+1;h=a.find(".fp-slide.active");if(h.length)var n=h.data("anchor"),q=h.index();t&&(a.addClass("active").siblings().removeClass("active"),d.isFunction(c.onLeave)&&c.onLeave.call(b,g,f,p),d.isFunction(c.afterLoad)&&c.afterLoad.call(a,e,f),J(e,f-1),c.anchors.length&&(A=e,V(q,n,e,f)));clearTimeout(da);da=setTimeout(function(){T=!1},100)}c.fitToSection&&(clearTimeout(ea),ea=setTimeout(function(){t&&(d(".fp-section.active").is(a)&&(v=!0),u(a),v=!1)},1E3))}}
function fa(a){return a.find(".fp-slides").length?a.find(".fp-slide.active").find(".fp-scrollable"):a.find(".fp-scrollable")}function K(a,b){if(w[a]){var c,d;"down"==a?(c="bottom",d=e.moveSectionDown):(c="top",d=e.moveSectionUp);if(0<b.length)if(c="top"===c?!b.scrollTop():"bottom"===c?b.scrollTop()+1+b.innerHeight()>=b[0].scrollHeight:void 0,c)d();else return!0;else d()}}function Fa(a){var b=a.originalEvent;if(!ga(a.target)&&W(b)){c.autoScrolling&&a.preventDefault();a=d(".fp-section.active");var g=
fa(a);t&&!B&&(b=ha(b),E=b.y,L=b.x,a.find(".fp-slides").length&&m.abs(M-L)>m.abs(F-E)?m.abs(M-L)>l.width()/100*c.touchSensitivity&&(M>L?w.right&&e.moveSlideRight():w.left&&e.moveSlideLeft()):c.autoScrolling&&m.abs(F-E)>l.height()/100*c.touchSensitivity&&(F>E?K("down",g):E>F&&K("up",g)))}}function ga(a,b){b=b||0;var g=d(a).parent();return b<c.normalScrollElementTouchThreshold&&g.is(c.normalScrollElements)?!0:b==c.normalScrollElementTouchThreshold?!1:ga(g,++b)}function W(a){return"undefined"===typeof a.pointerType||
"mouse"!=a.pointerType}function Ga(a){a=a.originalEvent;c.fitToSection&&x.stop();W(a)&&(a=ha(a),F=a.y,M=a.x)}function ia(a,b){for(var c=0,d=a.slice(m.max(a.length-b,1)),e=0;e<d.length;e++)c+=d[e];return m.ceil(c/b)}function C(a){var b=(new Date).getTime();if(c.autoScrolling){a=h.event||a;var g=a.wheelDelta||-a.deltaY||-a.detail,p=m.max(-1,m.min(1,g));149<D.length&&D.shift();D.push(m.abs(g));c.scrollBar&&(a.preventDefault?a.preventDefault():a.returnValue=!1);a=d(".fp-section.active");a=fa(a);g=b-ja;
ja=b;200<g&&(D=[]);t&&(b=ia(D,10),g=ia(D,70),b>=g&&(0>p?K("down",a):K("up",a)));return!1}c.fitToSection&&x.stop()}function ka(a){var b=d(".fp-section.active").find(".fp-slides");if(b.length&&!B){var g=b.find(".fp-slide.active"),p=null,p="prev"===a?g.prev(".fp-slide"):g.next(".fp-slide");if(!p.length){if(!c.loopHorizontal)return;p="prev"===a?g.siblings(":last"):g.siblings(":first")}B=!0;G(b,p)}}function la(){d(".fp-slide.active").each(function(){X(d(this))})}function u(a,b,g){var p=a.position();if("undefined"!==
typeof p&&(b={element:a,callback:b,isMovementUp:g,dest:p,dtop:p.top,yMovement:U(a),anchorLink:a.data("anchor"),sectionIndex:a.index(".fp-section"),activeSlide:a.find(".fp-slide.active"),activeSection:d(".fp-section.active"),leavingSection:d(".fp-section.active").index(".fp-section")+1,localIsResizing:v},!(b.activeSection.is(a)&&!v||c.scrollBar&&l.scrollTop()===b.dtop))){if(b.activeSlide.length)var e=b.activeSlide.data("anchor"),f=b.activeSlide.index();c.autoScrolling&&c.continuousVertical&&"undefined"!==
typeof b.isMovementUp&&(!b.isMovementUp&&"up"==b.yMovement||b.isMovementUp&&"down"==b.yMovement)&&(b.isMovementUp?d(".fp-section.active").before(b.activeSection.nextAll(".fp-section")):d(".fp-section.active").after(b.activeSection.prevAll(".fp-section").get().reverse()),y(d(".fp-section.active").position().top),la(),b.wrapAroundElements=b.activeSection,b.dest=b.element.position(),b.dtop=b.dest.top,b.yMovement=U(b.element));a.addClass("active").siblings().removeClass("active");t=!1;V(f,e,b.anchorLink,
b.sectionIndex);d.isFunction(c.onLeave)&&!b.localIsResizing&&c.onLeave.call(b.activeSection,b.leavingSection,b.sectionIndex+1,b.yMovement);Ha(b);A=b.anchorLink;J(b.anchorLink,b.sectionIndex)}}function Ha(a){if(c.css3&&c.autoScrolling&&!c.scrollBar)ma("translate3d(0px, -"+a.dtop+"px, 0px)",!0),setTimeout(function(){na(a)},c.scrollingSpeed);else{var b=Ia(a);d(b.element).animate(b.options,c.scrollingSpeed,c.easing).promise().done(function(){na(a)})}}function Ia(a){var b={};c.autoScrolling&&!c.scrollBar?
(b.options={top:-a.dtop},b.element=".fullpage-wrapper"):(b.options={scrollTop:a.dtop},b.element="html, body");return b}function Ja(a){a.wrapAroundElements&&a.wrapAroundElements.length&&(a.isMovementUp?d(".fp-section:first").before(a.wrapAroundElements):d(".fp-section:last").after(a.wrapAroundElements),y(d(".fp-section.active").position().top),la())}function na(a){Ja(a);d.isFunction(c.afterLoad)&&!a.localIsResizing&&c.afterLoad.call(a.element,a.anchorLink,a.sectionIndex+1);t=!0;setTimeout(function(){d.isFunction(a.callback)&&
a.callback.call(this)},600)}function oa(){if(!T){var a=h.location.hash.replace("#","").split("/"),b=a[0],a=a[1];if(b.length){var c="undefined"===typeof A,d="undefined"===typeof A&&"undefined"===typeof a&&!B;(b&&b!==A&&!c||d||!B&&Y!=a)&&Z(b,a)}}}function Ka(a){t&&(a.pageY<N?e.moveSectionUp():a.pageY>N&&e.moveSectionDown());N=a.pageY}function G(a,b){var g=b.position(),e=b.index(),f=a.closest(".fp-section"),h=f.index(".fp-section"),k=f.data("anchor"),l=f.find(".fp-slidesNav"),m=pa(b),n=v;if(c.onSlideLeave){var q=
f.find(".fp-slide.active"),r=q.index(),t;t=r==e?"none":r>e?"left":"right";n||"none"===t||d.isFunction(c.onSlideLeave)&&c.onSlideLeave.call(q,k,h+1,r,t)}b.addClass("active").siblings().removeClass("active");!c.loopHorizontal&&c.controlArrows&&(f.find(".fp-controlArrow.fp-prev").toggle(0!==e),f.find(".fp-controlArrow.fp-next").toggle(!b.is(":last-child")));f.hasClass("active")&&V(e,m,k,h);var u=function(){n||d.isFunction(c.afterSlideLoad)&&c.afterSlideLoad.call(b,k,h+1,m,e);B=!1};c.css3?(g="translate3d(-"+
g.left+"px, 0px, 0px)",qa(a.find(".fp-slidesContainer"),0<c.scrollingSpeed).css(ra(g)),setTimeout(function(){u()},c.scrollingSpeed,c.easing)):a.animate({scrollLeft:g.left},c.scrollingSpeed,c.easing,function(){u()});l.find(".active").removeClass("active");l.find("li").eq(e).find("a").addClass("active")}function sa(){ta();if(O){var a=d(k.activeElement);a.is("textarea")||a.is("input")||a.is("select")||(a=l.height(),m.abs(a-aa)>20*m.max(aa,a)/100&&(e.reBuild(!0),aa=a))}else clearTimeout(ua),ua=setTimeout(function(){e.reBuild(!0)},
500)}function ta(){if(c.responsive){var a=f.hasClass("fp-responsive");l.width()<c.responsive?a||(e.setAutoScrolling(!1,"internal"),e.setFitToSection(!1,"internal"),d("#fp-nav").hide(),f.addClass("fp-responsive")):a&&(e.setAutoScrolling(P.autoScrolling,"internal"),e.setFitToSection(P.autoScrolling,"internal"),d("#fp-nav").show(),f.removeClass("fp-responsive"))}}function qa(a){var b="all "+c.scrollingSpeed+"ms "+c.easingcss3;a.removeClass("fp-notransition");return a.css({"-webkit-transition":b,transition:b})}
function La(a,b){if(825>a||900>b){var c=m.min(100*a/825,100*b/900).toFixed(2);q.css("font-size",c+"%")}else q.css("font-size","100%")}function J(a,b){c.menu&&(d(c.menu).find(".active").removeClass("active"),d(c.menu).find('[data-menuanchor="'+a+'"]').addClass("active"));c.navigation&&(d("#fp-nav").find(".active").removeClass("active"),a?d("#fp-nav").find('a[href="#'+a+'"]').addClass("active"):d("#fp-nav").find("li").eq(b).find("a").addClass("active"))}function U(a){var b=d(".fp-section.active").index(".fp-section");
a=a.index(".fp-section");return b==a?"none":b>a?"up":"down"}function I(a){a.css("overflow","hidden");var b=a.closest(".fp-section"),d=a.find(".fp-scrollable"),e;d.length?e=d.get(0).scrollHeight:(e=a.get(0).scrollHeight,c.verticalCentered&&(e=a.find(".fp-tableCell").get(0).scrollHeight));b=r-parseInt(b.css("padding-bottom"))-parseInt(b.css("padding-top"));e>b?d.length?d.css("height",b+"px").parent().css("height",b+"px"):(c.verticalCentered?a.find(".fp-tableCell").wrapInner('<div class="fp-scrollable" />'):
a.wrapInner('<div class="fp-scrollable" />'),a.find(".fp-scrollable").slimScroll({allowPageScroll:!0,height:b+"px",size:"10px",alwaysVisible:!0})):va(a);a.css("overflow","")}function va(a){a.find(".fp-scrollable").children().first().unwrap().unwrap();a.find(".slimScrollBar").remove();a.find(".slimScrollRail").remove()}function wa(a){a.addClass("fp-table").wrapInner('<div class="fp-tableCell" style="height:'+xa(a)+'px;" />')}function xa(a){var b=r;if(c.paddingTop||c.paddingBottom)b=a,b.hasClass("fp-section")||
(b=a.closest(".fp-section")),a=parseInt(b.css("padding-top"))+parseInt(b.css("padding-bottom")),b=r-a;return b}function ma(a,b){b?qa(f):f.addClass("fp-notransition");f.css(ra(a));setTimeout(function(){f.removeClass("fp-notransition")},10)}function Z(a,b){var c;"undefined"===typeof b&&(b=0);c=isNaN(a)?d('[data-anchor="'+a+'"]'):d(".fp-section").eq(a-1);a===A||c.hasClass("active")?ya(c,b):u(c,function(){ya(c,b)})}function ya(a,b){if("undefined"!=typeof b){var c=a.find(".fp-slides"),d=c.find('[data-anchor="'+
b+'"]');d.length||(d=c.find(".fp-slide").eq(b));d.length&&G(c,d)}}function Ma(a,b){a.append('<div class="fp-slidesNav"><ul></ul></div>');var d=a.find(".fp-slidesNav");d.addClass(c.slidesNavPosition);for(var e=0;e<b;e++)d.find("ul").append('<li><a href="#"><span></span></a></li>');d.css("margin-left","-"+d.width()/2+"px");d.find("li").first().find("a").addClass("active")}function V(a,b,d,e){e="";c.anchors.length&&(a?("undefined"!==typeof d&&(e=d),"undefined"===typeof b&&(b=a),Y=b,za(e+"/"+b)):("undefined"!==
typeof a&&(Y=b),za(d)));Aa()}function za(a){if(c.recordHistory)location.hash=a;else if(O||Q)history.replaceState(H,H,"#"+a);else{var b=h.location.href.split("#")[0];h.location.replace(b+"#"+a)}}function pa(a){var b=a.data("anchor");a=a.index(".fp-slide");"undefined"===typeof b&&(b=a);return b}function Aa(){var a=d(".fp-section.active"),b=a.find(".fp-slide.active"),e=a.data("anchor"),f=pa(b),a=a.index(".fp-section"),a=String(a);c.anchors.length&&(a=e);b.length&&(a=a+"-"+f);a=a.replace("/","-").replace("#",
"");q[0].className=q[0].className.replace(RegExp("\\b\\s?fp-viewing-[^\\s]+\\b","g"),"");q.addClass("fp-viewing-"+a)}function Na(){var a=k.createElement("p"),b,c={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};k.body.insertBefore(a,null);for(var d in c)a.style[d]!==H&&(a.style[d]="translate3d(1px,1px,1px)",b=h.getComputedStyle(a).getPropertyValue(c[d]));k.body.removeChild(a);return b!==H&&0<b.length&&"none"!==
b}function Oa(){if(O||Q){var a=Ba();n.off("touchstart "+a.down).on("touchstart "+a.down,Ga);n.off("touchmove "+a.move).on("touchmove "+a.move,Fa)}}function Pa(){if(O||Q){var a=Ba();n.off("touchstart "+a.down);n.off("touchmove "+a.move)}}function Ba(){return h.PointerEvent?{down:"pointerdown",move:"pointermove"}:{down:"MSPointerDown",move:"MSPointerMove"}}function ha(a){var b=[];b.y="undefined"!==typeof a.pageY&&(a.pageY||a.pageX)?a.pageY:a.touches[0].pageY;b.x="undefined"!==typeof a.pageX&&(a.pageY||
a.pageX)?a.pageX:a.touches[0].pageX;Q&&W(a)&&(b.y=a.touches[0].pageY,b.x=a.touches[0].pageX);return b}function X(a){e.setScrollingSpeed(0,"internal");G(a.closest(".fp-slides"),a);e.setScrollingSpeed(P.scrollingSpeed,"internal")}function y(a){c.scrollBar?f.scrollTop(a):c.css3?ma("translate3d(0px, -"+a+"px, 0px)",!1):f.css("top",-a)}function ra(a){return{"-webkit-transform":a,"-moz-transform":a,"-ms-transform":a,transform:a}}function Qa(){y(0);d("#fp-nav, .fp-slidesNav, .fp-controlArrow").remove();
d(".fp-section").css({height:"","background-color":"",padding:""});d(".fp-slide").css({width:""});f.css({height:"",position:"","-ms-touch-action":"","touch-action":""});d(".fp-section, .fp-slide").each(function(){va(d(this));d(this).removeClass("fp-table active")});f.addClass("fp-notransition");f.find(".fp-tableCell, .fp-slidesContainer, .fp-slides").each(function(){d(this).replaceWith(this.childNodes)});x.scrollTop(0)}function R(a,b,d){c[a]=b;"internal"!==d&&(P[a]=b)}function S(a,b){console&&console[a]&&
console[a]("fullPage: "+b)}var x=d("html, body"),q=d("body"),e=d.fn.fullpage;c=d.extend({menu:!1,anchors:[],navigation:!1,navigationPosition:"right",navigationTooltips:[],showActiveTooltip:!1,slidesNavigation:!1,slidesNavPosition:"bottom",scrollBar:!1,css3:!0,scrollingSpeed:700,autoScrolling:!0,fitToSection:!0,easing:"easeInOutCubic",easingcss3:"ease",loopBottom:!1,loopTop:!1,loopHorizontal:!0,continuousVertical:!1,normalScrollElements:null,scrollOverflow:!1,touchSensitivity:5,normalScrollElementTouchThreshold:5,
keyboardScrolling:!0,animateAnchor:!0,recordHistory:!0,controlArrows:!0,controlArrowColor:"#fff",verticalCentered:!0,resize:!1,sectionsColor:[],paddingTop:0,paddingBottom:0,fixedElements:null,responsive:0,sectionSelector:".section",slideSelector:".slide",afterLoad:null,onLeave:null,afterRender:null,afterResize:null,afterReBuild:null,afterSlideLoad:null,onSlideLeave:null},c);(function(){c.continuousVertical&&(c.loopTop||c.loopBottom)&&(c.continuousVertical=!1,S("warn","Option `loopTop/loopBottom` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled"));
c.continuousVertical&&c.scrollBar&&(c.continuousVertical=!1,S("warn","Option `scrollBar` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled"));d.each(c.anchors,function(a,b){(d("#"+b).length||d('[name="'+b+'"]').length)&&S("error","data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE).")})})();d.extend(d.easing,{easeInOutCubic:function(a,b,c,d,e){return 1>(b/=e/2)?d/2*b*b*b+c:d/2*((b-=2)*b*b+2)+c}});d.extend(d.easing,{easeInQuart:function(a,
b,c,d,e){return d*(b/=e)*b*b*b+c}});e.setAutoScrolling=function(a,b){R("autoScrolling",a,b);var g=d(".fp-section.active");c.autoScrolling&&!c.scrollBar?(x.css({overflow:"hidden",height:"100%"}),e.setRecordHistory(c.recordHistory,"internal"),f.css({"-ms-touch-action":"none","touch-action":"none"}),g.length&&y(g.position().top)):(x.css({overflow:"visible",height:"initial"}),e.setRecordHistory(!1,"internal"),f.css({"-ms-touch-action":"","touch-action":""}),y(0),g.length&&x.scrollTop(g.position().top))};
e.setRecordHistory=function(a,b){R("recordHistory",a,b)};e.setScrollingSpeed=function(a,b){R("scrollingSpeed",a,b)};e.setFitToSection=function(a,b){R("fitToSection",a,b)};e.setMouseWheelScrolling=function(a){a?k.addEventListener?(k.addEventListener("mousewheel",C,!1),k.addEventListener("wheel",C,!1)):k.attachEvent("onmousewheel",C):k.addEventListener?(k.removeEventListener("mousewheel",C,!1),k.removeEventListener("wheel",C,!1)):k.detachEvent("onmousewheel",C)};e.setAllowScrolling=function(a,b){"undefined"!=
typeof b?(b=b.replace(" ","").split(","),d.each(b,function(b,c){switch(c){case "up":w.up=a;break;case "down":w.down=a;break;case "left":w.left=a;break;case "right":w.right=a;break;case "all":e.setAllowScrolling(a)}})):a?(e.setMouseWheelScrolling(!0),Oa()):(e.setMouseWheelScrolling(!1),Pa())};e.setKeyboardScrolling=function(a){c.keyboardScrolling=a};e.moveSectionUp=function(){var a=d(".fp-section.active").prev(".fp-section");a.length||!c.loopTop&&!c.continuousVertical||(a=d(".fp-section").last());
a.length&&u(a,null,!0)};e.moveSectionDown=function(){var a=d(".fp-section.active").next(".fp-section");a.length||!c.loopBottom&&!c.continuousVertical||(a=d(".fp-section").first());a.length&&u(a,null,!1)};e.moveTo=function(a,b){var c="",c=isNaN(a)?d('[data-anchor="'+a+'"]'):d(".fp-section").eq(a-1);"undefined"!==typeof b?Z(a,b):0<c.length&&u(c)};e.moveSlideRight=function(){ka("next")};e.moveSlideLeft=function(){ka("prev")};e.reBuild=function(a){if(!f.hasClass("fp-destroyed")){v=!0;var b=l.width();
r=l.height();c.resize&&La(r,b);d(".fp-section").each(function(){var a=d(this).find(".fp-slides"),b=d(this).find(".fp-slide");c.verticalCentered&&d(this).find(".fp-tableCell").css("height",xa(d(this))+"px");d(this).css("height",r+"px");c.scrollOverflow&&(b.length?b.each(function(){I(d(this))}):I(d(this)));b.length&&G(a,a.find(".fp-slide.active"))});b=d(".fp-section.active");b.index(".fp-section")&&u(b);v=!1;d.isFunction(c.afterResize)&&a&&c.afterResize.call(f);d.isFunction(c.afterReBuild)&&!a&&c.afterReBuild.call(f)}};
var B=!1,O=navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/),Q="ontouchstart"in h||0<navigator.msMaxTouchPoints||navigator.maxTouchPoints,f=d(this),r=l.height(),v=!1,A,Y,t=!0,D=[],z,w={up:!0,down:!0,left:!0,right:!0},P=d.extend(!0,{},c);e.setAllowScrolling(!0);f.removeClass("fp-destroyed");c.css3&&(c.css3=Na());d(this).length?(f.css({height:"100%",position:"relative"}),f.addClass("fullpage-wrapper")):S("error",
"Error! Fullpage.js needs to be initialized with a selector. For example: $('#myContainer').fullpage();");d(c.sectionSelector).each(function(){d(this).addClass("fp-section")});d(c.slideSelector).each(function(){d(this).addClass("fp-slide")});c.navigation&&Ea();d(".fp-section").each(function(a){var b=d(this),e=d(this).find(".fp-slide"),f=e.length;a||0!==d(".fp-section.active").length||d(this).addClass("active");d(this).css("height",r+"px");c.paddingTop&&d(this).css("padding-top",c.paddingTop);c.paddingBottom&&
d(this).css("padding-bottom",c.paddingBottom);"undefined"!==typeof c.sectionsColor[a]&&d(this).css("background-color",c.sectionsColor[a]);"undefined"!==typeof c.anchors[a]&&(d(this).attr("data-anchor",c.anchors[a]),d(this).hasClass("active")&&J(c.anchors[a],a));if(1<f){a=100*f;var h=100/f;e.wrapAll('<div class="fp-slidesContainer" />');e.parent().wrap('<div class="fp-slides" />');d(this).find(".fp-slidesContainer").css("width",a+"%");c.controlArrows&&Da(d(this));c.slidesNavigation&&Ma(d(this),f);
e.each(function(a){d(this).css("width",h+"%");c.verticalCentered&&wa(d(this))});b=b.find(".fp-slide.active");b.length?X(b):e.eq(0).addClass("active")}else c.verticalCentered&&wa(d(this))}).promise().done(function(){e.setAutoScrolling(c.autoScrolling,"internal");var a=d(".fp-section.active").find(".fp-slide.active");a.length&&(0!==d(".fp-section.active").index(".fp-section")||0===d(".fp-section.active").index(".fp-section")&&0!==a.index())&&X(a);c.fixedElements&&c.css3&&d(c.fixedElements).appendTo(q);
c.navigation&&(z.css("margin-top","-"+z.height()/2+"px"),z.find("li").eq(d(".fp-section.active").index(".fp-section")).find("a").addClass("active"));c.menu&&c.css3&&d(c.menu).closest(".fullpage-wrapper").length&&d(c.menu).appendTo(q);c.scrollOverflow?("complete"===k.readyState&&ba(),l.on("load",ba)):d.isFunction(c.afterRender)&&c.afterRender.call(f);ta();if(!c.animateAnchor&&(a=h.location.hash.replace("#","").split("/")[0],a.length)){var b=d('[data-anchor="'+a+'"]');b.length&&(c.autoScrolling?y(b.position().top):
(y(0),x.scrollTop(b.position().top)),J(a,null),d.isFunction(c.afterLoad)&&c.afterLoad.call(b,a,b.index(".fp-section")+1),b.addClass("active").siblings().removeClass("active"))}Aa();l.on("load",function(){var a=h.location.hash.replace("#","").split("/"),b=a[0],a=a[1];b&&Z(b,a)})});var da,ea,T=!1;l.on("scroll",ca);var F=0,M=0,E=0,L=0,ja=(new Date).getTime();l.on("hashchange",oa);n.keydown(function(a){clearTimeout(Ca);var b=d(k.activeElement);b.is("textarea")||b.is("input")||b.is("select")||!c.keyboardScrolling||
!c.autoScrolling||(-1<d.inArray(a.which,[40,38,32,33,34])&&a.preventDefault(),Ca=setTimeout(function(){var b=a.shiftKey;switch(a.which){case 38:case 33:e.moveSectionUp();break;case 32:if(b){e.moveSectionUp();break}case 40:case 34:e.moveSectionDown();break;case 36:e.moveTo(1);break;case 35:e.moveTo(d(".fp-section").length);break;case 37:e.moveSlideLeft();break;case 39:e.moveSlideRight()}},150))});var Ca;f.mousedown(function(a){2==a.which&&(N=a.pageY,f.on("mousemove",Ka))});f.mouseup(function(a){2==
a.which&&f.off("mousemove")});var N=0;n.on("click touchstart","#fp-nav a",function(a){a.preventDefault();a=d(this).parent().index();u(d(".fp-section").eq(a))});n.on("click touchstart",".fp-slidesNav a",function(a){a.preventDefault();a=d(this).closest(".fp-section").find(".fp-slides");var b=a.find(".fp-slide").eq(d(this).closest("li").index());G(a,b)});c.normalScrollElements&&(n.on("mouseenter",c.normalScrollElements,function(){e.setMouseWheelScrolling(!1)}),n.on("mouseleave",c.normalScrollElements,
function(){e.setMouseWheelScrolling(!0)}));d(".fp-section").on("click touchstart",".fp-controlArrow",function(){d(this).hasClass("fp-prev")?e.moveSlideLeft():e.moveSlideRight()});l.resize(sa);var aa=r,ua;e.destroy=function(a){e.setAutoScrolling(!1,"internal");e.setAllowScrolling(!1);e.setKeyboardScrolling(!1);f.addClass("fp-destroyed");l.off("scroll",ca).off("hashchange",oa).off("resize",sa);n.off("click","#fp-nav a").off("mouseenter","#fp-nav li").off("mouseleave","#fp-nav li").off("click",".fp-slidesNav a").off("mouseover",
c.normalScrollElements).off("mouseout",c.normalScrollElements);d(".fp-section").off("click",".fp-controlArrow");a&&Qa()}}})(jQuery,window,document,Math);

$(document).ready(function($) {


	function squidgevid() {
		var windwidth = $(window).width();
		var vidwidth = $('#learningliberated video').width();
		var vidoffset = vidwidth/2;
		var negativevidoffsetpx = '-' + vidoffset + 'px';
		$('#learningliberated video').css({'marginLeft':negativevidoffsetpx,'left':'50%'});
	}
	squidgevid();
	
	var isMobileWSR = ( function(a) { return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) }) ( navigator.userAgent || navigator.vendor || window.opera);
	
	Modernizr.load({
  		test: Modernizr.touch
  	});
	
	var touch;
	var autoscrollvar;
	if (Modernizr.touch){
	   touch = true;
	   $('video').remove();
	   if ($(window).width() >= 992) $('#earlycollege_div1 h1').css({'position':'absolute'});
	} else {
	   touch = false;
	   if ( $('#earlycollege_div1').width() >= 992 ) $('#earlycollege_div1 h1').css({'position':'fixed'});
	}
	
	if ( !isMobileWSR && ( $(window).width() >= 992 ) ) {
		$('#fullpage').fullpage({
			verticalCentered: false,
			resize:false,
			scrollBar:true,
			scrollOverflow:false,
			anchors:[],
			autoScrolling:true,
			scrollingSpeed:1250,
		
			onLeave: function(index, nextIndex, direction) {
				//console.log('index: ' + index + ' | nextIndex ' + nextIndex);
				$('.fader').animate({opacity:0},100);
				// #earlycollege_div 
				if (nextIndex == 1) {
					$('#earlycollege_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!touch) $('#earlycollege_div1 .intro_h1_1').css({'position':'fixed'});
				}
				if (nextIndex == 2) {
					$('#earlycollege_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!touch) $('#earlycollege_div1 .intro_h1_1').css({'position':'fixed'});
					$('#earlycollege_div3 .svg-div').css('opacity',0);
					$('#earlycollege_div3 .svg-div img.candle').css('top','73px');
				}
				if (nextIndex == 3) {
					$('#earlycollege_div3 .svg-div').delay( 750 ).animate({opacity:1},250);
				
					var cd = 250;
					$('#earlycollege_div3 .svg-div .c1' ).delay( cd ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c2' ).delay( cd*1.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c3' ).delay( cd*1.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c4' ).delay( cd*1.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c5' ).delay( cd*2 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c6' ).delay( cd*2.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c7' ).delay( cd*2.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c8' ).delay( cd*2.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c9' ).delay( cd*3 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c10' ).delay( cd*3.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c11' ).delay( cd*3.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c12' ).delay( cd*3.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c13' ).delay( cd*4 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c14' ).delay( cd*4.25 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c15' ).delay( cd*4.5 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c16' ).delay( cd*4.75 ).animate({'top':'0px'},250);
					$('#earlycollege_div3 .svg-div .c17' ).delay( cd*5 ).animate({'top':'20px'},250);
				
					if (!isMobileWSR && !touch) {
						$('#learningliberated_div1 video').get(0).pause();
						$('#learningliberated_div1 .background-video').hide();
					}
					$('#earlycollege_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex >= 3) {
					$('#earlycollege_div1 .intro_h1_1').css({'position':'absolute'});
				}
			
				// #learningliberated_div 
				if (nextIndex == 4) {
					//console.log('firing nextIndex 4');
					if (!touch) $('#learningliberated_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250,function(){
						if (!isMobileWSR && !touch) {
							//queue up video
							setTimeout(function(){ 
								$('#learningliberated_div1 .background-video').show('fast');
								//if not paused
								if (!$("body").hasClass("pause-video")) {
									console.log('que video');
									$('#learningliberated_div1 video').get(0).play();
									console.log('add class');
									$(document.body).addClass('play-video');
								}
							}, 750);	
						}
					});			
					$('#learningliberated_div1 .fader').delay( 750 ).animate({opacity:0.5},250);		
					$('#earlycollege_div3 .svg-div').css('opacity',0);
					$('#earlycollege_div3 .svg-div img.candle').css('top','73px');
				}
				if (nextIndex == 5) {
					//console.log('firing nextIndex 5');
					if (!touch) $('#learningliberated_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250,function(){
						if (!isMobileWSR && !touch) {
							//setTimeout(function(){ $('#learningliberated_div1 video').get(0).pause(); }, 3000);
							$('#learningliberated_div1 video').get(0).pause();
							$('#learningliberated_div1 .background-video').hide();
						}			
					});	
					$('#learningliberated_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					$('#learningliberated_div3 .svg-div').delay( 250 ).animate({opacity:0},50).animate({left:'100%'},50);
				}
				if (nextIndex == 6) {
					$('#learningliberated_div3 .svg-div').delay( 750 ).animate({opacity:1},50).animate({left:0},750);
					$('#learningliberated_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				
				}
				if (nextIndex < 4 || nextIndex >= 6) {
					if (!touch) $('#learningliberated_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #realcollege_div 
				if (nextIndex == 7) {
					$('#realcollege_div1 .fader').delay( 750 ).animate({opacity:0.5},250);				
					$('#learningliberated_div3 .svg-div').delay( 250 ).animate({opacity:0},50).animate({left:'100%'},50);
					if (!touch) $('#realcollege_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 8) {
					$('#realcollege_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!touch) $('#realcollege_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					$('#realcollege_div3 .mortar-fader').height(500);
				}
				if (nextIndex == 9) {
					$('#realcollege_div3 .svg-div').delay( 350 ).animate({opacity:0.5},250);
					$('#realcollege_div3 .mortar-fader').delay( 750 ).animate({'height':'36px'},1250);
					$('#realcollege_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex < 7 || nextIndex >= 9) {
					if (!touch) $('#realcollege_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}

				// #besurrounded_div 
				if (nextIndex == 10) {
					$('#realcollege_div3 .mortar-fader').height(500);
					if (!touch) $('#besurrounded_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				
					$('#besurrounded_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!isMobileWSR && !touch) $('#besurrounded_div2 video').get(0).pause();
				}
				if (nextIndex == 11) {
					$('#besurrounded_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!isMobileWSR && !touch) {		
						//if not paused
						if (!$("body").hasClass("pause-video")) {
							$('#besurrounded_div2 video').get(0).play();
							$(document.body).addClass('play-video');
						}
					}		
					$('#besurrounded_div3 .svg-div-2').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('six-o-clock');
					$('#besurrounded_div3 .svg-div-3').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('t1 t2 t3 t4 t5');
					if (!touch) $('#besurrounded_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 12) {
					//$('#besurrounded_div3 .svg-div').delay( 750 ).animate({opacity:0.5},250);
					if (!isMobileWSR && !touch) $('#besurrounded_div2 video').get(0).pause();
					// clock
					$('#besurrounded_div3 .svg-div').delay( 750 ).animate({opacity:1},250);
					$('#besurrounded_div3 .svg-div-2').css({'-webkit-transition': '-webkit-transform 12s','-moz-transition': '-moz-transform 12s','-ms-transition': '-ms-transform 12s','transition': 'transform 12s'}).delay( 1000 ).addClass('six-o-clock');
					$('#besurrounded_div3 .svg-div-3').css({'-webkit-transition': '-webkit-transform 12s','-moz-transition': '-moz-transform 12s','-ms-transition': '-ms-transform 12s','transition': 'transform 12s'}).delay(000).addClass('t1').delay(7000).addClass('t2').delay(7000).addClass('t3').delay(7000).addClass('t4').delay(7000).addClass('t5');
					$('#besurrounded_div3 .btn').delay( 7500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex < 10 || nextIndex >= 12) {
					if (!touch) $('#besurrounded_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #jumpstart_div 
				if (nextIndex == 13) {
					$('#jumpstart_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					$('#besurrounded_div3 .svg-div-2').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('six-o-clock');
					$('#besurrounded_div3 .svg-div-3').css({'-webkit-transition': '-webkit-transform 0s','-moz-transition': '-moz-transform 0s','-ms-transition': '-ms-transform 0s','transition': 'transform 0s'}).removeClass('t1 t2 t3 t4 t5');
					if (!touch) { 
						$('#jumpstart_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					}
				}
				if (nextIndex == 14) {
					$('#jumpstart_div2 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!touch) $('#jumpstart_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					$('#jumpstart_div3 img').css({opacity:0});
				}
				if (nextIndex == 15) {
					var srd = 750;
					var sro = 0.7;
					$('#jumpstart_div3 #star1').delay(srd).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star2').delay(srd*2).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star3').delay(srd*2.5).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star4').delay(srd*3).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star5').delay(srd*3.25).animate({opacity:sro},srd);
					$('#jumpstart_div3 #star6').delay(srd*3.5).animate({opacity:sro},srd);
					$('#jumpstart_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);				
				}
				if (nextIndex < 13 || nextIndex >= 15) {
					if (!touch) $('#jumpstart_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #yourpeople_div 
				if (nextIndex == 16) {
					$('#yourpeople_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					$('#jumpstart_div3 img').css({opacity:0});
					if (!touch) $('#yourpeople_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 17) {
					$('#yourpeople_div2 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!touch) $('#yourpeople_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					$('#yourpeople_div3 img').css({opacity:0});
				}
				if (nextIndex == 18) {
					if (!isMobileWSR && !touch) { 
						$('#oncearocker_div1 video').get(0).pause(); 
					}

					var ypsrd = 750;
					var ypsro = 0.7;
					$('#yourpeople_div3 #pin0').delay( ypsrd ).animate({opacity:1},250);
					$('#yourpeople_div3 #pin1').delay(ypsrd*1.25).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin2').delay(ypsrd*1.5).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin3').delay(ypsrd*1.75).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin4').delay(ypsrd*2).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin5').delay(ypsrd*2.25).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin6').delay(ypsrd*2.5).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin7').delay(ypsrd*2.75).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin8').delay(ypsrd*3).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin9').delay(ypsrd*3.25).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin10').delay(ypsrd*3.5).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin11').delay(ypsrd*3.75).animate({opacity:ypsro},ypsrd);
					$('#yourpeople_div3 #pin12').delay(ypsrd*4).animate({opacity:ypsro},ypsrd);

					$('#yourpeople_div3 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
				}
				if (nextIndex < 16 || nextIndex >= 18) {
					if (!touch) $('#yourpeople_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
				}
			
				// #oncearocker_div 
				if (nextIndex == 19) {
					$('#oncearocker_div1 .fader').delay( 750 ).animate({opacity:0.5},250);
					if (!isMobileWSR && !touch) {
						//if not paused
						if (!$("body").hasClass("pause-video")) {
							$('#oncearocker_div1 video').get(0).play();
							$(document.body).addClass('play-video');
						}
					}
					if (!touch) $('#oncearocker_div1 .intro_h1_1').addClass('light-gray');
					$('#yourpeople_div3 img').css({opacity:0});
					if (!touch) $('#oncearocker_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
				}
				if (nextIndex == 20) {
					$('#oncearocker_div2 .fader').delay( 750 ).animate({opacity:0.5},250);	
					if (!isMobileWSR && !touch) { 
						$('#oncearocker_div1 video').get(0).pause();
					}
					$('#oncearocker_div2 .btn').delay( 1500 ).animate({'bottom':'3px'},500).animate({'bottom':'-3px'},500).animate({'bottom':'3px'},500).animate({'bottom':'0px'},500);
					if (!touch) $('#oncearocker_div1 .intro_h1_1').css({'position':'fixed'}).animate({opacity:1},250);
					if (!touch) $('#oncearocker_div1 .intro_h1_1').removeClass('light-gray').addClass('dark-gray');
				}
				if (nextIndex < 19 || nextIndex >= 21) {
					if (!touch) $('#oncearocker_div1 .intro_h1_1').css({'position':'absolute','opacity':0});
					if (!touch) $('#oncearocker_div1 .intro_h1_1').removeClass('dark-gray').addClass('light-gray');
				}
		
			}/*,
			
			afterLoad: function(anchorLink, index) {
				
			}
			*/

		});

		var windowheight = $(window).height();
		//console.log(windowheight);
	
	
		//console.log(' panel height: '+ $('#earlycollege_div1').height() );
		var p_offset;
		if ( windowheight < 800 ) {
		 	p_offset = $('#earlycollege_div1').height() * 0.6;
		} else {
		 	p_offset = $('#earlycollege_div1').height() * 0.5;
		}
		$('.intro_p_1, .intro_p_2').css({'top':p_offset+'px'});

		var isChrome = !!window.chrome && !!window.chrome.webstore;
	
		$('div.subsection-photo, div.subsection-video').each(function(){
			$(this).attr('data-panel', $(this).attr('id') );
			$(this).prepend('<div class="fader"></div>');
			if (touch || isChrome) {
				$(this).css({'background-attachment':'scroll'});
			}
		});
		$('.sublink').hide();
		$('#earlycollege_div1').addClass('active');
		$('#earlycollege_div1 .fader').delay( 750 ).animate({opacity:0.5},750);
	} // end if (!isMobileWSR) 
	
	else {
		$('html, body').css({'overflow-y':'visible','overflow-x':'hidden'});
		$('div.subsection-photo, div.subsection-video').each(function(){
			$(this).prepend('<div class="fader"></div>');
		});
	}
	$('body,html').scrollTop(0);
	
	// for testing:
	//document.title = '2:35 ' + $('#earlycollege_div2').css('height');
	

	
	// We're going to need some JS to set the absolute positions,
	// heights, etc., of a few items.

	if ( $(window).width() < 768 ) {
		// mobile version of this
	} else {
		$('#why_upbutton').click(function(){
			$.fn.fullpage.moveSectionUp();
		});
		$('#why_downbutton').click(function(){
			$.fn.fullpage.moveSectionDown();
		});

	} // end window width conditional

	var firstloadwidth = $(window).width();
	$(window).on('debouncedresize', function( event ) {
		var secondloadwidth = $(window).width();
		if ( (firstloadwidth <= 767) && (secondloadwidth >= 768) ) {
			location.reload(false);
			//console.log('debouce case 1');
		}
		else if ( (firstloadwidth <= 991) && (secondloadwidth >= 992) ) {
			location.reload(false);
			//console.log('debouce case 2');
		}
		else if ( (firstloadwidth <= 1199) && (secondloadwidth >= 1200) ) {
			location.reload(false);
			//console.log('debouce case 3');
		}

		else if ( (firstloadwidth >= 1200) && (secondloadwidth <= 1199) ) {
			location.reload(false);
			//console.log('debouce case 4');
		}
		else if ( (firstloadwidth >= 992) && (secondloadwidth <= 991) ) {
			location.reload(false);
			//console.log('debouce case 5');
		}
		else if ( (firstloadwidth >= 768) && (secondloadwidth <= 767) ) {
			location.reload(false);
			//console.log('debouce case 6');
		}
		//location.reload(false);
	});

	//click play or pause
  $('.video-pause').click(function() {
  	//get data attribute
  	var videoControl = $(this).data("video-control");
  	//set video element based on attribute
  	var videoElement = document.getElementById(videoControl).getElementsByTagName( 'video' )[0];
  	//if stop/pause button
  	if ($(this).hasClass("video-stop")) {
  		videoElement.pause();
  		$(document.body).removeClass('play-video');
  		$(document.body).addClass('pause-video');
  	}
  	//if play button
  	if ($(this).hasClass("video-play")) {
  		videoElement.play();
  		$(document.body).removeClass('pause-video');
  		$(document.body).addClass('play-video');
  	}
  });	
});

if (!Array.prototype.filter)
{
  Array.prototype.filter = function(fun /*, thisp*/)
  {
	var len = this.length;
	if (typeof fun != "function")
	  throw new TypeError();

	var res = new Array();
	var thisp = arguments[1];
	for (var i = 0; i < len; i++)
	{
	  if (i in this)
	  {
		var val = this[i]; // in case fun mutates this
		if (fun.call(thisp, val, i, this))
		  res.push(val);
	  }
	}

	return res;
  };
}
