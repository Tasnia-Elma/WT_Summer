<?php

include("../control./process.php");
?>
<html>
    <head>
        <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
     <form action="" method="POST" enctype="multipart/form-data">
         <table>
             
         <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="lname"></td></tr>
       <tr><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       

       <tr><td>Designation:</td>
       <td><input type="radio" name="des" value="J_pro">Junior Programmer 
       <input type="radio" name="des" value="S_pro">Senior Programmer 
       <input type="radio" name="des" value="P_lead">Project Lead</td></tr>
        

        <tr><td>Preferred Language:</td>
       <td><input type="checkbox" name="pref1" value="pref1">Java 
       <input type="checkbox" name="pref2" value="pref2">PHP 
       <input type="checkbox" name="pref3" value="pref3">C++</td></tr>

       <tr><td>Email:</td> 
       <td> <input type="text"  name="male"></td></tr>
       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td>
       <td>
       <?php
       echo $passwordError;?>
       </td>
       </tr>
       
       
       <tr><td>Please choose file </td>
        <td><input type="file"  name="id"></td></tr>
       
       <tr><td><input type="submit" name="submit" value="Submit">
        <input type="submit" name="submit" value="Reset"></td></tr>

</table>

</form>

</body>
</html>