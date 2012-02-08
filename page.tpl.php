<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<title><?php print $head_title ?> Spare Change News</title>
	<meta http-equiv="content-language" content="<?php print $language->language ?>" />
	<?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!-- Framework CSS -->
<!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $path; ?>blueprint/blueprint/ie.css" type="text/css" media="screen, projection">
  	<link href="<?php print $path; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
  <!--[if lte IE 6]>
  	<link href="<?php print $path; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->

<!-- DFN Menu Library + CSS for drop-down -->
<script src="/sites/themes/instantdesign/dfn_menus.js" 
          language="javascript" type="text/javascript"></script>

		  <?php print $scripts ?>


</head>

<body>

	<div class="container">  
		<?php if ($logo): ?>
		
		<div id="logo" class="span-17"><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" id="logo-image" /></a></div> 
		<div class="span-7 last"><?php print $logopromo; ?></div>

			<?php endif ?>			<h1><a title="<?php print $site_name; ?>" href="<?php print url(); ?>"><?php print $site_name; ?></a></h1>
			<h3 class="quiet"><?php if ($site_slogan != '') print $site_slogan; ?></h3>
			
			<div id="dfnmenu" class="sitenav">
			  <?
			  $my_menu = menu_tree('primary-links');
			  $my_menu = str_replace("leaf", "", $my_menu );
			  $my_menu = str_replace("active-trail", "", $my_menu );
			  $my_menu = str_replace("menu", "", $my_menu );
			  $my_menu = str_replace("active", "", $my_menu );
			  $my_menu = str_replace("expanded", "", $my_menu );
			  $my_menu = str_replace(" class=\"\"", "", $my_menu );
			  print $my_menu;
			  ?>
			<div style="clear: both;"></div>
			</div>
			
		<hr>
	    <div class="span-24 last">


    
			<?php print $header; ?>

        </div>
		  <?php if ($left): ?>
		  <div class="span-5">
		    <div class="<?php print $left_classes; ?>"><?php print $left; ?></div>
		  </div>					
		  <?php endif ?>
		
		

					<div class="span-18">
					
						 <div class="<?php print $center_classes; ?>">
						    <?php
						      if ($breadcrumb != '') {
						        print $breadcrumb;
						      }
	
						      if ($tabs != '') {
						        print '<div class="tabs">'. $tabs .'</div>';
						      }
	
						      if ($messages != '') {
						        print '<div id="messages">'. $messages .'</div>';
						      }
	
						      if ($title != '') {
						        print '<h2>'. $title .'</h2>';
						      }      
	
						      print $help;   
		
						      print $content;
						      print $feed_icons;
						    ?>
						</div>
					
					</div></div>
	<div class="span-1 last">
	  <?php if ($right): ?>
	    <div class="<?php print $right_classes; ?>"><?php print $right; ?></div>
	  <?php endif ?>
	</div>
</div>
		
    <div class="span-20 last">




				<hr>


				<?php print $footer; ?>
				<hr>


</div>




		  <?php print $closure; ?>

		
</div>
	</body>
	</html>