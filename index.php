<?php $page = 'home'; include "includes/header.php"; 

// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $phoneErr = $messageErr = "";
$fname = $lname =  $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $fnameErr = "First Name is required!";
  } else {
    $fname = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed in first name!"; 
    }
  }

  if (empty($_POST["lastName"])) {
    $lnameErr = "last Name is required!";
  } else {
    $lname = test_input($_POST["lastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed in last name!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required!";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format!"; 
    }
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr = "phone number is required!" ;
  } else {
    $phone = test_input($_POST["phone"]);

    $numbers = preg_replace("%[^0-9]%", "", $phone );

    // Get the length of numbers supplied
    $length = strlen($numbers);

    // Validate size - must be 10 or 7
    if ( $length != 10 || $length != 7 ) {
      $phoneErr = "Invalid phone number!"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

///Send mail
    if($fname && $lname && $email && $phone){
      $mailTo = "info@saaphu.org.np";
      $headers = "From: ".$email;
      $message = "New volunteer request from: ".$fname.".\n\n";
      mail($mailTo, $phone, $message, $headers);
      header("Location: index.php?mailsend");
    } 

?>
   

   

<!--Start of slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="slider-img" src="images/carousel1png.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="slider-img" src="images/carousel3.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="slider-img" src="images/carousel2.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="slider-img" src="images/carousel4.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--End of slider-->

<!-- Welcome note and a brief description -->
<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-md-6">
        <h1 style="color: rgb(255, 113, 208);">Welcome to Saaphu</h1>
        <p>SAA: PHU, it literally means the book. We borrowed this term form newari language. The objective to choose the term is " we are in campaign to educate every people" so it will be an open book to read and gain knowledge. We are open for every one and for everything related with education. </p>
        <p>Right to education is the basic human rights and it has been ensured as the fundamental right in the Constitution of Nepal 2015 and we hope that it will be ensured in upcoming Constitution as well.</p>
        <p>Merely ensuring it in legal frame work is not the overall thing to ensure right. If we see those nook and corner of the societies we still see that there are numerous people who are not educated. they might be literate but not educated as well. In the same way, there are numerous youth who are literate but unemployed. It is a vicious circle.</p>
        <p>So, we tried to do something. it might be concept of many but we tried to bring it in the floor. we tried to share it and tried to so few steps to solve the problem form our side. we hope you will join with us....</p>
    </div>
    <div class="col-md-4 image">
        <img src="images/intro.jpg" alt="Made by kids and for the kids" width="110%" class="img-responsive">
    </div>
  </div>
</div>

<!-- Volunterr section -->
<div class="volunteer">
  <h2>We help many people</h2>
  <h5>Want to become a <span>Volunteer?</span></h5>

  <button id="modalBtn" class="btn">Apply Now</button>

<div id="simpleModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
        <span class="closeBtn">&times;</span>
        <h2>Become a volunteer</h2>
    </div>
    <div class="modal-body">
        <p id="form-message"></p>
    <div id="section">
    <section class="contact-wrap callForVolunteer">
      <form action="mail.php" class="contact-form" method="post">
      <div class="col-sm-6">
        <div class="input-block">
        <label for="">First Name</label>
        <input type="text" class="form-control" name="firstName" value="<?php echo $fname;?>">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" class="form-control" name="lastName" value="<?php echo $lname;?>">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block">
        <label for="">Phone number</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
        </div>
      </div>
      <div class="col-sm-12">
        <button class="square-button" type="submit" name="submit">Apply</button>
      </div>
      </form>
    </section>

</div>
    
    </div>
  </div>
</div>

</div>



<!-- main goal of saaphu -->
<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-md-4">
      <img src="images/health_camp.jpg" alt="Health Camp organized of Saaphu" class="img-responsive">
    </div>
    <div class="col-md-8">
      <h2 style="color: rgb(255, 113, 208);">Our aim</h2>
      <p style="font-size: 25px;">Saaphu aims to: 
        <ol style="font-size: 20px;">
          <li>Provide quality education</li>
          <li>Ensure accessibility, availability and adequacy of quality education</li>
          <li>To advise necessary policies and law making authorities to enhance quality education</li>
          <li>To conduct research relating to education</li>
          <li>To help to establish libraries and provide other necessary equipments for ensuring quality education</li>
          <li>To eliminate any form of discrimination regarding race, sex and color on education</li>
          <li>To conduct program to encourage the school dropout student to enroll in school</li>
          <li>To publish books and research articles regarding education </li>
          <li>To raise voice against corruption in education sector</li>
        </ol>
      </p>
    </div>
  </div>
</div>



<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script>

<?php include "includes/footer.php"; ?>

