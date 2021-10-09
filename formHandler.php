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
$inFirstName = strip_tags($_POST['firstName']);
$inLastName = strip_tags($_POST['lastName']);
$inEmail = $_POST['email'];
$reasons = $_POST['reasons'];
$inComment = strip_tags($_POST['comment']);
$mailTo = "joshuaa2003@joshuaallen.info";

//Building Email

}
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
    <div class="row">
      <div class="col-sm-5">
      <p style="height:600px;width:600px;margin:0 auto; background-color:lightblue">
    <?php echo $_POST['firstName'] ?>
    <br>
    <?php echo $_POST['lastName'] ?>
    <br>
    <?php echo $_POST['email'] ?> 
    <br>
    <?php echo $_POST['reasons'] ?>
    <br>
    <?php echo $_POST['contact'] ?>
    <br>
    <?php echo $_POST['comment'] ?>
  </p>
      </div>
    </div>
  </div>
  <!--end of container-->
</body>
</html>

