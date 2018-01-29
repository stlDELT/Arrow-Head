<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arrowhead Building Supply</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="http://arrowhead.local/style.css">
    <link rel="stylesheet" href="css//css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/iwr8dkq.css"> 
	<style>
		h1, h2, h3, h4, h5, h6, p{

		}
		h1 {
			font-family: "canada-type-gibson" !important;
			color: #fff;
			font-size: 45px;
			line-height: 50px;
			text-transform: uppercase;
			letter-spacing: .5px;
			margin-bottom: 15px;
			margin-top: 0
		}
		h2 {
			font-family: "alwyn-new-web";
			color: #0b9444;
			font-size: 24px;
			line-height: 40px;
			text-transform: uppercase;
			margin-bottom: 15px;
			margin-top: 0
		}
		h3, .head3 {
			font-family: "canada-type-gibson";
			color: #231F20;
			font-size: 31px;
			line-height: 30px;
			text-transform: uppercase;
			letter-spacing: .5px;
			margin-bottom: 15px;
			margin-top: 0
		}
		h4, .head4 {
			color: #0b9444;
			text-transform: uppercase;
			font-family: "canada-type-gibson";
			font-size: 25px;
			line-height: 30px;
			margin-bottom: 0px
		}
		.h22 {
			font-family: "alwyn-new-web";
			text-transform: uppercase;
			font-size: 19px;
			letter-spacing: 0px;
			font-weight: 500;
		}
		.bbg h2 {
			color: #fff
		}
		p{
			line-height: 30px;
			font-weight: 400;
			margin-bottom: 20px
		}
		div p:last-child  {
			margin-bottom: 0px
		}
		b, strong {
			font-weight: 500;
		}
		body {
			overflow-x: hidden;
			font-size: 16px;
			font-weight: 400;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			-webkit-text-size-adjust: 100%;
			color: #141414;
			font-family: "alwyn-new-web";
			background-color: #ffffff;
		}
		.smallp {
			font-size: 14px;
			line-height: 22px
		}
		.container {
			width: 80%
		}
		.contain {
			width: 60%;
			margin: auto;
		}
		.pd {
			padding: 90px 0px;
		}
		.pd2 {
			height: 90px
		}
		.pd3 {
			padding: 50px 0px 90px
		}
		a {
			text-decoration: none;
			transition: .3s ease;
			color: #0b9444
		}
		a:hover {
			text-decoration: none
		}
		/*============================
		Primary Green Color: #0b9444;
		Dark Green Color:  #006500;
		Black: #101010;
		============================*/
		/*============================
		****** Reusables ******
		============================*/
		main {
			padding: 0px;
		}
		.gbg{
			background-color: #0b9444;
		}
		.bbg{
			background-color: #231F20;
			color: #fff
		}
		.white-text{
			color: #ffffff;
		}
		.ar {
			height: 40px;
			width: 50px;
			background: url(/wp-content/uploads/img/abs-arrow.png) center center no-repeat;
			background-size: contain;
			margin-bottom: 20px
		}
		.center {
			text-align: center
		}
		.automarg {
			margin: auto
		}
		.pdside {
			padding: 0px 140px
		}
		.rel {
			position: relative;
		}
		.rel .mb {
			margin-bottom: 20px;
		}
		.arlist li {
			width: 32%;
			display: inline-block;
			text-transform: uppercase;
			font-weight: 600;
		}
		.rel li {
			list-style: none;
			padding-left: 50px;
			position: relative;
			margin-bottom: 15px
		}
		.rel li:before {
			position: absolute;
			height: 100%;
			width: 37px;
			background: url(/wp-content/uploads/img/abs-arrow.png) center center;
			content: '';
			background-size: contain;
			left: 0;
			background-repeat: no-repeat;
			top: 0;
		}
		.arlist li a {
			color: #141414
		}
		.allmid {
			position: absolute;
			width: 60%;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center

		}
		.ga {
			position: absolute;
			background: url(http://127.0.0.1/wordpress/wp-content/uploads/2018/01/grey1.png) center bottom no-repeat;
			height: 500px;
			width: 45%;
			top: 50%;
			background-size: contain;
			left: 0;
			opacity: .7;
			transform: translateY(-50%)
		}
		.ga2 {
			position: absolute;
			background: url(http://127.0.0.1/wordpress/wp-content/uploads/2018/01/grey2.png) center bottom no-repeat;
			height: 500px;
			width: 45%;
			bottom: 0;
			background-size: contain;
			left: 0;
			opacity: .8
		}
		.ga3 {
			position: absolute;
			background: url(http://127.0.0.1/wordpress/wp-content/uploads/2018/01/grey1.png) center bottom no-repeat;
			height: 500px;
			width: 45%;
			background-size: contain;
			left: 50%;
			top: 100px;
			transform: translateX(-50%)
		}
		.rnp {
			margin-left: 0 !important;
			margin-right: 0 !important;
		}
		.rnp [class*="col-"] {
			padding-left: 0 !important;
			padding-right: 0 !important;
		}
		.divide20 {
			height: 20px;
		}
		.divide30 {
			height: 30px;
		}
		.divide40 {
			height: 40px;
		}
		.divide50 {
			height: 50px;
		}
		.img100 {
			width: 100%;
		}
		/* ====== Universal Styles ====== */
		button, .mbb{
			border: 0px;
			padding: 9px 45px 9px 35px;
			border-radius: 30px;
			font-size: 15px;
			font-weight: bold;
			text-transform: uppercase;
			position: relative;
			color: #fff;
			background: #0b9444;
			transition: .3s ease
		}
		button:after {
			display: block;
			border-style: solid;
			border-width: 6px;
			content: "";
			height: 0;
			width: 0;
			position: absolute;
			border-color: transparent transparent transparent #fff;
			top: 50%;
			right: 19px;
			transform: translateY(-50%);
			transition: .3s ease
		}
		button:hover{
			background: #077735
		}
		button:hover:after{
			right: 15px
		}
		.mb{
			border: 0px;
			padding: 12px 45px 12px 35px;
			border-radius: 30px;
			font-size: 15px;
			font-weight: bold;
			text-transform: uppercase;
			position: relative;
			color: #fff;
			background: #0b9444;
			transition: .3s ease
		}
		.mb:after, .mbb:after {
			display: block;
			border-style: solid;
			border-width: 6px;
			content: "";
			height: 0;
			width: 0;
			position: absolute;
			border-color: transparent transparent transparent #fff;
			top: 50%;
			right: 19px;
			transform: translateY(-50%);
			transition: .3s ease
		}
		.mb:hover{
			background: #077735
		}
		.mb:hover:after, .mbb:hover:after{
			right: 15px
		}
		.mbb {
			background: #231f20
		}
		.mbb:hover{
			background: #000
		}

		/*---INNER PAGE 1---*/
		.ssb {
			position: relative;
			background: #eee;
			margin-top: 30px;
			transition: .4s ease;
			border-bottom: 2px solid #0b9444
		}
		.ssb:hover {
			background: #0b9444;
			border-bottom-color: #141414
		}
		.ssb:hover h2 a, .ssb:hover .fom{
			color: #fff
		}
		.ssb:hover .fom:after {
			border-color: transparent transparent transparent #fff;
			right: -12px;
		}
		.ssb img {
			height: 200px;
			width: 100%;
			object-fit: cover
		}
		.ssb h2 {
			font-family: "canada-type-gibson";
			font-size: 20px;
			margin-bottom: 8px;
			line-height: 20px
		}
		.ssb h2 a {
			color: #141414
		}
		.ssbtxt {
			padding: 25px 10px;
			text-align: center;
		}
		.fom {
			text-transform: uppercase;
			letter-spacing: -.5px;
			font-weight: 600;
			padding-right: 15px;
			position: relative;
			color: #0b9444;
			transition: .4s ease
		}
		.fom:after {
			display: block;
			border-style: solid;
			border-width: 6px;
			content: "";
			height: 0;
			width: 0;
			position: absolute;
			border-color: transparent transparent transparent #0b9444;
			top: 50%;
			right: -9px;
			transform: translateY(-50%);
			transition: .3s ease
		}
		.sub-image{
			background: -webkit-linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(../img/home-image.jpeg);
			background: -o-linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(../img/home-image.jpeg);
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(../img/home-image.jpeg);
			background-size: cover;
			height: 80vh;
			position: relative
		}
		.sub-image .allmid {
			top: 60%
		}
		/*---INNER PAGE 3---*/
		.page2grade {
			position: absolute;
			top: 0px;
			left: 0;
			width: 100%;
			height: 100%;
			height: calc(100vh - 65px);
			transition: 0.2s;
			background: linear-gradient(to bottom, rgba(235,235,235,0.65) 20%, rgba(255,255,255,0.75) 60%, transparent);
		}
		.page2 {
			padding-top: 300px;
			background: transparent;
			position: relative
		}
		.blmid {
			position: relative;
			z-index: 20;
		}
		.blmid h1 {
			color: #231F20
		}
		/*============================
		****** Home Page ******
		============================*/
		.greenbox {
			background: #0b9444;
			margin-top: -170px
		}
		.gbtitle {
			height: 80px;
			text-align: center;
			border-bottom: 1px solid #077735;
			color: #fff;
			font-size: 30px;
			text-transform: uppercase;
			position: relative
		}
		.gbtitle .allmid {
			width: 100%
		}
		.greenbox .h22 {
			color: #fff
		}
		.gbbr{
			border-right: 1px solid #077735;
		}
		.pbox {
			height: 180px;
			position: relative;
			text-align: center;
			border-bottom: 1px solid #077735;
			transition: .3s ease
		}
		.pbox:hover {
			background: #077735
		}
		.pbox .allmid {
			width: 100%
		}
		.pbox img {
			width: 50px;
			margin: auto;
			display: block;
			height: 60px;
			object-fit: contain
		}
		.pbox img.ic1 {
			width: 60px;
		}
		.trans {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,.4)
		}
		.home-image{
			background: -webkit-linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(../img/home-image.jpeg);
			background: -o-linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(../img/home-image.jpeg);
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(../img/home-image.jpeg);
			background-size: cover;
			height: 100vh;
			position: relative
		}
		.mpd {
			padding: 0px 40px
		}
		.mpd p {
			margin-bottom: 20px
		}

		img.circle{
			width: 165px;
			height: 165px;
			border-radius: 50%;
			margin-bottom: 15px;
			object-fit: cover
		}
		.bbr {
			border-right: 1px solid #322d2e
		}
		.spec_serv {
			position: relative;
			height: 440px;
			color: #fff;
			text-align: center
		}
		.spec_serv img {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}
		.spec_serv_text {
			padding: 30px
		}
		.spec_serv_text .head4 {
			margin-bottom: 10px
		}
		.locationpage .spec_serv h2, .localpages h2 {
			font-size: 20px;
			line-height: 28px;
		}
		.localpages h2 {
			margin-bottom: 0px;
		}
		.localpages .circle {
			width: 180px;
			margin-bottom: 10px
		}
		.localpages  {
			font-size: 20px;
			line-height: 28px;
			text-transform: uppercase
		}
		.prodbox {
			width: 100%;
			position: relative;
			height: 450px;
			border: 2px solid #231f20;
			background: #231f20
		}
		.prodbox img {
			width: 100%;
			height: 100%;
			opacity: .84
		}
		.prodbox h2 {
			color: #fff;
			position: absolute;
			top: 30px;
			left: 30px;
		}

		.jobapp {
			position: relative;
			height: 250px;
			width: 100%;
			background:#0b9444;
			transition: .3s ease;
			margin-bottom: 30px;
			border: 2px solid #0b9444;
		}
		.biss {
			margin-bottom: 30px
		}
		.jobapp svg {
			height: 120px
		}
		.jobapp h2{
			color: #fff;
			padding-top: 20px;
			margin-bottom: 0px;
			line-height: 24px;

		}
		.locys b {
			font-weight: 600;
			color: #0b9444;
			font-size: 18px;
			line-height: 18px
		}
		.jobapp:hover {
			background: #077c38;
			border: 2px solid #141414;
		}
		.prodline {
			position: relative;
			height: 250px;
			width: 100%;
			background: transparent;
			border: 2px solid #0b9444;
			transition: .3s ease;
			margin-bottom: 30px
		}
		.prodline:hover {
			background: #231f20
		}
		.prodline:hover svg{
			fill: #fff
		}
		.prodline:hover h2{
			color: #fff
		}
		.prodline .allmid {
			width: 90%;
		}
		.prodline svg {
			height: 90px;
			fill: #0b9444
		}
		.prodline h2 {
			padding-top: 10px;
			color: #0b9444;
			font-size: 23px
		}

		/*====ACCORDION====*/
		.testimonials ul {
			padding-left: 0px;
			margin-left: 0px
		}
		.accordion {
			width: 100%;
			margin: 30px auto 20px;
		}
		.accordion li {
			list-style: none;
		}
		.accordion .link {
			cursor: pointer;
			display: block;
			padding: 15px 15px 15px 0px;
			color: #0b9444;
			font-size: 18px;
			font-weight: 700;
			border-bottom: 1px solid #dddddd;
			position: relative;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
			text-transform: uppercase;
		}
		.accordion .open .link {
			border-bottom: 0px
		}
		.testarrow {
			position: absolute;
			right: 15px;
			background: url(/wp-content/uploads/img/abs-arrow.png) center center no-repeat;
			height: 45px;
			width: 35px;
			bottom: 5px;
			background-size: contain;
			transition: .3s
		}
		.accordion li.open .testarrow {
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			-o-transform: rotate(180deg);
			transform: rotate(90deg);
		}
		.accordion li:last-child .link {
			border-bottom: 0;
		}

		.accordion li i {
			position: absolute;
			top: 16px;
			left: 12px;
			font-size: 18px;
			color: #595959;
			-webkit-transition: all 0.4s ease;
			-o-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}
		.accordion h4 {
			font-size: 17px;
			line-height: 23px;
			color: #141414;
		}
		.accordion h4 span {
			color: #c1c1c1
		}
		.accordion li i.fa-chevron-down {
			right: 12px;
			left: auto;
			font-size: 16px;
		}

		.accordion li.open .link {
			color: #141414;
		}
		.accordion li.open i.fa-chevron-down {
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			-o-transform: rotate(180deg);
			transform: rotate(180deg);
		}

		.accordion li.default .submenu {display: block;}
		.submenu {
			display: none;
			padding: 20px 0px;
			border-bottom: 1px solid #CCC;
		}

		.submenu a {
			display: block;
			text-decoration: none;
			color: #d9d9d9;
			padding: 12px;
			padding-left: 42px;
			-webkit-transition: all 0.25s ease;
			-o-transition: all 0.25s ease;
			transition: all 0.25s ease;
		}

		.submenu a:hover {
			background: #b63b4d;
			color: #FFF;
		}


		/*===PRODUCTS===*/
		.prodlist li {
			font-size: 18px
		}
		.rel .prodlist li:before {
			width: 30px;
		}
		.prodlist img {
			height: 110px;
			object-fit: contain;
			object-position: left
		}
		.vendo {
			height: 510px
		}
		.cato_box {
			border: 2px solid #077736;
			padding: 40px;
			background: #141414;
		}
		.cato_box h3 {
			color: #fff;
		}
		.cato_box p {
			margin-bottom: 0px
		}
		.cato_box .newsign {
			height: 60px;
			background: #fff;
			border-radius: 30px;
			position: relative;
			padding: 5px;

		}
		.cato_box input {
			height: 50px;
			border-radius: 30px;
			border: 0px;
			padding: 0px 10px;
			width: 100%;
		}
		/*---FORM---*/
		.sideform {
			padding: 40px;
		}
		.sideform input {
			width: 100%;
			height: 40px;
			border-radius: 30px;
			border: 0px;
			background: #077736;
			color: #fff;
			padding-left: 15px;
			margin-bottom: 10px
		}
		.contactpageform input {
			width: 100%;
			height: 40px;
			border-radius: 30px;
			border: 0px;
			background: #ddd;
			color: #141414;
			padding-left: 15px;
			margin-bottom: 10px
		}
		.contactpageform ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
			color: #141414;
		}
		.contactpageform  ::-moz-placeholder { /* Firefox 19+ */
			color: #fff;
		}
		.contactpageform :-ms-input-placeholder { /* IE 10+ */
			color: #fff;
		}
		.contactpageform :-moz-placeholder { /* Firefox 18- */
			color: #fff;
		}
		.contactpageform ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
			color: #141414;
		}
		::-moz-placeholder { /* Firefox 19+ */
			color: #fff;
		}
		:-ms-input-placeholder { /* IE 10+ */
			color: #fff;
		}
		:-moz-placeholder { /* Firefox 18- */
			color: #fff;
		}
		/*---MENU---*/
		.menu {
			position: absolute;
			left: 10%;
			width: 90%;
			height: 190px;
			z-index: 200
		}
		.brand {
			height: 120px;
			position: absolute;
			bottom: 0;
			width: 150px
		}
		.paybill-login {
			position: absolute;
			width: 400px;
			right: 0;
			transform: skewX(-20deg);
			height: 45px
		}

		.paybill-login:after{
			position: absolute;
			content: '';
			background: #0b9444;
			right: 0;
			width: 50px;
			height: 45px;
			top: 0px;
			transform: skewX(20deg)
		}

		.paybill-login ul{
			margin-bottom: 0;
			padding: 10px;
			transform: skewX(20deg)
		}

		.paybill-login ul li {
			display: inline;
			margin: 15px;
		}

		.paybill-login ul li a{
			color: #fff;
			text-decoration: none;
		}
		.menubar {
			position: absolute;
			width: 65%;
			right: 0;
			bottom: 0;
			height: 110px;
			background: #fff;
		}
		.menubar a:hover {
			color: #0b9444
		}
		.menubarbottom {
			height: 45px;
			position: absolute;
			width: 100%;
			bottom: 0;
		}
		.menubarbottom li, .menubartop li{
			display: inline-block;
			list-style: none;
		}
		.menubartop li a {
			color: #7f7f7f;
			text-transform: uppercase;
			line-height: 65px;
			padding: 0px 20px;
			font-size: 18px;
		}
		.menubarbottom li a {
			color: #fff;
			line-height: 45px;
			padding: 0px 20px
		}



		.product{
			padding: 90px 0;
		}

		.flex-container .col-half:nth-child(odd){
			border-right: 1px solid #006500;
		}

		.flex-container:not(:last-child){
			border-bottom: 1px solid #006500;
		}
		.product-tile img {
			width: 85px;
			padding-bottom: 10px;
		}

		section.contractor-homeowner-more-info {
			padding: 150px 0;
		}

		.col-md-6.contractor-homeowner-more-info:nth-child(odd){
			border-right: 1px solid #353535;
		}

		.contractor-homeowner-more-info {
			padding: 0 150px;
		}

		.contractor-homeowner-more-info h2{
			margin-top: 15px;
			padding: 10px 0;
		}

		.contractor-homeowner-more-info p{
			padding-bottom: 25px;
			font-weight: bold;
		}



		.service-title {
			margin: 65px 0;
			font-size: 45px;
			text-align: center;
		}

		.service-container{
			padding: 0 80px;
		}

		.service-block {
			padding: 50px;
		}

		.col-third{
			width: 30%;
		}

		.col-third img {
			width: 100%;
		}

		.location-section{
			padding: 50px 530px;
		}

		.location-section h2{
			padding: 15px 0;
			line-height: 45px;
			padding: 0;
		}

		.location-section p{
			margin-bottom: 30px;
		}

		.newsletter{
			padding: 100px 80px;
		}

		.email-title h2 {
			font-size: 40px;
		}

		.email-sign-up-form{
			border-radius: 50px;
			width: 80%;
		}

		.email-sign-up-form form input[type=email]{
			margin: 0;
			float: left;
			border: none;
			padding: 5px;
			background: none;
			margin: 20px 0 0 25px;
		}

		.email-sign-up-form button {
			float: right;
			margin: 5px 6px;
		}

		/* ====== Footer ====== */
		.newsign {
			height: 60px;
			background: #fff;
			border-radius: 30px;
			position: relative;
			padding: 5px;

		}
		.newsign input {
			height: 50px;
			border-radius: 30px;
			border: 0px;
			padding: 0px 10px;
			width: 100%;
		}
		.newsarrow {
			position: relative
		}
		.footarrow {
			background: url(http://127.0.0.1/wordpress/wp-content/uploads/2018/01/grey1.png) center center no-repeat;
			background-size: contain;
			height: 200%;
			position: absolute;
			width: 50%;
			opacity: .08;
			left: 50%;
			top: 0;
			transform: translateX(-50%)
		}
		.newsbar {
			position: relative;
		}
		.newsbar h3{
			color: #fff;
			margin-bottom: 0px;
		}
		footer{
			padding: 150px 0px 20px;
			font-size: 18px
		}
		.fli li{
			list-style: none;
			padding: 5px 0px
		}
		.copytho {
			padding: 40px 0px 50px;
			font-size:  14px;
			line-height: 18px;
			border-top: 1px solid #322d2e
		}
		.copytho span {
			opacity: .4
		}

		.social-media-block h2{
			margin-bottom: 20px;
			font-weight: bold;
		}

		.social-media-block p{
			margin-bottom: 15px;
		}

		.icon-block li{
			list-style: none;
			display: inline-block;
			height: 40px;
			width: 40px;
			text-align: center;
			line-height: 40px;
			background: #0b9444;
			border-radius: 50%;
			margin-right: 5px;
			transition: .3s ease
		}
		.icon-block li:hover {
			background: #097e3a;
			opacity: .7
		}
		.icon-block li i {
			line-height: 40px;
			font-size: 20px;
		}
		.social-icons {
			width: 100%;
			text-align: center;
			padding: 15px;
			margin: 5px;
			border-radius: 50%;
		}

		.footer-list ul {
			list-style: none;
			margin-top: 56px;
		}

		.footer-list ul li{
			margin-bottom: 10px;
		}
		.hidetitle .entry-title {
			display:none;
		}
		#Capa_1 {
			height: 130px;
			width: 120px;
		}

		/*============================

		Medai Queries
		============================*/

		@media screen and (min-width: 320px){}

		@media screen and (max-width: 400px){}

	</style>
	<div class="menu">
		<a href="/"><img src="/wp-content/uploads/img/Arrowhead-logo.svg" class="brand"></a>
		<div class="paybill-login gbg">
			<ul>
				<li><a>Pay Bill</a></li>
				<li><a href="https://arrowheadportal.epicoranywhere.com/Signin.aspx?Redirect=https%3a%2f%2fseaahbsbt01.arrowhead.hosted.pri%2fAccountInfo.aspx" target="_blank">Contractor Login</a></li>
			</ul>
		</div>

		<div class="menubar">
			<div class="menubartop">
				<li><a href="/contractors/">for contractors</a></li>
				<li><a href="/homeowners">for homeowners</a></li>
			</div>
			<div class="menubarbottom bbg">
				<li><a href ="/services/">Services</a></li>
				<li><a href ="/products/">Products</a></li>
				<li><a href ="/about/">About Us</a></li>
				<li><a href ="/locations/">Locations</a></li>
				<li><a href ="/contact/">Contact</a></li>
			</div>
		</div>
	</div>
</head>
