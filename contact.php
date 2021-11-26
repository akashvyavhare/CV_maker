<?php
$name=$_POST["uname"];
$gender=$_POST["gender"];
$bdate=$_POST["bdate"];
$add=$_POST["add"];
$deg=$_POST["deg"];
$hsc=$_POST["hsc"];
$ssc= $_POST["ssc"];
echo $deg;
echo $hsc;
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
    <form action="final.php" method="post">
    <table align="center" >
    <th> <h3>Contact Info:</h3><hr><br>
    </th>
    <tr>
    <td>Mail Id:
    <input type="mail" name="mailid">
    </td>
    </tr>
    <br>
    <tr>
    <td>Mobile No:
    <input type="number" name="mobnum">
    
    </td>
    </tr>
    <br>
    <tr>
    <td>Home Address:
    <input type="text" name="homadd">
    </td>
    </tr>
   
    <input type="hidden" name="uname" value=<?php echo $name;?>>
    <input type="hidden" name="gender" value=<?php echo $gender;?>>
    <input type="hidden" name="add" value=<?php echo $add;?>>
    <input type="hidden" name="bdate" value=<?php echo $bdate;?>>
    <input type="hidden" name="deg" value=<?php echo $deg;?>>

    <input type="hidden" name="hsc" value=<?php echo $hsc;?>>
    <input type="hidden" name="ssc" value=<?php echo $ssc;?>>
  
    </table>
    <br>
    <input type="submit">
    </form>
  
</body>
</html>