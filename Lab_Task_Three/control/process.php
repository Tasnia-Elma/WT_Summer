<?php
$passwordError="";
if(isset($_REQUEST["submit"]))
{
$name=$_REQUEST["fname"];
if(empty($name)){
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else{
    echo"<br>Your first name is ".$name;
}
$name2=$_REQUEST["lname"];
if(strlen($name2)<4)
if(empty($name2)){
    echo"<br>Your last name should not be empty";
}
else if(strlen($name2)<4)
{
    echo "<br>Last name should be more than 4 characters";
}
else{
    echo"<br>Your Last name is ".$name2;
}

if(isset($_REQUEST["des"]))
{
    $des=$_REQUEST["des"];
    echo "<br>Your designation is ".$des;
}
else{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["pref1"]) || isset($_REQUEST["pref2"]) || isset($_REQUEST["pref3"]))
{
    if(isset($_REQUEST["pref1"]) && isset($_REQUEST["pref2"]) && isset($_REQUEST["pref3"]) ){
        echo "<br> You have selected ".$_REQUEST["pref1"]." and ".$_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref1"]." and ".$_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
    }
    else if(isset($_REQUEST["pref1"]) && isset($_REQUEST["pref2"])){
        echo "<br> You have selected ".$_REQUEST["pref1"]." and ".$_REQUEST["pref2"];
        $prefdata = $_REQUEST["pref1"]." and ".$_REQUEST["pref2"];
    }
    else if(isset($_REQUEST["pref2"]) && isset($_REQUEST["pref3"])){
        echo "<br> You have selected ".$_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref2"]." and ".$_REQUEST["pref3"];
    }
    else if(isset($_REQUEST["pref1"]) && isset($_REQUEST["pref3"])){
        echo "<br> You have selected ".$_REQUEST["pref1"]." and ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref1"]." and ".$_REQUEST["pref3"];
    }
    else if(isset($_REQUEST["pref1"])){
        echo "<br> You have selected ".$_REQUEST["pref1"];
        $prefdata = $_REQUEST["pref1"];
    }
    else if(isset($_REQUEST["pref2"])){
        echo "<br> You have selected ".$_REQUEST["pref2"];
        $prefdata = $_REQUEST["pref2"];
    }
    else{
        echo "<br> You have selected ".$_REQUEST["pref3"];
        $prefdata = $_REQUEST["pref3"];
    }
}
else{
    echo "<br>You must select preferance";
}

if(empty($_REQUEST["male"])){
    echo "<br>Email should not be empty";
}
else{
    echo "<br>Your email is :".$_REQUEST["male"];
}

if(is_numeric($_REQUEST["password"])<2){
    $passwordError= "<br>Your password is valid";
}
else{
    echo "<br>Your password must contain 1 numerical value";
}
echo "<br>";
echo $_FILES["id"]["name"];
if(move_uploaded_file($_FILES["id"]["tmp_name"],"../upload/".$_FILES["id"]["name"]))
{
    echo "file uploaded";
}
else
{
    echo "file not uploaded";
}

$mydata =array('firstname'=>$name,'lastname'=>$name2,'password'=>$_REQUEST["password"],'des'=>$_REQUEST["des"],'file'=>$_FILES["id"]["name"], 'age'=>$_REQUEST["age"], 'prefered language'=>$prefdata);
$jsondata=json_encode($mydata,JSON_PRETTY_PRINT);

if(file_put_contents("../data/data.json",$jsondata))
{   echo "<br>";
    echo "data saved";}
    


}
?>