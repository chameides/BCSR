!function(a,b,c,d){"use strict";function e(b,c){function d(){e.options.originalVideoW=e.options.$video[0].videoWidth,e.options.originalVideoH=e.options.$video[0].videoHeight,e.initialised||e.init()}var e=this;this.element=b,this.options=a.extend({},g,c),this._defaults=g,this._name=f,this.options.$video=a(b),this.detectBrowser(),this.options.has3d=this.detect3d(),this.options.$videoWrap.css({position:"relative",overflow:"hidden","z-index":"10"}),this.options.$video.css({position:"static","z-index":"1"}),this.options.$video.on("canplay canplaythrough",d),this.options.$video[0].readyState>3&&d()}var f="backgroundVideo",g={$videoWrap:a("#video-wrap"),$outerWrap:a(b),$window:a(b),minimumVideoWidth:400,preventContextMenu:!1,parallax:!0,parallaxOptions:{effect:1.5},pauseVideoOnViewLoss:!1};e.prototype={init:function(){var a=this;this.initialised=!0,this.options.$window.resize(function(){a.positionObject(a.options.$video)}),this.options.parallax&&this.options.$window.on("scroll.backgroundVideoParallax",function(){a.positionObject(a.options.$video)}),this.options.pauseVideoOnViewLoss&&this.playPauseVideo(),this.options.preventContextMenu&&this.options.$video.on("contextmenu",function(){return!1}),this.options.$window.trigger("resize")},detect3d:function(){if(Modernizr.csstransforms3d)return!0;var a,e,f=c.createElement("p"),g={WebkitTransform:"-webkit-transform",OTransform:"-o-transform",MSTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};f.id="testfortransforms",c.body.insertBefore(f,c.body.lastChild);for(a in g)f.style[a]!==d&&(f.style[a]="matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)",e=b.getComputedStyle(f).getPropertyValue(g[a]));return e!==d?"none"!==e:!1},detectBrowser:function(){var a=navigator.userAgent.toLowerCase();a.indexOf("chrome")>-1||a.indexOf("safari")>-1?(this.options.browser="webkit",this.options.browserPrexix="-webkit-"):a.indexOf("firefox")>-1?(this.options.browser="firefox",this.options.browserPrexix="-moz-"):-1!==a.indexOf("MSIE")||a.indexOf("Trident/")>0?(this.options.browser="ie",this.options.browserPrexix="-ms-"):a.indexOf("Opera")>-1&&(this.options.browser="opera",this.options.browserPrexix="-o-")},scaleObject:function(a,b){var c,d,e;return b.width(this.options.$outerWrap.width()),b.height(this.options.$outerWrap.height()),c=this.options.$window.width()/this.options.originalVideoW,d=this.options.$window.height()/this.options.originalVideoH,e=c>d?c:d,e*this.options.originalVideoW<this.options.minimumVideoWidth&&(e=this.options.minimumVideoWidth/this.options.originalVideoW),a.width(e*this.options.originalVideoW),a.height(e*this.options.originalVideoH),{xPos:-(parseInt(a.width()-this.options.$window.width())/2),yPos:parseInt(a.height()-this.options.$window.height())/2}},positionObject:function(a){var b=this,c=this.options.$window.scrollTop(),d=this.scaleObject(a,b.options.$videoWrap),e=d.xPos,f=d.yPos;f=this.options.parallax?c>=0?this.calculateYPos(f,c):this.calculateYPos(f,0):-f,b.options.has3d?(a.css(b.options.browserPrexix+"transform3d","translate3d(-"+e+"px, "+f+"px, 0)"),a.css("transform","translate3d("+e+"px, "+f+"px, 0)")):(a.css(b.options.browserPrexix+"transform","translate(-"+e+"px, "+f+"px)"),a.css("transform","translate("+e+"px, "+f+"px)"))},calculateYPos:function(a,b){var c,d;return c=parseInt(this.options.$videoWrap.offset().top),d=c-b,a=-(d/this.options.parallaxOptions.effect+a)},disableParallax:function(){this.options.$window.unbind(".backgroundVideoParallax")},playPauseVideo:function(){var a=this;this.options.$window.on("scroll.backgroundVideoPlayPause",function(){a.options.$window.scrollTop()<a.options.$videoWrap.height()?a.options.$video.get(0).play():a.options.$video.get(0).pause()})}},a.fn[f]=function(b){return this.each(function(){a.data(this,"plugin_"+f)||a.data(this,"plugin_"+f,new e(this,b))})}}(jQuery,window,document),$(document).ready(function(){var a=document.getElementById("hero-video");$("#play").hide(),$("#play").click(function(){$("#play").hide(),$("#stop").show(),a.play()}),$("#stop").click(function(){$("#play").show(),$("#stop").hide(),a.pause()})});