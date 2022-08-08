<?php include "../Control/process.php"; ?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/myfirstcss.css">
</head>

<body>

    <div class="registrationBox">
        <h1 align="left">Registration form </h1>
    </div>
    <div class="frame">

    </div>

    <form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">

        <table>



            <tr>
                <td>
                    First Name:
                </td>
                <td>
                    <input type="text" name="fname" id="name" onkeyup="checkname()">
                </td>
                <td>
                    <p id="nameerror"></p>
                </td>
                <td><?php echo $nameErr; ?></td>
            </tr>
            <tr>
                <td>
                    Last Name:
                </td>
                <td>
                    <input type="text" name="lname" id="lname" onkeyup="checklname()">
                </td>
                <td>
                    <p id="lnameerror"></p>
                </td>
                <td><?php echo $name2Err; ?></td>
            </tr>
            <tr>
                <td>
                    Age:
                </td>
                <td>
                    <input type="text" name="age" id="age" onkeyup="agecheck()">
                </td>
                <td>
                    <p id="ageerror"></p>
                </td>
                <td><?php echo $AgeErr; ?></td>
            </tr>
            <tr>
                <td>
                    Designation:
                </td>
                <td>
                    <input type="radio" name="designation" value="juniorprogrammer" id="juniorprogrammer" onclick="getradiovalue()">Junior Programmer
                    <input type="radio" name="designation" value="seniorprogrammer" id="seniorprogrammer" onclick="getradiovalue()">Senior Programmer
                    <input type="radio" name="designation" value="projectlead" id="projectlead" onclick="getradiovalue()">Project Lead
                </td>
                <td>
                    <p id="radiovalue"></p>
                <td><?php echo $desigErr; ?></td>
            </tr>
            <tr>
                <td>
                    Preferred language:
                </td>
                <td>
                    <input type="checkbox" name="PreferredLanguage1" value="Java" id="Java" onclick="checkboxvalue()">JAVA
                    <input type="checkbox" name="PreferredLanguage2" value="PHP" id="PHP" onclick="checkboxvalue()">PHP
                    <input type="checkbox" name="PreferredLanguage3" value="C++" id="C++" onclick="checkboxvalue()">C++
                </td>
                <td>
                    <p id="checkvalue"></p>
                </td>
                <td><?php echo $LanErr; ?></td>
            </tr>
            <tr>
                <td>
                    E-mail:
                </td>
                <td>
                    <input type="email" name="email" id="email" onkeyup="validateemail()">
                </td>
                <td>
                    <p id="emailvalue"></p>
                </td>
                <td><?php echo $emailErr; ?></td>
            </tr>
            <tr>
                <td>
                    Enter a Password:
                </td>
                <td>
                    <input type="password" name="pass" id="pass" onkeyup="passcheck()">
                </td>
                <td>
                    <p id="passvalue"></p>
                </td>
                <td><?php echo $passErr; ?></td>
            </tr>
            <tr>
                <td>
                    Please choose a file
                </td>
                <td>
                    <input type="file" name="myfile">
                </td>
                <td><?php echo $fileErr; ?></td>
            </tr>

        </table>
        <input type="submit" class="button submit" name="Submit">
        <input type="reset" class="button reset" name="reset">
    </form>

    <!-- </div> -->

    <!-- <input type="text" id="myinput" onkeyup="afterclick()"> -->
    <!-- <p id="myprint">Output</p> -->
    <!-- <button onclick="afterclick()">My Button</button> -->
    <script src="../js/myscript.js"></script>
</body>

</html>