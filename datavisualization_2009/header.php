<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//DE"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<!-- ——————————————————————————————————————————————————————————————————— Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="distribution" content="global" />
	<meta name="robots" content="follow, all" />
	<meta name="language" content="de" />
	<?php if ( is_single() ) { ?>
	<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— Single -->
	<meta name="description" content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>" />
	<meta name="keywords" content="<?php wp_title(''); ?>, Benjamin Wiederkehr, Benjamin, Wiederkehr, Christian Siegrist, Christian, Siegrist, Visualisierung, Information, Data, Interaction Design, Interface Design" />
	<?php }; ?>
	<?php if ( ! is_single() ) { ?>
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— Normal -->
	<meta name="description" content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>" />
	<meta name="keywords" content="<?php bloginfo('name'); ?>, Benjamin Wiederkehr, Benjamin, Wiederkehr, Christian Siegrist, Christian, Siegrist, Visualisierung, Information, Data, Interaction Design, Interface Design" />
	<?php }; ?>
	<!-- ——————————————————————————————————————————————————————————————————— Favicon -->
	<link rel="shortcut Icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
	<!-- ——————————————————————————————————————————————————————————————————— RSS -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-personalized-1.6rc4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/base.js"></script>
	<!-- ——————————————————————————————————————————————————————————————————— WP HEAD -->
	<?php wp_head(); ?>
	<?php
	global $post;
	if(!is_home()){
		$description = '';
		$category = get_the_category($post->ID);
		for ($i=0; $i < count($category); $i++) {
			$description .= '<span>'.$category[$i]->name.'</span>';
		}
	}
	if(is_tag()){
		$description = '<span>';
		$description .= single_tag_title("", false);
		$description .= '</span>';
	}
	if(is_category()){
		$description = '<span>';
		$description .= single_cat_title("", false);
		$description .= '</span>';
	}
	if(is_author()){
		global $wp_query;
		$curauth = $wp_query->get_queried_object();
		$description = '<span>';
		$description .= $curauth->user_lastname;
		$description .= '</span>';
	}
	?>
</head>
<body>
	<div id="wrapper">
	<div id="masthead" class="fix">
	<h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a><?php if(!is_home()){ echo $description; } ?></h1>
		<div id="authorBlurb">
			<a href="http://portfolio.artillery.ch/?cat=22"><img src="<?php bloginfo('template_directory'); ?>/img/avatar_benji.png" alt="Avatar Benjamin" title="Avatar Benjamin" /></a>
			<a href="http://significant.ch"><img src="<?php bloginfo('template_directory'); ?>/img/avatar_chrigi.png" alt="Avatar Christian" title="Avatar Christian"/></a>
			<p id="authorIntro"><?php bloginfo('description'); ?></p>
		</div>
	</div>
	<div id="navigation">
		<ul class="nav fix">
			<li><a href="<?php echo get_settings('home'); ?>/" title="Return to the the frontpage">Home</a></li>
			<li><a href="#archives" title="View the archives" id="archives_toggle">Archiv</a></li>
			<li><a href="#archives" title="View the archives" id="tags_toggle">Tags</a></li>
			<li><a href="#projects" title="View the projects" id="projects_toggle">Projects</a></li>
			<?php
			$defaults = array('exclude' => '', 'title_li' => '');
			?>
			<?php wp_list_pages($defaults); ?> 
		</ul>
		<?php include (TEMPLATEPATH . '/elements/searchform.php'); ?>
	</div><!-- #navigation -->
	<div id="archives" class="fix folded browser"> 
		<ul class="fix">
		<?php wp_list_cats('sort_column=name&show_count=1'); ?>
		</ul>
	</div>
	<div id="tags" class="fix folded browser"> 
			<?php
			$defaults = array('smallest' => 10, 'largest' => 16,
				'unit' => 'pt', 'number' => 45, 'format' => 'list', 
				'orderby' => 'name', 'order' => 'ASC', 'exclude' => '');
			?>
		<?php wp_tag_cloud($defaults); ?>
	</div>
	<div id="projects" class="fix folded browser"> 
		<ul class="fix">
		<?php wp_list_categories('exclude=1,3,4,16,32,55&hide_empty=0&title_li=0&sort_column=name&show_count=1'); ?>
		</ul>
	</div>