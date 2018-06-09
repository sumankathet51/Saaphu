<?php
  if(isset($_POST['submit'])){
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventDetails = $_POST['details'];
    $location = $_POST['location'];
    $connection = mysqli_connect('localhost', 'root', '', 'saaphu_admin');
    if($eventName && $eventDate && $eventDetails && $location){
      
      if($connection){
        
        $query = "INSERT INTO event(eventName, eventDate, eventDetails, location)";
        $query .= "VALUES ('$eventName', '$eventDate', '$eventDetails', '$location')";
        
        $result = mysqli_query($connection, $query);

        if(!$result){
          die('Query Failed');
        }

      } else {
        die();
      }
      
    } else {
      echo "<h2>Please fill up the details below</h2>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Saaphu || Admin Panel</title>
  <link rel="stylesheet" href="css/admin_panel.css">
</head>
<body>
  <form action="admin_panel.php" method="post">
    <div class="group">
      <input type="text" name="eventName"><span class="highlight"></span><span class="bar"></span>
      <label>Event Name</label>
    </div>
    <div class="group">
      <input type="text" name="eventDate"><span class="highlight"></span><span class="bar"></span>
      <label>Event date(eg: 25 june 2018)</label>
    </div>
    <div class="group">
      <input type="text" name="location"><span class="highlight"></span><span class="bar"></span>
      <label>Event Location</label>
    </div>
    <div class="group">
      <input type="text" name="details"><span class="highlight"></span><span class="bar"></span>
      <label>Event Details</label>
    </div>
    <button type="submit" class="button buttonBlue" name="submit">Add event
      <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
  </form>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
  <script>
    $(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });

  });
  </script>

</body>
</html>


