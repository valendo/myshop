<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo LANGUAGE?>" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php  Loader::element('header_required'); ?>
<?php $html = Loader::helper('html'); ?>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Site Header Content //-->
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('main.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('photoswipe.css')?>" />

<script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/klass.min.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/code.photoswipe.jquery-3.0.5.min.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/jquery.lazyload.min.js"></script>
	
	
	<script type="text/javascript">

		(function(window, $, PhotoSwipe){
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery a").photoSwipe(options);
			
			});
			
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
		
	</script>
</head>
<body>

<div id="Header">
	<a href="<?php   echo DIR_REL?>"><img src="<?php echo $this->getThemePath()?>/images/codecomputerlovelogo.gif" width="230" height="48" alt="Code Computerlove" /></a>
</div>