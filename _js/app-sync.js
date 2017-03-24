/*! modernizr 3.4.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-csstransitions-domprefixes-prefixed-setclasses-shiv-testallprops-testprop !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,a,s;for(var l in S)if(S.hasOwnProperty(l)){if(e=[],t=S[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)a=e[i],s=a.split("."),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),C.push((o?"":"no-")+s.join("-"))}}function i(e){var t=x.className,n=Modernizr._config.classPrefix||"";if(b&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),b?x.className.baseVal=t:x.className=t)}function a(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function s(e,t){return!!~(""+e).indexOf(t)}function l(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):b?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function u(e,t){return function(){return e.apply(t,arguments)}}function c(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?u(o,n||t):o);return!1}function f(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function d(t,n,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,t,n);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var a=i.error?"error":"log";i[a].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!n&&t.currentStyle&&t.currentStyle[r];return o}function p(){var e=t.body;return e||(e=l(b?"svg":"body"),e.fake=!0),e}function m(e,n,r,o){var i,a,s,u,c="modernizr",f=l("div"),d=p();if(parseInt(r,10))for(;r--;)s=l("div"),s.id=o?o[r]:c+(r+1),f.appendChild(s);return i=l("style"),i.type="text/css",i.id="s"+c,(d.fake?d:f).appendChild(i),d.appendChild(f),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),f.id=c,d.fake&&(d.style.background="",d.style.overflow="hidden",u=x.style.overflow,x.style.overflow="hidden",x.appendChild(d)),a=n(f,e),d.fake?(d.parentNode.removeChild(d),x.style.overflow=u,x.offsetHeight):f.parentNode.removeChild(f),!!a}function h(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(f(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+f(t[o])+":"+r+")");return i=i.join(" or "),m("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==d(e,null,"position")})}return n}function g(e,t,o,i){function u(){f&&(delete P.style,delete P.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var c=h(e,o);if(!r(c,"undefined"))return c}for(var f,d,p,m,g,v=["modernizr","tspan","samp"];!P.style&&v.length;)f=!0,P.modElem=l(v.shift()),P.style=P.modElem.style;for(p=e.length,d=0;p>d;d++)if(m=e[d],g=P.style[m],s(m,"-")&&(m=a(m)),P.style[m]!==n){if(i||r(o,"undefined"))return u(),"pfx"==t?m:!0;try{P.style[m]=o}catch(y){}if(P.style[m]!=g)return u(),"pfx"==t?m:!0}return u(),!1}function v(e,t,n,o,i){var a=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+N.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?g(s,t,o,i):(s=(e+" "+_.join(a+" ")+a).split(" "),c(s,t,n))}function y(e,t,r){return v(e,n,n,t,r)}var C=[],S=[],E={_version:"3.4.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){S.push({name:e,fn:t,options:n})},addAsyncTest:function(e){S.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=E,Modernizr=new Modernizr;var x=t.documentElement,b="svg"===x.nodeName.toLowerCase();b||!function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=C.elements;return"string"==typeof e?e.split(" "):e}function o(e,t){var n=C.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),C.elements=n+" "+e,u(t)}function i(e){var t=y[e[g]];return t||(t={},v++,e[g]=v,y[v]=t),t}function a(e,n,r){if(n||(n=t),f)return n.createElement(e);r||(r=i(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():h.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||m.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),f)return e.createDocumentFragment();n=n||i(e);for(var o=n.frag.cloneNode(),a=0,s=r(),l=s.length;l>a;a++)o.createElement(s[a]);return o}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return C.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(C,t.frag)}function u(e){e||(e=t);var r=i(e);return!C.shivCSS||c||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),f||l(e,r),e}var c,f,d="3.7.3",p=e.html5||{},m=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,h=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g="_html5shiv",v=0,y={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",c="hidden"in e,f=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){c=!0,f=!0}}();var C={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:d,shivCSS:p.shivCSS!==!1,supportsUnknownElements:f,shivMethods:p.shivMethods!==!1,type:"default",shivDocument:u,createElement:a,createDocumentFragment:s,addElements:o};e.html5=C,u(t),"object"==typeof module&&module.exports&&(module.exports=C)}("undefined"!=typeof e?e:this,t);var w="Moz O ms Webkit",_=E._config.usePrefixes?w.toLowerCase().split(" "):[];E._domPrefixes=_;var N=E._config.usePrefixes?w.split(" "):[];E._cssomPrefixes=N;var j=function(t){var r,o=prefixes.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var a=0;o>a;a++){var s=prefixes[a],l=s.toUpperCase()+"_"+r;if(l in i)return"@-"+s.toLowerCase()+"-"+t}return!1};E.atRule=j;var z={elem:l("modernizr")};Modernizr._q.push(function(){delete z.elem});var P={style:z.elem.style};Modernizr._q.unshift(function(){delete P.style});E.testProp=function(e,t,r){return g([e],n,t,r)};E.testAllProps=v;E.prefixed=function(e,t,n){return 0===e.indexOf("@")?j(e):(-1!=e.indexOf("-")&&(e=a(e)),t?v(e,t,n):v(e,"pfx"))};E.testAllProps=y,Modernizr.addTest("csstransitions",y("transition","all",!0)),o(),i(C),delete E.addTest,delete E.addAsyncTest;for(var k=0;k<Modernizr._q.length;k++)Modernizr._q[k]();e.Modernizr=Modernizr}(window,document);
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