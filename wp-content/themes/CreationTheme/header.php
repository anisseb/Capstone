<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

  <link href="http://www.nextt.fr/Content/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="http://www.nextt.fr/Content/styles.css" rel="stylesheet" media="screen" />
    <link href="http://www.nextt.fr/Content/Nikkie.style.css" rel="stylesheet" media="screen" />
 <script src="http://www.nextt.fr/Scripts/jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/Nikkie.Init.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/easySlider1.7.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/jquery.unobtrusive-ajax.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/MicrosoftAjax.debug.js" type="text/javascript"></script>
    <script src="http://www.nextt.fr/Scripts/MicrosoftMvcAjax.debug.js" type="text/javascript"></script>
   <!-- <script src="http://www.nextt.fr/video-js/video.js"></script> -->



  <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <!-- leave this for stats -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
  
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php //comments_popup_script(); // off by default ?>
  <?php wp_head(); ?>
  
</head>
<body>

<div id="page">
	<div id="header">
<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="http://www.nextt.fr/Content/Images/Logos/logo.png" alt="NEXtT" id="i_logo" /></a></h1>
<p class"description"><?php bloginfo('description'); ?></p>
	</div>
  <div class="content-slider">
    <div class="slider">
        <ul>
            <li class="slide1">
                <div class="visuel">
                    <img src="http://www.nextt.fr/Content/Images/Shared/slide1-visuel.png" alt="" /></div>
                <div class="text">
                    <img src="http://www.nextt.fr/Content/Images/Shared/slide1-text.png" alt="Pour accompagner l'avenir, une expertise au service des hommes" /></div>
                <a class="lien-slide" href="http://www.nextt.fr/Static/Talents" id="slider_1">D&#233;couvrez nos services</a>
            </li>
            <li class="slide2">
                <div class="visuel">
                    <img src="http://www.nextt.fr/Content/Images/Shared/slide2-visuel.png" alt="visuel slider methodes" /></div>
                <div class="text">
                    <img src="http://www.nextt.fr/Content/Images/Shared/slide2-text.png" alt="Votre spécialiste, conseiler recrutement financier" /></div>
                <a class="lien-slide" href="http://www.nextt.fr/Static/Entreprises?focus=nos-methodologies" id="slider_2">D&#233;couvrez nos m&#233;thodes</a>
            </li>
            <li class="slide3">
                <div class="visuel">
                    <img src="http://www.nextt.fr/Content/Images/Shared/slide3-visuel.png" alt="" /></div>
                <div class="text">
                    <img src="http://www.nextt.fr/Content/Images/Shared/slide3-text.png" alt="Le club NEXtT" /></div>
                <a class="lien-slide" href="http://www.nextt.fr/recrutement/Job" id="slider_3">D&#233;couvrez nos offres</a>
            </li>
        </ul>
    </div>
</div>
<ul class="menu">
        <li class="menu-g"></li>
        <li class="menu-d"></li>
        <li class="menu-histoire"><a href="http://www.nextt.fr/Static/Histoire" id="menu-histoire">Histoire</a></li>
        <li class="menu-talents"><a href="http://www.nextt.fr/Static/Talents" id="menu-talents">Talents</a></li>
        <li class="menu-offres"><a href="http://www.nextt.fr/recrutement/Job" id="menu_job">Offres</a></li>
        <li class="menu-entreprises"><a href="http://www.nextt.fr/Static/Entreprises" id="menu-entreprises">Entreprises</a></li>
        <li class="menu-news"><a href="http://www.nextt.fr/content/PageContent/List?type=News" id="menu-news">News</a></li>
        <li class="menu-contact"><a href="http://www.nextt.fr/Static/Contact" id="menu-contact">Contact</a></li>
    </ul>

