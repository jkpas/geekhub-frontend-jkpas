<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php bloginfo("name"); wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>"/>
</head>
<body>
<div class="wrapper">
    <header>
        <h1 class="logo"><a href="<?php echo home_url() ;?>"><img src="<?php bloginfo("template_url" ); ?>/img/logo.gif" alt="Наша свадьба" width="305" height="115"/></a></h1>
    <?php wp_head(); ?>
    </header>
