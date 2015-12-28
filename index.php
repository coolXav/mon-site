<?php
include_once 'common.php';

$page = 'index';
?>



<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $lang['PAGE_TITLE_WELCOME']; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic|Playfair+Display+SC:700|Cuprum:700' rel='stylesheet' type='text/css'>
		</head>
	<body>

		<?php include 'includes/navigation_menu.php'; ?>						

		<div id="languages">
		<a href="index.php?lang=en"><img src="images/pays/eng.png" /></a>
		<a href="index.php?lang=fr"><img src="images/pays/fr.png" /></a>
		</div>
		
		<div class="mainDiv">	
				<img src="images/accueil/msg_bienvenu.jpg" alt="msg_bienvenue" id="img_msg_bienvenue" />
			<div id="aboutMe">
				<img src="images/accueil/moi.jpg" alt="ma_photo" id="ma_photo" />
				<h6 id="who"><?php echo $lang['HEADER_FIRST_BLOCK']; ?></h6>
				<img src="images/accueil/question.png" alt="image_question" id="question_mark" />
				<p>
					<?php echo $lang['TEXT_ONE_FB']; ?>
				</p>
				<p>
					<?php echo $lang['TEXT_TWO_FB']; ?>
				</p>
				<p>	
					<?php echo $lang['TEXT_THREE_FB']; ?> 
				</p>
			</div>
			<div id="why">
				<h2 class="titreAccueil"><?php echo $lang['HEADER_SECOND_BLOCK'];  ?></h2>				
				<div id="txt_reasons">
					<h3 id="pour"><?php echo $lang['HEADER_FOR_SB']; ?></h3>
					<p>
						<img src="images/accueil/goForward.png" alt="fleche" class="img_fleche" /> <?php echo $lang['TEXT_ONE_SB']; ?>
					</p>
					<p>
						<img src="images/accueil/goForward.png" alt="fleche" class="img_fleche" /> <?php echo $lang['TEXT_TWO_SB']; ?>
					</p>
					<p>
						<img src="images/accueil/goForward.png" alt="fleche" class="img_fleche" /> <?php echo $lang['TEXT_THREE_SB']; ?>
					</p>
					<p>
						<img src="images/accueil/goForward.png" alt="fleche" class="img_fleche" /> <?php echo $lang['TEXT_FOUR_SB']; ?>
					</p>
					<p>
						<img src="images/accueil/goForward.png" alt="fleche" class="img_fleche" /> <?php echo $lang['TEXT_FIVE_SB']; ?>
					</p>
					<p>
						<img src="images/accueil/goForward.png" alt="fleche" class="img_fleche" /> <?php echo $lang['TEXT_SIX_SB']; ?>
					</p>
				</div>
					<img src="images/accueil/innovation_technology_head.jpg" alt="image_tete_reflextions" id="innovation_technology_head" />
			</div>
			<div id="interests">
				<h2 class="titreAccueil"><?php echo $lang['HEADER_THIRD_BLOCK']; ?></h2>
				<p>
					<?php echo $lang['TEXT_ONE_TB']; ?>
				</p>
				<p>
					<?php echo $lang['TEXT_TWO_TB']; ?> 
				</p>
				<p>
					<?php echo $lang['TEXT_THREE_TB']; ?> 
				</p>
				<p> 
					<?php echo $lang['TEXT_FOUR_TB']; ?> 
				</p>
				<p>
					<?php echo $lang['TEXT_FIVE_TB']; ?> 
				</p>
			</div>
			<div id="myChallenges">
				<h2 class="titreAccueil"><?php echo $lang['HEADER_FOURTH_BLOCK']; ?></h2>
				<img src="images/challenge-accepted.png" alt="image_challenge" id="image_challenge" />
				<ul>
					<li class="objectifs"><strong>1) <?php echo $lang['OBJECTIVE_ONE']; ?></strong></li>
					<li class="objectifs"><strong>2) <?php echo $lang['OBJECTIVE_TWO']; ?></strong></li>
					<li class="objectifs"><strong>3) <?php echo $lang['OBJECTIVE_THREE']; ?></strong></li>
				</ul>				
			</div>			
			<div id="video">
				<h2 class="titreAccueil"><?php echo $lang['HEADER_VIDEO_1']; ?></h2>
				<iframe id="videoIntro" src="https://www.youtube.com/embed/OWsyrnOBsJs" frameborder="0" allowfullscreen></iframe>
				<h2 class="titreAccueil"><?php echo $lang['HEADER_VIDEO_2']; ?> <?php echo $lang['TXT_VIDEO']; ?></h2>
				<iframe id="videoMinuteOfCode" src="https://www.youtube.com/embed/2DxWIxec6yo" frameborder="0" allowfullscreen></iframe>
			</div>
			<a href="#" class="cd-top"></a>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
