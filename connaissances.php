<?php
include_once 'common.php';

$page = 'connaissances';
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $lang['PAGE_TITLE_KNOWLEDGE']; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700|Cuprum:700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		
		<?php include 'includes/navigation_menu.php'; ?>
		
		<div id="languages">
		<a href="connaissances.php?lang=en"><img src="images/pays/eng.png" /></a>
		<a href="connaissances.php?lang=fr"><img src="images/pays/fr.png" /></a>
		</div>
			
		<div class="mainDiv">			
			<h1 id="titreMesConnaissances"><?php echo $lang['HEADER_KNOWLEDGE']; ?></h1>			
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_ONE_KN']; ?></h2>
				<img src="images/front-end/HTML5.png" alt="image_html5" id="html5_logo" />
				<img src="images/front-end/CSS3.png" alt="image_css3" id="css3_logo" />
				<img src="images/front-end/JavaScript.png" alt="image_javascript" id="js_logo" />
				<img src="images/front-end/jquery.png" alt="image_jquery" id="jquery_logo" />
				<img src="images/front-end/ajax.png" alt="image_ajax" id="ajax_logo" />
				<img src="images/front-end/json.png" alt="image_json" id="jason_logo" />
			</div>			
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_TWO_KN']; ?></h2>
				<div id="firstRow">
					<img src="images/back-end/php.png" alt="image_php" id="php_logo" />
					<img src="images/back-end/mysql.png" alt="image_mysql" id="mysql_logo" />
					<img src="images/back-end/c.png" alt="image_c" id="c_logo" />
					<img src="images/back-end/c++.png" alt="image_c++" id="cpp_logo" />
				</div>
				<div id="secondRow">
					<img src="images/back-end/csharp-logo.png" alt="image_c#" id="cSharp_logo" />
					<img src="images/back-end/asp.net.png" alt="image_asp" id="asp_logo" />
					<img src="images/back-end/java_logo.png" alt="image_java" id="java_logo" />
					<img src="images/back-end/j2ee.png" alt="image_j2ee" id="j2ee_logo" />
					<img src="images/back-end/Android.png" alt="image_android" id="android_logo" />
					<img src="images/back-end/jsp.png" alt="image_jsp" id="jsp_logo" />
				</div>
			</div>
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_THREE_KN']; ?></h2>
				<img src="images/ide/aptana.png" alt="image_aptana" id="aptana_logo" />
				<img src="images/ide/Visual Studio.png" alt="image_vs" id="vs_logo" />
				<img src="images/ide/eclipse kepler.png" alt="image_kepler" id="kepler_logo" />
				<img src="images/ide/eclipse luna.png" alt="image_luna" id="luna_logo" />
				<img src="images/ide/netbeans.png" alt="image_netbeans" id="netbeans_logo" />
			</div>			
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_FOUR_KN']; ?></h2>
				<img src="images/servers/WampServer.png" alt="image_wamp" id="wamp_logo" />
				<img src="images/servers/apachetomcat.png" alt="image_tomcat" id="tomcat_logo" />
				<img src="images/servers/glassfish.png" alt="image_glassfish" id="glassfish_logo" />
				<img src="images/servers/iis.png" alt="image_iis" id="iis_logo" />
			</div>
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_FIVE_KN']; ?></h2>
				<img src="images/frameworks/jsf.png" alt="image_jsf" id="jsf_logo" />
				<img src="images/frameworks/spring.png" alt="image_spring_framework" id="spring_framework_logo" />
				<img src="images/frameworks/mybatis.png" alt="image_mybatis" id="mybatis_logo" />
				<img src="images/frameworks/bootstrap.png" alt="image_boostrap" id="boostrap_logo" />
			</div>
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_SIX_KN']; ?></h2>
				<img src="images/logiciels/Ms Access.png" alt="image_msaccess" id="msaccess_logo" />
				<img src="images/logiciels/microsoft_sql_server_2008.png" alt="image_msqls" id="msqls_logo" />
				<img src="images/logiciels/mysql workbench.png" alt="image_workbench" id="workbench_logo" />
				<img src="images/logiciels/photoshop.png" alt="image_photoshop" id="photoshop_logo" />
				<img src="images/logiciels/phpmyadmin.png" alt="image_phpmyadmin" id="phpmyadmin_logo" />
			</div>
			<div class="connaissances">
				<h2 class="titreConnaissances"><?php echo $lang['HEADER_SEVEN_KN']; ?></h2>
				<img src="images/SEO/Google_AdWords_logo.png" alt="image_adwords" id="adwords_logo" />
				<img src="images/SEO/Google adsense.png" alt="image_adsense" id="adsense_logo" />
				<img src="images/SEO/GoogleTrends.png" alt="image_trends" id="trends_logo" />
				<img src="images/SEO/Google_Analytics.png" alt="image_analytics" id="analytics_logo" />
				<img src="images/SEO/google_mastertools.png" alt="image_mastertools" id="mastertools_logo" />
			</div>
			<div id="autres">
				<div id="repository">
					<h2 class="titreConnaissances"><?php echo $lang['HEADER_NINE_KN']; ?></h4>
					<img src="images/repository/github.png" alt="image_github" id="github_logo" />
					<img src="images/repository/svn.png" alt="image_svn" id="svn_logo" />
				</div>
				<div id="bureautique">
					<h2 class="titreConnaissances"><?php echo $lang['HEADER_TEN_KN']; ?></h4>
					<img src="images/Bureautique/Microsoft Office.png" alt="image-mo" id="mo-logo" />
				</div>
				<div id="os">
					<h2 class="titreConnaissances"><?php echo $lang['HEADER_ELEVEN_KN']; ?></h4>
					<img src="images/OS/windows.png" alt="image_windows" id="windows_logo" />
					<img src="images/OS/mac.png" alt="image_mac" id="mac_logo" />
				</div>
			</div>		
			<a href="#" class="cd-top"></a>	
		</div>		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
