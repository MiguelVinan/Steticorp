/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-inlinesvg-smil-svg-svgasimg-svgclippaths-svgfilters-svgforeignobject-addtest-atrule-domprefixes-hasevent-mq-prefixed-prefixedcss-prefixedcssvalue-prefixes-printshiv-setclasses-testallprops-testprop-teststyles !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,a,s;for(var l in E)if(E.hasOwnProperty(l)){if(e=[],t=E[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)a=e[i],s=a.split("."),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),S.push((o?"":"no-")+s.join("-"))}}function i(e){var t=b.className,n=Modernizr._config.classPrefix||"";if(_&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),_?b.className.baseVal=t:b.className=t)}function a(e,t){if("object"==typeof e)for(var n in e)N(e,n)&&a(n,e[n]);else{e=e.toLowerCase();var r=e.split("."),o=Modernizr[r[0]];if(2==r.length&&(o=o[r[1]]),"undefined"!=typeof o)return Modernizr;t="function"==typeof t?t():t,1==r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),i([(t&&0!=t?"":"no-")+r.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):_?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function l(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function u(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function f(){var e=t.body;return e||(e=s(_?"svg":"body"),e.fake=!0),e}function c(e,n,r,o){var i,a,l,u,c="modernizr",d=s("div"),p=f();if(parseInt(r,10))for(;r--;)l=s("div"),l.id=o?o[r]:c+(r+1),d.appendChild(l);return i=s("style"),i.type="text/css",i.id="s"+c,(p.fake?p:d).appendChild(i),p.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),d.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",u=b.style.overflow,b.style.overflow="hidden",b.appendChild(p)),a=n(d,e),p.fake?(p.parentNode.removeChild(p),b.style.overflow=u,b.offsetHeight):d.parentNode.removeChild(d),!!a}function d(e,t){return!!~(""+e).indexOf(t)}function p(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(u(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+u(t[o])+":"+r+")");return i=i.join(" or "),c("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function m(e,t){return function(){return e.apply(t,arguments)}}function h(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?m(o,n||t):o);return!1}function v(e,t,o,i){function a(){f&&(delete z.style,delete z.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var u=p(e,o);if(!r(u,"undefined"))return u}for(var f,c,m,h,v,g=["modernizr","tspan"];!z.style;)f=!0,z.modElem=s(g.shift()),z.style=z.modElem.style;for(m=e.length,c=0;m>c;c++)if(h=e[c],v=z.style[h],d(h,"-")&&(h=l(h)),z.style[h]!==n){if(i||r(o,"undefined"))return a(),"pfx"==t?h:!0;try{z.style[h]=o}catch(y){}if(z.style[h]!=v)return a(),"pfx"==t?h:!0}return a(),!1}function g(e,t,n,o,i){var a=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+F.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?v(s,t,o,i):(s=(e+" "+x.join(a+" ")+a).split(" "),h(s,t,n))}function y(e,t,r){return g(e,n,n,t,r)}var S=[],E=[],w={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){E.push({name:e,fn:t,options:n})},addAsyncTest:function(e){E.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr,Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("svgfilters",function(){var t=!1;try{t="SVGFEColorMatrixElement"in e&&2==SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE}catch(n){}return t});var C=w._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];w._prefixes=C;var b=t.documentElement,_="svg"===b.nodeName.toLowerCase();_||!function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=_.elements;return"string"==typeof e?e.split(" "):e}function o(e,t){var n=_.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),_.elements=n+" "+e,u(t)}function i(e){var t=b[e[w]];return t||(t={},C++,e[w]=C,b[C]=t),t}function a(e,n,r){if(n||(n=t),v)return n.createElement(e);r||(r=i(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():E.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||S.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),v)return e.createDocumentFragment();n=n||i(e);for(var o=n.frag.cloneNode(),a=0,s=r(),l=s.length;l>a;a++)o.createElement(s[a]);return o}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return _.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(_,t.frag)}function u(e){e||(e=t);var r=i(e);return!_.shivCSS||h||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),v||l(e,r),e}function f(e){for(var t,n=e.getElementsByTagName("*"),o=n.length,i=RegExp("^(?:"+r().join("|")+")$","i"),a=[];o--;)t=n[o],i.test(t.nodeName)&&a.push(t.applyElement(c(t)));return a}function c(e){for(var t,n=e.attributes,r=n.length,o=e.ownerDocument.createElement(x+":"+e.nodeName);r--;)t=n[r],t.specified&&o.setAttribute(t.nodeName,t.nodeValue);return o.style.cssText=e.style.cssText,o}function d(e){for(var t,n=e.split("{"),o=n.length,i=RegExp("(^|[\\s,>+~])("+r().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),a="$1"+x+"\\:$2";o--;)t=n[o]=n[o].split("}"),t[t.length-1]=t[t.length-1].replace(i,a),n[o]=t.join("}");return n.join("{")}function p(e){for(var t=e.length;t--;)e[t].removeNode()}function m(e){function t(){clearTimeout(a._removeSheetTimer),r&&r.removeNode(!0),r=null}var r,o,a=i(e),s=e.namespaces,l=e.parentWindow;return!N||e.printShived?e:("undefined"==typeof s[x]&&s.add(x),l.attachEvent("onbeforeprint",function(){t();for(var i,a,s,l=e.styleSheets,u=[],c=l.length,p=Array(c);c--;)p[c]=l[c];for(;s=p.pop();)if(!s.disabled&&T.test(s.media)){try{i=s.imports,a=i.length}catch(m){a=0}for(c=0;a>c;c++)p.push(i[c]);try{u.push(s.cssText)}catch(m){}}u=d(u.reverse().join("")),o=f(e),r=n(e,u)}),l.attachEvent("onafterprint",function(){p(o),clearTimeout(a._removeSheetTimer),a._removeSheetTimer=setTimeout(t,500)}),e.printShived=!0,e)}var h,v,g="3.7.3",y=e.html5||{},S=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,E=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,w="_html5shiv",C=0,b={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",h="hidden"in e,v=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){h=!0,v=!0}}();var _={elements:y.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:g,shivCSS:y.shivCSS!==!1,supportsUnknownElements:v,shivMethods:y.shivMethods!==!1,type:"default",shivDocument:u,createElement:a,createDocumentFragment:s,addElements:o};e.html5=_,u(t);var T=/^$|\b(?:all|print)\b/,x="html5shiv",N=!v&&function(){var n=t.documentElement;return!("undefined"==typeof t.namespaces||"undefined"==typeof t.parentWindow||"undefined"==typeof n.applyElement||"undefined"==typeof n.removeNode||"undefined"==typeof e.attachEvent)}();_.type+=" print",_.shivPrint=m,m(t),"object"==typeof module&&module.exports&&(module.exports=_)}("undefined"!=typeof e?e:this,t);var T="Moz O ms Webkit",x=w._config.usePrefixes?T.toLowerCase().split(" "):[];w._domPrefixes=x;var N;!function(){var e={}.hasOwnProperty;N=r(e,"undefined")||r(e.call,"undefined")?function(e,t){return t in e&&r(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),w._l={},w.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},w._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,r;for(e=0;e<n.length;e++)(r=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){w.addTest=a}),Modernizr.addTest("svgasimg",t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var j=function(){function e(e,t){var o;return e?(t&&"string"!=typeof t||(t=s(t||"div")),e="on"+e,o=e in t,!o&&r&&(t.setAttribute||(t=s("div")),t.setAttribute(e,""),o="function"==typeof t[e],t[e]!==n&&(t[e]=n),t.removeAttribute(e)),o):!1}var r=!("onblur"in t.documentElement);return e}();w.hasEvent=j;var P=function(e,t){var n=!1,r=s("div"),o=r.style;if(e in o){var i=x.length;for(o[e]=t,n=o[e];i--&&!n;)o[e]="-"+x[i]+"-"+t,n=o[e]}return""===n&&(n=!1),n};w.prefixedCSSValue=P,Modernizr.addTest("inlinesvg",function(){var e=s("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)});var F=w._config.usePrefixes?T.split(" "):[];w._cssomPrefixes=F;var A=function(t){var r,o=C.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var a=0;o>a;a++){var s=C[a],l=s.toUpperCase()+"_"+r;if(l in i)return"@-"+s.toLowerCase()+"-"+t}return!1};w.atRule=A;var M={}.toString;Modernizr.addTest("svgclippaths",function(){return!!t.createElementNS&&/SVGClipPath/.test(M.call(t.createElementNS("http://www.w3.org/2000/svg","clipPath")))}),Modernizr.addTest("svgforeignobject",function(){return!!t.createElementNS&&/SVGForeignObject/.test(M.call(t.createElementNS("http://www.w3.org/2000/svg","foreignObject")))}),Modernizr.addTest("smil",function(){return!!t.createElementNS&&/SVGAnimate/.test(M.call(t.createElementNS("http://www.w3.org/2000/svg","animate")))});var R=function(){var t=e.matchMedia||e.msMatchMedia;return t?function(e){var n=t(e);return n&&n.matches||!1}:function(t){var n=!1;return c("@media "+t+" { #modernizr { position: absolute; } }",function(t){n="absolute"==(e.getComputedStyle?e.getComputedStyle(t,null):t.currentStyle).position}),n}}();w.mq=R;var V=(w.testStyles=c,{elem:s("modernizr")});Modernizr._q.push(function(){delete V.elem});var z={style:V.elem.style};Modernizr._q.unshift(function(){delete z.style});w.testProp=function(e,t,r){return v([e],n,t,r)};w.testAllProps=g;var k=w.prefixed=function(e,t,n){return 0===e.indexOf("@")?A(e):(-1!=e.indexOf("-")&&(e=l(e)),t?g(e,t,n):g(e,"pfx"))};w.prefixedCSS=function(e){var t=k(e);return t&&u(t)};w.testAllProps=y,o(),i(S),delete w.addTest,delete w.addAsyncTest;for(var L=0;L<Modernizr._q.length;L++)Modernizr._q[L]();e.Modernizr=Modernizr}(window,document);