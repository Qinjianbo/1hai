(function(){var h={},mt={},c={id:"3d7f6839f5a39e141432b11842e73e26",dm:["1hai.cn","my.1hai.cn","booking.1hai.cn","m.1hai.cn"],js:"tongji.baidu.com/hm-web/js/",etrk:[{id:"step1",eventType:"onclick"}],icon:'',ctrk:false,align:-1,nv:1,vdur:1800000,age:31536000000,rec:0,rp:[],trust:1,vcard:184791,qiao:184791,lxb:0,conv:0,med:0,cvcc:'',cvcf:[],apps:''};var p=void 0,q=!0,s=null,w=!1;mt.j={};mt.j.Z=/msie (\d+\.\d+)/i.test(navigator.userAgent);mt.j.La=/msie (\d+\.\d+)/i.test(navigator.userAgent)?document.documentMode||+RegExp.$1:p;mt.j.cookieEnabled=navigator.cookieEnabled;mt.j.javaEnabled=navigator.javaEnabled();mt.j.language=navigator.language||navigator.browserLanguage||navigator.systemLanguage||navigator.userLanguage||"";mt.j.Oa=(window.screen.width||0)+"x"+(window.screen.height||0);mt.j.colorDepth=window.screen.colorDepth||0;mt.cookie={};
mt.cookie.set=function(a,b,e){var d;e.K&&(d=new Date,d.setTime(d.getTime()+e.K));document.cookie=a+"="+b+(e.domain?"; domain="+e.domain:"")+(e.path?"; path="+e.path:"")+(d?"; expires="+d.toGMTString():"")+(e.eb?"; secure":"")};mt.cookie.get=function(a){return(a=RegExp("(^| )"+a+"=([^;]*)(;|$)").exec(document.cookie))?a[2]:s};mt.m={};mt.m.L=function(a){return document.getElementById(a)};mt.m.xa=function(a){var b;for(b="A";(a=a.parentNode)&&1==a.nodeType;)if(a.tagName==b)return a;return s};
(mt.m.R=function(){function a(){if(!a.B){a.B=q;for(var b=0,f=d.length;b<f;b++)d[b]()}}function b(){try{document.documentElement.doScroll("left")}catch(d){setTimeout(b,1);return}a()}var e=w,d=[],f;document.addEventListener?f=function(){document.removeEventListener("DOMContentLoaded",f,w);a()}:document.attachEvent&&(f=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",f),a())});(function(){if(!e)if(e=q,"complete"===document.readyState)a.B=q;else if(document.addEventListener)document.addEventListener("DOMContentLoaded",
f,w),window.addEventListener("load",a,w);else if(document.attachEvent){document.attachEvent("onreadystatechange",f);window.attachEvent("onload",a);var d=w;try{d=window.frameElement==s}catch(m){}document.documentElement.doScroll&&d&&b()}})();return function(b){a.B?b():d.push(b)}}()).B=w;mt.event={};mt.event.c=function(a,b,e){a.attachEvent?a.attachEvent("on"+b,function(d){e.call(a,d)}):a.addEventListener&&a.addEventListener(b,e,w)};
mt.event.preventDefault=function(a){a.preventDefault?a.preventDefault():a.returnValue=w};mt.k={};mt.k.parse=function(){return(new Function('return (" + source + ")'))()};
mt.k.stringify=function(){function a(a){/["\\\x00-\x1f]/.test(a)&&(a=a.replace(/["\\\x00-\x1f]/g,function(a){var d=e[a];if(d)return d;d=a.charCodeAt();return"\\u00"+Math.floor(d/16).toString(16)+(d%16).toString(16)}));return'"'+a+'"'}function b(a){return 10>a?"0"+a:a}var e={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return function(d){switch(typeof d){case "undefined":return"undefined";case "number":return isFinite(d)?String(d):"null";case "string":return a(d);case "boolean":return String(d);
default:if(d===s)return"null";if(d instanceof Array){var f=["["],e=d.length,m,g,k;for(g=0;g<e;g++)switch(k=d[g],typeof k){case "undefined":case "function":case "unknown":break;default:m&&f.push(","),f.push(mt.k.stringify(k)),m=1}f.push("]");return f.join("")}if(d instanceof Date)return'"'+d.getFullYear()+"-"+b(d.getMonth()+1)+"-"+b(d.getDate())+"T"+b(d.getHours())+":"+b(d.getMinutes())+":"+b(d.getSeconds())+'"';m=["{"];g=mt.k.stringify;for(e in d)if(Object.prototype.hasOwnProperty.call(d,e))switch(k=
d[e],typeof k){case "undefined":case "unknown":case "function":break;default:f&&m.push(","),f=1,m.push(g(e)+":"+g(k))}m.push("}");return m.join("")}}}();mt.lang={};mt.lang.d=function(a,b){return"[object "+b+"]"==={}.toString.call(a)};mt.lang.ab=function(a){return mt.lang.d(a,"Number")&&isFinite(a)};mt.lang.cb=function(a){return mt.lang.d(a,"String")};mt.localStorage={};
mt.localStorage.H=function(){if(!mt.localStorage.h)try{mt.localStorage.h=document.createElement("input"),mt.localStorage.h.type="hidden",mt.localStorage.h.style.display="none",mt.localStorage.h.addBehavior("#default#userData"),document.getElementsByTagName("head")[0].appendChild(mt.localStorage.h)}catch(a){return w}return q};
mt.localStorage.set=function(a,b,e){var d=new Date;d.setTime(d.getTime()+e||31536E6);try{window.localStorage?(b=d.getTime()+"|"+b,window.localStorage.setItem(a,b)):mt.localStorage.H()&&(mt.localStorage.h.expires=d.toUTCString(),mt.localStorage.h.load(document.location.hostname),mt.localStorage.h.setAttribute(a,b),mt.localStorage.h.save(document.location.hostname))}catch(f){}};
mt.localStorage.get=function(a){if(window.localStorage){if(a=window.localStorage.getItem(a)){var b=a.indexOf("|"),e=a.substring(0,b)-0;if(e&&e>(new Date).getTime())return a.substring(b+1)}}else if(mt.localStorage.H())try{return mt.localStorage.h.load(document.location.hostname),mt.localStorage.h.getAttribute(a)}catch(d){}return s};
mt.localStorage.remove=function(a){if(window.localStorage)window.localStorage.removeItem(a);else if(mt.localStorage.H())try{mt.localStorage.h.load(document.location.hostname),mt.localStorage.h.removeAttribute(a),mt.localStorage.h.save(document.location.hostname)}catch(b){}};mt.sessionStorage={};mt.sessionStorage.set=function(a,b){if(window.sessionStorage)try{window.sessionStorage.setItem(a,b)}catch(e){}};
mt.sessionStorage.get=function(a){return window.sessionStorage?window.sessionStorage.getItem(a):s};mt.sessionStorage.remove=function(a){window.sessionStorage&&window.sessionStorage.removeItem(a)};mt.ca={};mt.ca.log=function(a,b){var e=new Image,d="mini_tangram_log_"+Math.floor(2147483648*Math.random()).toString(36);window[d]=e;e.onload=e.onerror=e.onabort=function(){e.onload=e.onerror=e.onabort=s;e=window[d]=s;b&&b(a)};e.src=a};mt.G={};
mt.G.Da=function(){var a="";if(navigator.plugins&&navigator.mimeTypes.length){var b=navigator.plugins["Shockwave Flash"];b&&b.description&&(a=b.description.replace(/^.*\s+(\S+)\s+\S+$/,"$1"))}else if(window.ActiveXObject)try{if(b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"))(a=b.GetVariable("$version"))&&(a=a.replace(/^.*\s+(\d+),(\d+).*$/,"$1.$2"))}catch(e){}return a};
mt.G.qa=function(a,b,e,d,f){return'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="'+a+'" width="'+e+'" height="'+d+'"><param name="movie" value="'+b+'" /><param name="flashvars" value="'+(f||"")+'" /><param name="allowscriptaccess" value="always" /><embed type="application/x-shockwave-flash" name="'+a+'" width="'+e+'" height="'+d+'" src="'+b+'" flashvars="'+(f||"")+'" allowscriptaccess="always" /></object>'};mt.url={};
mt.url.f=function(a,b){var e=a.match(RegExp("(^|&|\\?|#)("+b+")=([^&#]*)(&|$|#)",""));return e?e[3]:s};mt.url.$a=function(a){return(a=a.match(/^(https?:)\/\//))?a[1]:s};mt.url.Aa=function(a){return(a=a.match(/^(https?:\/\/)?([^\/\?#]*)/))?a[2].replace(/.*@/,""):s};mt.url.X=function(a){return(a=mt.url.Aa(a))?a.replace(/:\d+$/,""):a};mt.url.Za=function(a){return(a=a.match(/^(https?:\/\/)?[^\/]*(.*)/))?a[2].replace(/[\?#].*/,"").replace(/^$/,"/"):s};
(function(){function a(){for(var a=w,e=document.getElementsByTagName("script"),d=e.length,d=100<d?100:d,f=0;f<d;f++){var l=e[f].src;if(l&&0===l.indexOf("https://hm.baidu.com/h")){a=q;break}}return a}return h.wa=a})();var x=h.wa;
h.i={Ka:"http://tongji.baidu.com/hm-web/welcome/ico",Q:"hm.baidu.com/hm.gif",ia:"baidu.com",Ha:"hmmd",Ia:"hmpl",Wa:"utm_medium",Ga:"hmkw",Ya:"utm_term",Ea:"hmci",Va:"utm_content",Ja:"hmsr",Xa:"utm_source",Fa:"hmcu",Ua:"utm_campaign",s:0,l:Math.round(+new Date/1E3),U:Math.round(+new Date/1E3)%65535,protocol:"https:"===document.location.protocol?"https:":"http:",C:x()||"https:"===document.location.protocol?"https:":"http:",bb:0,oa:6E5,pa:10,T:1024,na:1,r:2147483647,da:"cc cf ci ck cl cm cp cu cw ds ep et fl ja ln lo lt nv rnd si st su v cv lv api sn u tt".split(" ")};
(function(){var a={p:{},c:function(a,e){this.p[a]=this.p[a]||[];this.p[a].push(e)},z:function(a,e){this.p[a]=this.p[a]||[];for(var d=this.p[a].length,f=0;f<d;f++)this.p[a][f](e)}};return h.o=a})();
(function(){function a(a,d){var f=document.createElement("script");f.charset="utf-8";b.d(d,"Function")&&(f.readyState?f.onreadystatechange=function(){if("loaded"===f.readyState||"complete"===f.readyState)f.onreadystatechange=s,d()}:f.onload=function(){d()});f.src=a;var l=document.getElementsByTagName("script")[0];l.parentNode.insertBefore(f,l)}var b=mt.lang;return h.load=a})();
(function(){function a(){var a="";h.b.a.nv?(a=encodeURIComponent(document.referrer),window.sessionStorage?e.set("Hm_from_"+c.id,a):b.set("Hm_from_"+c.id,a,864E5)):a=(window.sessionStorage?e.get("Hm_from_"+c.id):b.get("Hm_from_"+c.id))||"";return a}var b=mt.localStorage,e=mt.sessionStorage;return h.V=a})();
(function(){var a=h.i,b=mt.G,e={init:function(){if(""!==c.icon){var d;d=c.icon.split("|");var f=a.Ka+"?s="+c.id,e=("http:"==a.protocol?"http://eiv":"https://bs")+".baidu.com"+d[0]+"."+d[1];switch(d[1]){case "swf":d=b.qa("HolmesIcon"+a.l,e,d[2],d[3],"s="+f);break;case "gif":d='<a href="'+f+'" target="_blank"><img border="0" src="'+e+'" width="'+d[2]+'" height="'+d[3]+'"></a>';break;default:d='<a href="'+f+'" target="_blank">'+d[0]+"</a>"}document.write(d)}}};h.o.c("pv-b",e.init);return e})();
(function(){var a=mt.m,b=mt.event,e={fa:function(){b.c(document,"click",e.ta());for(var d=c.etrk.length,f=0;f<d;f++){var l=c.etrk[f],m=a.L(decodeURIComponent(l.id));m&&b.c(m,l.eventType,e.J())}},J:function(){return function(a){(a.target||a.srcElement).setAttribute("HM_fix",a.clientX+":"+a.clientY);h.b.a.et=1;h.b.a.ep="{id:"+this.id+",eventType:"+a.type+"}";h.b.g()}},ta:function(){return function(a){var b=a.target||a.srcElement;if(b){var e=b.getAttribute("HM_fix"),m=a.clientX+":"+a.clientY;if(e&&e==
m)b.removeAttribute("HM_fix");else if(e=c.etrk.length,0<e){for(m={};b&&b!=document.body;)b.id&&(m[b.id]=""),b=b.parentNode;for(b=0;b<e;b++){var g=decodeURIComponent(c.etrk[b].id);m.hasOwnProperty(g)&&(h.b.a.et=1,h.b.a.ep="{id:"+g+",eventType:"+a.type+"}",h.b.g())}}}}}};h.o.c("pv-b",e.fa);return e})();
(function(){var a=mt.m,b=mt.event,e=mt.j,d=h.i,f=[],l={ea:function(){c.ctrk&&(b.c(document,"mouseup",l.ma()),b.c(window,"unload",function(){l.D()}),setInterval(function(){l.D()},d.oa))},ma:function(){return function(a){a=l.ya(a);if(""!==a){var b=(d.C+"//"+d.Q+"?"+h.b.ba().replace(/ep=[^&]*/,"ep="+encodeURIComponent("["+a+"]"))).length;b+(d.r+"").length>d.T||(b+encodeURIComponent(f.join(",")+(f.length?",":"")).length+(d.r+"").length>d.T&&l.D(),f.push(a),(f.length>=d.pa||/t:a/.test(a))&&l.D())}}},ya:function(b){if(0===
d.na){var f=b.target||b.srcElement,k=f.tagName.toLowerCase();if("embed"==k||"object"==k)return""}e.Z?(f=Math.max(document.documentElement.scrollTop,document.body.scrollTop),k=Math.max(document.documentElement.scrollLeft,document.body.scrollLeft),k=b.clientX+k,f=b.clientY+f):(k=b.pageX,f=b.pageY);var n=window.innerWidth||document.documentElement.clientWidth||document.body.offsetWidth;switch(c.align){case 1:k-=n/2;break;case 2:k-=n}k="{x:"+k+",y:"+f+",";f=b.target||b.srcElement;return k=(b="a"==f.tagName.toLowerCase()?
f:a.xa(f))?k+("t:a,u:"+encodeURIComponent(b.href)+"}"):k+"t:b}"},D:function(){0!==f.length&&(h.b.a.et=2,h.b.a.ep="["+f.join(",")+"]",h.b.g(),f=[])}};h.o.c("pv-b",l.ea);return l})();
(function(){var a=mt.m,b=h.i,e=h.load,d=h.V;h.o.c("pv-b",function(){c.rec&&a.R(function(){for(var f=0,l=c.rp.length;f<l;f++){var m=c.rp[f][0],g=c.rp[f][1],k=a.L("hm_t_"+m);if(g&&!(2==g&&!k||k&&""!==k.innerHTML))k="",k=Math.round(Math.random()*b.r),k=4==g?"http://crs.baidu.com/hl.js?"+["siteId="+c.id,"planId="+m,"rnd="+k].join("&"):"http://crs.baidu.com/t.js?"+["siteId="+c.id,"planId="+m,"from="+d(),"referer="+encodeURIComponent(document.referrer),"title="+encodeURIComponent(document.title),"rnd="+
k].join("&"),e(k)}})})})();(function(){var a=h.i,b=h.load,e=h.V;h.o.c("pv-b",function(){if(c.trust&&c.vcard){var d="https://tag.baidu.com/vcard/v.js?"+["siteid="+c.vcard,"url="+encodeURIComponent(document.location.href),"source="+e(),"rnd="+Math.round(Math.random()*a.r),"hm=1"].join("&");b(d)}})})();
(function(){function a(){return function(){h.b.a.nv=0;h.b.a.st=4;h.b.a.et=3;h.b.a.ep=h.I.Ba()+","+h.I.za();h.b.g()}}function b(){clearTimeout(B);var a;z&&(a="visible"==document[z]);C&&(a=!document[C]);g="undefined"==typeof a?q:a;if((!m||!k)&&g&&n)v=q,r=+new Date;else if(m&&k&&(!g||!n))v=w,t+=+new Date-r;m=g;k=n;B=setTimeout(b,100)}function e(a){var k=document,b="";if(a in k)b=a;else for(var r=["webkit","ms","moz","o"],d=0;d<r.length;d++){var e=r[d]+a.charAt(0).toUpperCase()+a.slice(1);if(e in k){b=
e;break}}return b}function d(a){if(!("focus"==a.type||"blur"==a.type)||!(a.target&&a.target!=window))n="focus"==a.type||"focusin"==a.type?q:w,b()}var f=mt.event,l=h.o,m=q,g=q,k=q,n=q,u=+new Date,r=u,t=0,v=q,z=e("visibilityState"),C=e("hidden"),B;b();(function(){var a=z.replace(/[vV]isibilityState/,"visibilitychange");f.c(document,a,b);f.c(window,"pageshow",b);f.c(window,"pagehide",b);"object"==typeof document.onfocusin?(f.c(document,"focusin",d),f.c(document,"focusout",d)):(f.c(window,"focus",d),
f.c(window,"blur",d))})();h.I={Ba:function(){return+new Date-u},za:function(){return v?+new Date-r+t:t}};l.c("pv-b",function(){f.c(window,"unload",a())});return h.I})();
(function(){var a=mt.lang,b=h.i,e=h.load,d={Ma:function(d){if((window._dxt===p||a.d(window._dxt,"Array"))&&"undefined"!==typeof h.b){var l=h.b.M();e([b.protocol,"//datax.baidu.com/x.js?si=",c.id,"&dm=",encodeURIComponent(l)].join(""),d)}},Ta:function(b){if(a.d(b,"String")||a.d(b,"Number"))window._dxt=window._dxt||[],window._dxt.push(["_setUserId",b])}};return h.ra=d})();
(function(){function a(k){for(var b in k)if({}.hasOwnProperty.call(k,b)){var d=k[b];e.d(d,"Object")||e.d(d,"Array")?a(d):k[b]=String(d)}}function b(a){return a.replace?a.replace(/'/g,"'0").replace(/\*/g,"'1").replace(/!/g,"'2"):a}var e=mt.lang,d=mt.k,f=h.i,l=h.o,m=h.ra,g={w:[],F:0,$:w,init:function(){g.e=0;l.c("pv-b",function(){g.sa();g.ua()});l.c("pv-d",g.va);l.c("stag-b",function(){h.b.a.api=g.e||g.F?g.e+"_"+g.F:""});l.c("stag-d",function(){h.b.a.api=0;g.e=0;g.F=0})},sa:function(){var a=window._hmt||
[];if(!a||e.d(a,"Array"))window._hmt={id:c.id,cmd:{},push:function(){for(var a=window._hmt,b=0;b<arguments.length;b++){var k=arguments[b];e.d(k,"Array")&&(a.cmd[a.id].push(k),"_setAccount"===k[0]&&(1<k.length&&/^[0-9a-f]{32}$/.test(k[1]))&&(k=k[1],a.id=k,a.cmd[k]=a.cmd[k]||[]))}}},window._hmt.cmd[c.id]=[],window._hmt.push.apply(window._hmt,a)},ua:function(){var a=window._hmt;if(a&&a.cmd&&a.cmd[c.id])for(var b=a.cmd[c.id],d=/^_track(Event|MobConv|Order|RTEvent)$/,r=0,e=b.length;r<e;r++){var f=b[r];
d.test(f[0])?g.w.push(f):g.P(f)}a.cmd[c.id]={push:g.P}},va:function(){if(0<g.w.length)for(var a=0,b=g.w.length;a<b;a++)g.P(g.w[a]);g.w=s},P:function(a){var b=a[0];if(g.hasOwnProperty(b)&&e.d(g[b],"Function"))g[b](a)},_setAccount:function(a){1<a.length&&/^[0-9a-f]{32}$/.test(a[1])&&(g.e|=1)},_setAutoPageview:function(a){if(1<a.length&&(a=a[1],w===a||q===a))g.e|=2,h.b.Y=a},_trackPageview:function(a){if(1<a.length&&a[1].charAt&&"/"===a[1].charAt(0)){g.e|=4;h.b.a.et=0;h.b.a.ep="";h.b.N?(h.b.a.nv=0,h.b.a.st=
4):h.b.N=q;var b=h.b.a.u,d=h.b.a.su;h.b.a.u=f.protocol+"//"+document.location.host+a[1];g.$||(h.b.a.su=document.location.href);h.b.g();h.b.a.u=b;h.b.a.su=d}},_trackEvent:function(a){2<a.length&&(g.e|=8,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=4,h.b.a.ep=b(a[1])+"*"+b(a[2])+(a[3]?"*"+b(a[3]):"")+(a[4]?"*"+b(a[4]):""),h.b.g())},_setCustomVar:function(a){if(!(4>a.length)){var d=a[1],e=a[4]||3;if(0<d&&6>d&&0<e&&4>e){g.F++;for(var r=(h.b.a.cv||"*").split("!"),f=r.length;f<d-1;f++)r.push("*");r[d-1]=e+"*"+b(a[2])+
"*"+b(a[3]);h.b.a.cv=r.join("!");a=h.b.a.cv.replace(/[^1](\*[^!]*){2}/g,"*").replace(/((^|!)\*)+$/g,"");""!==a?h.b.setData("Hm_cv_"+c.id,encodeURIComponent(a),c.age):h.b.Na("Hm_cv_"+c.id)}}},_setReferrerOverride:function(a){1<a.length&&(h.b.a.su=a[1].charAt&&"/"===a[1].charAt(0)?f.protocol+"//"+window.location.host+a[1]:a[1],g.$=q)},_trackOrder:function(b){b=b[1];e.d(b,"Object")&&(a(b),g.e|=16,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=94,h.b.a.ep=d.stringify(b),h.b.g())},_trackMobConv:function(a){if(a={webim:1,
tel:2,map:3,sms:4,callback:5,share:6}[a[1]])g.e|=32,h.b.a.et=93,h.b.a.ep=a,h.b.g()},_trackRTPageview:function(b){b=b[1];e.d(b,"Object")&&(a(b),b=d.stringify(b),512>=encodeURIComponent(b).length&&(g.e|=64,h.b.a.rt=b))},_trackRTEvent:function(b){b=b[1];if(e.d(b,"Object")){a(b);b=encodeURIComponent(d.stringify(b));var n=function(a){var b=h.b.a.rt;g.e|=128;h.b.a.et=90;h.b.a.rt=a;h.b.g();h.b.a.rt=b},l=b.length;if(900>=l)n.call(this,b);else for(var l=Math.ceil(l/900),r="block|"+Math.round(Math.random()*
f.r).toString(16)+"|"+l+"|",t=[],m=0;m<l;m++)t.push(m),t.push(b.substring(900*m,900*m+900)),n.call(this,r+t.join("|")),t=[]}},_setUserId:function(a){a=a[1];m.Ma();m.Ta(a)}};g.init();h.ka=g;return h.ka})();
(function(){function a(){"undefined"===typeof window["_bdhm_loaded_"+c.id]&&(window["_bdhm_loaded_"+c.id]=q,this.a={},this.Y=q,this.N=w,this.init())}var b=mt.url,e=mt.ca,d=mt.G,f=mt.lang,l=mt.cookie,m=mt.j,g=mt.localStorage,k=mt.sessionStorage,n=h.i,u=h.o;a.prototype={O:function(a,b){a="."+a.replace(/:\d+/,"");b="."+b.replace(/:\d+/,"");var d=a.indexOf(b);return-1<d&&d+b.length===a.length},aa:function(a,b){a=a.replace(/^https?:\/\//,"");return 0===a.indexOf(b)},A:function(a){for(var d=0;d<c.dm.length;d++)if(-1<
c.dm[d].indexOf("/")){if(this.aa(a,c.dm[d]))return q}else{var e=b.X(a);if(e&&this.O(e,c.dm[d]))return q}return w},M:function(){for(var a=document.location.hostname,b=0,d=c.dm.length;b<d;b++)if(this.O(a,c.dm[b]))return c.dm[b].replace(/(:\d+)?[\/\?#].*/,"");return a},W:function(){for(var a=0,b=c.dm.length;a<b;a++){var d=c.dm[a];if(-1<d.indexOf("/")&&this.aa(document.location.href,d))return d.replace(/^[^\/]+(\/.*)/,"$1")+"/"}return"/"},Ca:function(){if(!document.referrer)return n.l-n.s>c.vdur?1:4;
var a=w;this.A(document.referrer)&&this.A(document.location.href)?a=q:(a=b.X(document.referrer),a=this.O(a||"",document.location.hostname));return a?n.l-n.s>c.vdur?1:4:3},getData:function(a){try{return l.get(a)||k.get(a)||g.get(a)}catch(b){}},setData:function(a,b,d){try{l.set(a,b,{domain:this.M(),path:this.W(),K:d}),d?g.set(a,b,d):k.set(a,b)}catch(e){}},Na:function(a){try{l.set(a,"",{domain:this.M(),path:this.W(),K:-1}),k.remove(a),g.remove(a)}catch(b){}},Ra:function(){var a,b,d,e,f;n.s=this.getData("Hm_lpvt_"+
c.id)||0;13===n.s.length&&(n.s=Math.round(n.s/1E3));b=this.Ca();a=4!==b?1:0;if(d=this.getData("Hm_lvt_"+c.id)){e=d.split(",");for(f=e.length-1;0<=f;f--)13===e[f].length&&(e[f]=""+Math.round(e[f]/1E3));for(;2592E3<n.l-e[0];)e.shift();f=4>e.length?2:3;for(1===a&&e.push(n.l);4<e.length;)e.shift();d=e.join(",");e=e[e.length-1]}else d=n.l,e="",f=1;this.setData("Hm_lvt_"+c.id,d,c.age);this.setData("Hm_lpvt_"+c.id,n.l);d=n.l===this.getData("Hm_lpvt_"+c.id)?"1":"0";if(0===c.nv&&this.A(document.location.href)&&
(""===document.referrer||this.A(document.referrer)))a=0,b=4;this.a.nv=a;this.a.st=b;this.a.cc=d;this.a.lt=e;this.a.lv=f},ba:function(){for(var a=[],b=this.a.et,d=0,e=n.da.length;d<e;d++){var f=n.da[d],g=this.a[f];"undefined"!==typeof g&&""!==g&&("tt"!==f||"tt"===f&&0===b)&&a.push(f+"="+encodeURIComponent(g))}switch(b){case 0:a.push("sn="+n.U);this.a.rt&&a.push("rt="+encodeURIComponent(this.a.rt));break;case 3:a.push("sn="+n.U);break;case 90:this.a.rt&&a.push("rt="+this.a.rt)}return a.join("&")},Sa:function(){this.Ra();
this.a.si=c.id;this.a.su=document.referrer;this.a.ds=m.Oa;this.a.cl=m.colorDepth+"-bit";this.a.ln=String(m.language).toLowerCase();this.a.ja=m.javaEnabled?1:0;this.a.ck=m.cookieEnabled?1:0;this.a.lo="number"===typeof _bdhm_top?1:0;this.a.fl=d.Da();this.a.v="1.2.13";this.a.cv=decodeURIComponent(this.getData("Hm_cv_"+c.id)||"");this.a.tt=document.title||"";var a=document.location.href;this.a.cm=b.f(a,n.Ha)||"";this.a.cp=b.f(a,n.Ia)||b.f(a,n.Wa)||"";this.a.cw=b.f(a,n.Ga)||b.f(a,n.Ya)||"";this.a.ci=b.f(a,
n.Ea)||b.f(a,n.Va)||"";this.a.cf=b.f(a,n.Ja)||b.f(a,n.Xa)||"";this.a.cu=b.f(a,n.Fa)||b.f(a,n.Ua)||""},init:function(){try{this.Sa(),0===this.a.nv?this.Qa():this.S(".*"),h.b=this,this.la(),u.z("pv-b"),this.Pa()}catch(a){var b=[];b.push("si="+c.id);b.push("n="+encodeURIComponent(a.name));b.push("m="+encodeURIComponent(a.message));b.push("r="+encodeURIComponent(document.referrer));e.log(n.C+"//"+n.Q+"?"+b.join("&"))}},Pa:function(){function a(){u.z("pv-d")}this.Y?(this.N=q,this.a.et=0,this.a.ep="",this.g(a)):
a()},g:function(a){var b=this;b.a.rnd=Math.round(Math.random()*n.r);u.z("stag-b");var d=n.C+"//"+n.Q+"?"+b.ba();u.z("stag-d");b.ha(d);e.log(d,function(d){b.S(d);f.d(a,"Function")&&a.call(b)})},la:function(){var a=document.location.hash.substring(1),d=RegExp(c.id),e=-1<document.referrer.indexOf(n.ia),f=b.f(a,"jn"),g=/^heatlink$|^select$/.test(f);a&&(d.test(a)&&e&&g)&&(this.a.rnd=Math.round(Math.random()*n.r),a=document.createElement("script"),a.setAttribute("type","text/javascript"),a.setAttribute("charset",
"utf-8"),a.setAttribute("src",n.protocol+"//"+c.js+f+".js?"+this.a.rnd),f=document.getElementsByTagName("script")[0],f.parentNode.insertBefore(a,f))},ha:function(a){var b=k.get("Hm_unsent_"+c.id)||"",d=this.a.u?"":"&u="+encodeURIComponent(document.location.href),b=encodeURIComponent(a.replace(/^https?:\/\//,"")+d)+(b?","+b:"");k.set("Hm_unsent_"+c.id,b)},S:function(a){var b=k.get("Hm_unsent_"+c.id)||"";b&&(a=encodeURIComponent(a.replace(/^https?:\/\//,"")),a=RegExp(a.replace(/([\*\(\)])/g,"\\$1")+
"(%26u%3D[^,]*)?,?","g"),(b=b.replace(a,"").replace(/,$/,""))?k.set("Hm_unsent_"+c.id,b):k.remove("Hm_unsent_"+c.id))},Qa:function(){var a=this,b=k.get("Hm_unsent_"+c.id);if(b)for(var b=b.split(","),d=function(b){e.log(n.C+"//"+decodeURIComponent(b),function(b){a.S(b)})},f=0,g=b.length;f<g;f++)d(b[f])}};return new a})();var y=h.i,A=h.load;if(c.apps){var D=[y.protocol,"//ers.baidu.com/app/s.js?"];D.push(c.apps);A(D.join(""))}var E=h.i,F=h.load;
if(c.conv&&"http:"===E.protocol){var G=["http://page.baidu.com/conversion_js.php?sid="];G.push(c.conv);F(G.join(""))}var H=h.i,I=h.load;c.lxb&&I([H.protocol,"//lxbjs.baidu.com/lxb.js?sid=",c.lxb].join(""));var J=h.load,K=h.i.protocol;if(c.qiao){for(var L=[K+"//goutong.baidu.com/site/"],M=c.id,N=5381,O=M.length,P=0;P<O;P++)N=(33*N+Number(M.charCodeAt(P)))%4294967296;2147483648<N&&(N-=2147483648);L.push(N%1E3+"/");L.push(c.id+"/b.js");L.push("?siteId="+c.qiao);J(L.join(""))}
(function(){var a=mt.m,b=mt.event,e=mt.url,d=mt.k;try{if(window.performance&&performance.timing&&"undefined"!==typeof h.b){var f=+new Date,l=function(a){var b=performance.timing,d=b[a+"Start"]?b[a+"Start"]:0;a=b[a+"End"]?b[a+"End"]:0;return{start:d,end:a,value:0<a-d?a-d:0}},m=s;a.R(function(){m=+new Date});var g=function(){var a,b,g;g=l("navigation");b=l("request");g={netAll:b.start-g.start,netDns:l("domainLookup").value,netTcp:l("connect").value,srv:l("response").start-b.start,dom:performance.timing.domInteractive-
performance.timing.fetchStart,loadEvent:l("loadEvent").end-g.start};a=document.referrer;var k=a.match(/^(http[s]?:\/\/)?([^\/]+)(.*)/)||[],v=s;b=s;if("www.baidu.com"===k[2]||"m.baidu.com"===k[2])v=e.f(a,"qid"),b=e.f(a,"click_t");a=v;g.qid=a!=s?a:"";b!=s?(g.bdDom=m?m-b:0,g.bdRun=f-b,g.bdDef=l("navigation").start-b):(g.bdDom=0,g.bdRun=0,g.bdDef=0);h.b.a.et=87;h.b.a.ep=d.stringify(g);h.b.g()};b.c(window,"load",function(){setTimeout(g,500)})}}catch(k){}})();
(function(){var a=mt.j,b=mt.lang,e=mt.event,d=mt.k;if("undefined"!==typeof h.b&&(c.med||(!a.Z||7<a.La)&&c.cvcc)){var f,l,m,g,k=function(a){if(a.item){for(var b=a.length,d=Array(b);b--;)d[b]=a[b];return d}return[].slice.call(a)},n=function(a,b){for(var d in a)if(a.hasOwnProperty(d)&&b.call(a,d,a[d])===w)return w},u=function(a,e){var g={};g.n=f;g.t="clk";g.v=a;if(e){var k=e.getAttribute("href"),l=e.getAttribute("onclick")?""+e.getAttribute("onclick"):s,n=e.getAttribute("id")||"";m.test(k)?(g.sn="mediate",
g.snv=k):b.d(l,"String")&&m.test(l)&&(g.sn="wrap",g.snv=l);g.id=n}h.b.a.et=86;h.b.a.ep=d.stringify(g);h.b.g();for(g=+new Date;400>=+new Date-g;);};if(c.med)l="/zoosnet",f="swt",m=/swt|zixun|call|chat|zoos|business|talk|kefu|openkf|online|\/LR\/Chatpre\.aspx/i,g={click:function(){for(var a=[],b=k(document.getElementsByTagName("a")),b=[].concat.apply(b,k(document.getElementsByTagName("area"))),b=[].concat.apply(b,k(document.getElementsByTagName("img"))),d,e,f=0,g=b.length;f<g;f++)d=b[f],e=d.getAttribute("onclick"),
d=d.getAttribute("href"),(m.test(e)||m.test(d))&&a.push(b[f]);return a}};else if(c.cvcc){l="/other-comm";f="other";m=c.cvcc.q||p;var r=c.cvcc.id||p;g={click:function(){for(var a=[],b=k(document.getElementsByTagName("a")),b=[].concat.apply(b,k(document.getElementsByTagName("area"))),b=[].concat.apply(b,k(document.getElementsByTagName("img"))),d,e,f,g=0,l=b.length;g<l;g++)d=b[g],m!==p?(e=d.getAttribute("onclick"),f=d.getAttribute("href"),r?(d=d.getAttribute("id"),(m.test(e)||m.test(f)||r.test(d))&&
a.push(b[g])):(m.test(e)||m.test(f))&&a.push(b[g])):r!==p&&(d=d.getAttribute("id"),r.test(d)&&a.push(b[g]));return a}}}if("undefined"!==typeof g&&"undefined"!==typeof m){var t;l+=/\/$/.test(l)?"":"/";var v=function(a,d){if(t===d)return u(l+a,d),w;if(b.d(d,"Array")||b.d(d,"NodeList"))for(var e=0,f=d.length;e<f;e++)if(t===d[e])return u(l+a+"/"+(e+1),d[e]),w};e.c(document,"mousedown",function(a){a=a||window.event;t=a.target||a.srcElement;var d={};for(n(g,function(a,e){d[a]=b.d(e,"Function")?e():document.getElementById(e)});t&&
t!==document&&n(d,v)!==w;)t=t.parentNode})}}})();(function(){var a=mt.m,b=mt.lang,e=mt.event,d=mt.k;if("undefined"!==typeof h.b&&b.d(c.cvcf,"Array")&&0<c.cvcf.length){var f={ga:function(){for(var b=c.cvcf.length,d,g=0;g<b;g++)(d=a.L(decodeURIComponent(c.cvcf[g])))&&e.c(d,"click",f.J())},J:function(){return function(){h.b.a.et=86;var a={n:"form",t:"clk"};a.id=this.id;h.b.a.ep=d.stringify(a);h.b.g()}}};a.R(function(){f.ga()})}})();
(function(){var a=mt.event,b=mt.k;if(c.med&&"undefined"!==typeof h.b){var e=+new Date,d={n:"anti",sb:0,kb:0,clk:0},f=function(){h.b.a.et=86;h.b.a.ep=b.stringify(d);h.b.g()};a.c(document,"click",function(){d.clk++});a.c(document,"keyup",function(){d.kb=1});a.c(window,"scroll",function(){d.sb++});a.c(window,"unload",function(){d.t=+new Date-e;f()});a.c(window,"load",function(){setTimeout(f,5E3)})}})();})();
