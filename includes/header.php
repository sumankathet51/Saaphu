<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Saaphu || Education for all</title>
  <link rel="shortcut icon" type="image/png" href="images/brand.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
</head>
<body>
  <!-- navbar -->
  <header class="cd-auto-hide-header">
  <div class="logo"><a href="#0"><img src="images/brand.png" alt="Logo" height="50px"></a></div>

  <nav class="cd-primary-nav">
      <a href="#cd-navigation" class="nav-trigger">
          <span>
              <em aria-hidden="true"></em>
              Menu
          </span>
      </a> <!-- .nav-trigger -->

      <ul id="cd-navigation">
          <li><a href="index.php" class="<?php if($page == 'home'){ echo 'active';} ?>">Home</a></li>
          <li><a href="gallery.php" class="<?php if($page == 'gallery'){ echo 'active';} ?>">Gallery</a></li>
          <li><a href="events.php" class="<?php if($page == 'events'){ echo 'active';} ?>">Events</a></li>
          <li><a href="about.php" class="<?php if($page == 'about'){ echo 'active';} ?>">About</a></li>
          <li><a href="contact.php" class="<?php if($page == 'contact'){ echo 'active';} ?>">Contact</a></li>
      </ul>
  </nav> <!-- .cd-primary-nav -->
</header> <!-- .cd-auto-hide-header -->