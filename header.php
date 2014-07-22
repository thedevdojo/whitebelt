<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><![endif]-->
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/wp-content/themes/bootstrap-wp/assets/js/bootstrap.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">White Belt</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <h1><?php bloginfo('name'); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8">
        <h4><?php bloginfo('description'); ?></h4>
    </div>
  </div>
</div>

<div class="container">
