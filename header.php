<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo site_icon_url() ?>">
	<title><?php wp_title(''); ?> <?php if(wp_title('',false)){echo':';} ?> <?php bloginfo('name') ?></title>
	<meta name="theme-color" content="#ffffff"/>
	<meta name="msapplication-navbutton-color" content="#ffffff"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<div id="contenido" >