<?php $page = 'gallery'; include "includes/header.php"; ?>
<!-- <link rel="stylesheet" href="css/main.css" />   -->
  <style>
    .thumbnails{
      width: 350px;
      height: 200px;
      float: left;
      margin: 10px;
      box-sizing: border-box;
    }

    .thumbnails img{
      width: 100%;
      height: 200px;
      margin-bottom: 10px;
      border-radius: 5px;
      object-fit: cover;
    }
    .container:after {
      content: "";
      display: table;
      clear: both;
    }
    @media (max-width: 992px){
      .thumbnails{
        width: 300px;
        height: 200px;
      }
    }
    @media (max-width: 768px){
      .thumbnails{
        width: 100vw;
        height: 250px;
      }
      .thumbnails img{
        width: 80vw;
        height: 250px;
      }
    }
  </style>
<body>
  <div class="container">
  <?php
    $dir = glob('Gallery/{*.jpg, *.png}', GLOB_BRACE);
    foreach ($dir as $value){
      ?>
      <div class="thumbnails">
      <a data-fancybox="gallery" data-caption="<?php echo $value; ?>" href="<?php echo $value; ?>">
        <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>">
      </a>
      </div>
      <?php
    }
    ?>
    </div>
  

  <script src="js/jquery.min.js"></script>
  <script src="js/fancybox.js"></script>
  <script type="text/javascript">
    $().fancybox({
    selector : '[data-fancybox="gallery"]',
    loop     : true,
    protect: true,
    buttons: [
        "zoom",
        "slideShow",
        "fullScreen",
        "thumbs",
        "close"
    ],
    thumbs : {
		autoStart : true
	},
  animationEffect: "zoom-in-out",
  transitionEffect: "circular",
    }); 
  </script>
<?php include "includes/footer.php"; ?>