<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header class="site-header">
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  
    <a class="navbar-brand" href="#"><img src="http://127.0.0.1/Practical_dinjan/wp-content/uploads/2024/05/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary_menu',
        'menu_id'        => 'primary-menu',
    ) );
    ?>
    </div>
</nav>

      </div>
    </header>
