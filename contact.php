<?php

//
// Dans le cas où les conditions sont réunies pour l'envoi du formulaire et que toutes les variables sont remplies correctement
//
if (isset($_POST['submit'])) {
	
		// Paramètres reçus des champs
		$admin_email = "xavier.fouinat@yahoo.ca";
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$object = $_REQUEST['object'];
		
		// Format du message reçu
		$message = 'FROM : ' . $name . "\n\n" .
				   'EMAIL : ' . $email . "\n\n". 
				   'OBJECT : ' . $object . "\n\n". 
				   'MESSAGE : ' . $_REQUEST['message'];

		// Envoyer le message
		mail($admin_email, $object, $message);		
?>

<!-- Page de confirmation d'envoi du message -->

<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $lang['PAGE_TITLE_CONTACT']; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic|Fjalla+One|Signika:700|Lobster|Cuprum:700' rel='stylesheet' type='text/css'>		
	</head>
	<body>
		<?php
		include 'includes/navigation_menu.php';
	?>
	
	<div id="languages">
		<a href="contact.php?lang=en"><img src="images/pays/eng.png" /></a>
		<a href="contact.php?lang=fr"><img src="images/pays/fr.png" /></a>
	</div>

<div class="mainDiv">
	<div id="formulaire">
		<div id="messageRemerciement">
			<img src="images/contact/happy smiley.png" alt="image_smiley" id="image_smiley" />
			<p>
				<?php echo $lang['MSG_SENT']; ?>
			</p>
		</div>
	</div>
</div>
</body>
</html>

<?php

}

//
// Sinon laisser le formulaire à l'écran avec les messages d'erreur
//
else{
?>

<?php
include_once 'common.php';

$page = 'contact';
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $lang['PAGE_TITLE_CONTACT']; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic|Fjalla+One|Signika:700|Lobster|Cuprum:700' rel='stylesheet' type='text/css'>
		
		</head>
	<body>

		<?php
	include 'includes/navigation_menu.php';
 ?>
		
		<div id="languages">
		<a href="contact.php?lang=en"><img src="images/pays/eng.png" /></a>
		<a href="contact.php?lang=fr"><img src="images/pays/fr.png" /></a>
		</div>

		<div class="mainDiv">
			<div id="texteContact">
				<p class="infosContact"><?php echo $lang['TEXT_ONE_FORM']; ?><br />
				<?php echo $lang['TEXT_TWO_FORM']; ?></p>	
				<p class="infosContact"><?php echo $lang['TEXT_THREE_FORM']; ?>
					<a href="http://ca.linkedin.com/in/xavierfouinat" target="_blank"> 
						<?php echo $lang['TEXT_FOUR_FORM']; ?>
					</a>
					<?php echo $lang['TEXT_FIVE_FORM']; ?> <br />
					<?php echo $lang['TEXT_SIX_FORM']; ?>	<br />					
				</p>				
				<div id="btnLinkedIn">
				<script src="//platform.linkedin.com/in.js" type="text/javascript">lang:en_US</script>
				<script type="IN/Share"></script>
				</div>
				<!-- <p class="infosContact"><?php echo $lang['TEXT_GITHUB_1']; ?><a href="https://github.com/coolXav/website.git" target="_blank">code </a><?php echo $lang['TEXT_GITHUB_2']; ?></p>				 -->
			</div>
			<form id="formulaire" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
				<label><?php echo $lang['INPUT_NAME']; ?></label>
				<input type="text" id="name" name="name" placeholder="<?php echo $lang['PLACEHOLDER_NAME']; ?>" />
				<label><?php echo $lang['INPUT_EMAIL']; ?></label>
				<input type="email" id="email" name="email" placeholder="<?php echo $lang['PLACEHOLDER_EMAIL']; ?>" />
				<label><?php echo $lang['INPUT_OBJECT']; ?></label>
				<input type="text" id="object" name="object" placeholder="<?php echo $lang['PLACEHOLDER_OBJECT']; ?>" />
				<label><?php echo $lang['INPUT_MESSAGE']; ?></label>
				<textarea type="text" id="message" name="message" rows="10" placeholder="<?php echo $lang['PLACEHOLDER_MESSAGE']; ?>" ></textarea>
				<br />
				<br />
				<input type="submit" value="<?php echo $lang['INPUT_SEND']; ?>" id="sendBtn" name="submit" />
			</form>
<?php
}
?>
		</div>		
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>			
		<!-- jQuery Validation Plugin-->		
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/validatemsg_en.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<?php if ( isset( $_GET['lang'] ) && 'fr' === $_GET['lang'] ) : ?>
		<script type="text/javascript" src="js/validatemsg_fr.js"></script>	
		<?php endif; ?>
		
	</body>
</html>


