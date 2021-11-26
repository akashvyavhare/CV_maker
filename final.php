<?php
$name=$_POST["uname"];
$gender=$_POST["gender"];
$bdate=$_POST["bdate"];
$add=$_POST["add"];
$deg=$_POST["deg"];
$hsc=$_POST["hsc"];
$ssc= $_POST["ssc"];
$mobile= $_POST["mobnum"];
$mail=$_POST["mailid"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body align=center>
  <h1>your resume</h1>
  <div>
  <h4>Personal Info:-</h4> <br>
  Name:<? echo $name;?><br>
  Gender:<?php echo $gender;?><br>
  Birth Date:<?php echo $bdate;?><br>
  Address:<?php echo $add;?><br><br>
  <h4>Education:-</h4><br>
  Degree:<?php echo $deg;?><br>
  12th:<?php echo $hsc;?><br>
  10th:<?php echo $ssc;?><br><br>
  <h4>Contact Info:</h4><br>
  Email:<?php echo $mail;?><br>
  Mobile:<?php echo $mobile;?><br>


    
  </div>
</body>
</html>