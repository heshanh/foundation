<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>

	<?php
	echo $this->Layout->meta();
	echo $this->Layout->feed();

	// Included CSS Files
	echo $this->Html->css(array(
		// Combine and Compress These CSS Files
		'globals.css',
		'typography.css',
		'grid.css',
		'ui.css',
		'forms.css',
		'orbit.css',
		'reveal.css',
		'mobile.css',
		//End Combine and Compress These CSS Files -->
		'app.css',
		'theme.css',
		));
	?>
	<!--[if lt IE 9]>
	<?php echo $this->Html->css('ie.css'); ?>
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php echo $this->Layout->js(); ?>

</head>
<body>

	<!-- container -->
	<div class="container">

		<div class="row">
			<div class="twelve columns">
				<h1 class="site-title"><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?></h1>
				<span class="site-tagline"><?php echo Configure::read('Site.tagline'); ?></span>
			</div>
		</div>

		<div id="nav" class="row">
			<div class="twelve columns">
				<?php
				$menuAlias = 'main';
				$options = array(
					'tag' => 'ul',
					'tagAttributes' => array(
						'id' => 'menu-' . $menuAlias
						),
					'selected' => 'selected',
					'dropdown' => true, 'dropdownClass' => 'responsive-menu',
					);
				echo $this->Layout->nestedLinks($menus_for_layout[$menuAlias]['threaded'], $options);
				?>
			</div>
		</div>

		<div class="row">
			<div class="eight columns">
				<?php
					echo $this->Layout->sessionFlash();
					echo $content_for_layout;
				?>
			</div>
			<div class="four columns">
				<?php echo $this->Layout->blocks('right'); ?>
			</div>
		</div>

		<div id="footer" class="row">
			<div class="twelve columns">
				<div class="left">
					Powered by <a href="http://www.croogo.org">Croogo</a>.
				</div>
				<div class="right">
					<a href="http://www.cakephp.org"><?php echo $this->Html->image('/img/cake.power.gif'); ?></a>
				</div>
			</div>
		</div>

	</div>
	<!-- container -->

	<!-- Included JS Files -->
	<?php
	echo $this->Html->script(array(
		// Combine and Compress These JS Files
		'jquery.min.js',
		'jquery.reveal.js',
		'jquery.orbit-1.3.0.js',
		'forms.jquery.js',
		'jquery.customforms.js',
		'jquery.placeholder.min.js',
		// End Combine and Compress These JS Files
		'app.js',
		));

	echo $scripts_for_layout;
	echo $this->Js->writeBuffer();
	?>

	<script>
	$(function() { $('#menu-main').responsiveMenu(); });
	</script>
</body>
</html>