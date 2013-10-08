<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
	<div id="Footer">
	<p><small>&copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo SITE?></a></small></p>

	<div id="SocialLinks">
		<a href="http://www.twitter.com/computerlovers"><img src="<?php echo $this->getThemePath()?>/images/twittericon.png" width="32" height="32" alt="Twitter" /></a>
		<a href="http://www.facebook.com/CodeComputerlove"><img src="<?php echo $this->getThemePath()?>/images/facebookicon.png" width="32" height="32" alt="Facebook" /></a>
	</div>
	
</div>


<?php  Loader::element('footer_required'); ?>

</body>
</html>