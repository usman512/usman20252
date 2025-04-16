
<meta name="description" content="J&amp;J Fundforce -"><meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#97dc21">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#97dc21">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#97dc21">


<!-- <base href=""> -->


<meta name="dcterms.rightsHolder" content="J&amp;J Fundforce">
<meta name="language" content="english">
<meta name="keywords" content="">
<meta name="HandheldFriendly" content="true"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" "="">

<!-- Favicon -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!--
.raleway-<uniquifier> {
  font-family: "Raleway", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
} -->

<link href="styles/hamburgers.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<link href="styles/main.css" rel="stylesheet">
<script src="scripts/main.js"></script>

<style>
.themeColor {
	color: #97dc21;
}
.themeBackColor {
	background-color: #97dc21;
}
html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    font-size: 100%;
    list-style: none;
    font-family: 'Raleway', sans-serif !important;
    font-weight: 100;
    min-height: 100%;
    -moz-transform: scale(1,1);
    zoom: 1;
    zoom: 100%;
}
.noOverFlow {
	overflow: hidden;
}
.alertMessage {
    margin: 0;
    position: fixed;
    z-index: 9999;
    width: 100%;
    padding: 12px;
	font-size: 14px;
	font-weight: 400;
}
.pgWrap {
	width: 100%;
    min-height: 100%;
    text-rendering: optimizeLegibility;
    overflow: hidden;
	position: relative;
    background-color: #FFFFFF;
    margin-top: 0px;
}
.navBar {
	width: 100%;
    height: 80px;
    z-index: 3;
    position: absolute;
    left: 0;
    top: 0;
    display: block;
    transition: all 0.3s ease-in-out;
    background-color: rgba(0,0,0,0);
	overflow: hidden;
}
.navBarWrap {
	display: block;
	overflow: hidden;
	height: 80px;
}
.navBarWrap > div {
    display: inline-block;
    height: 80px;
    overflow: hidden;
    line-height: 70px;
}
.navBarLeft {
    float: left;
    padding: 0px 45px;
}
.navBarLeft > a {
	color: inherit;
    text-decoration: none;
    display: block;
    overflow: hidden;
}
.navBarLeft img {
    height: 42px;
    margin-top: 15px;
}
.navBarRight {
    float: right;
    padding: 0px 45px;
}
.navBarRight > span {
    display: inline-block;
    margin: 0px 5px;
}
.navBarRight > span > a {
    color: inherit;
    text-decoration: none;
    position: relative;
    bottom: 2px;
}
.navBarRight > span > a > i {
    font-size: 28px;
    color: #FFFFFF;
	transition: all 0.3s ease-in-out;
}
.navBarRight > span > a > i:hover {
	color: #D4AF37;
}
.hamburger {
	padding-left: 5px;
}
.hamburger:focus {
	outline: none !important;
}
.hamburger:hover .hamburger-inner, .hamburger:hover .hamburger-inner:after, .hamburger:hover .hamburger-inner:before {
	background-color: #D4AF37 !important;
}
.hamburger-inner, .hamburger-inner:after, .hamburger-inner:before {
	background-color: #FFFFFF !important;
}
.navMenu {
    position: fixed;
    top: 0;
	right: -100%;
    z-index: 2;
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: block;
    background-color: rgba(0,0,0,.7);
    padding: 0px 58px;
    padding-top: 80px;
    text-align: right;
	transition: all .7s cubic-bezier(0,.5,0,1);
}
.navMenuOpen {
	right: 0 !important;
}
.navMenuWrap {
	display: block;
	overflow-x: hidden;
    overflow-y: auto;
    padding-top: 12px;
    height: 100%;
	scrollbar-width: none;
	-ms-overflow-style: none;
}
.navMenuWrap::-webkit-scrollbar {
	width: 0;
	height: 0;
}
.navMenuWrap > ul {
	list-style: none;
    padding: 0;
    margin: 0;
    display: block;
    overflow: hidden;
}
.navMenuWrap > ul > li, .navMenuWrap > ul > li > ul > li, .navMenuWrap > ul > li > ul > li > ul > li {
	display: block;
    text-rendering: optimizeLegibility;
    margin-top: 1.5em;
}
.navMenuWrap > ul > li > a, .navMenuWrap > ul > li > span {
	color: #FFFFFF;
    font-size: 2em;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    padding-bottom: 2px;
    transition: all 0.2s ease-in-out;
	padding-right: 5px;
	cursor: pointer;
}
.navMenuWrap > ul > li > ul > li > span {
	position: relative;
	right: 5px;
}
i.navDrpArr {
    border: solid #FFFFFF;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    position: relative;
    bottom: 2.5px;
    left: 3px;
	transition: all 0.3s ease-in-out;
}
.navLensDropdown {
	list-style: none;
    padding: 0;
    margin: 0;
    display: none;
    overflow: hidden;
}
.navMenuWrap > ul > li > a:hover, .navMenuWrap > ul > li > span:hover, .navMenuWrap > ul > li > ul > li > a:hover, .navMenuWrap > ul > li > ul > li > span:hover, .navMenuWrap > ul > li > ul > li > ul > li > a:hover {
	color: #D4AF37;
}
.navMenuWrap > ul > li > ul > li > span:hover i.navDrpArr {
	border: solid #D4AF37;
	border-width: 0 3px 3px 0;
}
.navMenuWrap > ul > li > a > span, .navMenuWrap > ul > li > span > span {
    display: inline-block;
    -webkit-transform: scale(2,1.2);
    -moz-transform: scale(2,1.2);
    -ms-transform: scale(2,1.2);
    -o-transform: scale(2,1.2);
    transform: scale(2,1.2);
    margin-left: 12px;
    font-size: 33px;
    position: relative;
    right: 3px;
}
.navMenuWrap > ul > li > ul {
	list-style: none;
    padding: 0;
    margin: 0;
    display: none;
    overflow: hidden;
	margin-top: -1.5em;
}
.navMenuWrap > ul > li > ul > li > a, .navMenuWrap > ul > li > ul > li > span {
	color: #FFFFFF;
    font-size: 1.5em;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    padding-bottom: 2px;
    transition: all 0.2s ease-in-out;
	cursor: pointer;
}
.navMenuWrap > ul > li > ul > li > ul > li > a{
	color: #FFFFFF;
    font-size: 1.2em;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    padding-bottom: 2px;
    transition: all 0.2s ease-in-out;
	cursor: pointer;
}
.bodyWrap {
	width: 100%;
    min-height: 100vh;
    overflow: hidden;
    margin-top: 0px;
    text-rendering: optimizeLegibility;
	z-index: 1;
}
.mainHeroContainer {
	display: block;
    overflow: hidden;
    height: 100vh;
    /*background-position: 50% 50%!important;*/
	/*background-position: center center !important;
	background-position-x: center !important;
	background-position-y: center !important;*/
	background-attachment: fixed;
    background-size: cover !important;
    background-repeat: no-repeat !important;
	 -o-background-size: cover !important;
    -moz-background-size: cover !important;
    -webkit-background-size: cover !important;
    position: relative;
    text-align: left;
}
.mainHeroWrap {
	display: block;
    overflow: hidden;
    height: calc(100% - 70px);
    margin-top: 80px;
    position: relative;
}
.mainHeroContent {
    display: table;
    height: 100%;
    width: 100%;
	padding: 0 45px;
}
.mainHeroContentWrap {
	display: table-cell;
    vertical-align: middle;
    text-align: left;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: default;
}
.mainHeroTitle {
    font-size: 55px;
    font-weight: 400;
    letter-spacing: 5px;
	margin-top: 27px;
	color: #FFFFFF;
}
.mainHeroSubTitle {
    font-size: 32px;
    font-weight: 400;
    letter-spacing: 1px;
	color: #FFFFFF;
}
.mainPageContent {
    display: block;
    overflow: hidden;
}
.activateFade {
	animation-name: fadeIn;
}
@keyframes fadeIn {
  from {
    opacity: 0;
	transform: translate(-100px);
  }
  
  to {
    opacity: 1;
	transform: translate(0px);
  }
}
a {
  position: relative;
}

a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 4px;
    border-radius: 4px;
    background-color: #18272F;
    bottom: 0;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
  }

a:hover::before {
  transform-origin: left;
  transform: scaleX(1);
}
.navBarWrap, .navMenuWrap, .mainHeroWrap, .footerWrap {
	max-width: 1440px;
    margin-left: auto;
    margin-right: auto;
}
@media (max-width:768px) {
	.navBarLeft, .navBarRight {
		padding: 0px 15px;
	}
	.navBarLeft img {
		height: 35px;
		margin-top: 18px;
	}
	.navMenu {
		padding: 0px 20px;
		padding-top: 80px;
	}
	.navMenuWrap > ul > li > a, .navMenuWrap > ul > li > span {
		font-size: 25px;
	}
	.navMenuWrap > ul > li > a > span {
		font-size: 25px;
		bottom: 3px;
	}
	.mainHeroContent {
		padding: 0 15px;
	}
	.mainHeroTitle {
		font-size: 37px;
		letter-spacing: 3px;
	}
	.mainHeroSubTitle {
		font-size: 30px;
	}
	
}
@media (min-width: 769px) and (max-width: 992px) {
	
}
@media (max-width:850px) {
	.mainHeroContainer {
		background-attachment: scroll !important;
	}
}
@media (max-width:574px) {

}
@media (max-width:768px) {

}
@media (min-width: 575px) and (max-width: 768px) {
	
}
@media (min-width: 769px) and (max-width: 992px) {
	
}
@media (max-width:850px) {
	
}
@media (min-width: 993px) and (max-width: 1175px) {
	
}
@media (min-width: 1440px) {
	
}
</style>
<script>
var pageNFErr = 0;
</script>
<script>
	$(document).ready(function(){
		if(pageNFErr == 1) {
			showError();
			pageNFErr = 0;
		}
		
		$(window).scroll(function(){
			var curScroll = $(this).scrollTop();
			if(curScroll > $('.aServiceLeft').offset().top - $(window).height()){
				var offset = Math.min(0, curScroll - $('.aServiceLeft').offset().top +$(window).height() - 300);
				$('.aServiceLeft').css({'transform': 'translate('+ offset +'px)', 'opacity' : 1 + offset/100});
			}
			var winWdt = window.innerWidth;
			if(winWdt < 575) {
				if(curScroll > $('.aServiceRight').offset().top - $(window).height()){
					var offset = Math.min(0, curScroll - $('.aServiceRight').offset().top +$(window).height() - 300);
					$('.aServiceRight').css({'transform': 'translate('+ offset +'px)', 'opacity' : 1 + offset/100});
				}
				if(curScroll > $('.aServiceMid').offset().top - $(window).height()){
					var offset = Math.min(0, curScroll - $('.aServiceMid').offset().top +$(window).height() - 300);
					$('.aServiceMid').css({'transform': 'translate('+ Math.abs(offset) +'px)', 'opacity' : 1 + offset/100});
				}
			} else {
				if(curScroll > $('.aServiceRight').offset().top - $(window).height()){
					var offset = Math.min(0, curScroll - $('.aServiceRight').offset().top +$(window).height() - 300);
					$('.aServiceRight').css({'transform': 'translate('+ Math.abs(offset) +'px)', 'opacity' : 1 + offset/100});
				}
			}
			if(curScroll > $('.ourSpecialtyListContainerItem').offset().top - $(window).height()){
				$('.ourSpecialtyListContainerItem').each(function(){
					$(this).addClass('activateFade');
				});
			}
			if(curScroll > $('.anIgPost > a').offset().top - $(window).height()){
				$('.anIgPost > a').each(function(){
					$(this).addClass('activateFade');
				});
			}
		});
	});
</script>
</head>