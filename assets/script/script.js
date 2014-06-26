// @codekit-append "background.js"
// @codekit-append "button.js"
// @codekit-append "collapse.js"
// @codekit-append "fill.js"
// @codekit-append "header.js"
// @codekit-append "lettering.js"
// @codekit-append "lightbox.js"
// @codekit-append "microcontent.js"
// @codekit-append "nav.js"
// @codekit-append "smooth.js"
// @codekit-append "thumper.js"
/* **********************************************
     Begin background.js
********************************************** */jQuery(document).ready(function(e){e("*[data-bg-image]").each(function(){e(this).css({background:"#790f5b url('"+e(this).data("bg-image")+"')","background-position":"center","background-size":"cover"})})});jQuery(document).ready(function(e){e("button, .button, submit, .submit").each(function(){e(this).on("click",function(){e(this).addClass("working")})})});jQuery(document).ready(function(e){e("*[data-collapse]").each(function(){var t=e(this),n=t.children("*[data-collapse-trigger]");n.on("click",function(e){e.preventDefault();t.toggleClass("collapsed");n.children(".icon-plus")[0]!=null?n.children(".icon-plus").removeClass("icon-plus").addClass("icon-minus"):n.children(".icon-minus")[0]!=null&&n.children(".icon-minus").removeClass("icon-minus").addClass("icon-plus")})})});jQuery(document).ready(function(e){e(window).on("resize",function(){e("*[data-fill]").each(function(){e(this).attr("data-fill")=="strict"?e(this).css({height:e(window).height(),position:"relative"}):e(this).css({"min-height":e(window).height(),position:"relative"})})});e(window).resize()});jQuery(document).ready(function(e){e("#s").on("focusin",function(){e("#searchform").addClass("focus")});e("#s").on("focusout",function(){e("#searchform").removeClass("focus")})});(function(e){function t(t,n,r,i){var s=t.text().split(n),o="";if(s.length){e(s).each(function(e,t){o+='<span class="'+r+(e+1)+'">'+t+"</span>"+i});t.empty().append(o)}}var n={init:function(){return this.each(function(){t(e(this),"","char","")})},words:function(){return this.each(function(){t(e(this)," ","word"," ")})},lines:function(){return this.each(function(){var n="eefec303079ad17405c889e092e105b0";t(e(this).children("br").replaceWith(n).end(),n,"line","")})}};e.fn.lettering=function(t){if(t&&n[t])return n[t].apply(this,[].slice.call(arguments,1));if(t==="letters"||!t)return n.init.apply(this,[].slice.call(arguments,0));e.error("Method "+t+" does not exist on jQuery.lettering");return this}})(jQuery);jQuery(document).ready(function(e){e("*[data-lettering]").lettering("words").children("span").lettering();e(".sbg").lettering()});jQuery(document).ready(function(e){e('*[data-rel="lightbox"]').on("click",function(t){t.preventDefault();var n="<div class='lightbox-overlay' id='lightbox-overlay'><div class='lightbox' id='lightbox'><div class='lightbox-close'>&times</div><div class='lightbox-content'></div></div></div>";e(n).hide().appendTo("body").fadeIn(250);e(".lightbox-content").trigger("ajax:thumper");e(".lightbox-content").load(e(this).attr("href"));e("#lightbox-overlay").on("click",function(t){t.target===this&&e("#lightbox-overlay").fadeOut(150,function(){e(this).remove()})});e(".lightbox-close").on("click",function(){e("#lightbox-overlay").fadeOut(150,function(){e(this).remove()})})})});jQuery(document).ready(function(e){e('*[data-rel="microcontent"]').on("click",function(t){t.preventDefault();t.stopPropagation();e("#microcontent").remove();var n=e(this).data("microcontent-position");if(n=="top")var r="<div class='microcontent "+n+"' id='microcontent' style='left:"+e(this).position().left+"px; top:"+(e(this).position().top+e(this).height()+12)+"px;'><div class='microcontent-beak'></div><div class='microcontent-content'></div></div>";else if(n=="left")var r="<div class='microcontent "+n+"' id='microcontent' style='left:"+e(this).position().left+"px; top:"+(e(this).position().top+e(this).height()+12)+"px;'><div class='microcontent-beak'></div><div class='microcontent-content'></div></div>";else if(micrcocontentPosition=="right")var r="<div class='microcontent "+n+"' id='microcontent' style='left:"+e(this).position().left+"px; top:"+(e(this).position().top+e(this).height()+12)+"px;'><div class='microcontent-beak'></div><div class='microcontent-content'></div></div>";else var r="<div class='microcontent "+n+"' id='microcontent' style='left:"+e(this).position().left+"px; top:"+(e(this).position().top+e(this).height()+12)+"px;'><div class='microcontent-beak'></div><div class='microcontent-content'></div></div>";e(r).appendTo("body");e(".microcontent-content").trigger("ajax:thumper");e(".microcontent-content").load(e(this).attr("href"))});e("body").on("click",function(t){e("#microcontent").remove()})});jQuery(document).ready(function(e){e("*[data-menu]").on("click",function(){e("body").toggleClass("menu")})});jQuery(document).ready(function(e){e("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=e(this.hash);t=t.length?t:e("[name="+this.hash.slice(1)+"]");if(t.length){e("html,body").animate({scrollTop:t.offset().top},800);return!1}}})});jQuery(document).ready(function(e){e(document).bind("ajax:thumper",function(t){t.stopPropagation();var n="<div class='thumper'><div class='thumper-content'></div></div>";e(t.target).html(n)})});