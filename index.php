<? require_once 'Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$m=false;
if ( $detect->isMobile() ) $m = true;
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>HANK | Home</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="msapplication-tap-highlight" content="no" />
	<link rel="stylesheet" href="themes/hank.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" type="text/css" href="inc/jquery.mobile.structure-1.4.5.min.css" /> 
	<link rel="stylesheet" type="text/css" href="inc/hnk.css" /> 
	<? if(!$m) { ?>
		<style>
		body {
			font-size: 100%;
			background: url(inc/bkg.jpg) no-repeat center fixed;
			-webkit-background-size: cover; /* pour anciens Chrome et Safari */
			background-size: cover; /* version standardisée */
			-moz-transform: scale(0.9, 0.9); /* Moz-browsers */
			zoom: 0.9; /* Other non-webkit browsers */
			zoom: 90%; /* Webkit browsers */	
		}
		#Home, #menu, #cart, #pickup
		{
			position: relative;
			width: 500px;
			margin-top: 5px;
		  	margin-left: auto;
		  	margin-right: auto;
		  	box-shadow: 1px 1px 12px #555;
		}

		#logo {
			margin: auto;
		    width: 350px;

		}

		#logo img {
			width: 350px;
			height: 350px;
			margin-top: 8px;
			margin-bottom: 8px;

		}
		</style>
	<? } ?>	
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript">
	app.initialize();
	</script>
</head>
<body>
	<? if(!$m) { ?><div id="logo"><img src="inc/logoblanc.png"></div><? } ?>
	<div data-role="page" id="Home" data-theme="a">
		<div id="content" data-role="content" data-theme="a">
			<? if($m) { ?><table align="center" border="0"><tr><td><img src="inc/logo_g.png"></td></tr></table><? } ?>
			<p id="intro">Select, purchase and come pick up your order at the time of your choice!</p> 
			<a id="order" href="menu.php" onclick="" data-transition="none" rel="external" data-role="button" data-inline="true" data-icon="carat-r" data-iconpos="right">Order</a>
						<p id="info">Hank, 55 rue des Archives 75003 Paris, open 7/7 from 12h to 22h.</p> 
						<p id="cgv">Copyright © 2003-2015 | HANK SAS | RCS Paris 798983706 | <a data-transition="none" rel="external" href="cgv.php">CGV</a></p>			
		</div>
		<!--<div data-role="footer">
			<h4><p id="build"><a href="https://github.com/hankopen/HNKmobile">Copyleft Hank 2015</a> - V0.6</p></h4>
		</div>
		-->
	</div>
</div>
<script type="text/javascript" src="inc/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="inc/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="inc/hnk.js"></script>
<script type="text/javascript" src="inc/jquery.i18n.min.js"></script>

<script type="text/javascript">

function getServerVars(lang) {
	localStorage.clear();
	var lang = navigator.language.split('-',1);
	//var apiurl = "http://hmw.dev/rest/shopping?callback=?";
	var apiurl = "http://hmw.hankrestaurant.com/rest/shopping?callback=?";

	$.getJSON( apiurl, function(data) {
		//TODO check version if upgrade needed 
		if (isNaN(data.ts))  { 
			alert($.i18n._('Cannot load data, are you connected to the Internet?'));
		} else {
			enableDiv("#order");
			localStorage.setItem('params', JSON.stringify(data.params));
			localStorage.setItem('ts', data.ts);
			localStorage.setItem('products', JSON.stringify(data.products));
			localStorage.setItem('lang', lang);
		}
	})
	.fail( function(d, textStatus, error) {
		alert($.i18n._('Cannot load data, are you connected to the Internet?'));
	});
}

</script>
<script type="text/javascript" src="inc/dico.js"></script>
<script type="text/javascript">
//translations
$('p#intro').text($.i18n._('Select, purchase and come pick up your order at the time of your choice!'));
$('p#info').text($.i18n._('Hank, 55 rue des Archives 75003 Paris, open 7/7 from 12h to 22h.'));
$('a#order').text($.i18n._('Order'));
//check if device support localstorage otherwise let the order button hidden
if(typeof(Storage)!=="undefined") {
	getServerVars(lang);
	enableDiv("#order");
} else {
	alert($.i18n._('You must use a recent device to use this service.'));
}
$("#order").parent().hide();
</script>
</body>
</html>
