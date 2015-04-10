<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title><?php bloginfo("name"); ?></title>
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo("template_url" ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url" ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url" ); ?>/style.css" rel="stylesheet" type="text/css"> -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?> 
  </head>
  <body>
    <div class="container">
      <header class="header">       
        <div class="logo">
          <a href="<?php echo home_url() ;?>">
            <h1>Brand 66</h1>
          </a>
        </div>
 <!--          <nav class="header-filter">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Work</a>
              </li>
              <li>
                <a href="#">Clients</a>
              </li>
              <li>
                <a class="active" href="#">Blog</a>
              </li>
              <li>
                <a href="#">Connect</a>
              </li>
            </ul>
          </nav>  -->
          <?php wp_nav_menu( array(
          "theme_location" => "main_menu",
          'menu_class'     => 'header-filter',
          "container"      => false,
          ) ); ?>

            
      </header>