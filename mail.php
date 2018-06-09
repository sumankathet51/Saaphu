<?php include "includes/header.php";

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

    <div id="section">
    <section class="contact-wrap callForVolunteer">
    <p style = "color: red;"><?php  
      echo $fnameErr . "<br/>" . $lnameErr . "<br/>" . $emailErr . "<br/>" . $phoneErr ;
    
    ?></p>
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