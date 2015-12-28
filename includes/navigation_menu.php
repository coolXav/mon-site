<nav class="menuDiv">
	<ul>
		<li>
			<a href="index.php?lang=<?php echo $_SESSION['lang'] ?>" class="<?php echo ($page == 'index' ? 'active' : '') ?>"><?php echo $lang['MENU_HOME']; ?></a>	
		</li>
		<li >
			<a href="connaissances.php?lang=<?php echo $_SESSION['lang'] ?>" class="<?php echo ($page == 'connaissances' ? 'active' : '') ?>"><?php echo $lang['MENU_TECHNOLOGIES']; ?></a>
			</li>
		<li >
			<a href="contact.php?lang=<?php echo $_SESSION['lang'] ?>" class="<?php echo ($page == 'contact' ? 'active' : '') ?>"><?php echo $lang['MENU_CONTACT_ME']; ?></a>
		</li>
	</ul>
</nav>
