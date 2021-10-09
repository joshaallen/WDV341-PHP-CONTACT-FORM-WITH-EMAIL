<?php 
//Setting up data model
    $inFirstName;
    $inLastName;
    $inEmail;
    $reasons;
    $inComment;
    $mailTo;
    $date;
if(isset($_POST['submit'])){
//Processing form data
$date = date('m/d/Y');
$inFirstName = strip_tags($_POST['firstName']);
$inLastName = strip_tags($_POST['lastName']);
$inEmail = $_POST['email'];
$reasons = $_POST['reasons'];
$inComment = strip_tags($_POST['comment']);
}
//Building Email
$mailTo = "$inEmail, joshuaa2003@joshuaallen.info";
$subject = "Thank You for contacting us $inFirstName $inLastName";
$message = '
<html>
<head>
<title>New York Giants Fan Page Email</title>
</head>
<body style="background-color: #4373a7; padding: 30px 0 0 30px; color:white; height:300px; border-radius: 50px 20px; 
">
<p>Dear ' . $inFirstName . ',</p>
<p>We received your comment on ' . $date . ' and appreciate you contacting us for ' . $reasons . '</p>
<p>We look forward to seeing more of you. <strong><span style="text-transform: uppercase;font-size: 30px;">Go <span style="color: red;">Giants</span>!!!!!</span></strong></p>
</body>
</html>
';

//Set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=ISO-8859-1" . "\r\n";

$headers .= 'From: <joshuaa2003@joshuaallen.info>' . "\r\n";

mail($mailTo,$subject,$message,$headers);

?>;
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Handler</title>
  <link rel="stylesheet" href="reset2.css" type="text/css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Load an icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="finalProject.css" type="text/css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
            <span class="icon-bar" style="color:black;"></span>
            <sp class="icon-bar" style="colo;
            <span class="icon-bar" style="color:black;"></span>
          </button>
          <a href="#" navbar-brand>
            <img src="../../../images/squareHelmet1.png">
            <span style="color:red; font-size: 2rem;">Giants</span>
            <span style="color:white; font-size: 2rem;">FanPage</span>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="mainNavbar">
          <ul class="nav navbar-nav">
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Team History</a>
            </li>
            <li>
              <a href="#">Team Rivalries</a>
            </li>

            <li>
              <a href="#">Contact Us</a>
            </li>
            <li>
              <a href="#">Fan Posts</a>
            </li>
            <li>
              <a href="#">Homework Page</a>
            </li>
          </ul>
        </div>
      </div>
      <!--end of coantainer-->
    </nav>
    <div class="jumbotron">
      <h1>Contact Us</h1>
    </div>
        <h3 style="text-align:center;color: white;">Thank for your submission!!!</h3>
      <div style="font-size: 20px;text-align: center;height: 400px; background-color: white;border-radius: 50px 50px;box-shadow: 5px 10px 8px #888888;">
      <?php
      foreach($_POST as $key => $value) {
        
        echo '<p style="border-bottom:2px solid #4373a7;margin-bottom: 40px;">' . $key . " " . "Value is: " .  $value . "</p>" ;
      }
    ?>
      </div>
    </div>
  <!--end of container-->
</body>
</html>

