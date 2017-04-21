/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransitions-touch-shiv-cssclasses-prefixed-testprop-testallprops-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:w(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},q.csstransitions=function(){return F("transition")};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
!function(t,e){"function"==typeof define&&define.amd?define(["exports"],e):e("undefined"!=typeof exports?exports:t)}(this,function(t){function e(t){return W(t,48,57)}function n(t){return e(t)||W(t,65,70)||W(t,97,102)}function r(t){return W(t,65,90)}function o(t){return W(t,97,122)}function i(t){return r(t)||o(t)}function a(t){return t>=160}function p(t){return i(t)||a(t)||95==t}function u(t){return p(t)||e(t)||45==t}function s(t){return W(t,0,8)||W(t,14,31)||W(t,127,159)}function d(t){return 10==t||12==t}function c(t){return d(t)||9==t||32==t}function f(t){return d(t)||isNaN(t)}function h(t,r){void 0==r&&(r={transformFunctionWhitespace:!1,scientificNotation:!1});for(var o,i,a=-1,h=[],l="data",y=0,D=0,W=0,j=function(){y+=1,W=D,D=0},J={line:y,column:D},K=function(e){return void 0===e&&(e=1),t.charCodeAt(a+e)},z=function(e){return void 0===e&&(e=1),a+=e,o=t.charCodeAt(a),d(o)?j():D+=e,!0},Y=function(){return a-=1,d(o)?(y-=1,D=W):D-=1,J.line=y,J.column=D,!0},Q=function(){return a>=t.length},V=function(){},X=function(t){return t?t.finish():t=i.finish(),r.loc===!0&&(t.loc={},t.loc.start={line:J.line,column:J.column},J={line:y,column:D},t.loc.end=J),h.push(t),i=void 0,!0},Z=function(t){return i=t,!0},$=function(){return console.log("Parse error at index "+a+", processing codepoint 0x"+o.toString(16)+" in state "+l+"."),!0},te=function(t){return console.log("MAJOR SPEC ERROR: "+t),!0},ee=function(t){return l=t,!0},ne=function(){if(z(),n(o)){for(var t=[],e=0;6>e&&n(o);e++)t.push(o),z();if(null!=t.map)var r=parseInt(t.map(String.fromCharCode).join(""),16);else{for(d1=[],_len=t.length,_i=0;_i<_len;_i++)d1.push(String.fromCharCode(t[_i]));var r=parseInt(d1.join(""),16)}return r>B&&(r=65533),c(o)||Y(),r}return o};;){if(a>2*t.length)return"I'm infinite-looping!";switch(z(),l){case"data":if(c(o))for(X(new S);c(K());)z();else if(34==o)ee("double-quote-string");else if(35==o)ee("hash");else if(39==o)ee("single-quote-string");else if(40==o)X(new A);else if(41==o)X(new I);else if(43==o)e(K())||46==K()&&e(K(2))?ee("number")&&Y():X(new U(o));else if(45==o)45==K(1)&&62==K(2)?z(2)&&X(new k):e(K())||46==K(1)&&e(K(2))?ee("number")&&Y():ee("ident")&&Y();else if(46==o)e(K())?ee("number")&&Y():X(new U(o));else if(47==o)42==K()?z()&&ee("comment"):X(new U(o));else if(58==o)X(new m);else if(59==o)X(new b);else if(60==o)33==K(1)&&45==K(2)&&45==K(3)?z(3)&&X(new v):X(new U(o));else if(64==o)ee("at-keyword");else if(91==o)X(new E);else if(92==o)f(K())?$()&&X(new U(o)):ee("ident")&&Y();else if(93==o)X(new N);else if(123==o)X(new C);else if(125==o)X(new T);else if(e(o))ee("number")&&Y();else if(85==o||117==o)43==K(1)&&n(K(2))?z()&&ee("unicode-range"):ee("ident")&&Y();else if(p(o))ee("ident")&&Y();else{if(Q())return X(new R),h;X(new U(o))}break;case"double-quote-string":void 0==i&&Z(new L),34==o?X()&&ee("data"):Q()?$()&&X()&&ee("data")&&Y():d(o)?$()&&X(new w)&&ee("data")&&Y():92==o?f(K())?$()&&X(new w)&&ee("data"):d(K())?z():i.append(ne()):i.append(o);break;case"single-quote-string":void 0==i&&Z(new L),39==o?X()&&ee("data"):Q()?$()&&X()&&ee("data"):d(o)?$()&&X(new w)&&ee("data")&&Y():92==o?f(K())?$()&&X(new w)&&ee("data"):d(K())?z():i.append(ne()):i.append(o);break;case"hash":u(o)?Z(new M(o))&&ee("hash-rest"):92==o?f(K())?$()&&X(new U(35))&&ee("data")&&Y():Z(new M(ne()))&&ee("hash-rest"):X(new U(35))&&ee("data")&&Y();break;case"hash-rest":u(o)?i.append(o):92==o?f(K())?$()&&X()&&ee("data")&&Y():i.append(ne()):X()&&ee("data")&&Y();break;case"comment":42==o?47==K()?z()&&ee("data"):V():Q()?$()&&ee("data")&&Y():V();break;case"at-keyword":45==o?p(K())?Z(new q(45))&&ee("at-keyword-rest"):92!=K(1)||f(K(2))?$()&&X(new U(64))&&ee("data")&&Y():Z(new AtKeywordtoken(45))&&ee("at-keyword-rest"):p(o)?Z(new q(o))&&ee("at-keyword-rest"):92==o?f(K())?$()&&X(new U(35))&&ee("data")&&Y():Z(new q(ne()))&&ee("at-keyword-rest"):X(new U(64))&&ee("data")&&Y();break;case"at-keyword-rest":u(o)?i.append(o):92==o?f(K())?$()&&X()&&ee("data")&&Y():i.append(ne()):X()&&ee("data")&&Y();break;case"ident":45==o?p(K())?Z(new O(o))&&ee("ident-rest"):92!=K(1)||f(K(2))?X(new U(45))&&ee("data"):Z(new O(o))&&ee("ident-rest"):p(o)?Z(new O(o))&&ee("ident-rest"):92==o?f(K())?$()&&ee("data")&&Y():Z(new O(ne()))&&ee("ident-rest"):te("Hit the generic 'else' clause in ident state.")&&ee("data")&&Y();break;case"ident-rest":u(o)?i.append(o):92==o?f(K())?$()&&X()&&ee("data")&&Y():i.append(ne()):40==o?i.ASCIImatch("url")?ee("url"):X(new G(i))&&ee("data"):c(o)&&r.transformFunctionWhitespace?ee("transform-function-whitespace")&&Y():X()&&ee("data")&&Y();break;case"transform-function-whitespace":c(K())?V():40==o?X(new G(i))&&ee("data"):X()&&ee("data")&&Y();break;case"number":Z(new _),45==o?e(K())?z()&&i.append([45,o])&&ee("number-rest"):46==K(1)&&e(K(2))?z(2)&&i.append([45,46,o])&&ee("number-fraction"):ee("data")&&Y():43==o?e(K())?z()&&i.append([43,o])&&ee("number-rest"):46==K(1)&&e(K(2))?z(2)&&i.append([43,46,o])&&ee("number-fraction"):ee("data")&&Y():e(o)?i.append(o)&&ee("number-rest"):46==o&&e(K())?z()&&i.append([46,o])&&ee("number-fraction"):ee("data")&&Y();break;case"number-rest":e(o)?i.append(o):46==o?e(K())?z()&&i.append([46,o])&&ee("number-fraction"):X()&&ee("data")&&Y():37==o?X(new x(i))&&ee("data"):69==o||101==o?e(K())?z()&&i.append([37,o])&&ee("sci-notation"):43!=K(1)&&45!=K(1)||!e(K(2))?Z(new F(i,o))&&ee("dimension"):i.append([37,K(1),K(2)])&&z(2)&&ee("sci-notation"):45==o?p(K())?z()&&Z(new F(i,[45,o]))&&ee("dimension"):92==K(1)&&f(K(2))?$()&&X()&&ee("data")&&Y():92==K(1)?z()&&Z(new F(i,[45,ne()]))&&ee("dimension"):X()&&ee("data")&&Y():p(o)?Z(new F(i,o))&&ee("dimension"):92==o?f(K)?$()&&X()&&ee("data")&&Y():Z(new F(i,ne))&&ee("dimension"):X()&&ee("data")&&Y();break;case"number-fraction":i.type="number",e(o)?i.append(o):37==o?X(new x(i))&&ee("data"):69==o||101==o?e(K())?z()&&i.append([101,o])&&ee("sci-notation"):43!=K(1)&&45!=K(1)||!e(K(2))?Z(new F(i,o))&&ee("dimension"):i.append([101,K(1),K(2)])&&z(2)&&ee("sci-notation"):45==o?p(K())?z()&&Z(new F(i,[45,o]))&&ee("dimension"):92==K(1)&&f(K(2))?$()&&X()&&ee("data")&&Y():92==K(1)?z()&&Z(new F(i,[45,ne()]))&&ee("dimension"):X()&&ee("data")&&Y():p(o)?Z(new F(i,o))&&ee("dimension"):92==o?f(K)?$()&&X()&&ee("data")&&Y():Z(new F(i,ne()))&&ee("dimension"):X()&&ee("data")&&Y();break;case"dimension":u(o)?i.append(o):92==o?f(K())?$()&&X()&&ee("data")&&Y():i.append(ne()):X()&&ee("data")&&Y();break;case"sci-notation":i.type="number",e(o)?i.append(o):X()&&ee("data")&&Y();break;case"url":Q()?$()&&X(new g)&&ee("data"):34==o?ee("url-double-quote"):39==o?ee("url-single-quote"):41==o?X(new H)&&ee("data"):c(o)?V():ee("url-unquoted")&&Y();break;case"url-double-quote":i instanceof H||Z(new H),Q()?$()&&X(new g)&&ee("data"):34==o?ee("url-end"):d(o)?$()&&ee("bad-url"):92==o?d(K())?z():f(K())?$()&&X(new g)&&ee("data")&&Y():i.append(ne()):i.append(o);break;case"url-single-quote":i instanceof H||Z(new H),Q()?$()&&X(new g)&&ee("data"):39==o?ee("url-end"):d(o)?$()&&ee("bad-url"):92==o?d(K())?z():f(K())?$()&&X(new g)&&ee("data")&&Y():i.append(ne()):i.append(o);break;case"url-end":Q()?$()&&X(new g)&&ee("data"):c(o)?V():41==o?X()&&ee("data"):$()&&ee("bad-url")&&Y();break;case"url-unquoted":i instanceof H||Z(new H),Q()?$()&&X(new g)&&ee("data"):c(o)?ee("url-end"):41==o?X()&&ee("data"):34==o||39==o||40==o||s(o)?$()&&ee("bad-url"):92==o?f(K())?$()&&ee("bad-url"):i.append(ne()):i.append(o);break;case"bad-url":Q()?$()&&X(new g)&&ee("data"):41==o?X(new g)&&ee("data"):92==o?f(K())?V():ne():V();break;case"unicode-range":for(var re=[o],oe=[o],ie=1;6>ie&&n(K());ie++)z(),re.push(o),oe.push(o);if(63==K()){for(;6>ie&&63==K();ie++)z(),re.push("0".charCodeAt(0)),oe.push("f".charCodeAt(0));X(new P(re,oe))&&ee("data")}else if(45==K(1)&&n(K(2))){z(),z(),oe=[o];for(var ie=1;6>ie&&n(K());ie++)z(),oe.push(o);X(new P(re,oe))&&ee("data")}else X(new P(re))&&ee("data");break;default:te("Unknown state '"+l+"'")}}}function l(t){return String.fromCharCode.apply(null,t.filter(function(t){return t}))}function y(){return this}function w(){return this}function g(){return this}function S(){return this}function v(){return this}function k(){return this}function m(){return this}function b(){return this}function C(){return this}function T(){return this}function E(){return this}function N(){return this}function A(){return this}function I(){return this}function R(){return this}function U(t){return this.value=String.fromCharCode(t),this}function D(){return this}function O(t){this.value=[],this.append(t)}function G(t){this.value=t.finish().value}function q(t){this.value=[],this.append(t)}function M(t){this.value=[],this.append(t)}function L(t){this.value=[],this.append(t)}function H(t){this.value=[],this.append(t)}function _(t){this.value=[],this.append(t),this.type="integer"}function x(t){t.finish(),this.value=t.value,this.repr=t.repr}function F(t,e){t.finish(),this.num=t.value,this.unit=[],this.repr=t.repr,this.append(e)}function P(t,e){return t=parseInt(l(t),16),e=void 0===e?t+1:parseInt(l(e),16),t>B&&(e=t),t>e&&(e=t),e>B&&(e=B),this.start=t,this.end=e,this}var W=function(t,e,n){return t>=e&&n>=t},B=1114111;y.prototype.finish=function(){return this},y.prototype.toString=function(){return this.tokenType},y.prototype.toSourceString=y.prototype.toString,y.prototype.toJSON=function(){return this.toString()},w.prototype=new y,w.prototype.tokenType="BADSTRING",g.prototype=new y,g.prototype.tokenType="BADURL",S.prototype=new y,S.prototype.tokenType="WHITESPACE",S.prototype.toString=function(){return"WS"},S.prototype.toSourceString=function(){return" "},v.prototype=new y,v.prototype.tokenType="CDO",k.prototype=new y,k.prototype.tokenType="CDC",m.prototype=new y,m.prototype.tokenType=":",b.prototype=new y,b.prototype.tokenType=";",C.prototype=new y,C.prototype.tokenType="{",T.prototype=new y,T.prototype.tokenType="}",E.prototype=new y,E.prototype.tokenType="[",N.prototype=new y,N.prototype.tokenType="]",A.prototype=new y,A.prototype.tokenType="(",I.prototype=new y,I.prototype.tokenType=")",R.prototype=new y,R.prototype.tokenType="EOF",U.prototype=new y,U.prototype.tokenType="DELIM",U.prototype.toString=function(){return"DELIM("+this.value+")"},U.prototype.toSourceString=function(){return this.value},D.prototype=new y,D.prototype.append=function(t){if(t instanceof Array)for(var e=0;e<t.length;e++)this.value.push(t[e]);else this.value.push(t);return!0},D.prototype.finish=function(){return this.value=this.valueAsString(),this},D.prototype.ASCIImatch=function(t){return this.valueAsString().toLowerCase()==t.toLowerCase()},D.prototype.valueAsString=function(){return"string"==typeof this.value?this.value:l(this.value)},D.prototype.valueAsCodes=function(){if("string"==typeof this.value){for(var t=[],e=0;e<this.value.length;e++)t.push(this.value.charCodeAt(e));return t}return this.value.filter(function(t){return t})},O.prototype=new D,O.prototype.tokenType="IDENT",O.prototype.toString=function(){return"IDENT("+this.value+")"},O.prototype.toSourceString=function(){return this.value},G.prototype=new D,G.prototype.tokenType="FUNCTION",G.prototype.toString=function(){return"FUNCTION("+this.value+")"},G.prototype.toSourceString=function(){return this.value},q.prototype=new D,q.prototype.tokenType="AT-KEYWORD",q.prototype.toString=function(){return"AT("+this.value+")"},q.prototype.toSourceString=function(){return"@"+this.value},M.prototype=new D,M.prototype.tokenType="HASH",M.prototype.toString=function(){return"HASH("+this.value+")"},M.prototype.toSourceString=function(){return"#"+this.value},L.prototype=new D,L.prototype.tokenType="STRING",L.prototype.toString=function(){return'"'+this.value+'"'},L.prototype.toSourceString=L.prototype.toString,H.prototype=new D,H.prototype.tokenType="URL",H.prototype.toString=function(){return"URL("+this.value+")"},H.prototype.toSourceString=function(){return"url('"+this.value+"')"},_.prototype=new D,_.prototype.tokenType="NUMBER",_.prototype.toString=function(){return"integer"==this.type?"INT("+this.value+")":"NUMBER("+this.value+")"},_.prototype.toSourceString=function(){return"integer"==this.type?this.value:this.value},_.prototype.finish=function(){return this.repr=this.valueAsString(),this.value=1*this.repr,Math.abs(this.value)%1!=0&&(this.type="number"),this},x.prototype=new y,x.prototype.tokenType="PERCENTAGE",x.prototype.toString=function(){return"PERCENTAGE("+this.value+")"},x.prototype.toSourceString=function(){return this.value+"%"},F.prototype=new y,F.prototype.tokenType="DIMENSION",F.prototype.toString=function(){return"DIM("+this.num+","+this.unit+")"},F.prototype.toSourceString=function(){return this.num+this.unit},F.prototype.append=function(t){if(t instanceof Array)for(var e=0;e<t.length;e++)this.unit.push(t[e]);else this.unit.push(t);return!0},F.prototype.finish=function(){return this.unit=l(this.unit),this.repr+=this.unit,this},P.prototype=new y,P.prototype.tokenType="UNICODE-RANGE",P.prototype.toString=function(){return this.start+1==this.end?"UNICODE-RANGE("+this.start.toString(16).toUpperCase()+")":this.start<this.end?"UNICODE-RANGE("+this.start.toString(16).toUpperCase()+"-"+this.end.toString(16).toUpperCase()+")":"UNICODE-RANGE()"},P.prototype.toSourceString=function(){return this.start+1==this.end?"UNICODE-RANGE("+this.start.toString(16).toUpperCase()+")":this.start<this.end?"UNICODE-RANGE("+this.start.toString(16).toUpperCase()+"-"+this.end.toString(16).toUpperCase()+")":"UNICODE-RANGE()"},P.prototype.contains=function(t){return t>=this.start&&t<this.end},t.tokenize=h});
!function(e,t){"function"==typeof define&&define.amd?define(["exports"],t):t("undefined"!=typeof exports?exports:e)}(this,function(e){function t(e){function t(){switch(l.tokenType){case"(":case"[":case"{":return n();case"FUNCTION":return s();default:return l}}function n(){for(var e={"(":")","[":"]","{":"}"}[l.tokenType],n=new p(l.tokenType);;)switch(v(),l.tokenType){case"EOF":case e:return n;default:n.append(t())}}function s(){for(var e=new c(l.value),n=new i;;)switch(v(),l.tokenType){case"EOF":case")":return e.append(n),e;case"DELIM":","==l.value?(e.append(n),n=new i):n.append(l);break;default:n.append(t())}}for(var l,f="top-level",y=-1,d=new r,h=[d],k=h[0],v=function(t){return void 0===t&&(t=1),y+=t,l=y<e.length?e[y]:new EOFToken,!0},T=function(){return y--,!0},b=function(){return e[y+1]},m=function(e){return void 0===e?""!==k.fillType?f=k.fillType:"STYLESHEET"==k.type?f="top-level":(console.log("Unknown rule-type while switching to current rule's content mode: ",k),f=""):f=e,!0},E=function(e){return k=e,h.push(k),!0},w=function(e){return console.log("Parse error at token "+y+": "+l+".\n"+e),!0},O=function(){var e=h.pop();return k=h[h.length-1],k.append(e),!0},S=function(){return h.pop(),k=h[h.length-1],!0},N=function(){for(;h.length>1;)O()};;)if(v(),"DELIM"!==l.tokenType||"\r"!==l.value)switch(f){case"top-level":switch(l.tokenType){case"CDO":case"CDC":case"WHITESPACE":break;case"AT-KEYWORD":E(new a(l.value))&&m("at-rule");break;case"{":w("Attempt to open a curly-block at top-level.")&&t();break;case"EOF":return N(),d;default:E(new o)&&m("selector")&&T()}break;case"at-rule":switch(l.tokenType){case";":O()&&m();break;case"{":""!==k.fillType?m(k.fillType):w("Attempt to open a curly-block in a statement-type at-rule.")&&S()&&m("next-block")&&T();break;case"EOF":return N(),d;default:k.appendPrelude(t())}break;case"rule":switch(l.tokenType){case"WHITESPACE":break;case"}":O()&&m();break;case"AT-KEYWORD":E(new a(l.value))&&m("at-rule");break;case"EOF":return N(),d;default:E(new o)&&m("selector")&&T()}break;case"selector":switch(l.tokenType){case"{":m("declaration");break;case"EOF":return S()&&N(),d;default:k.appendSelector(t())}break;case"declaration":switch(l.tokenType){case"WHITESPACE":case";":break;case"}":O()&&m();break;case"AT-RULE":E(new a(l.value))&&m("at-rule");break;case"IDENT":E(new u(l.value))&&m("after-declaration-name");break;case"EOF":return N(),d;default:w()&&S()&&m("next-declaration")}break;case"after-declaration-name":switch(l.tokenType){case"WHITESPACE":break;case":":m("declaration-value");break;case";":w("Incomplete declaration - semicolon after property name.")&&S()&&m();break;case"EOF":return S()&&N(),d;default:w("Invalid declaration - additional token after property name")&&S()&&m("next-declaration")}break;case"declaration-value":switch(l.tokenType){case"DELIM":"!"==l.value&&"IDENTIFIER"==b().tokenType&&"important"==b().value.toLowerCase()?(v(),k.important=!0,m("declaration-end")):k.append(l);break;case";":O()&&m();break;case"}":O()&&O()&&m();break;case"EOF":return N(),d;default:k.append(t())}break;case"declaration-end":switch(l.tokenType){case"WHITESPACE":break;case";":O()&&m();break;case"}":O()&&O()&&m();break;case"EOF":return N(),d;default:w("Invalid declaration - additional token after !important.")&&S()&&m("next-declaration")}break;case"next-block":switch(l.tokenType){case"{":t()&&m();break;case"EOF":return N(),d;default:t()}break;case"next-declaration":switch(l.tokenType){case";":m("declaration");break;case"}":m("declaration")&&T();break;case"EOF":return N(),d;default:t()}break;default:return void console.log("Unknown parsing mode: "+f)}}function n(){return this}function r(){return this.value=[],this}function a(e){return this.name=e,this.prelude=[],this.value=[],console.log("AtRule error: "+e),e in a.registry&&(this.fillType=a.registry[e]),this}function o(){return this.selector=[],this.value=[],this}function u(e){return this.name=e,this.value=[],this}function p(e){return this.name=e,this.value=[],this}function c(e){return this.name=e,this.value=[],this}function i(){return this.value=[],this}n.prototype.fillType="",n.prototype.toString=function(e){return JSON.stringify(this.toJSON(),null,e)},n.prototype.append=function(e){return this.value.push(e),this},r.prototype=new n,r.prototype.type="STYLESHEET",r.prototype.toJSON=function(){return{type:"stylesheet",value:this.value.map(function(e){return e.toJSON()})}},a.prototype=new n,a.prototype.type="AT-RULE",a.prototype.appendPrelude=function(e){return this.prelude.push(e),this},a.prototype.toJSON=function(){return{type:"at",name:this.name,prelude:this.prelude.map(function(e){return e.toJSON()}),value:this.value.map(function(e){return e.toJSON()})}},a.registry={"import":"",media:"rule","font-face":"declaration",page:"declaration",keyframes:"rule","-webkit-keyframes":"rule",namespace:"","counter-style":"declaration",supports:"rule",document:"rule","font-feature-values":"declaration",viewport:"","region-style":"rule"},o.prototype=new n,o.prototype.type="STYLE-RULE",o.prototype.fillType="declaration",o.prototype.appendSelector=function(e){return this.selector.push(e),this},o.prototype.toJSON=function(){return{type:"selector",selector:this.selector.map(function(e){return e.toJSON()}),value:this.value.map(function(e){return e.toJSON()})}},u.prototype=new n,u.prototype.type="DECLARATION",u.prototype.toJSON=function(){return{type:"declaration",name:this.name,value:this.value.map(function(e){return e.toJSON()})}},p.prototype=new n,p.prototype.type="BLOCK",p.prototype.toJSON=function(){return{type:"block",name:this.name,value:this.value.map(function(e){return e.toJSON()})}},c.prototype=new n,c.prototype.type="FUNCTION",c.prototype.toJSON=function(){return{type:"func",name:this.name,value:this.value.map(function(e){return e.toJSON()})}},i.prototype=new n,i.prototype.type="FUNCTION-ARG",i.prototype.toJSON=function(){return this.value.map(function(e){return e.toJSON()})},e.parse=t});
// Generated by CoffeeScript 1.7.1
(function() {
  var XMLHttpFactories, ajax, applyStyleTest, browserSupportsUnitsNatively, clearStyleTests, createXMLHTTPObject, getViewportSize, initLayoutEngine, testElementStyle, testVHSupport, testVMinSupport, testVWSupport;

  XMLHttpFactories = [
    function() {
      return new XMLHttpRequest();
    }, function() {
      return new ActiveXObject("Msxml2.XMLHTTP");
    }, function() {
      return new ActiveXObject("Msxml3.XMLHTTP");
    }, function() {
      return new ActiveXObject("Microsoft.XMLHTTP");
    }
  ];

  createXMLHTTPObject = function() {
    var e, i, xmlhttp;
    xmlhttp = false;
    i = 0;
    while (i < XMLHttpFactories.length) {
      try {
        xmlhttp = XMLHttpFactories[i++]();
      } catch (_error) {
        e = _error;
        continue;
      }
      break;
    }
    return xmlhttp;
  };

  ajax = function(url, onload) {
    var e, xmlhttp;
    xmlhttp = createXMLHTTPObject();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState !== 4) {
        return;
      }
      if (!(xmlhttp.status === 200 || url.match(/^file:\/\/\//))) {
        throw "Error!";
      }
      console.log("INFO: processing " + url);
      onload(xmlhttp.responseText);
    };
    try {
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    } catch (_error) {
      e = _error;
      console.log("ERROR: " + e.message + " (" + e.type + ") when accessing " + url);
    }
  };

  getViewportSize = function() {
    var x, y;
    x = 0;
    y = 0;
    if (window.innerHeight) {
      x = window.innerWidth;
      y = window.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight) {
      x = document.documentElement.clientWidth;
      y = document.documentElement.clientHeight;
    } else if (document.body) {
      x = document.body.clientWidth;
      y = document.body.clientHeight;
    }
    return {
      width: x,
      height: y
    };
  };

  browserSupportsUnitsNatively = function() {
    var body, head, style_block, test_element, test_results;
    test_element = document.createElement('div');
    test_element.id = "vminpolyTests";
    body = document.getElementsByTagName('body')[0];
    body.appendChild(test_element);
    style_block = document.createElement('style');
    head = document.getElementsByTagName('head')[0];
    head.appendChild(style_block);
    test_results = testVWSupport(test_element, style_block) && testVWSupport(test_element, style_block) && testVMinSupport(test_element, style_block);
    body.removeChild(test_element);
    head.removeChild(style_block);
    return test_results;
  };

  testElementStyle = function(element) {
    if (window.getComputedStyle) {
      return getComputedStyle(element, null);
    } else {
      return element.currentStyle;
    }
  };

  applyStyleTest = function(style_block, style) {
    var new_style, test_style;
    new_style = "#vminpolyTests { " + style + "; }";
    if (style_block.styleSheet) {
      return style_block.styleSheet.cssText = new_style;
    } else {
      test_style = document.createTextNode(new_style);
      return style_block.appendChild(test_style);
    }
  };

  clearStyleTests = function(style_block) {
    if (style_block.styleSheet) {
      return style_block.styleSheet.cssText = '';
    } else {
      return style_block.innerHTML = '';
    }
  };

  testVHSupport = function(element, style_block) {
    var comp_style, height;
    applyStyleTest(style_block, 'height: 50vh');
    height = parseInt(window.innerHeight / 2, 10);
    comp_style = parseInt(testElementStyle(element).height, 10);
    clearStyleTests(style_block);
    return comp_style === height;
  };

  testVWSupport = function(element, style_block) {
    var comp_style, width;
    applyStyleTest(style_block, 'width: 50vw');
    width = parseInt(window.innerWidth / 2, 10);
    comp_style = parseInt(testElementStyle(element).width, 10);
    clearStyleTests(style_block);
    return comp_style === width;
  };

  testVMinSupport = function(element, style_block) {
    var actual_vmin, comp_width, docElement, one_vh, one_vw;
    applyStyleTest(style_block, 'width: 50vmin');
    docElement = document.documentElement;
    one_vw = docElement.clientWidth / 100;
    one_vh = docElement.clientHeight / 100;
    actual_vmin = parseInt(Math.min(one_vw, one_vh) * 50, 10);
    comp_width = parseInt(testElementStyle(element).width, 10);
    clearStyleTests(style_block);
    return actual_vmin === comp_width;
  };

  initLayoutEngine = function() {
    var analyzeStyleRule, analyzeStylesheet, head, innerSheetCount, links, onresize, outerSheetCount, sheets, styleElement, _i, _len;
    analyzeStyleRule = function(rule) {
      var declaration, declarations, hasDimension, token, _i, _j, _len, _len1, _ref, _ref1;
      declarations = [];
      _ref = rule.value;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        declaration = _ref[_i];
        hasDimension = false;
        _ref1 = declaration.value;
        for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
          token = _ref1[_j];
          if (token.tokenType === 'DIMENSION' && (token.unit === 'vmin' || token.unit === 'vh' || token.unit === 'vw')) {
            hasDimension = true;
          }
        }
        if (hasDimension) {
          declarations.push(declaration);
        }
      }
      rule.value = declarations;
      return declarations;
    };
    analyzeStylesheet = function(sheet) {
      var atRules, decs, rule, rules, _i, _len, _ref;
      rules = [];
      _ref = sheet.value;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        rule = _ref[_i];
        switch (rule.type) {
          case 'STYLE-RULE':
            decs = analyzeStyleRule(rule);
            if (decs.length !== 0) {
              rules.push(rule);
            }
            break;
          case 'AT-RULE':
            atRules = analyzeStylesheet(rule);
            if (atRules.length !== 0) {
              rules.push(rule);
            }
        }
      }
      sheet.value = rules;
      return rules;
    };
    onresize = function() {
      var css, dims, generateRuleCode, generateSheetCode, map, sheet, url, vpAspectRatio, vpDims;
      vpDims = getViewportSize();
      dims = {
        vh: vpDims.height / 100,
        vw: vpDims.width / 100
      };
      dims.vmin = Math.min(dims.vh, dims.vw);
      vpAspectRatio = vpDims.width / vpDims.height;
      map = function(a, f) {
        var a1, e, _i, _len;
        if (a.map != null) {
          return a.map(f);
        } else {
          a1 = [];
          for (_i = 0, _len = a.length; _i < _len; _i++) {
            e = a[_i];
            a1.push(f(e));
          }
          return a1;
        }
      };
      generateRuleCode = function(rule) {
        var declaration, declarations, ruleCss, token, _i, _j, _len, _len1, _ref, _ref1;
        declarations = [];
        ruleCss = (map(rule.selector, function(o) {
          if (o.toSourceString != null) {
            return o.toSourceString();
          } else {
            return '';
          }
        })).join('');
        ruleCss += "{";
        _ref = rule.value;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          declaration = _ref[_i];
          ruleCss += declaration.name;
          ruleCss += ":";
          _ref1 = declaration.value;
          for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
            token = _ref1[_j];
            if (token.tokenType === 'DIMENSION' && (token.unit === 'vmin' || token.unit === 'vh' || token.unit === 'vw')) {
              ruleCss += "" + (Math.floor(token.num * dims[token.unit])) + "px";
            } else {
              ruleCss += token.toSourceString();
            }
          }
          ruleCss += ";";
        }
        ruleCss += "}\r";
        return ruleCss;
      };
      generateSheetCode = function(sheet) {
        var mar, nums, prelude, rule, sheetCss, source, t, t1, _i, _j, _k, _l, _len, _len1, _len2, _len3, _ref, _ref1, _ref2, _ref3;
        sheetCss = '';
        _ref = sheet.value;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          rule = _ref[_i];
          switch (rule.type) {
            case 'STYLE-RULE':
              sheetCss += generateRuleCode(rule);
              break;
            case 'AT-RULE':
              if (rule.name === 'media') {
                prelude = '';
                mar = false;
                nums = [];
                _ref1 = rule.prelude;
                for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
                  t = _ref1[_j];
                  if (t.name === '(') {
                    prelude += '(';
                    _ref2 = t.value;
                    for (_k = 0, _len2 = _ref2.length; _k < _len2; _k++) {
                      t1 = _ref2[_k];
                      source = t1.toSourceString != null ? t1.toSourceString() : '';
                      if (t1.tokenType === 'IDENT' && source === 'max-aspect-ratio') {
                        mar = true;
                      }
                      if (t1.tokenType === 'NUMBER') {
                        nums.push(parseInt(source));
                      }
                      prelude += source;
                    }
                    prelude += ')';
                  } else {
                    prelude += t.toSourceString();
                  }
                }
                if (vpAspectRatio < nums[0] / nums[1]) {
                  sheetCss += generateSheetCode(rule);
                }
              } else {
                prelude = '';
                _ref3 = rule.prelude;
                for (_l = 0, _len3 = _ref3.length; _l < _len3; _l++) {
                  t = _ref3[_l];
                  if (t.name === '(') {
                    prelude += '(';
                    prelude += (map(t.value, function(o) {
                      if (o.toSourceString != null) {
                        return o.toSourceString();
                      } else {
                        return '';
                      }
                    })).join('');
                    prelude += ')';
                  } else {
                    prelude += t.toSourceString();
                  }
                }
                sheetCss += "@" + rule.name + " " + prelude + " {";
                sheetCss += generateSheetCode(rule);
                sheetCss += '}\n';
              }
          }
        }
        return sheetCss;
      };
      css = '';
      for (url in sheets) {
        sheet = sheets[url];
        css += generateSheetCode(sheet);
      }
      if (styleElement.styleSheet != null) {
        return styleElement.styleSheet.cssText = css;
      } else {
        return styleElement.innerHTML = css;
      }
    };
    sheets = {};
    styleElement = document.createElement('style');
    head = document.getElementsByTagName('head')[0];
    head.appendChild(styleElement);
    links = document.getElementsByTagName('link');
    innerSheetCount = 0;
    outerSheetCount = 0;
    for (_i = 0, _len = links.length; _i < _len; _i++) {
      (function () {
        var i = links[_i];
        if (i.rel !== 'stylesheet') {
          return;
        }
        innerSheetCount++;
        ajax(i.href, function (cssText) {
          var sheet, tokenlist;
          tokenlist = tokenize(cssText);
          sheet = parse(tokenlist);
          analyzeStylesheet(sheet);
          sheets[i.href] = sheet;
          outerSheetCount++;
          if (outerSheetCount === innerSheetCount) {
            window.onresize();
          }
        });
      }());
    }
    window.onresize = onresize;
  };

  console.log('About to do the engine unless...', browserSupportsUnitsNatively());

  if (!browserSupportsUnitsNatively()) {
    initLayoutEngine();
  }

}).call(this);