<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;">
<h2>Create Your CV</h2><hr>
    <form action="edu.php" method="post">
    <table align="center" >
    <th> <h3>Personal Info:</h3><hr><br>
    </th>
    <tr>
    <td>Your Full Name:
    <input type="text" name="uname">
    </td>
    </tr>
    <br>
    <tr>
    <td>Gender:
    <input type="radio" name="gender" value="male">Male.
    <input type="radio" name="gender" value="female">Female.
    </td>
    </tr>
    <br>
    <tr>
    <td>Birth Date:
    <input type="date" name="bdate">
    </td>
    </tr>
    <br>
    <tr>
    <td>Address:
    <input type="text" name="add">
    </td>
    </tr>
    </table>
    <br>
    <input type="submit">
    </form>
  
</body>
</html>