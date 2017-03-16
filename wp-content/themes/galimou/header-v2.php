<?php global $bbcrm_option; ?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php wp_title('|',true,'right'); ?></title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo $bbcrm_option["bbcrm_design_favicon"];?>" />
	<?php wp_head(); ?>
</head>

<body class='sec-1 pg-1'>
	<header class='theme-border1-top-dk'>
		<div class='container'>
			<div class="header_main">
				<div class="subHeadPanel">
					<div class="mimicRow">
						<div id="logo" title="<?php echo bloginfo('name');?>">
							<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $bbcrm_option["bbcrm_design_logo"];?>" alt="<?php bloginfo('name'); ?>"></a>
						</div>
						<nav id="topNav">
							<div class="topNavButton"><span class="glyphicon glyphicon-th-list"></span> Show Menu</div>
							<div class="topNavButtonClose noshow"><span class="glyphicon glyphicon-remove"></span> Close Menu</div>
							<?php
								$defaults = array(
								'container'=> false,
								'theme_location' => 'primary-menu',
								'menu_class' => 'listReset topnav theme-color1-lt theme-background1-dk');
								wp_nav_menu( $defaults );
							?>
						</nav>
					</div>
				</div>
				<?php layerslider(2) ?>
				<div class="clearfix theme-color1-lt theme-background1-dk">
					<div class="mimicRow">
						<div id="breadWrap">
							<ul id="breadCrumbs" style="display: block;">
								<li id="bc-1"><span><a href="<?php bloginfo('url');?>">Home</a></span></li>
								<li id="bc-1"><span id="bcs-1"><a href="<?php the_permalink();?>"><?php wp_title(); ?></a></span></li>
							</ul>
						</div>		
						<div class="membersPanel">
							<?php echo do_shortcode('[bbcrm_loginbar]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
