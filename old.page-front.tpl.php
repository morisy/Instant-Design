<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<!--
	This theme is called Instant Design. It's based on the BlueprintCSS, and it won't work without that theme installed.
	This is actually v0.2, revamped for use at sparechangenews.net, and to make my own website better.
	It was designed by Michael Morisy, who can be contacted at twitter.com/morisy or, better yet, www.morisy.com
	The design, included all the images it uses, can be freely adapted for yourself.
	If you don't mind, let me know you've used it, and it'd be awesome if you'd link to its homepage at morisy.com/instantdesign
	Thanks!
	-Michael
	
	Version history:
	.1, released 2009-07-07: The first version
	.2, "Spare Change" released 2009-7-17: Fixed a number of references explicit to morisy.com
							Took out the analytics bits, which didn't work and were ugly.
							Added drop down menus.
	-->
<html lang="en">
<head>

	<title><?php print $head_title ?></title>
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
		
		<div id="logo" class="span-24 last"><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" id="logo-image" /></a></div> 
	<!-- this was causing errors when there wasn't a logo promo
			<div class="span-7 last"><?php print $logopromo; ?></div>-->
	
	
		
		<?php endif ?>
		<br>
		<h1><a title="<?php print $site_name; ?>" href="<?php print url(); ?>"><?php print $site_name; ?></a></h1>
		<h3 class="quiet"><?php if ($site_slogan != '') print $site_slogan; ?></h3>
		<div id="dfnmenu" class="sitenav" list-style: none !important;>
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

			 <div class="span-14">
				<?php print $topstory; ?>

			</div>
			<div class="span-10 appent-1 last">
				<?php print $fronttabs; ?>
			</div>

			

		<div class="span-6">
			
			<div class="span-5 box back">
				  <?php print $welcome_left; ?>
				
			</div>
	
			<br/>
		</div>

			<div class="span-6">
				
				<div class="span-5 box back">
					  <?php print $welcome_middle; ?>

				</div>

				<br/>
				
		    </div>
		
				<div class="span-6">
				
					<div class="span-5 box back">
						  <?php print $welcome_right; ?>

					</div>
				
					<br/>
				</div>
					<div class="span-5 last">

						  <?php print $welcome_nobox; ?>
						
				</div>
			    <div class="span-24 last">

					<hr>


					<?php print $footer; ?>
					<hr>
				</div>

				    <div class="span-24 last">



					  <?php print $closure; ?>		


					</div>

				</body>
				</html>