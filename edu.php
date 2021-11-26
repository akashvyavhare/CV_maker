<?php
$name=$_POST["uname"];
$gender=$_POST["gender"];
$bdate=$_POST["bdate"];
$add=$_POST["add"];
Echo $name;
Echo "<br>";
Echo $add;
Echo "<br>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;">
<h2>Create Your CV</h2><hr>
    <form action="contact.php" method="post">
    <table align="center" >
    <th> <h3>Education Info:</h3><hr><br>
    </th>
    <tr>
    <td>Degree College:
    <input type="text" name="deg">
    </td>
    </tr>
    <br>
    <tr>
    <td>12 (HSC) / Diploma:
    <input type="text" name="hsc">
    
    </td>
    </tr>
    <br>
    <tr>
    <td>10Th(SSC):
    <input type="text" name="ssc">
    </td>
    </tr>
   

  
    </table>
    <br>
    <input type="submit">

    <input type="hidden" name="uname" value=<?php echo $name;?>>
    <input type="hidden" name="gender" value=<?php echo $gender;?>>
    <input type="hidden" name="add" value=<?php echo $add;?>>
    <input type="hidden" name="bdate" value=<?php echo $bdate;?>>
   
    </form>
  
</body>
</html>