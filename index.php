<?php

include("include/config.php");


$stmt = $conn->prepare("SELECT * FROM `products_categories`");
$stmt->execute();
$products_categories = $stmt->fetchAll();



?>








<!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->

<!-- Mirrored from teampuris.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Oct 2020 16:13:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta name="theme-color" content="#003726"/>	<link rel="profile" href="http://gmpg.org/xfn/11" />
	        <script type="text/javascript">
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var originalAddEventListener = EventTarget.prototype.addEventListener,
                    oldWidth = window.innerWidth;

                EventTarget.prototype.addEventListener = function (eventName, eventHandler, useCapture) {
                    if (eventName === "resize") {
                        originalAddEventListener.call(this, eventName, function (event) {
                            if (oldWidth === window.innerWidth) {
                                return;
                            }
                            else if (oldWidth !== window.innerWidth) {
                                oldWidth = window.innerWidth;
                            }
                            if (eventHandler.handleEvent) {
                                eventHandler.handleEvent.call(this, event);
                            }
                            else {
                                eventHandler.call(this, event);
                            };
                        }, useCapture);
                    }
                    else {
                        originalAddEventListener.call(this, eventName, eventHandler, useCapture);
                    };
                };
            };
        </script>
		<title>Puris &#8211; Pure Science. Perfect Finish.</title>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Puris &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Puris &raquo; Comments Feed" href="comments/feed/index.html" />
<!-- This site uses the Google Analytics by MonsterInsights plugin v7.12.3 - Using Analytics tracking - https://www.monsterinsights.com/ -->
<!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
<!-- No UA code set -->
<!-- / Google Analytics by MonsterInsights -->
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/teampuris.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.1"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.mind03b.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='wp-includes/css/dist/block-library/theme.mind03b.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/public/assets/css/rs63781.css?ver=6.2.2' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='the7-Defaults-css'  href='wp-content/uploads/smile_fonts/Defaults/Defaultsd03b.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='the7-icomoon-fontawesome-16x16-css'  href='wp-content/uploads/smile_fonts/icomoon-fontawesome-16x16/icomoon-fontawesome-16x16d03b.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='the7-icomoon-fontawesome-brand-16x16-css'  href='wp-content/uploads/smile_fonts/icomoon-fontawesome-brand-16x16/icomoon-fontawesome-brand-16x16d03b.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='wp-content/uploads/js_composer/js_composer_front_custom9b2d.css?ver=6.1' type='text/css' media='all' />
<link rel='stylesheet' id='dt-web-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CRoboto+Condensed:400,600,700' type='text/css' media='all' />
<link rel='stylesheet' id='dt-main-css'  href='wp-content/themes/dt-the7/css/main.mind8f7.css?ver=9.3.0' type='text/css' media='all' />
<style id='dt-main-inline-css' type='text/css'>
body #load {
  display: block;
  height: 100%;
  overflow: hidden;
  position: fixed;
  width: 100%;
  z-index: 9901;
  opacity: 1;
  visibility: visible;
  transition: all .35s ease-out;
}
.load-wrap {
  width: 100%;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  text-align: center;
}
.load-wrap > svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
#load {
  background-color: #ffffff;
}
.uil-default rect:not(.bk) {
  fill: rgba(51,51,51,0.3);
}
.uil-ring > path {
  fill: rgba(51,51,51,0.3);
}
.ring-loader .circle {
  fill: rgba(51,51,51,0.3);
}
.ring-loader .moving-circle {
  fill: #333333;
}
.uil-hourglass .glass {
  stroke: #333333;
}
.uil-hourglass .sand {
  fill: rgba(51,51,51,0.3);
}
.spinner-loader .load-wrap {
  background-image: url("data:image/svg+xml,%3Csvg width='75px' height='75px' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid' class='uil-default'%3E%3Crect x='0' y='0' width='100' height='100' fill='none' class='bk'%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(0 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(30 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(60 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(90 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(120 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(150 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(180 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(210 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(240 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(270 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(300 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='rgba%2851%2C51%2C51%2C0.3%29' transform='rotate(330 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3C/svg%3E");
}
.ring-loader .load-wrap {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='rgba%2851%2C51%2C51%2C0.3%29'%3E   %3Cpath opacity='.25' d='M16 0 A16 16 0 0 0 16 32 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 16 28 A12 12 0 0 1 16 4'/%3E   %3Cpath d='M16 0 A16 16 0 0 1 32 16 L28 16 A12 12 0 0 0 16 4z'%3E     %3CanimateTransform attributeName='transform' type='rotate' from='0 16 16' to='360 16 16' dur='0.8s' repeatCount='indefinite' /%3E   %3C/path%3E %3C/svg%3E");
}
.hourglass-loader .load-wrap {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='rgba%2851%2C51%2C51%2C0.3%29'%3E   %3Cpath transform='translate(2)' d='M0 12 V20 H4 V12z'%3E      %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(8)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.2' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(14)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.4' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(20)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.6' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(26)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.8' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E %3C/svg%3E");
}

</style>
<link rel='stylesheet' id='the7-font-css'  href='wp-content/themes/dt-the7/fonts/icomoon-the7-font/icomoon-the7-font.mind8f7.css?ver=9.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='the7-awesome-fonts-css'  href='wp-content/themes/dt-the7/fonts/FontAwesome/css/all.mind8f7.css?ver=9.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='the7-awesome-fonts-back-css'  href='wp-content/themes/dt-the7/fonts/FontAwesome/back-compat.mind8f7.css?ver=9.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='the7-core-css'  href='wp-content/plugins/dt-the7-core/assets/css/post-type.min16b9.css?ver=2.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='dt-custom-css'  href='wp-content/uploads/the7-css/customedbf.css?ver=af9b042ebe86' type='text/css' media='all' />
<link rel='stylesheet' id='dt-media-css'  href='wp-content/uploads/the7-css/mediaedbf.css?ver=af9b042ebe86' type='text/css' media='all' />
<link rel='stylesheet' id='the7-mega-menu-css'  href='wp-content/uploads/the7-css/mega-menuedbf.css?ver=af9b042ebe86' type='text/css' media='all' />
<link rel='stylesheet' id='the7-elements-albums-portfolio-css'  href='wp-content/uploads/the7-css/the7-elements-albums-portfolioedbf.css?ver=af9b042ebe86' type='text/css' media='all' />
<link rel='stylesheet' id='the7-elements-css'  href='wp-content/uploads/the7-css/post-type-dynamicedbf.css?ver=af9b042ebe86' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='wp-content/themes/dt-the7/styled8f7.css?ver=9.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Playfair+Display:regular,700&amp;subset=latin' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-style-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/style.mince54.css?ver=3.19.3' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-headings-style-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/headings.mince54.css?ver=3.19.3' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-animate-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/animate.mince54.css?ver=3.19.3' type='text/css' media='all' />
<link rel='stylesheet' id='info-box-style-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/info-box.mince54.css?ver=3.19.3' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rbtools.minf049.js?ver=6.0' id='tp-tools-js'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rs6.min3781.js?ver=6.2.2' id='revmin-js'></script>
<script type='text/javascript' id='dt-above-fold-js-extra'>
/* <![CDATA[ */
var dtLocal = {"themeUrl":"https:\/\/teampuris.com\/wp-content\/themes\/dt-the7","passText":"To view this protected post, enter the password below:","moreButtonText":{"loading":"Loading...","loadMore":"Load more"},"postID":"10","ajaxurl":"https:\/\/teampuris.com\/wp-admin\/admin-ajax.php","REST":{"baseUrl":"https:\/\/teampuris.com\/wp-json\/the7\/v1","endpoints":{"sendMail":"\/send-mail"}},"contactMessages":{"required":"One or more fields have an error. Please check and try again.","terms":"Please accept the privacy policy.","fillTheCaptchaError":"Please, fill the captcha."},"captchaSiteKey":"","ajaxNonce":"04d02abc99","pageData":{"type":"page","template":"page","layout":null},"themeSettings":{"smoothScroll":"on","lazyLoading":false,"accentColor":{"mode":"gradient","color":"#003726"},"desktopHeader":{"height":100},"ToggleCaptionEnabled":"disabled","ToggleCaption":"Navigation","floatingHeader":{"showAfter":150,"showMenu":true,"height":60,"logo":{"showLogo":true,"html":"<img class=\" preload-me\" src=\"https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-floating-logo-regular.png\" srcset=\"https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-floating-logo-regular.png 42w, https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-floating-logo-hd.png 84w\" width=\"42\" height=\"42\"   sizes=\"42px\" alt=\"Puris\" \/>","url":"https:\/\/teampuris.com\/"}},"topLine":{"floatingTopLine":{"logo":{"showLogo":false,"html":""}}},"mobileHeader":{"firstSwitchPoint":1070,"secondSwitchPoint":1070,"firstSwitchPointHeight":60,"secondSwitchPointHeight":60,"mobileToggleCaptionEnabled":"disabled","mobileToggleCaption":"Menu"},"stickyMobileHeaderFirstSwitch":{"logo":{"html":"<img class=\" preload-me\" src=\"https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-mobile-logo-regular.png\" srcset=\"https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-mobile-logo-regular.png 42w, https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-floating-logo-hd.png 84w\" width=\"42\" height=\"42\"   sizes=\"42px\" alt=\"Puris\" \/>"}},"stickyMobileHeaderSecondSwitch":{"logo":{"html":"<img class=\" preload-me\" src=\"https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-mobile-logo-regular.png\" srcset=\"https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-mobile-logo-regular.png 42w, https:\/\/teampuris.com\/wp-content\/uploads\/2018\/10\/wizard01.header-style-floating-logo-hd.png 84w\" width=\"42\" height=\"42\"   sizes=\"42px\" alt=\"Puris\" \/>"}},"content":{"textColor":"#85868c","headerColor":"#333333"},"sidebar":{"switchPoint":990},"boxedWidth":"1340px","stripes":{"stripe1":{"textColor":"#787d85","headerColor":"#3b3f4a"},"stripe2":{"textColor":"#8b9199","headerColor":"#ffffff"},"stripe3":{"textColor":"#ffffff","headerColor":"#ffffff"}}},"VCMobileScreenWidth":"778"};
var dtShare = {"shareButtonText":{"facebook":"Share on Facebook","twitter":"Tweet","pinterest":"Pin it","linkedin":"Share on Linkedin","whatsapp":"Share on Whatsapp"},"overlayOpacity":"85"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/dt-the7/js/above-the-fold.mind8f7.js?ver=9.3.0' id='dt-above-fold-js'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate-params.mince54.js?ver=3.19.3' id='ultimate-vc-params-js'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/jquery-appear.mince54.js?ver=3.19.3' id='ultimate-appear-js'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/custom.mince54.js?ver=3.19.3' id='ultimate-custom-js'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/headings.mince54.js?ver=3.19.3' id='ultimate-headings-script-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/10.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.5.1" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed963d.json?url=https%3A%2F%2Fteampuris.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed6cb3?url=https%3A%2F%2Fteampuris.com%2F&amp;format=xml" />
<meta property="og:site_name" content="Puris" />
<meta property="og:title" content="Home" />
<meta property="og:url" content="https://teampuris.com/" />
<meta property="og:type" content="website" />
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<meta name="generator" content="Powered by Slider Revolution 6.2.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) { 
	var load = document.getElementById("load");
	if(!load.classList.contains('loader-removed')){
		var removeLoading = setTimeout(function() {
			load.className += " loader-removed";
		}, 300);
	}
});
</script>
		<link rel="icon" href="wp-content/uploads/2018/10/wizard01.bottom-bar-logo-hd-16x16.png" type="image/png" sizes="16x16"/><link rel="icon" href="wp-content/uploads/2018/10/wizard01.bottom-bar-logo-hd-32x32.png" type="image/png" sizes="32x32"/><link rel="apple-touch-icon" href="wp-content/uploads/2018/10/skin11r.header-style-transparent-mobile-logo-60x60.png"><link rel="apple-touch-icon" sizes="76x76" href="wp-content/uploads/2018/10/skin11r.header-style-transparent-mobile-logo-76x76.png"><link rel="apple-touch-icon" sizes="120x120" href="wp-content/uploads/2018/10/skin11r.header-style-transparent-mobile-logo-120x120.png"><link rel="apple-touch-icon" sizes="152x152" href="wp-content/uploads/2018/10/skin11r.header-style-transparent-mobile-logo-152x152.png"><script type="text/javascript">function setREVStartSize(e){			
			try {								
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
				e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
				if(e.layout==="fullscreen" || e.l==="fullscreen") 						
					newh = Math.max(e.mh,window.innerHeight);				
				else{					
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
					e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
										
					var nl = new Array(e.rl.length),
						ix = 0,						
						sl;					
					e.tabw = e.tabhide>=pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
					e.tabh = e.tabhide>=pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
					for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
					sl = nl[0];									
					for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
					var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					

					newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
				}			
				
				if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
				document.getElementById(e.c).height = newh;
				window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
			} catch(e){
				console.log("Failure at Presize of Slider:" + e)
			}					   
		  };</script>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1518624633598{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1518624639999{padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1538677387604{padding-top: 60px !important;padding-bottom: 20px !important;}.vc_custom_1518623046652{padding-bottom: 70px !important;}.vc_custom_1536668511321{padding-bottom: 50px !important;}.vc_custom_1536668522537{padding-bottom: 50px !important;}.vc_custom_1536668088055{padding-bottom: 70px !important;}.vc_custom_1538674301587{margin-bottom: 0px !important;}.vc_custom_1538674687958{margin-bottom: 0px !important;}.vc_custom_1538674257913{margin-bottom: 0px !important;}.vc_custom_1518623052549{padding-bottom: 70px !important;}.vc_custom_1509870018117{padding-bottom: 45px !important;}.vc_custom_1538677534766{margin-bottom: 50px !important;}.vc_custom_1538677490755{margin-bottom: 50px !important;}.vc_custom_1538677589557{margin-bottom: 50px !important;}.vc_custom_1538677641315{margin-bottom: 50px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<!------------------------------------------------------------------------------------------------------------------------------------------>

<body class="home page-template-default page page-id-10 wp-embed-responsive the7-core-ver-2.5.2 slideshow-on dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon accent-gradient srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-fade phantom-shadow-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style dt-fa-compatibility the7-ver-9.3.0 wpb-js-composer js-comp-ver-6.1 vc_responsive">
<!-- The7 7.9.0 -->
<div id="load" class="spinner-loader">
	<div class="load-wrap"></div>
</div>
<div id="page" >
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<div class="masthead inline-header right widgets full-height shadow-decoration shadow-mobile-header-decoration small-mobile-menu-icon dt-parent-menu-clickable show-sub-menu-on-hover show-device-logo show-mobile-logo"  role="banner">

	<div class="top-bar top-bar-line-hide"
   <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>
	<div class="top-bar-bg" ></div>
	<div class="left-widgets mini-widgets">
    <span class="mini-contacts phone show-on-desktop in-menu-first-switch in-menu-second-switch" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>

    <i class=" the7-mw-icon-phone-bold"> </i>

    <?php echo $_SESSION['lang_dic'][0][0]; ?>

  </span>
  <span class="mini-contacts address show-on-desktop in-top-bar-left hide-on-second-switch" >
    <i class=" the7-mw-icon-address-bold"></i>
    <?php echo $_SESSION['lang_dic'][1][0]; ?>
  </span>


  <span class="mini-contacts address show-on-desktop in-top-bar-left hide-on-second-switch">
    
<?php if($_SESSION['lang'] == "ar"){ ?>
  <a href="index.php?lang=en">English</a>
<?php }else{ ?>
  <a href="index.php?lang=ar" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>العربية</a>
<?php } ?>
  </span>

</div>
         <div class="right-widgets mini-widgets">
            <div class="soc-ico show-on-desktop in-menu-first-switch in-menu-second-switch disabled-bg accent-border border-on hover-accent-bg hover-disabled-border  hover-border-off">
                <a title="Instagram page opens in new window" href="https://www.instagram.com/purisegypt/" target="_blank" class="instagram"><span class="soc-font-icon"></span><span class="screen-reader-text">Instagram page opens in new window</span></a>
                <a title="Vimeo page opens in new window" href="https://vimeo.com/purisdetail" target="_blank" class="vimeo"><span class="soc-font-icon"></span><span class="screen-reader-text">Vimeo page opens in new window</span></a>
                <a title="Facebook page opens in new window" href="https://www.facebook.com/PurisEgypt/" target="_blank" class="facebook">
                    <span class="soc-font-icon"></span>
                    <span class="screen-reader-text">Facebook page opens in new window</span></a>
                <a title="Twitter page opens in new window" href="https://twitter.com/PurisEgypt" target="_blank" class="twitter"><span class="soc-font-icon"></span><span class="screen-reader-text">Twitter page opens in new window</span></a>
                <a title="YouTube page opens in new window" href="https://www.youtube.com/channel/UCOAFBoR800435l6rF1A7Hcw" target="_blank" class="you-tube"><span class="soc-font-icon"></span>
                    <span class="screen-reader-text">YouTube page opens in new window</span></a>
            </div>
        </div>
</div>
    
	<header class="header-bar" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>

		<div class="branding">
	<div id="site-title" class="assistive-text">Puris</div>
	<div id="site-description" class="assistive-text">Pure Science. Perfect Finish.</div>
	<a class="" href="index.html"><img class=" preload-me" src="wp-content/uploads/2018/10/logo-main.png" srcset="https://teampuris.com/wp-content/uploads/2018/10/logo-main.png 57w, https://teampuris.com/wp-content/uploads/2018/10/logo-main-hd.png 114w" width="57" height="57"   sizes="57px" alt="Puris" /><img class="mobile-logo preload-me" src="wp-content/uploads/2018/10/wizard01.header-style-mobile-logo-regular.png" srcset="https://teampuris.com/wp-content/uploads/2018/10/wizard01.header-style-mobile-logo-regular.png 42w, https://teampuris.com/wp-content/uploads/2018/10/wizard01.header-style-floating-logo-hd.png 84w" width="42" height="42"   sizes="42px" alt="Puris" /></a>
        </div>

		<ul id="primary-menu" class="main-nav underline-decoration upwards-line gradient-hover outside-item-remove-margin" role="menubar" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-1119 act first" role="presentation">
        <a href='index.php' data-level='1'role="menuitem">
          <span class="menu-item-text">
            <span class="menu-text"><?php echo $_SESSION['lang_dic'][2][0]; ?></span>
          </span>
        </a>
      </li> 
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1639 has-children" role="presentation">
                <a href='puris-product-lineup/index.php' data-level='1' role="menuitem"><span class="menu-item-text"><span class="menu-text"><?php echo $_SESSION['lang_dic'][3][0]; ?></span>
          </span>
        </a>

        <ul class="sub-nav gradient-hover hover-style-bg level-arrows-on" role="menubar">

<?php 

foreach ($products_categories as $product_category) {

?>



         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2260 first" role="presentation">
            <a href='puris-product-lineup/category/index.php?cadteig=<?php echo $product_category["id"] ?>' data-level='2' role="menuitem">
              <span class="menu-item-text">
                <span class="menu-text"><?php echo $product_category["name"] ?></span>
              </span>
            </a>
          </li> 


<?php } ?>


         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1642 has-children" role="presentation">
            <a href='jade-family/index.php' data-level='1' role="menuitem">
              <span class="menu-item-text">
                <span class="menu-text">JADE™ Family</span>
              </span>
            </a>
          </li> 

<!-------------------------------------------------------------------------------------------------->
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2958">
            <a href='puris-product-lineup/complete-product-list/index.php' data-level='2'>
              <span class="menu-item-text">
                <span class="menu-text"><?php echo $_SESSION['lang_dic'][74][0]; ?></span>
              </span>
            </a>
          </li> 
            
<!-------------------------------------------------------------------------------------------------->
        </ul>

      </li>
            
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1642 has-children" role="presentation">
        <a href='jade-family/index.php' data-level='1'role="menuitem">
        <span class="menu-item-text">
          <span class="menu-text">
            <?php echo $_SESSION['lang_dic'][4][0]; ?>
            </span>
          </span>
        </a>
         <ul class="sub-nav gradient-hover hover-style-bg level-arrows-on" role="menubar">
             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2274 first" role="presentation">
                        <a href='jade-family/index.html' data-level='2' role="menuitem"><span class="menu-item-text"><span class="menu-text">JADE™ Family</span></span></a>
                    </li> 
             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2273" role="presentation"><a href='puris-product-lineup/ceramic-coatings/index.html' data-level='2' role="menuitem"><span class="menu-item-text"><span class="menu-text">Ceramic Coatings</span></span>
                        </a>
             </li>
        </ul>
  </li> 
             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1640" role="presentation">
                <a href='puris-around-the-world/index.html' data-level='1' role="menuitem"><span class="menu-item-text"><span class="menu-text"><?php echo $_SESSION['lang_dic'][6][0]; ?></span></span>
                 </a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1641" role="presentation">
                <a href='downloads/index.html' data-level='1' role="menuitem"><span class="menu-item-text"><span class="menu-text"><?php echo $_SESSION['lang_dic'][7][0]; ?></span></span>
                </a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1114" role="presentation">
                <a href='contact/index.html' data-level='1' role="menuitem"><span class="menu-item-text"><span class="menu-text"><?php echo $_SESSION['lang_dic'][8][0]; ?></span></span>
                </a>
            </li> 
  </ul>


		<div class="mini-widgets"><div class="mini-search show-on-desktop near-logo-first-switch near-logo-second-switch popup-search custom-icon">

<!--
      <form class="searchform mini-widget-searchform" role="search" method="get" action="https://teampuris.com/">

	<label for="the7-micro-widget-search" class="screen-reader-text"><?php echo $_SESSION['lang_dic'][9][0]; ?>:</label>
			<a href="#go" class="submit"><i class=" mw-icon the7-mw-icon-search-bold"></i><span><?php echo $_SESSION['lang_dic'][9][0]; ?></span></a>
		<div class="popup-search-wrap">
			<input type="text" id="the7-micro-widget-search" class="field searchform-s" name="s" value="" placeholder="Type and hit enter &hellip;"/>

			<a href="#go" class="search-icon"><i class="the7-mw-icon-search-bold"></i></a>
		</div>
			<input type="submit" class="assistive-text searchsubmit" value="Go!"/>
</form>   -->


</div></div>
	</header>

</div>
<div class='dt-close-mobile-menu-icon'>
  <span></span>
</div>

<div class='dt-mobile-header'>

	<ul id="mobile-menu" class="mobile-main-nav" role="navigation">

    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-1119 act first">

<?php if($_SESSION['lang'] == "ar"){ ?>

      <a href='index.php?lang=en' data-level='1'>
        <span class="menu-item-text">
          <span class="menu-text">English</span>
        </span>
      </a>


<?php }else{ ?>

      <a href='index.php?lang=ar' data-level='1'>
        <span class="menu-item-text">
          <span class="menu-text">العربية</span>
        </span>
      </a>

  <?php } ?>

    </li> 

		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-1119 act first">
      <a href='index.php' data-level='1'>
        <span class="menu-item-text">
          <span class="menu-text"><?php echo $_SESSION['lang_dic'][2][0]; ?></span>
        </span>
      </a>
    </li> 
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1639 has-children">
      <a href='puris-product-lineup/index.php' data-level='1'>
        <span class="menu-item-text">
          <span class="menu-text"><?php echo $_SESSION['lang_dic'][3][0]; ?></span>
        </span>
      </a>
      <ul class="sub-nav gradient-hover hover-style-bg level-arrows-on">
<?php 

foreach ($products_categories as $product_category) {

?>


        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2260 first">
          <a href='puris-product-lineup/category/index.php?cadteig=<?php echo $product_category["id"] ?>' data-level='2'>
            <span class="menu-item-text">
              <span class="menu-text"><?php echo $product_category["name"] ?></span>
            </span>
          </a>
        </li> 

<?php } ?>
 

        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2272">
          <a href='jade-family/index.php' data-level='2'>
            <span class="menu-item-text">
              <span class="menu-text">JADE™ Family</span>
            </span>
          </a>
        </li> 

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2958">
  <a href='puris-product-lineup/complete-product-list/index.php' data-level='2'>
    <span class="menu-item-text">
      <span class="menu-text"><?php echo $_SESSION['lang_dic'][74][0]; ?></span>
    </span>
  </a>
</li> 

</ul>

</li> 

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1642 has-children">
  <a href='jade-family/index.php' data-level='1'>
    <span class="menu-item-text">
      <span class="menu-text"><?php echo $_SESSION['lang_dic'][4][0]; ?></span>
    </span>
  </a>
  <ul class="sub-nav gradient-hover hover-style-bg level-arrows-on">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2274 first">
      <a href='jade-family/index.php' data-level='2'>
        <span class="menu-item-text">
          <span class="menu-text"><?php echo $_SESSION['lang_dic'][4][0]; ?></span>
        </span>
      </a>
    </li> 
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2273">
      <a href='puris-product-lineup/category/index.php?cadteig=1' data-level='2'>
        <span class="menu-item-text">
          <span class="menu-text">Ceramic Coatings</span>
        </span>
      </a>
    </li> 
  </ul>
</li> 
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1640">
  <a href='puris-around-the-world/index.php' data-level='1'>
    <span class="menu-item-text">
      <span class="menu-text"><?php echo $_SESSION['lang_dic'][6][0]; ?></span>
    </span>
  </a>
</li> 
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1641">
  <a href='downloads/index.php' data-level='1'>
    <span class="menu-item-text">
      <span class="menu-text"><?php echo $_SESSION['lang_dic'][7][0]; ?></span>
    </span>
  </a>
</li> 
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1114">
  <a href='contact/index.php' data-level='1'>
    <span class="menu-item-text">
      <span class="menu-text"><?php echo $_SESSION['lang_dic'][8][0]; ?></span>
    </span>
  </a>
</li> 	
</ul>

	<div class='mobile-mini-widgets-in-menu'></div>
</div>

<div id="main-slideshow">
			<!-- START Purisfrontpageslider REVOLUTION SLIDER 6.2.2 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:#f7f7f7;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:">
				<rs-module id="rev_slider_1_1" style="display:none;" data-version="6.2.2">
					<rs-slides>
						<rs-slide data-key="rs-1" data-title="Welcome" data-thumb="//teampuris.com/wp-content/uploads/2018/10/wizard01.header-style-floating-logo-hd-200x200.png" data-anim="ei:d;eo:d;s:1000;r:0;t:slidevertical;sl:d;" data-firstanim="t:fade;s:1000;sl:7;">
							<img src="wp-content/uploads/2018/10/pyramids.jpeg" title="Home" class="rev-slidebg" data-no-retina>
                            <!-- LAYER NR. 1 -->
                            <rs-layer
								id="slider-1-slide-1-layer-20" 
								class="tp-shape tp-shapewrapper"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;y:m;"
								data-text="a:inherit;"
								data-dim="w:100%;h:100%;"
								data-basealign="slide"
								data-frame_0="o:1;tp:600;"
								data-frame_1="tp:600;e:power2.inOut;sp:10;sR:10;"
								data-frame_999="o:0;tp:600;e:nothing;st:w;sp:5000;sR:7980;"
								style="z-index:5;background-color:rgba(0,0,0,0.5);"
							> 
							</rs-layer><!--
                            <!-- LAYER NR. 2 -->

<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 2 -->
                            <rs-layer
								id="slider-1-slide-1-layer-1" 
								class="dreamtheme-beauty-studio-title"
								data-type="text"
								data-xy="xo:52px,52px,46px,46px;y:m;yo:-143px,-143px,-270px,-270px;"
								data-text="w:normal;s:70;l:90,90,80,80;fw:400,400,700,700;"
								data-dim="w:462px,462px,500px,500px;h:187px,187px,133px,133px;"
								data-frame_0="y:100%;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_1="tp:600;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="y:100%;tp:600;e:nothing;st:w;sR:5500;"
								data-frame_999_mask="u:t;"
								style="z-index:6;font-family:Arial, Helvetica, sans-serif;"
							    <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>
                                      >
                                <?php echo $_SESSION['lang_dic'][10][0]; ?>
                                </rs-layer>
        <!--
                         
							>
-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->

		<!-- LAYER NR. 3 -->
	                      <rs-layer
								id="slider-1-slide-1-layer-33" 
								class="tp-shape tp-shapewrapper"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:50px;y:m;yo:-35px,-35px,-240px,-240px;"
								data-text="a:inherit;"
								data-dim="w:500px;h:5px;"
								data-frame_0="x:-100%;o:1;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;tp:600;st:w;sR:5500;"
								style="z-index:7;background:linear-gradient(45deg, rgba(0,55,38,1) 0%, rgba(128,188,0,1) 50%, rgba(185,212,50,1) 100%);"
							> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 4 -->
                            <rs-layer
								id="slider-1-slide-1-layer-9" 
								class="dreamtheme-beauty-studio-subtitle"
								data-type="text"
								data-rsp_ch="on"
								data-xy="xo:50px;y:m;yo:50px,50px,-60px,-60px;"
								data-text="w:normal;s:12,12,22,22;l:17,17,34,34;fw:100,100,700,700;"
								data-dim="w:500px;h:120px,120px,300px,300px;"
								data-padding="t:17;"
								data-frame_0="y:-100%;o:1;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_0_sfx="se:blocktoright;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_1_sfx="se:blocktoright;"
								data-frame_999="y:-100%;tp:600;e:nothing;st:w;sR:5500;"
								data-frame_999_mask="u:t;"
								style="z-index:8;font-family:Arial, Helvetica, sans-serif;"
                                      <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>><?php echo $_SESSION['lang_dic'][11][0]; ?>
                                </rs-layer>
							
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 5 -->
                            
                        	<a
								id="slider-1-slide-1-layer-18" 
								class="rs-layer rev-btn"
								href="puris-product-lineup/index.php" target="_self"
								data-type="button"
								data-color="rgba(255, 255, 255, 1)"
								data-xy="xo:50px;y:m;yo:140px,140px,-45px,-45px;"
								data-text="s:16,16,18,18;l:18,18,20,20;fw:700;a:inherit;"
								data-padding="t:10;r:22,22,20,20;b:10;l:22,22,20,20;"
								data-border="bor:100px,100px,100px,100px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;e:power4.inOut;st:1500;sp:1500;sR:1500;"
								data-frame_999="o:0;tp:600;st:w;sR:5000;"
								data-frame_hover="bgc:linear-gradient(45deg, rgba(185,212,50,1) 0%, rgba(128,188,0,1) 50%, rgba(0,55,38,1) 100%);boc:#000;bor:100px,100px,100px,100px;bos:solid;oX:50;oY:50;sp:200;e:none;"
								style="z-index:9;background:linear-gradient(45deg, rgba(0,55,38,1) 0%, rgba(128,188,0,1) 50%, rgba(185,212,50,1) 100%);font-family:Source Sans Pro;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
                                <?php echo $_SESSION['lang_dic'][12][0]; ?>
							>Products
							</a>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 6 -->
                          <rs-layer
								id="slider-1-slide-1-layer-31" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r,r,l,r;xo:539px,539px,50px,50px;y:m;yo:-92px,-92px,270px,270px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['150px','150px','150px','150px'];h:['150px','150px','150px','150px'];"
								data-border="bos:solid;boc:#000000;bow:10px,10px,10px,10px;"
								data-frame_0="o:1;tp:600;"
								data-frame_0_sfx="se:blocktoright;fxc:#003726;"
								data-frame_1="tp:600;e:back.in;st:1000;sp:2200;sR:1000;"
								data-frame_1_sfx="se:blocktoright;fxc:#003726;"
								data-frame_999="o:0;tp:600;st:w;sR:4800;"
								style="z-index:10;background-color:rgba(76,217,100,0);box-shadow:0px 0px 30px rgba(0,0,0,0.3);"
							><img src="wp-content/uploads/2018/10/Family-Shot-Applicators.jpg" width="700" height="700" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 7 -->
		                 <rs-layer
								id="slider-1-slide-1-layer-30" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r,r,c,c;xo:100px,100px,0,100px;y:m;yo:-118px,-118px,184px,184px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['250px','250px','250px','250px'];h:['250px','250px','250px','250px'];"
								data-border="bos:solid;boc:#000000;bow:10px,10px,10px,10px;"
								data-frame_0="o:1;tp:600;"
								data-frame_0_sfx="se:blocktobottom;fxc:#003726;"
								data-frame_1="tp:600;e:back.in;st:1000;sp:2200;sR:1000;"
								data-frame_1_sfx="se:blocktobottom;fxc:#003726;"
								data-frame_999="o:0;tp:600;e:nothing;st:w;sR:4800;"
								style="z-index:11;box-shadow:0px 0px 30px rgba(0,0,0,0.3);"
							><img src="wp-content/uploads/2018/10/A67-Black-Trim-Dress-4oz_Hero.jpg" width="700" height="700" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 8 -->
		                 <rs-layer
								id="slider-1-slide-1-layer-29" 
								class="image-shadow"
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r;xo:282px,282px,-302px,-302px;y:m;yo:106px,106px,132px,132px;"
								data-text="l:22;a:inherit;"
								data-dim="w:300px,300px,250px,250px;h:300,300,250px,250px;"
								data-vbility="t,t,f,f"
								data-border="bos:solid;boc:#000000;bow:10px,10px,10px,10px;"
								data-frame_0="o:1;tp:600;"
								data-frame_0_sfx="se:blocktotop;fxc:#003726;"
								data-frame_1="tp:600;e:back.in;st:1000;sp:2200;sR:1000;"
								data-frame_1_sfx="se:blocktotop;fxc:#003726;"
								data-frame_999="o:0;tp:600;e:nothing;st:w;sR:4800;"
								style="z-index:12;box-shadow:0px 0px 30px rgba(0,0,0,0.3);"
							><img src="wp-content/uploads/2018/10/JadeHERO_3bottles_3-less.jpg" width="700" height="700" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 9 -->
                         <rs-layer
								id="slider-1-slide-1-layer-28" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r;xo:-14px,-14px,50px,50px;y:m;yo:44px,44px,100px,100px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['150px','150px','150px','150px'];h:['150px','150px','150px','150px'];"
								data-border="bos:solid;boc:#000000;bow:10px,10px,10px,10px;"
								data-frame_0="o:1;tp:600;"
								data-frame_0_sfx="se:blocktoleft;fxc:#003726;"
								data-frame_1="tp:600;e:back.in;st:1000;sp:2200;sR:1000;"
								data-frame_1_sfx="se:blocktoleft;fxc:#003726;"
								data-frame_999="o:0;tp:600;e:nothing;st:w;sR:4800;"
								style="z-index:13;box-shadow:0px 0px 30px rgba(0,0,0,0.3);"
							><img src="wp-content/uploads/2018/10/D15-WaterlessWash_Fg-HERO.jpg" width="700" height="700" data-no-retina> 
							</rs-layer>
                            </rs-slide>
<!-- SLIDE  -->
                 <rs-slide data-key="rs-2" data-title="JADE" data-thumb="//teampuris.com/wp-content/uploads/2018/10/Slider_BG_03-200x200.jpg" data-anim="ei:d;eo:d;s:1000;r:0;t:slidevertical;sl:d;">
				<img src="wp-content/uploads/2018/10/Slider_BG_03.jpg" title="Home" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 10 -->
	                     <rs-layer
								id="slider-1-slide-2-layer-35" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:-190px;yo:-36px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['900px','900px','900px','900px'];h:['600px','600px','600px','600px'];"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;st:0;sp:2000;"
								data-frame_999="o:0;tp:600;st:w;sp:2000;sR:6000;"
								style="z-index:5;"
							><img src="wp-content/uploads/2018/10/JadeHERO_both_2.jpg" width="1050" height="700" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 11 -->
		                 <rs-layer
								id="slider-1-slide-2-layer-20" 
								class="tp-shape tp-shapewrapper"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;xo:231px;y:m;yo:-59px;"
								data-text="a:inherit;"
								data-dim="w:100%;h:100%;"
								data-basealign="slide"
								data-frame_0="o:1;tp:600;"
								data-frame_1="tp:600;e:power2.inOut;sp:10;sR:10;"
								data-frame_999="o:0;tp:600;e:nothing;st:w;sp:5000;sR:7980;"
								style="z-index:6;"
							> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 12 -->
                         <rs-layer
								id="slider-1-slide-2-layer-1" 
								class="dreamtheme-beauty-studio-title"
								data-type="text"
								data-color="#ffffff||#ffffff||#333333||#333333"
								data-xy="xo:753px,753px,46px,46px;y:m;yo:-228px,-228px,-270px,-270px;"
								data-text="w:normal;s:70;l:90,90,80,80;fw:700;"
								data-dim="w:337px,337px,500px,500px;h:auto,auto,133px,133px;"
								data-frame_0="y:100%;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_1="tp:600;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="y:100%;tp:600;e:nothing;st:w;sR:5500;"
								data-frame_999_mask="u:t;"
								style="z-index:7;font-family:Arial Black, Gadget, sans-serif;"
							><?php echo $_SESSION['lang_dic'][16][0]; ?>
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 13 -->
                         <rs-layer
								id="slider-1-slide-2-layer-33" 
								class="tp-shape tp-shapewrapper"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:756px,756px,50px,50px;y:m;yo:-186px,-186px,-240px,-240px;"
								data-text="a:inherit;"
								data-dim="w:500px;h:5px;"
								data-frame_0="x:-100%;o:1;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;tp:600;st:w;sR:5500;"
								style="z-index:8;background:linear-gradient(45deg, rgba(0,55,38,1) 0%, rgba(128,188,0,1) 50%, rgba(185,212,50,1) 100%);"
							> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 14 -->
		                 <rs-layer
								id="slider-1-slide-2-layer-9" 
								class="dreamtheme-beauty-studio-subtitle"
								data-type="text"
								data-color="#ffffff||#ffffff||#333333||#333333"
								data-rsp_ch="on"
								data-xy="xo:756px,756px,50px,50px;y:m;yo:-115px,-115px,-60px,-60px;"
								data-text="w:normal;s:12,12,22,22;l:20,20,34,34;fw:100,100,700,700;"
								data-dim="w:500px;h:120px,120px,300px,300px;"
								data-padding="t:17;"
								data-frame_0="y:-100%;o:1;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="y:-100%;tp:600;e:nothing;st:w;sR:5500;"
								data-frame_999_mask="u:t;"
								style="z-index:9;font-family:Arial, Helvetica, sans-serif;"
							<?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>><?php echo $_SESSION['lang_dic'][17][0]; ?>
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 15 -->
		                   <a
								id="slider-1-slide-2-layer-18" 
								class="rs-layer rev-btn"
								href="jade-family/index.php" target="_self"
								data-type="button"
								data-color="rgba(255, 255, 255, 1)"
								data-xy="xo:752px,752px,50px,50px;y:m;yo:-30px,-30px,-45px,-45px;"
								data-text="s:16,16,18,18;l:18,18,20,20;fw:700;a:inherit;"
								data-padding="t:10;r:22,22,20,20;b:10;l:22,22,20,20;"
								data-border="bor:100px,100px,100px,100px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;e:power4.inOut;st:1500;sp:1500;sR:1500;"
								data-frame_999="o:0;tp:600;st:w;sR:5000;"
								data-frame_hover="bgc:linear-gradient(45deg, rgba(185,212,50,1) 0%, rgba(128,188,0,1) 50%, rgba(0,55,38,1) 100%);boc:#000;bor:100px,100px,100px,100px;bos:solid;oX:50;oY:50;sp:200;e:none;"
								style="z-index:10;background:linear-gradient(45deg, rgba(0,55,38,1) 0%, rgba(128,188,0,1) 50%, rgba(185,212,50,1) 100%);font-family:Source Sans Pro;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							<?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>><?php echo $_SESSION['lang_dic'][18][0]; ?>
                        </a>
                        </rs-slide>
	<!-- SLIDE  -->
	<rs-slide data-key="rs-3" data-title="World" data-thumb="//teampuris.com/wp-content/uploads/2018/10/public-domain-world-country-outline-map-200x200.gif" data-anim="ei:d;eo:d;s:1000;r:0;t:slidevertical;sl:d;">
				<img src="wp-content/uploads/2018/10/Slider_BG_02.jpg" title="Home" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 16 -->
	                     <rs-layer
								id="slider-1-slide-3-layer-20" 
								class="tp-shape tp-shapewrapper"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="x:c;y:m;"
								data-text="a:inherit;"
								data-dim="w:100%;h:100%;"
								data-basealign="slide"
								data-frame_0="o:1;tp:600;"
								data-frame_1="tp:600;e:power2.inOut;sp:10;sR:10;"
								data-frame_999="o:0;tp:600;e:nothing;st:w;sp:5000;sR:7980;"
								style="z-index:5;background-color:rgba(239,239,239,0.6);"
							> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 17 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-1" 
								class="dreamtheme-beauty-studio-title"
								data-type="text"
								data-color="#222222||#222222||#333333||#333333"
								data-xy="xo:-5px,-5px,46px,46px;y:m;yo:-81px,-81px,-270px,-270px;"
								data-text="w:normal;s:70;l:90,90,80,80;fw:700;"
								data-dim="w:500px;h:115px,115px,133px,133px;"
								data-frame_0="y:100%;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_0_sfx="se:blocktoright;"
								data-frame_1="tp:600;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_1_sfx="se:blocktoright;"
								data-frame_999="y:100%;tp:600;e:nothing;st:w;sR:5500;"
								data-frame_999_mask="u:t;"
								style="z-index:6;font-family:Arial, Helvetica, sans-serif;"
							><?php echo $_SESSION['lang_dic'][13][0]; ?>
							</rs-layer>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 18 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-33" 
								class="tp-shape tp-shapewrapper"
								data-type="shape"
								data-rsp_ch="on"
								data-xy="xo:-3px,-3px,50px,50px;y:m;yo:-34px,-34px,-240px,-240px;"
								data-text="a:inherit;"
								data-dim="w:500px;h:5px;"
								data-frame_0="x:-100%;o:1;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;tp:600;st:w;sR:5500;"
								style="z-index:7;background:linear-gradient(45deg, rgba(0,55,38,1) 0%, rgba(128,188,0,1) 50%, rgba(185,212,50,1) 100%);"
							> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 19 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-9" 
								class="dreamtheme-beauty-studio-subtitle"
								data-type="text"
								data-color="#222222||#222222||#333333||#333333"
								data-rsp_ch="on"
								data-xy="xo:-6px,-6px,50px,50px;y:m;yo:44px,44px,-60px,-60px;"
								data-text="w:normal;s:22;l:32,32,34,34;fw:100,100,700,700;"
								data-dim="w:500px;h:120px,120px,300px,300px;"
								data-padding="t:17;"
								data-frame_0="y:-100%;o:1;tp:600;"
								data-frame_0_mask="u:t;"
								data-frame_0_sfx="se:blocktoright;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_1_mask="u:t;"
								data-frame_1_sfx="se:blocktoright;"
								data-frame_999="y:-100%;tp:600;e:nothing;st:w;sR:5500;"
								data-frame_999_mask="u:t;"
								style="z-index:8;font-family:Arial, Helvetica, sans-serif;"
							><?php echo $_SESSION['lang_dic'][14][0]; ?>
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 20 -->
	                       	<a
								id="slider-1-slide-3-layer-18" 
								class="rs-layer rev-btn"
								href="puris-around-the-world/index.php" target="_blank" rel="noopener"
								data-type="button"
								data-color="rgba(255, 255, 255, 1)"
								data-xy="xo:-10px,-10px,50px,50px;y:m;yo:67px,67px,-45px,-45px;"
								data-text="s:16,16,18,18;l:18,18,20,20;fw:700;a:inherit;"
								data-padding="t:10;r:22,22,20,20;b:10;l:22,22,20,20;"
								data-border="bor:100px,100px,100px,100px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;e:power4.inOut;st:1000;sp:1500;sR:1000;"
								data-frame_999="o:0;tp:600;st:w;sR:5500;"
								data-frame_hover="bgc:linear-gradient(45deg, rgba(185,212,50,1) 0%, rgba(128,188,0,1) 50%, rgba(0,55,38,1) 100%);boc:#000;bor:100px,100px,100px,100px;bos:solid;oX:50;oY:50;sp:200;e:none;"
								style="z-index:9;background:linear-gradient(45deg, rgba(0,55,38,1) 0%, rgba(128,188,0,1) 50%, rgba(185,212,50,1) 100%);font-family:Source Sans Pro;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							><?php echo $_SESSION['lang_dic'][15][0]; ?>
							</a>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 21 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-44" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:948px;yo:336px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['275px','275px','275px','275px'];h:['169px','169px','169px','169px'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:5210;sp:1500;sR:5210;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:1290;"
								style="z-index:10;"
							><img src="wp-content/uploads/2018/10/Flags_South-Korea.png" width="698" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 22 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-40" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:699px;yo:354px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['200px','200px','200px','200px'];h:['123','123','123','123'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:1900;sp:1500;sR:1900;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:4600;"
								style="z-index:11;"
							><img src="wp-content/uploads/2018/10/Flags_India.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 23 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-39" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:889px;yo:316px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['180px','180px','180px','180px'];h:['110px','110px','110px','110px'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:1340;sp:1500;sR:1340;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:5160;"
								style="z-index:12;"
							><img src="wp-content/uploads/2018/10/Flags_China.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 24 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-37" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:1122px;yo:190px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['150px','150px','150px','150px'];h:['92px','92px','92px','92px'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;sp:1500;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:6490;"
								style="z-index:13;"
							><img src="wp-content/uploads/2018/10/Flags_USA.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 25 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-38" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:798px;yo:95px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['200px','200px','200px','200px'];h:['123','123','123','123'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:630;sp:1500;sR:630;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:5870;"
								style="z-index:14;"
							><img src="wp-content/uploads/2018/10/Flags_Europe.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 26 -->
	                     <rs-layer
								id="slider-1-slide-3-layer-43" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:924px;yo:73px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['300px','300px','300px','300px'];h:['184px','184px','184px','184px'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:4290;sp:1500;sR:4290;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:2210;"
								style="z-index:15;"
							><img src="wp-content/uploads/2018/10/Flags_Central-America.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 27 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-45" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:1194px;yo:255px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['180px','180px','180px','180px'];h:['110px','110px','110px','110px'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:6070;sp:1500;sR:6070;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:430;"
								style="z-index:16;"
							><img src="wp-content/uploads/2018/10/Flags_New-Zealand.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 28 -->
		                 <rs-layer
								id="slider-1-slide-3-layer-41" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:827px;yo:246px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['150px','150px','150px','150px'];h:['92','92','92','92'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:2580;sp:1500;sR:2580;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:3920;"
								style="z-index:17;"
							><img src="wp-content/uploads/2018/10/Flags_South-Africa.png" width="704" height="432" data-no-retina> 
							</rs-layer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- LAYER NR. 29 -->
		                 <rs-layer
		 						id="slider-1-slide-3-layer-42" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="xo:580px;yo:256px;"
								data-text="l:22;a:inherit;"
								data-dim="w:['250px','250px','250px','250px'];h:['153px','153px','153px','153px'];"
								data-frame_0="sX:0.9;sY:0.9;tp:600;"
								data-frame_1="tp:600;st:3340;sp:1500;sR:3340;"
								data-frame_999="o:0;tp:600;st:w;sp:3000;sR:3160;"
								style="z-index:18;"
							><img src="wp-content/uploads/2018/10/Flags_UAE.png" width="704" height="432" data-no-retina> 
							</rs-layer><!--
-->						</rs-slide>
</rs-slides>
					<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
				</rs-module>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,778],el:[],gw:[1300,1300,600,600],gh:[550,650,900,900],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi1,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_1_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_1_1");
						}else{
							revapi1 = tpj("#rev_slider_1_1").show().revolution({
								jsFileLocation:"//teampuris.com/wp-content/plugins/revslider/public/assets/js/",
								duration:8000,
								visibilityLevels:"1240,1024,778,778",
								gridwidth:"1300,1300,600,600",
								gridheight:"550,650,900,900",
								responsiveLevels:"1240,1024,778,778",
								disableProgressBar:"on",
								navigation: {
									mouseScrollNavigation:false,
									touch: {
										touchenabled:true
									},
									arrows: {
										enable:true,
										tmp:"<div class=\"tp-title-wrap\">	<span class=\"tp-arr-titleholder\">{{title}}</span>    <span class=\"tp-arr-imgholder\"></span> </div>",
										style:"hebe",
										hide_onmobile:true,
										hide_under:500,
										hide_onleave:true,
										left: {
											h_offset:0
										},
										right: {
											h_offset:0
										}
									},
									bullets: {
										enable:true,
										tmp:"<span class=\"tp-bullet-title\">{{title}}</span>",
										style:"ares",
										hide_over:500,
										space:15
									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"20%"
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
				</script>
				<script>
					var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.hebe.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20background%3A%23ffffff%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A1000%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows%3Ahover%20%7B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%27revicons%27%3B%0A%20%20font-size%3A40px%3B%0A%20%20color%3A%23003726%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%0A%20%20-webkit-transition%3A%20color%200.3s%3B%0A%20%20-moz-transition%3A%20color%200.3s%3B%0A%20%20transition%3A%20color%200.3s%3B%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%20%20%20background%3A%23ffffff%3B%0A%20%20min-width%3A70px%3B%0A%20%20%20%20min-height%3A70px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce825%27%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows%3Ahover%3Abefore%20%7B%0A%20color%3A%23000%3B%0A%20%20%20%20%20%20%7D%0A.tp-title-wrap%20%7B%20%0A%20%20position%3Aabsolute%3B%0A%20%20z-index%3A0%3B%0A%20%20display%3Ainline-block%3B%0A%20%20background%3A%23000%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.75%29%3B%0A%20%20min-height%3A60px%3B%0A%20%20line-height%3A60px%3B%0A%20%20top%3A-10px%3B%0A%20%20margin-left%3A0px%3B%0A%20%20-webkit-transition%3A%20-webkit-transform%200.3s%3B%0A%20%20transition%3A%20transform%200.3s%3B%0A%20%20transform%3Ascalex%280%29%3B%20%20%0A%20%20-webkit-transform%3Ascalex%280%29%3B%20%20%0A%20%20transform-origin%3A0%25%2050%25%3B%20%0A%20%20%20-webkit-transform-origin%3A0%25%2050%25%3B%0A%7D%0A%20%23rev_slider_1_1_wrapper%20.hebe.tp-rightarrow%20.tp-title-wrap%20%7B%20%0A%20%20%20right%3A0px%3B%0A%20%20%20-webkit-transform-origin%3A100%25%2050%25%3B%0A%20%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascalex%281%29%3B%0A%20%20-webkit-transform%3Ascalex%281%29%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hebe%20.tp-arr-titleholder%20%7B%0A%20%20position%3Arelative%3B%0A%20%20text-transform%3Auppercase%3B%0A%20%20color%3A%2380bc00%3B%0A%20%20font-weight%3A600%3B%0A%20%20font-size%3A12px%3B%0A%20%20line-height%3A90px%3B%0A%20%20white-space%3Anowrap%3B%0A%20%20padding%3A0px%2020px%200px%2090px%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.hebe.tp-rightarrow%20.tp-arr-titleholder%20%7B%0A%20%20%20margin-left%3A0px%3B%20%0A%20%20%20padding%3A0px%2090px%200px%2020px%3B%0A%20%7D%0A%0A%23rev_slider_1_1_wrapper%20.hebe.tparrows%3Ahover%20.tp-arr-titleholder%20%7B%0A%20%20%20transform%3Atranslatex%280px%29%3B%0A%20%20%20-webkit-transform%3Atranslatex%280px%29%3B%0A%20%20transition-delay%3A%200.1s%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.hebe%20.tp-arr-imgholder%7B%0A%20%20%20%20%20%20width%3A90px%3B%0A%20%20%20%20%20%20height%3A90px%3B%0A%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20left%3A100%25%3B%0A%20%20%20%20%20%20display%3Ablock%3B%0A%20%20%20%20%20%20background-size%3Acover%3B%0A%20%20%20%20%20%20background-position%3Acenter%20center%3B%0A%20%20%09%20top%3A0px%3B%20right%3A-90px%3B%0A%20%20%20%20%7D%0A%23rev_slider_1_1_wrapper%20.hebe.tp-rightarrow%20.tp-arr-imgholder%7B%0A%20%20%20%20%20%20%20%20right%3Aauto%3Bleft%3A-90px%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_1_1_wrapper%20.ares.tp-bullets%20%7B%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares.tp-bullets%3Abefore%20%7B%0A%09content%3A%27%20%27%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet%20%7B%0A%09width%3A13px%3B%0A%09height%3A13px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23e5e5e5%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet%3Ahover%2C%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet.selected%20%7B%0A%09background%3A%23ffffff%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet-title%20%7B%0A%20%20position%3Aabsolute%3B%0A%20%20color%3A%23888888%3B%0A%20%20font-size%3A12px%3B%0A%20%20padding%3A0px%2010px%3B%0A%20%20font-weight%3A600%3B%0A%20%20right%3A27px%3B%0A%20%20top%3A-4px%3B%20%20%0A%20%20background%3Argba%28255%2C255%2C255%2C0.75%29%3B%0A%20%20visibility%3Ahidden%3B%0A%20%20transform%3Atranslatex%28-20px%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-20px%29%3B%0A%20%20transition%3Atransform%200.3s%3B%0A%20%20-webkit-transition%3Atransform%200.3s%3B%0A%20%20line-height%3A20px%3B%0A%20%20white-space%3Anowrap%3B%0A%7D%20%20%20%20%20%0A%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet-title%3Aafter%20%7B%0A%20%20%20%20width%3A%200px%3B%0A%09height%3A%200px%3B%0A%09border-style%3A%20solid%3B%0A%09border-width%3A%2010px%200%2010px%2010px%3B%0A%09border-color%3A%20transparent%20transparent%20transparent%20rgba%28255%2C255%2C255%2C0.75%29%3B%0A%09content%3A%27%20%27%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20right%3A-10px%3B%0A%09top%3A0px%3B%0A%7D%0A%20%20%20%20%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20visibility%3Avisible%3B%0A%20%20%20transform%3Atranslatex%280px%29%3B%0A%20%20-webkit-transform%3Atranslatex%280px%29%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%20%7B%0A%20%20%20%20background%3A%23ffffff%3B%7D%0A%23rev_slider_1_1_wrapper%20.ares%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3Atransparent%20transparent%20transparent%20%23ffffff%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares.tp-bullets%3Ahover%20.tp-bullet-title%20%7B%0A%20%20visibility%3Ahidden%3B%0A%20%20%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares.tp-bullets%3Ahover%20.tp-bullet%3Ahover%20.tp-bullet-title%20%7B%0A%20%20%20%20visibility%3Avisible%3B%0A%20%20%20%20transform%3AtranslateX%280px%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%280px%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A%2F%2A%20VERTICAL%20%2A%2F%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%20%7B%20right%3Aauto%3B%20left%3A27px%3B%20%20transform%3Atranslatex%2820px%29%3B%20-webkit-transform%3Atranslatex%2820px%29%3B%7D%20%20%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%2010px%2010px%200%20%21important%3B%0A%20%20border-color%3A%20transparent%20rgba%28255%2C255%2C255%2C0.75%29%20transparent%20transparent%3B%0A%20%20right%3Aauto%20%21important%3B%0A%20%20left%3A-10px%20%21important%3B%20%20%20%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3A%20%20transparent%20%23ffffff%20transparent%20transparent%20%21important%3B%0A%7D%0A%0A%0A%0A%2F%2A%20HORIZONTAL%20BOTTOM%20%26%26%20CENTER%20%2A%2F%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet-title%2C%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet-title%20%7B%20top%3A-35px%3B%20left%3A50%25%3B%20right%3Aauto%3B%20transform%3A%20translateX%28-50%25%29%20translateY%28-10px%29%3B-webkit-transform%3A%20translateX%28-50%25%29%20translateY%28-10px%29%3B%20%7D%20%20%0A%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet-title%3Aafter%2C%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%2010px%200px%2010px%3B%0A%20%20border-color%3A%20rgba%28255%2C255%2C255%2C0.75%29%20transparent%20transparent%20transparent%3B%0A%20%20right%3Aauto%3B%0A%20%20left%3A50%25%3B%0A%20%20margin-left%3A-10px%3B%0A%20%20top%3Aauto%3B%0A%20%20bottom%3A-10px%3B%0A%20%20%20%20%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%2C%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3A%20%20%23ffffff%20transparent%20transparent%20transparent%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%20top%3A25px%3B%20left%3A50%25%3B%20right%3Aauto%3B%20transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B-webkit-transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B%20%7D%20%20%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%200%2010px%2010px%2010px%3B%0A%20%20border-color%3A%20%20transparent%20transparent%20rgba%28255%2C255%2C255%2C0.75%29%20transparent%3B%0A%20%20right%3Aauto%3B%0A%20%20left%3A50%25%3B%0A%20%20margin-left%3A-10px%3B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A-10px%3B%0A%20%20%20%20%0A%7D%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3A%20%20transparent%20transparent%20%20%23ffffff%20transparent%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div>

<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px; padding-bottom:0px;" >

	
	<div class="main-gradient"></div>
	<div class="wf-wrap">
	<div class="wf-container-main">

	<div id="content" class="content" role="main">

		<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1518624633598"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1518623046652"><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_zoomIn zoomIn">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="250" height="153" src="wp-content/uploads/2018/10/Logo_250w.png" class="vc_single_image-img attachment-full" alt=""  data-dt-location="home/logo_250w/index.html" /></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-0"><div class="vc_column-inner vc_custom_1536668511321"><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_left">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1596" height="600" src="wp-content/uploads/2018/10/Car-Mercedes-SLS-AMG_perspective2-c.png" class="vc_single_image-img attachment-full" alt="" srcset="https://teampuris.com/wp-content/uploads/2018/10/Car-Mercedes-SLS-AMG_perspective2-c.png 1596w, https://teampuris.com/wp-content/uploads/2018/10/Car-Mercedes-SLS-AMG_perspective2-c-300x113.png 300w, https://teampuris.com/wp-content/uploads/2018/10/Car-Mercedes-SLS-AMG_perspective2-c-768x289.png 768w, https://teampuris.com/wp-content/uploads/2018/10/Car-Mercedes-SLS-AMG_perspective2-c-1024x385.png 1024w" sizes="(max-width: 1596px) 100vw, 1596px"  data-dt-location="home/car-mercedes-sls-amg_perspective2-c/index.html" /></div>
		</figure>
	</div>
</div>
</div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-0" >
  <div class="vc_column-inner vc_custom_1536668522537">
    <div class="wpb_wrapper">
      <div id="ultimate-heading-48685e2826b0c256a" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-48685e2826b0c256a uvc-1485 accent-subtitle-color" data-hspacer="no_spacer"  data-halign="left" style="text-align:<?php if($_SESSION['lang'] == "ar"){echo 'right';}else{echo 'left';} ?>">
        <div class="uvc-heading-spacer no_spacer" style="top"></div>
        <div class="uvc-main-heading ult-responsive"  data-ultimate-target='.uvc-heading.ultimate-heading-48685e2826b0c256a h2'  data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:36px;"}' >
          <h2 style="font-weight:bold;margin-bottom:10px;" >Puris</h2>
        </div>
        <div class="uvc-sub-heading ult-responsive"  data-ultimate-target='.uvc-heading.ultimate-heading-48685e2826b0c256a .uvc-sub-heading '  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style="font-family:&#039;Playfair Display&#039;;font-weight:700;margin-bottom:30px;" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>
          <?php echo $_SESSION['lang_dic'][19][0]; ?>.
        </div>
      </div>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>><?php echo $_SESSION['lang_dic'][20][0]; ?>
      <br />
        <strong <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>><?php echo $_SESSION['lang_dic'][21][0]; ?></strong>
      </p>

		</div>
	</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1536668088055"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4">
    <div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1538674301587  accent-icon-bg style_1">
    <div id="Info-box-wrap-7463" class="aio-icon-box square_box-icon" style="background-color:#f7f7f7;" data-min-height='210px' ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon circle " data-animation="lightSpeedIn" data-animation-delay="03" style="color:#ffffff;font-size:32px;display:inline-block;">
	<i class="icomoon-fontawesome-brand-16x16-connectdevelop"></i>
</div>
</div>
</div>
</div>
    
<div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-7463 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style=""><?php echo $_SESSION['lang_dic'][22][0]; ?></h3></div> <!-- header -->
    <div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-7463 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][23][0]; ?>
<p>
    <?php echo $_SESSION['lang_dic'][24][0]; ?>
    </div> <!-- description -->
    </div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div>
    <div class="wpb_column vc_column_container vc_col-sm-4">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="aio-icon-component  vc_custom_1538674687958  accent-icon-bg style_1">
                    <div id="Info-box-wrap-8459" class="aio-icon-box square_box-icon" style="background-color:#f7f7f7;" data-min-height='210px' ><div class="aio-icon-square_box">
                        <div class="ult-just-icon-wrapper  ">
                            <div class="align-icon" style="text-align:center;">

                                <div class="aio-icon circle " data-animation="lightSpeedIn" data-animation-delay="03" style="color:#ffffff;font-size:32px;display:inline-block;">
	
                                    <i class="Defaults-flask"></i>

                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8459 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style=""><?php echo $_SESSION['lang_dic'][25][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8459 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][26][0]; ?></p>
<p><?php echo $_SESSION['lang_dic'][27][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1538674257913  accent-icon-bg style_1"><div id="Info-box-wrap-4568" class="aio-icon-box square_box-icon" style="background-color:#f7f7f7;" data-min-height='210px' ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon circle " data-animation="lightSpeedIn" data-animation-delay="03" style="color:#ffffff;font-size:32px;display:inline-block;">
	<i class="Defaults-leaf"></i>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-4568 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'  style=""><?php echo $_SESSION['lang_dic'][28][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-4568 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][29][0]; ?></p>
<p><?php echo $_SESSION['lang_dic'][30][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><!-- Row Backgrounds --><div class="upb_color" data-bg-override="ex-full" data-bg-color="#ffffff" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="6.0.5"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
   
    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_revslider_element wpb_content_element">
			<!-- START JADE Ceramics REVOLUTION SLIDER 6.2.2 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_2_2_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;background-image:url(wp-content/uploads/2018/10/Slider_BG_03.jpg);background-repeat:no-repeat;background-size:cover;background-position:center center;">
				<rs-module id="rev_slider_2_2" class=" rs-ov-hidden" style="display:none;" data-version="6.2.2">
					<rs-slides>
						<rs-slide data-key="rs-5" data-title="Slide" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="wp-content/uploads/2018/10/VideoSS.jpg" title="Home" data-parallax="10" class="rev-slidebg" data-no-retina>
							<rs-bgvideo 
								data-video="w:100%;h:100%;nse:false;l:loopandnoslidestop;ptimer:false;fc:false;"
								data-mp4="//teampuris.com/wp-content/uploads/2018/10/JADE_bottleReveal.mp4"
							></rs-bgvideo>
<!---->						</rs-slide>
					</rs-slides>
					<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_2_2',rl:[1240,1024,778,480],el:[],gw:[1400,1240,778,480],gh:[1000,720,720,720],type:'hero',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi2,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_2_2").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_2_2");
						}else{
							revapi2 = tpj("#rev_slider_2_2").show().revolution({
								sliderType:"hero",
								jsFileLocation:"//teampuris.com/wp-content/plugins/revslider/public/assets/js/",
								sliderLayout:"fullwidth",
								visibilityLevels:"1240,1024,778,480",
								gridwidth:"1400,1240,778,480",
								gridheight:"1000,720,720,720",
								responsiveLevels:"1240,1024,778,480",
								disableProgressBar:"on",
								navigation: {
									onHoverStop:false
								},
								parallax: {
									levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
									type:"mouse",
									origo:"slidercenter",
									speed:2000
								},
								scrolleffect: {
									set:true,
									blur:true,
									multiplicator:1.3,
									multiplicator_layers:1.3,
									disable_onmobile:true
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div></div></div></div></div>
         
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1518624639999"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1518623052549"><div class="wpb_wrapper"><div id="ultimate-heading-87055e2826b0cd23d" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-87055e2826b0cd23d uvc-7573 accent-border-color" data-hspacer="line_only"  data-halign="center" style="text-align:center"><div class="uvc-main-heading ult-responsive"  data-ultimate-target='.uvc-heading.ultimate-heading-87055e2826b0cd23d h2'  data-responsive-json-new='{"font-size":"desktop:40px;","line-height":"desktop:50px;"}' >
      <h2 style="font-weight:bold;margin-bottom:15px;" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>

      <?php echo $_SESSION['lang_dic'][31][0]; ?>
        
      </h2></div><div class="uvc-heading-spacer line_only" style="topheight:5px;"><span class="uvc-headings-line" style="border-style:solid;border-bottom-width:5px;border-color:;width:200px;"></span></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-offset-2 vc_col-md-offset-2 vc_col-sm-offset-2"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?> style="text-align: center;"><?php echo $_SESSION['lang_dic'][32][0]; ?></p>

		</div>
	</div>
</div></div></div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner"><div class="wpb_wrapper">
                    
        <style type="text/css" data-type="the7_shortcodes-inline-css">.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a {
  width: 36px;
  height: 36px;
  border-radius: 500px;
}
.dt-arrow-border-on.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a:not(:hover):before {
  border-width: 0px;
}
.dt-arrow-hover-border-on.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a:hover:after {
  border-width: 0px;
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a.owl-prev {
  top: 50%;
  transform: translateY(calc(-50% + 0px));
  left: -43px;
}
@media all and (-ms-high-contrast: none) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a.owl-prev {
    transform: translateY(-50%);
    margin-top: 0px;
  }
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a.owl-prev i {
  padding: 0px 0px 0px 0px;
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a.owl-next {
  top: 50%;
  transform: translateY(calc(-50% + 0px));
  right: -43px;
}
@media all and (-ms-high-contrast: none) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a.owl-next {
    transform: translateY(-50%);
    margin-top: 0px;
  }
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a.owl-next i {
  padding: 0px 0px 0px 0px;
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav i {
  font-size: 18px;
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a:not(:hover) i,
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a:not(:hover) i:before {
  color: #ffffff;
  background: none;
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a:hover i,
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-nav a:hover i:before {
  color: rgba(255,255,255,0.75);
  background: none;
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-dots {
  top: calc(100% + 20px);
  left: 50%;
  transform: translateX(calc(-50% + 0px));
}
@media all and (-ms-high-contrast: none) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-dots {
    transform: translateX(-50%);
    margin-left: 0px;
  }
}
.carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b .owl-dot {
  width: 10px;
  height: 10px;
  margin: 0 8px;
}
@media screen and (max-width: 778px) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b.hide-arrows .owl-nav a {
    display: none;
  }
}
@media screen and (max-width: 778px) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b.reposition-arrows .owl-nav .owl-prev {
    top: 50%;
    transform: translateY(calc(-50% + 0px));
    left: 10px;
  }
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b.reposition-arrows .owl-nav .owl-next {
    top: 50%;
    transform: translateY(calc(-50% + 0px));
    right: 10px;
  }
}
@media screen and (max-width: 778px) and all and (-ms-high-contrast: none) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b.reposition-arrows .owl-nav .owl-prev {
    transform: translateY(-50%);
    margin-top: 0px;
  }
}
@media screen and (max-width: 778px) and all and (-ms-high-contrast: none) {
  .carousel-shortcode.carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b.reposition-arrows .owl-nav .owl-next {
    transform: translateY(-50%);
    margin-top: 0px;
  }
}
</style>
        
    <div class="owl-carousel carousel-shortcode dt-owl-carousel-call carousel-shortcode-id-2482e12dd7cea89d5232fb300f282b4b bullets-small-dot-stroke reposition-arrows arrows-bg-on dt-arrow-border-on dt-arrow-hover-border-on disable-arrows-hover-bg arrows-hover-bg-on  " data-scroll-mode="1" data-col-num="3" data-wide-col-num="4" data-laptop-col="3" data-h-tablet-columns-num="3" data-v-tablet-columns-num="2" data-phone-columns-num="1" data-auto-height="true" data-col-gap="30" data-stage-padding="0" data-speed="600" data-autoplay="true" data-autoplay_speed="6000" data-arrows="true" data-bullet="false" data-next-icon="icon-ar-017-r" data-prev-icon="icon-ar-017-l"><div class="aio-icon-component    style_3"><div id="Info-box-wrap-8068" class="aio-icon-box square_box-icon" style=""  ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:300px;display:inline-block;" data-animation="bounceIn" data-animation-delay="03" >
	<img class="img-icon" alt="null" src="wp-content/uploads/2018/10/CustomersEqual.png"/>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8068 .aio-icon-title'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][33][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8068 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][34][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --><div class="aio-icon-component    style_3"><div id="Info-box-wrap-8794" class="aio-icon-box square_box-icon" style=""  ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:300px;display:inline-block;" data-animation="bounceIn" data-animation-delay="03">
	<img class="img-icon" alt="null" src="wp-content/uploads/2018/10/6358850986901693652109630270_TECH-TRENDS.png"/>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8794 .aio-icon-title'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][35][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8794 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][36][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --><div class="aio-icon-component    style_3"><div id="Info-box-wrap-8540" class="aio-icon-box square_box-icon" style=""  ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:300px;display:inline-block;" data-animation="bounceIn" data-animation-delay="03">
	<img class="img-icon" alt="null" src="wp-content/uploads/2018/10/Fotolia_88447008.png"/>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8540 .aio-icon-title'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][37][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-8540 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][38][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --><div class="aio-icon-component    style_3"><div id="Info-box-wrap-2080" class="aio-icon-box square_box-icon" style=""  ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:300px;display:inline-block;" data-animation="bounceIn" data-animation-delay="03">
	<img class="img-icon" alt="null" src="wp-content/uploads/2018/10/iStock_000019989992Medium.png"/>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-2080 .aio-icon-title'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][39][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-2080 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][40][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --><div class="aio-icon-component    style_3"><div id="Info-box-wrap-4951" class="aio-icon-box square_box-icon" style=""  ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:300px;display:inline-block;" data-animation="bounceIn" data-animation-delay="03">
	<img class="img-icon" alt="null" src="wp-content/uploads/2018/10/molecule.png"/>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-4951 .aio-icon-title'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][41][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-4951 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][42][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --><div class="aio-icon-component    style_3"><div id="Info-box-wrap-6025" class="aio-icon-box square_box-icon" style=""  ><div class="aio-icon-square_box"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon-img " style="font-size:300px;display:inline-block;" data-animation="bounceIn" data-animation-delay="03">
	<img class="img-icon" alt="null" src="wp-content/uploads/2018/10/Family-Shot_02_rast.png"/>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-6025 .aio-icon-title'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][43][0]; ?></h3></div> <!-- header --><div class="aio-icon-description ult-responsive"  data-ultimate-target='#Info-box-wrap-6025 .aio-icon-description'  data-responsive-json-new='{"font-size":"","line-height":""}'  style=""><?php echo $_SESSION['lang_dic'][44][0]; ?></div> <!-- description --></div> <!-- aio-icon-box --></div> <!-- aio-icon-component --></div></div></div></div>
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1538677387604 vc_row-no-padding vc_row-o-equal-height vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1509870018117"><div class="wpb_wrapper"><div id="ultimate-heading-75985e2826b0d00e5" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-75985e2826b0d00e5 uvc-3648 " data-hspacer="no_spacer"  data-halign="center" style="text-align:center"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-main-heading ult-responsive"  data-ultimate-target='.uvc-heading.ultimate-heading-75985e2826b0d00e5 h2'  data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:36px;"}' >
  <h2 style="font-weight:bold;color:#ffffff;" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>

  <?php echo $_SESSION['lang_dic'][45][0]; ?>
    
  </h2>
</div></div></div></div></div>

<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10 vc_col-sm-offset-1" >
    <div class="vc_column-inner" style=" left:113px ;">
        <div class="wpb_wrapper">
    <div class="vc_row wpb_row vc_inner vc_row-fluid">
        
        
        
        
        
        <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                <div class="aio-icon-component  vc_custom_1538677534766   style_2">
    <a class="aio-icon-box-link" href="https://www.facebook.com/PurisEgypt/" >
        <div id="Info-box-wrap-6471" class="aio-icon-box top-icon" style=""  >
        <div class="aio-icon-top">
            <div class="ult-just-icon-wrapper  ">
                <div class="align-icon" style="text-align:center;">
<div class="aio-icon advanced "  style="color:#ffffff;background:rgba(0,0,0,0.01);border-style:solid;border-color:#ffffff;border-width:3px;width:70px;height:70px;line-height:70px;border-radius:500px;font-size:32px;display:inline-block;">
	<i class="icomoon-fontawesome-brand-16x16-facebook-f"></i>
</div>
</div>
</div>
</div>

<div class="aio-icon-header" >
    <h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-6471 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:18px;"}'  style="color:#ffffff;">Facebook</h3>
</div>


<!-- header -->

</div> <!-- aio-icon-box --></a></div> <!-- aio-icon-component --></div></div></div>










<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1538677490755   style_2"><a class="aio-icon-box-link" href="https://www.instagram.com/purisegypt/" ><div id="Info-box-wrap-3205" class="aio-icon-box top-icon" style=""  >
    <div class="aio-icon-top"><div class="ult-just-icon-wrapper  ">
    <div class="align-icon" style="text-align:center;">
<div class="aio-icon advanced "  style="color:#ffffff;background:rgba(0,0,0,0.01);border-style:solid;border-color:#ffffff;border-width:3px;width:70px;height:70px;line-height:70px;border-radius:500px;font-size:32px;display:inline-block;">
	<i class="icomoon-fontawesome-brand-16x16-instagram"></i>
</div>
</div>
</div>
</div>



<div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-3205 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:18px;"}'  style="color:#ffffff;">Instagram</h3></div>

<!-- header --></div> <!-- aio-icon-box --></a></div> <!-- aio-icon-component --></div></div></div>















<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1538677589557   style_2"><a class="aio-icon-box-link" href="https://twitter.com/PurisEgypt" ><div id="Info-box-wrap-8062" class="aio-icon-box top-icon" style=""  ><div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon advanced "  style="color:#ffffff;background:rgba(0,0,0,0.01);border-style:solid;border-color:#ffffff;border-width:3px;width:70px;height:70px;line-height:70px;border-radius:500px;font-size:32px;display:inline-block;">
	<i class="fab fa-twitter"></i>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8062 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:18px;"}'  style="color:#ffffff;">Twitter</h3></div> </div> </a></div> </div></div></div> 


<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1538677589557   style_2"><a class="aio-icon-box-link" href="https://vimeo.com/purisdetail/albums" ><div id="Info-box-wrap-8062" class="aio-icon-box top-icon" style=""  ><div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon advanced "  style="color:#ffffff;background:rgba(0,0,0,0.01);border-style:solid;border-color:#ffffff;border-width:3px;width:70px;height:70px;line-height:70px;border-radius:500px;font-size:32px;display:inline-block;">
	<i class="Defaults-vimeo-square"></i>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-8062 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:18px;"}'  style="color:#ffffff;">Vimeo</h3></div> <!-- header --></div> <!-- aio-icon-box --></a></div> <!-- aio-icon-component --></div></div>
</div>





<!--
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1538677641315   style_2"><a class="aio-icon-box-link" href="https://www.youtube.com/channel/UCOAFBoR800435l6rF1A7Hcw" ><div id="Info-box-wrap-6652" class="aio-icon-box top-icon" style=""  ><div class="aio-icon-top"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;">
<div class="aio-icon advanced "  style="color:#ffffff;background:rgba(0,0,0,0.01);border-style:solid;border-color:#ffffff;border-width:3px;width:70px;height:70px;line-height:70px;border-radius:500px;font-size:32px;display:inline-block;">
	<i class="Defaults-youtube"></i>
</div></div></div></div><div class="aio-icon-header" ><h3 class="aio-icon-title ult-responsive"  data-ultimate-target='#Info-box-wrap-6652 .aio-icon-title'  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:18px;"}'  style="color:#ffffff;">YouTube</h3></div> </div> </a></div></div></div></div>   -->








</div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><!-- Row Backgrounds --><div class="upb_grad" data-grad="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #003726), color-stop(50%, #80BC00), color-stop(100%, #B9D432));background: -moz-linear-gradient(left,#003726 0%,#80BC00 50%,#B9D432 100%);background: -webkit-linear-gradient(left,#003726 0%,#80BC00 50%,#B9D432 100%);background: -o-linear-gradient(left,#003726 0%,#80BC00 50%,#B9D432 100%);background: -ms-linear-gradient(left,#003726 0%,#80BC00 50%,#B9D432 100%);background: linear-gradient(left,#003726 0%,#80BC00 50%,#B9D432 100%);" data-bg-override="ex-full" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="parallax_content_value" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false"  data-custom-vc-row=""  data-vc="6.0.5"  data-is_old_vc=""  data-theme-support=""   data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""    ></div>
<div class="single-share-box">
  
	<div class="share-link-description"><?php echo $_SESSION['lang_dic'][46][0]; ?></div>

	<div class="share-buttons">
		<a class="facebook" href="http://www.facebook.com/sharer.php?u=http://www.puris-egypt.com/index.php" title="Facebook" target="_blank" ><span class="soc-font-icon"></span><span class="social-text">Share on Facebook</span><span class="screen-reader-text">Share on Facebook</span></a>
<a class="twitter" href="https://twitter.com/share?url=http://www.puris-egypt.com/index.php" title="Twitter" target="_blank" ><span class="soc-font-icon"></span><span class="social-text">Tweet</span><span class="screen-reader-text">Share on Twitter</span></a>
<a class="whatsapp" href="https://api.whatsapp.com/send?text=http://www.puris-egypt.com/index.php" title="WhatsApp" target="_blank"  data-action="share/whatsapp/share"><span class="soc-font-icon"></span><span class="social-text">Share on WhatsApp</span><span class="screen-reader-text">Share on WhatsApp</span></a>
<a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.puris-egypt.com/index.php;title=Home&amp;summary=&amp;source=Puris" title="LinkedIn" target="_blank" ><span class="soc-font-icon"></span><span class="social-text">Share on LinkedIn</span><span class="screen-reader-text">Share on LinkedIn</span></a>
	</div>
</div>
	</div><!-- #content -->

	


			</div><!-- .wf-container -->
		</div><!-- .wf-wrap -->

	
	</div><!-- #main -->

	

	
	<!-- !Footer -->
	<footer id="footer" class="footer solid-bg" <?php if($_SESSION['lang'] == "ar"){echo 'dir="rtl" lang="ar"';} ?>>

		
			<div class="wf-wrap">
				<div class="wf-container-footer">
					<div class="wf-container">
						<section id="presscore-contact-info-widget-2" class="widget widget_presscore-contact-info-widget wf-cell wf-1-3">
              <div class="widget-title"><?php echo $_SESSION['lang_dic'][47][0]; ?></div>
              <ul class="contact-info">
                <li>
                  <span class="color-primary"><?php echo $_SESSION['lang_dic'][48][0]; ?></span>
                  <br /><?php echo $_SESSION['lang_dic'][49][0]; ?>
                </li>
                  <li>
                    <span class="color-primary"><?php echo $_SESSION['lang_dic'][50][0]; ?></span>
                    <br /><?php echo $_SESSION['lang_dic'][51][0]; ?>
                  </li>
                  <li>
                    <span class="color-primary"><?php echo $_SESSION['lang_dic'][52][0]; ?></span>
                    <br><?php echo $_SESSION['lang_dic'][53][0]; ?>
                  </li>
                </ul>
                
 <div class="soc-ico">
                  <p class="assistive-text"><?php echo $_SESSION['lang_dic'][54][0]; ?></p>
                  <a title="Facebook" href="https://www.facebook.com/PurisEgypt/" target="_blank" class="facebook">
                    <span class="soc-font-icon"></span>
                    <span class="screen-reader-text">Facebook</span>
                  </a>
                  <a title="YouTube" href="https://www.youtube.com/channel/UCOAFBoR800435l6rF1A7Hcw" target="_blank" class="you-tube">
                    <span class="soc-font-icon"></span>
                    <span class="screen-reader-text">YouTube</span>
                  </a>
                  <a title="Vimeo" href="https://vimeo.com/purisdetail/albums" target="_blank" class="vimeo">
                    <span class="soc-font-icon"></span>
                    <span class="screen-reader-text">Vimeo</span>
                  </a>
                  <a title="Instagram" href="https://www.instagram.com/purisegypt/" target="_blank" class="instagram">
                    <span class="soc-font-icon"></span>
                    <span class="screen-reader-text">Instagram</span>
                  </a>
                  <a title="Mail" href="mailto:sales.dep@puris-egypt.com" target="_top" class="mail">
                    <span class="soc-font-icon"></span>
                    <span class="screen-reader-text">Mail</span>
                  </a>
                </div>              
              </section>
              <section id="presscore-custom-menu-one-3" class="widget widget_presscore-custom-menu-one wf-cell wf-1-3">
                <ul class="custom-menu">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1658 first has-children">
                    <a href="puris-product-lineup/index.php"><?php echo $_SESSION['lang_dic'][55][0]; ?></a>

              <ul>
<?php 

foreach ($products_categories as $product_category) {

?>


                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2258 first">
                  <a href="puris-product-lineup/category/index.php?cadteig=<?php echo $product_category["id"] ?>"><?php echo $product_category["name"] ?></a>
                </li>



<?php } ?>
                  
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2957">
                  <a href="puris-product-lineup/complete-product-list/index.php"><?php echo $_SESSION['lang_dic'][56][0]; ?></a>
                </li>
              </ul>
            </li>
          </ul>
        </section>
        <section id="presscore-team-3" class="widget widget_presscore-team wf-cell wf-1-3">
<div class="widget-title"><?php echo $_SESSION['lang_dic'][57][0]; ?></div>
<div class="team-items owl-carousel slider-content round-images bg-under-post" data-autoslide="1200">
	<div class="team-container post-1800 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off" >

		<div class="team-media">
      <a href="dt_team/australia/index.html" class="rollover layzr-bg"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Austrailia-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Austrailia-432x432.png 432w" width="432" height="432"  title="Flags_Austrailia" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/australia/index.html">Australia</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-2976 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/austria/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/12/Austria-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/12/Austria-432x432.png 432w" width="432" height="432"  title="Austria" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/austria/index.html">Austria</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1774 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/central-america/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Central-America-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Central-America-432x432.png 432w" width="432" height="432"  title="Flags_Central-America" alt="" /></a>
      </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/central-america/index.html">Central America</a>
        </div>
        </div>
		</div>
	</div>
	<div class="team-container post-1771 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/china/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_China-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_China-432x432.png 432w" width="432" height="432"  title="Flags_China" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/china/index.html">China</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1795 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/denmark/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Denmark-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Denmark-432x432.png 432w" width="432" height="432"  title="Flags_Denmark" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/denmark/index.html">Denmark</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1777 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/el-salvador/index.html" class="rollover layzr-bg"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_El-Salvador-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_El-Salvador-432x432.png 432w" width="432" height="432"  title="Flags_El-Salvador" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/el-salvador/index.html">El Salvador</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1770 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/europe/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Europe-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Europe-432x432.png 432w" width="432" height="432"  title="Flags_Europe" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/europe/index.html">Europe</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-2961 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/hong-kong/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/11/Flags_HongKong-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/11/Flags_HongKong-432x432.png 432w" width="432" height="432"  title="Flags_HongKong" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/hong-kong/index.html">Hong Kong
          </a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1772 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/india/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_India-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_India-432x432.png 432w" width="432" height="432"  title="Flags_India" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/india/index.html">India</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1783 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/indonesia/index.html" class="rollover layzr-bg"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Indonesia-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Indonesia-432x432.png 432w" width="432" height="432"  title="Flags_Indonesia" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/indonesia/index.html">Indonesia</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1793 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/israel/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Israel-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Israel-432x432.png 432w" width="432" height="432"  title="Flags_Israel" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/israel/index.html">Israel</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1785 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/malaysia/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Malaysia-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Malaysia-432x432.png 432w" width="432" height="432"  title="Flags_Malaysia" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/malaysia/index.html">Malaysia</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1781 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/mexico/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Mexico-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Mexico-432x432.png 432w" width="432" height="432"  title="Flags_Mexico" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/mexico/index.html">Mexico</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-2978 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/morocco/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/12/Morocco-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/12/Morocco-432x432.png 432w" width="432" height="432"  title="Morocco" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/morocco/index.html">Morocco</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1776 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/new-zealand/index.html" class="rollover layzr-bg"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_New-Zealand-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_New-Zealand-432x432.png 432w" width="432" height="432"  title="Flags_New-Zealand" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/new-zealand/index.html">New Zealand</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1779 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/puerto-rico/index.html" class="rollover layzr-bg"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Puerto-Rico-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Puerto-Rico-432x432.png 432w" width="432" height="432"  title="Flags_Puerto-Rico" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/puerto-rico/index.html">Puerto Rico</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1773 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/south-africa/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_South-Africa-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_South-Africa-432x432.png 432w" width="432" height="432"  title="Flags_South-Africa" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/south-africa/index.html">South Africa</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1775 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media"><a href="dt_team/south-korea/index.html" class="rollover layzr-bg"><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_South-Korea-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_South-Korea-432x432.png 432w" width="432" height="432"  title="Flags_South-Korea" alt="" /></a></div>
		<div class="team-desc">

			<div class="team-author"><div class="team-author-name"><a href="dt_team/south-korea/index.html">South Korea</a></div></div>
		</div>
	</div>
	<div class="team-container post-1787 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/taiwan/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Taiwan-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Taiwan-432x432.png 432w" width="432" height="432"  title="Flags_Taiwan" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/taiwan/index.html">Taiwan</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1789 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/thailand/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Thailand-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Thailand-432x432.png 432w" width="432" height="432"  title="Flags_Thailand" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/thailand/index.html">Thailand</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1798 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/turkey/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Turkey-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Turkey-432x432.png 432w" width="432" height="432"  title="Flags_Turkey" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/turkey/index.html">Turkey</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1698 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/uae/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_UAE-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_UAE-432x432.png 432w" width="432" height="432"  title="Flags_UAE" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/uae/index.html">United Arab Emirates</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1696 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/united-states/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_USA-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_USA-432x432.png 432w" width="432" height="432"  title="Flags_USA" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/united-states/index.html">United States</a>
        </div>
      </div>
		</div>
	</div>
	<div class="team-container post-1791 dt_team type-dt_team status-publish has-post-thumbnail hentry dt_team_category-distributors dt_team_category-32 description-off">

		<div class="team-media">
      <a href="dt_team/vietnam/index.html" class="rollover layzr-bg">
        <img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20432%20432&#39;%2F%3E" data-src="https://teampuris.com/wp-content/uploads/2018/10/Flags_Vietnam-432x432.png" data-srcset="https://teampuris.com/wp-content/uploads/2018/10/Flags_Vietnam-432x432.png 432w" width="432" height="432"  title="Flags_Vietnam" alt="" />
      </a>
    </div>
		<div class="team-desc">

			<div class="team-author">
        <div class="team-author-name">
          <a href="dt_team/vietnam/index.html">Vietnam</a>
        </div>
      </div>
		</div>
	</div></div>
</section>
					</div><!-- .wf-container -->
				</div><!-- .wf-container-footer -->
			</div><!-- .wf-wrap -->

			
<!-- !Bottom-bar -->
<div id="bottom-bar" class="solid-bg logo-center" role="contentinfo">
    <div class="wf-wrap">
        <div class="wf-container-bottom">

			<div id="branding-bottom"><a class="" href="index.php"><img class=" preload-me" src="wp-content/uploads/2018/10/wizard01.bottom-bar-logo-regular.png" srcset="https://teampuris.com/wp-content/uploads/2018/10/wizard01.bottom-bar-logo-regular.png 24w, https://teampuris.com/wp-content/uploads/2018/10/wizard01.bottom-bar-logo-hd.png 54w" width="24" height="24"   sizes="24px" alt="Puris" /></a></div>
            <div class="wf-float-right">

				
            </div>

        </div><!-- .wf-container-bottom -->
    </div><!-- .wf-wrap -->
</div><!-- #bottom-bar -->
	</footer><!-- #footer -->


	<a href="#" class="scroll-top"><span class="screen-reader-text">Go to Top</span></a>
</div><!-- #page -->

			<script type="text/javascript">
				function revslider_showDoubleJqueryError(sliderID) {
					var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
					errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
					errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
					errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
					errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
						jQuery(sliderID).show().html(errorMessage);
				}
			</script>
			<link rel='stylesheet' id='vc_animate-css-css'  href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min52c7.css?ver=6.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='ult-background-style-css'  href='wp-content/plugins/Ultimate_VC_Addons/assets/min-css/background-style.minf1e8.css?ver=3.19.0.1' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/themes/dt-the7/js/main.min5125.js?ver=7.9.0'></script>
<script type='text/javascript' src='wp-content/plugins/dt-the7-core/assets/js/post-type.min5125.js?ver=7.9.0'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/info-box.minf1e8.js?ver=3.19.0.1'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min9dff.js?ver=5.3.2'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min52c7.js?ver=6.0.5'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min52c7.js?ver=6.0.5'></script>
<script type='text/javascript' src='wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate_bg.min9dff.js?ver=5.3.2'></script>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" title="Share"></button>
				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>
			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>

</body>

<!-- Mirrored from teampuris.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2020 10:35:54 GMT -->
</html>

<!--Generated by Endurance Page Cache-->