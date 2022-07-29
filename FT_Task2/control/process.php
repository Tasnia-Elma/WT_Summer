<?php
include("../model/db.php");
if(isset($_REQUEST["Submission"])){
    $validdes="";
    $validpl="";
    $validpic="";
    $nameerr="";
    $lnameerr="";
    $validateemail="";
    $validatepass="";
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["Email"];
    $pass=$_REQUEST["pass"];
  
    IF(empty($fname)){
    $nameerr=" Please Enter your First name ?";
    }

    if(is_numeric($fname) ){
        echo "First name  is numeric <br>";
        
    }
    else{
        echo "Not Numeric Number<br>";
    }
        
    
    if(empty($lname)){
        
        $lnameerr=" Please enter your Last Name ?";

        if(is_numeric($lname)){
            echo "Last Name is Numeric<br>";

        }
        else{
            echo "Not numeric Number<br>";
        }
        
        }
    
    
    if(empty($email)){
        $validateemail="Please enter a valid email .";
        echo "Email field is empty<br>";
    }
    else{
        echo "Email field is not empty<br>";
    }
    
    if(strlen($pass)<6){
        $validatepass="Password length must be more than 6 characters.";
        echo "Password must be more than 6 characters<br>";
        
    }
    else{
        echo "Password is valid<br>";
    }
    if(isset($_REQUEST["designation"])){
        $validdes=$_REQUEST["designation"];	

    }
    else{  
        echo "Please select a Designation<br>";
    }
    if(isset($_FILES["myfile"]["name"])){
        $validpic=$_FILES["myfile"]["name"];	

    }
    else{  
        echo "Please select a picture<br>";
    }

    if(isset($_REQUEST["P_Language"])){
        $validpl=$_REQUEST["P_Language"];	

    }
    else{  
        echo "Please select a Language<br>";
    }
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
    {
        echo "File has been uploaded<br>";

        
    }
    else{
        echo "File uploading error!<br>";
    }
    if(empty($fname)||empty($lname)||empty($age)||empty(isset($_REQUEST["designation"]))||empty($_REQUEST["P_Language"])||empty($email)||empty($pass)||empty($validpic)){
        echo "Please fill up all the fields";
    }
     else{
        $mydb=new db();
        $myconn=$mydb->opencon();
        $mydb->insertuser($fname,$lname,$age,$validdes,$validpl,$email,$pass,$validpic,"employee",$myconn);

     }
    
    


}


?>