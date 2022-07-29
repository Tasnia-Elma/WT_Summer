<?php
include("../control/process.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cs.css">
</head>
<body>
    <div class="header">
        <h1>ABC MANAGEMANT SYSTEM </h1>
        <h3> We create Future </h3>
    </div>
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>
  

</div>
<div class="regform">
<h1>Registration Form </h1>
<hr>
</div>
    
    <!-- enctype use when use $_FILES -->
    <form action="" method="POST" enctype ="multipart/form-data">
        <table>
            
            <tr>
                <td>
                    First Name :
                </td>
                <td>
                    <input type="text"  name = "fname" >
                </td>
                
            </tr>
            <tr>
                <td>
                    Last Name :
                </td>
                <td>
                    <input type="text"  name = "lname" >
                </td>
            </tr>
            <tr>
                <td>
                    Age :
                </td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
            <tr><td>Designation:</td>

<td><input type="radio" name="designation" value="Junior Programmer" >Junior Programmer

<input type="radio" name="designation" value="Senior Programmer" >Senior Programmer

<input type="radio" name="designation" value="Project_Lead" >Project Lead</td>
</tr>

<tr><td>Preferred language</td>

<td><input type="checkbox" name="P_Language" value="java">Java

<input type="checkbox" name="P_Language" value="php">PHP

<input type="checkbox" name="P_Language" value="c++">C++

</td></tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="text`" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr>
            <tr>
                <td>
                    PLease choose a file : 
                </td>
                <td>
                <input type="file" name="myfile">
                </td>

            </tr>
            

        </table>
        
                <input type="submit" name="submit" class="button" value="Submit">
                
                
              
                <input type="reset" name="reset" class="button" value="Reset">
                
    </form>
    
</body>
</html>