<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div id="MainContent">

	<div class="page-content">
		<h1>Catalogue 10-2013</h1>
	</div>
	
	<ul id="Gallery" class="gallery">
		<?php 
			$a = new Area('Main');
			$a->display($c);
		?>
		<?php 
		$path = $this->getThemePath();
		for ($i=1; $i<=100; $i++)
		  {
			echo "<li><a href='$path/catalogue/full/{$i}_l.jpg'><img class='lazy' src='$path/images/lazy-loader.gif' data-original='$path/catalogue/thumb/{$i}_s.jpg' alt='$i' /></a></li>";
		  } 
		?>
	</ul>
	
</div>	
<script type="text/javascript">
	$(document).ready(function(){
		$("img.lazy").lazyload();
	});
</script>
<?php  $this->inc('elements/footer.php'); ?>