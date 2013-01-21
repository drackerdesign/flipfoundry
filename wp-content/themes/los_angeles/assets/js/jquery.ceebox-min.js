jQuery(document).ready(function(){ jQuery(".ceebox").ceebox();});

//ceebox
/*
 * CeeBox 2.1.2 jQuery Plugin (minimized version)
 * Requires jQuery 1.3.2 and swfobject.jquery.js plugin to work
 * Code hosted on GitHub (http://github.com/catcubed/ceebox) Please visit there for version history information
 * By Colin Fahrion (http://www.catcubed.com)
 * Inspiration for ceebox comes from Thickbox (http://jquery.com/demo/thickbox/) and Videobox (http://videobox-lb.sourceforge.net/)
 * However, along the upgrade path ceebox has morphed a long way from those roots.
 * Copyright (c) 2009 Colin Fahrion
 * Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php
*/

(function(b){function v(c,a,d){l.vidRegex=function(){var f="";b.each(b.fn.ceebox.videos,function(e,h){if(h.siteRgx!==null&&typeof h.siteRgx!=="string"){e=String(h.siteRgx);f=f+e.slice(1,e.length-2)+"|"}});return new RegExp(f+"\\.swf$","i")}();l.userAgent=navigator.userAgent;b(".cee_close").die().live("click",function(){b.fn.ceebox.closebox();return false});b(c).contents().is("html")||b(c).each(function(f){B(this,f,a,d)});b(c).live("click",function(f){var e=b(f.target).closest("[href]"),h=e.data("ceebox");
if(h){var g=h.opts?b.extend({},a,h.opts):a;b.fn.ceebox.overlay(g);if(h.type=="image"){var i=new Image;i.onload=function(){var k=i.width,j=i.height;g.imageWidth=s(k,b.fn.ceebox.defaults.imageWidth);g.imageHeight=s(j,b.fn.ceebox.defaults.imageHeight);g.imageRatio=k/j;b.fn.ceebox.popup(e,b.extend(g,{type:h.type},{gallery:h.gallery}))};i.src=b(e).attr("href")}else b.fn.ceebox.popup(e,b.extend(g,{type:h.type},{gallery:h.gallery}));return false}})}function w(c){var a=document.documentElement;c=c||100;this.width=
(window.innerWidth||self.innerWidth||a&&a.clientWidth||document.body.clientWidth)-c;this.height=(window.innerHeight||self.innerHeight||a&&a.clientHeight||document.body.clientHeight)-c;return this}function y(c){var a="fixed",d=0,f=z(c.borderWidth,/[0-9]+/g);if(!window.XMLHttpRequest){b("#cee_HideSelect")===null&&b("body").append("<iframe id='cee_HideSelect'></iframe>");a="absolute";d=parseInt(document.documentElement&&document.documentElement.scrollTop||document.body.scrollTop,10)}this.mleft=parseInt(-1*
(c.width/2+Number(f[3])),10);this.mtop=parseInt(-1*(c.height/2+Number(f[0])),10)+d;this.position=a;return this}function z(c,a){c=c.match(a);a=[];var d=c.length;if(d>1){a[0]=c[0];a[1]=c[1];a[2]=d==2?c[0]:c[2];a[3]=d==4?c[3]:c[1]}else a=[c,c,c,c];return a}function C(c,a,d){document.onkeydown=function(f){f=f||window.event;switch(f.keyCode||f.which){case 13:return false;case 27:b.fn.ceebox.closebox(d);document.onkeydown=null;break;case 188:case 37:c&&c.prevId!==null&&galleryNav(a,c.prevId,d);break;case 190:case 39:c&&
c.nextId!==null&&galleryNav(a,c.nextId,d);break;default:break}return true}}function D(c,a,d){function f(k,j){var m,o=i[d.type].bgtop,p=o-2E3;k=="prev"?(m=[{left:0},"left"]):(m=[{right:0},x="right"]);var n=function(q){return b.extend({zIndex:105,width:i[d.type].w+"px",height:i[d.type].h+"px",position:"absolute",top:i[d.type].top,backgroundPosition:m[1]+" "+q+"px"},m[0])};b("<a href='#'></a>").text(k).attr({id:"cee_"+k}).css(n(p)).hover(function(){b(this).css(n(o))},function(){b(this).css(n(p))}).one("click",
function(q){q.preventDefault();(function(E,F,G){b("#cee_prev,#cee_next").unbind().click(function(){return false});document.onkeydown=null;var u=b("#cee_box").children(),H=u.length;u.fadeOut(G,function(){b(this).remove();this==u[H-1]&&E.eq(F).trigger("click")})})(a,j,d.fadeOut)}).appendTo("#cee_box")}var e=d.height,h=d.titleHeight,g=d.padding,i={image:{w:parseInt(d.width/2,10),h:e-h-2*g,top:g,bgtop:(e-h-2*g)/2},video:{w:60,h:80,top:parseInt((e-h-10-2*g)/2,10),bgtop:24}};i.html=i.video;c.prevId&&f("prev",
c.prevId);c.nextId&&f("next",c.nextId);b("#cee_title").append("<div id='cee_count'>Item "+(c.gNum+1)+" of "+c.gLen+"</div>")}function s(c,a){return c&&c<a||!a?c:a}function t(c){return typeof c=="function"}function r(c){var a=c.length;return a>1?c[a-1]:c}b.ceebox={version:"2.1.1"};b.fn.ceebox=function(c){c=b.extend({selector:b(this).selector},b.fn.ceebox.defaults,c);var a=this,d=b(this).selector;c.videoJSON?b.getJSON(c.videoJSON,function(f){b.extend(b.fn.ceebox.videos,f);v(a,c,d)}):v(a,c,d);return this};
b.fn.ceebox.defaults={html:true,image:true,video:true,modal:false,titles:true,htmlGallery:true,imageGallery:true,videoGallery:true,videoWidth:false,videoHeight:false,videoRatio:"16:9",htmlWidth:false,htmlHeight:false,htmlRatio:false,imageWidth:false,imageHeight:false,animSpeed:"normal",easing:"swing",fadeOut:400,fadeIn:400,overlayColor:"#000",overlayOpacity:0.8,boxColor:"",textColor:"",borderColor:"",borderWidth:"3px",padding:15,margin:150,onload:null,unload:null,videoJSON:null,iPhoneRedirect:true};
b.fn.ceebox.ratios={"4:3":1.333,"3:2":1.5,"16:9":1.778,"1:1":1,square:1};b.fn.ceebox.relMatch={width:/(?:width:)([0-9]+)/i,height:/(?:height:)([0-9]+)/i,ratio:/(?:ratio:)([0-9\.:]+)/i,modal:/modal:true/i,nonmodal:/modal:false/i,videoSrc:/(?:videoSrc:)(http:[\/\-\._0-9a-zA-Z:]+)/i,videoId:/(?:videoId:)([\-\._0-9a-zA-Z:]+)/i};b.fn.ceebox.loader="<div id='cee_load' style='z-index:105;top:50%;left:50%;position:fixed'></div>";b.fn.ceebox.videos={base:{param:{wmode:"transparent",allowFullScreen:"true",
allowScriptAccess:"always"},flashvars:{autoplay:true}},facebook:{siteRgx:/facebook\.com\/video/i,idRgx:/(?:v=)([a-zA-Z0-9_]+)/i,src:"http://www.facebook.com/v/[id]"},youtube:{siteRgx:/youtube\.com\/watch/i,idRgx:/(?:v=)([a-zA-Z0-9_\-]+)/i,src:"http://www.youtube.com/v/[id]&hl=en&fs=1&autoplay=1"},metacafe:{siteRgx:/metacafe\.com\/watch/i,idRgx:/(?:watch\/)([a-zA-Z0-9_]+)/i,src:"http://www.metacafe.com/fplayer/[id]/.swf"},google:{siteRgx:/google\.com\/videoplay/i,idRgx:/(?:id=)([a-zA-Z0-9_\-]+)/i,
src:"http://video.google.com/googleplayer.swf?docId=[id]&hl=en&fs=true",flashvars:{playerMode:"normal",fs:true}},spike:{siteRgx:/spike\.com\/video|ifilm\.com\/video/i,idRgx:/(?:\/)([0-9]+)/i,src:"http://www.spike.com/efp",flashvars:{flvbaseclip:"[id]"}},vimeo:{siteRgx:/vimeo\.com\/[0-9]+/i,idRgx:/(?:\.com\/)([a-zA-Z0-9_]+)/i,src:"http://www.vimeo.com/moogaloop.swf?clip_id=[id]&server=vimeo.com&show_title=1&show_byline=1&show_portrait=0&color=&fullscreen=1"},dailymotion:{siteRgx:/dailymotion\.com\/video/i,
idRgx:/(?:video\/)([a-zA-Z0-9_]+)/i,src:"http://www.dailymotion.com/swf/[id]&related=0&autoplay=1"},cnn:{siteRgx:/cnn\.com\/video/i,idRgx:/(?:\?\/video\/)([a-zA-Z0-9_\/\.]+)/i,src:"http://i.cdn.turner.com/cnn/.element/apps/cvp/3.0/swf/cnn_416x234_embed.swf?context=embed&videoId=[id]",width:416,height:374}};b.fn.ceebox.overlay=function(c){c=b.extend({width:60,height:30,type:"html"},b.fn.ceebox.defaults,c);b("#cee_overlay").size()===0&&b("<div id='cee_overlay'></div>").css({opacity:c.overlayOpacity,
position:"absolute",top:0,left:0,backgroundColor:c.overlayColor,width:"100%",height:b(document).height(),zIndex:100}).appendTo(b("body"));if(b("#cee_box").size()===0){var a=y(c);a={position:a.position,zIndex:102,top:"50%",left:"50%",height:c.height+"px",width:c.width+"px",marginLeft:a.mleft+"px",marginTop:a.mtop+"px",opacity:0,borderWidth:c.borderWidth,borderColor:c.borderColor,backgroundColor:c.boxColor,color:c.textColor};b("<div id='cee_box'></div>").css(a).appendTo("body").animate({opacity:1},
c.animSpeed,function(){b("#cee_overlay").addClass("cee_close")})}b("#cee_box").removeClass().addClass("cee_"+c.type);b("#cee_load").size()===0&&b(b.fn.ceebox.loader).appendTo("body");b("#cee_load").show("fast").animate({opacity:1},"fast")};b.fn.ceebox.popup=function(c,a){var d=w(a.margin);a=b.extend({width:d.width,height:d.height,modal:false,type:"html",onload:null},b.fn.ceebox.defaults,a);var f,e;if(b(c).is("a,area,input")&&(a.type=="html"||a.type=="image"||a.type=="video")){if(a.gallery)e=b(a.selector).eq(a.gallery.parentId).find("a[href],area[href],input[href]");
A[a.type].prototype=new I(c,a);d=new A[a.type];c=d.content;a.action=d.action;a.modal=d.modal;if(a.titles){a.titleHeight=b(d.titlebox).contents().contents().wrap("<div></div>").parent().attr("id","ceetitletest").css({position:"absolute",top:"-300px",width:d.width+"px"}).appendTo("body").height();b("#ceetitletest").remove();a.titleHeight=a.titleHeight>=10?a.titleHeight+20:30}else a.titleHeight=0;a.width=d.width+2*a.padding;a.height=d.height+a.titleHeight+2*a.padding}b.fn.ceebox.overlay(a);l.action=
a.action;l.onload=a.onload;l.unload=a.unload;d=y(a);d={marginLeft:d.mleft,marginTop:d.mtop,width:a.width+"px",height:a.height+"px",borderWidth:a.borderWidth};if(a.borderColor){var h=z(a.borderColor,/#[1-90a-f]+/gi);d=b.extend(d,{borderTopColor:h[0],borderRightColor:h[1],borderBottomColor:h[2],borderLeftColor:h[3]})}d=a.textColor?b.extend(d,{color:a.textColor}):d;d=a.boxColor?b.extend(d,{backgroundColor:a.boxColor}):d;b("#cee_box").animate(d,a.animSpeed,a.easing,function(){var g=b(this).append(c).children().hide(),
i=g.length,k=true;g.fadeIn(a.fadeIn,function(){if(b(this).is("#cee_iframeContent"))k=false;k&&this==g[i-1]&&b.fn.ceebox.onload()});if(a.modal===true)b("#cee_overlay").removeClass("cee_close");else{b("<a href='#' id='cee_closeBtn' class='cee_close' title='Close'>close</a>").prependTo("#cee_box");a.gallery&&D(a.gallery,e,a);C(f,e,a.fadeOut)}})};b.fn.ceebox.closebox=function(c,a){c=c||400;b("#cee_box").fadeOut(c);b("#cee_overlay").fadeOut(typeof c=="number"?c*2:"slow",function(){b("#cee_box,#cee_overlay,#cee_HideSelect,#cee_load").unbind().trigger("unload").remove();
if(t(a))a();else t(l.unload)&&l.unload();l.unload=null});document.onkeydown=null};b.fn.ceebox.onload=function(){b("#cee_load").hide(300).fadeOut(600,function(){b(this).remove()});if(t(l.action)){l.action();l.action=null}if(t(l.onload)){l.onload();l.onload=null}};var l={},B=function(c,a,d){var f,e=[],h=[],g=0;b(c).is("[href]")?(f=b(c)):(f=b(c).find("[href]"));var i={image:function(j){return j.match(/\.jpg$|\.jpeg$|\.png$|\.gif$|\.bmp$/i)||false},video:function(j,m){return m&&m.match(/^video$/i)?true:
j.match(l.vidRegex)||false},html:function(){return true}};f.each(function(j){var m=this,o=b.metadata?b(m).metadata():false,p=o?b.extend({},d,o):d;b.each(i,function(n){if(i[n](b(m).attr("href"),b(m).attr("rel"))&&p[n]){var q=false;if(p[n+"Gallery"]===true){h[h.length]=j;q=true}e[e.length]={linkObj:m,type:n,gallery:q,linkOpts:p};return false}})});var k=h.length;b.each(e,function(j){if(e[j].gallery){var m={parentId:a,gNum:g,gLen:k};if(g>0)m.prevId=h[g-1];if(g<k-1)m.nextId=h[g+1];g++}!b.support.opacity&&
b(c).is("map")&&b(e[j].linkObj).click(function(o){o.preventDefault()});b.data(e[j].linkObj,"ceebox",{type:e[j].type,opts:e[j].linkOpts,gallery:m})})},I=function(c,a){var d=a[a.type+"Width"],f=a[a.type+"Height"],e=a[a.type+"Ratio"]||d/f,h=b(c).attr("rel");if(h&&h!==""){var g={};b.each(b.fn.ceebox.relMatch,function(k,j){g[k]=j.exec(h)});if(g.modal)a.modal=true;if(g.nonmodal)a.modal=false;if(g.width)d=Number(r(g.width));if(g.height)f=Number(r(g.height));if(g.ratio){e=r(g.ratio);e=Number(e)?Number(e):
String(e)}if(g.videoSrc)this.videoSrc=String(r(g.videoSrc));if(g.videoId)this.videoId=String(r(g.videoId))}var i=w(a.margin);d=s(d,i.width);f=s(f,i.height);if(e){Number(e)||(e=b.fn.ceebox.ratios[e]?Number(b.fn.ceebox.ratios[e]):1);if(d/f>e)d=parseInt(f*e,10);if(d/f<e)f=parseInt(d/e,10)}this.modal=a.modal;this.href=b(c).attr("href");this.title=b(c).attr("title")||c.t||"";this.titlebox=a.titles?"<div id='cee_title'><h2>"+this.title+"</h2></div>":"";this.width=d;this.height=f;this.rel=h;this.iPhoneRedirect=
a.iPhoneRedirect},A={image:function(){this.content="<img id='cee_img' src='"+this.href+"' width='"+this.width+"' height='"+this.height+"' alt='"+this.title+"'/>"+this.titlebox},video:function(){var c="",a=this,d=function(){var e=this,h=a.videoId;e.flashvars=e.param={};e.src=a.videoSrc||a.href;e.width=a.width;e.height=a.height;b.each(b.fn.ceebox.videos,function(g,i){if(i.siteRgx&&typeof i.siteRgx!="string"&&i.siteRgx.test(a.href)){if(i.idRgx){i.idRgx=new RegExp(i.idRgx);h=String(r(i.idRgx.exec(a.href)))}e.src=
i.src?i.src.replace("[id]",h):e.src;i.flashvars&&b.each(i.flashvars,function(k,j){if(typeof j=="string")e.flashvars[k]=j.replace("[id]",h)});i.param&&b.each(i.param,function(k,j){if(typeof j=="string")e.param[k]=j.replace("[id]",h)});e.width=i.width||e.width;e.height=i.height||e.height;e.site=g}});return e}();if(b.flash.hasVersion(8)){this.width=d.width;this.height=d.height;this.action=function(){b("#cee_vid").flash({swf:d.src,params:b.extend(b.fn.ceebox.videos.base.param,d.param),flashvars:b.extend(b.fn.ceebox.videos.base.flashvars,
d.flashvars),width:d.width,height:d.height})}}else{this.width=400;this.height=200;if(l.userAgent.match(/iPhone/i)&&this.iPhoneRedirect||l.userAgent.match(/iPod/i)&&this.iPhoneRedirect){var f=this.href;this.action=function(){b.fn.ceebox.closebox(400,function(){window.location=f})}}else{d.site=d.site||"SWF file";c="<p style='margin:20px'>Adobe Flash 8 or higher is required to view this movie. You can either:</p><ul><li>Follow link to <a href='"+this.href+"'>"+d.site+" </a></li><li>or <a href='http://www.adobe.com/products/flashplayer/'>Install Flash</a></li><li> or <a href='#' class='cee_close'>Close This Popup</a></li></ul>"}}this.content=
"<div id='cee_vid' style='width:"+this.width+"px;height:"+this.height+"px;'>"+c+"</div>"+this.titlebox},html:function(){var c=this.href,a=this.rel;a=[c.match(/[a-zA-Z0-9_\.]+\.[a-zA-Z]{2,4}/i),c.match(/^http:+/),a?a.match(/^iframe/):false];if(document.domain==a[0]&&a[1]&&!a[2]||!a[1]&&!a[2]){var d,f=(d=c.match(/#[a-zA-Z0-9_\-]+/))?String(c.split("#")[0]+" "+d):c;this.action=function(){b("#cee_ajax").load(f)};this.content=this.titlebox+"<div id='cee_ajax' style='width:"+(this.width-30)+"px;height:"+
(this.height-20)+"px'></div>"}else{b("#cee_iframe").remove();this.content=this.titlebox+"<iframe frameborder='0' hspace='0' src='"+c+"' id='cee_iframeContent' name='cee_iframeContent"+Math.round(Math.random()*1E3)+"' onload='jQuery.fn.ceebox.onload()' style='width:"+this.width+"px;height:"+this.height+"px;' > </iframe>"}}}})(jQuery);