<?php $page = "contact"; include "includes/header.php";
  
  // define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $subjectErr = $messageErr = "";
$fname = $lname =  $email = $subject = $message = "";

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
    
  if (empty($_POST["subject"])) {
    $subjectErr = "Message subject is required!";
  } else {
    $subject = test_input($_POST["subject"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
      $subjectErr = "Only letters and white space allowed in message subject!"; 
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "Please enter your message!";
  } else {
    $message = test_input($_POST["message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

///Send mail
    if($fname && $lname && $email && $subject && $message){
      $mailTo = "info@saaphu.org.np";
      $headers = "From: ".$email;
      $message = "You have received an e-mail from ".$fname.".\n\n".$message;
      mail($mailTo, $subject, $message, $headers);
      header("Location: index.php?mailsend");
    }
?>

<div id="section">

<section class="contact-wrap">
  <div>
    <p style = "color: red;"><?php  
      echo $fnameErr . "<br/>" . $lnameErr . "<br/>" . $emailErr . "<br/>" . $subjectErr . "<br/>" . $messageErr;
    
    ?></p>
  </div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact-form" method="post">
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
    <label for="">Message Subject</label>
    <input type="text" class="form-control" name="subject" value="<?php echo $subject;?>">
    </div>
  </div>
  <div class="col-sm-12">
    <div class="input-block textarea">
    <label for="">Drop your message here</label>
    <textarea rows="3" type="text" class="form-control" name="message" value="<?php echo $message;?>"></textarea>
    </div>
  </div>
  <div class="col-sm-12">
    <button class="square-button" type="submit" name="submit">Send</button>
  </div>
  </form>
</section>

</div>


<?php include "includes/footer.php" ?>