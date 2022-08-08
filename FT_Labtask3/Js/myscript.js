
function checkname()
{
    var namevalue = document.getElementById("name").value;
    var fname_p= /^[A-Za-z]+$/;
    var fc= fname_p.test(namevalue);
    if(!isNaN(namevalue) )
    {
        document.getElementById("nameerror").innerHTML="Name can't be a number";
        return false;
    }
    else if(isNaN(namevalue) && fc)
    {
        document.getElementById("nameerror").innerHTML="Name is correct";
        return true;
    }
}

function checklname()
{
    var namevalue = document.getElementById("lname").value;
    if(!isNaN(namevalue))
    {
        document.getElementById("lnameerror").innerHTML="Name can't be a number";
        return false;
    }
    
    else
    {
        document.getElementById("lnameerror").innerHTML="Name is correct";
        return true;
    }
}

function getradiovalue()
{
    if(document.getElementById("juniorprogrammer").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="Junior Programmer Has been checked";
        return true;
    }
    else if(document.getElementById("seniorprogrammer").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="Senior Programmer Has been checked";
        return true;
    }
    else if(document.getElementById("projectlead").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="Porject Lead Has been checked";
        return true;
    }
    else
    {
        document.getElementById("radiovalue").innerHTML="Please select a radio button";
       
        return false;

    }
}

function checkboxvalue()
{
    if(document.getElementById("Java").checked==true)
    {  var designation = document.getElementById("Java").value;
        document.getElementById("checkvalue").innerHTML=designation+" Has been checked";
        return true;
    }
    else if(document.getElementById("PHP").checked==true)
    {  var designation = document.getElementById("PHP").value;
        document.getElementById("checkvalue").innerHTML=designation+" Has been checked";
        return true;
    }
    else if(document.getElementById("C++").checked==true)
    {  var designation = document.getElementById("C++").value;
        document.getElementById("checkvalue").innerHTML=designation+" Has been checked";
        return true;
    }
    else
    {
        document.getElementById("checkvalue").innerHTML="Please Check a checkbox";
       
        return false;
    }
}

function email_check()

  {

    var email = document.getElementById("email").value;

    var email_pattern = /^\w+([-+.']\w+)*@[A-Za-z\d]+\.student.aiub$/;

    var em_check = email_pattern.test(email);

    if (em_check)

    {

        document.getElementById("erroremail").innerHTML="OK";

        return true;

    }

    else

    {

        document.getElementById("erroremail").innerHTML="Must Contain @ and .student.aiub";

        return false;

    }
}


function agecheck()
{
    var agevalue = document.getElementById("age").value;
    if(isNaN(agevalue) )
    {
        document.getElementById("ageerror").innerHTML="Age can't be a Alpahbet";
        return false;
    }
    else if( (agevalue.toString().length >=2))
    {
        document.getElementById("ageerror").innerHTML="Age is correct";
        return true;
    }
}

function passcheck()
{
    var pvalue =document.getElementById("pass").value;
    if( pvalue.lengh < 8)
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return true;
    }
    else if(pvalue.search(/[a-z]/i) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return false;
    }
    else if(pvalue.search(/[0-9]/) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return false;
    }
    else 
    {
        document.getElementById('passvalue').innerHTML="Pass is valid";
        return true;
    }

}

function formcheck()
{
    if(checkname() == true && checklname() == true && getradiovalue() == true && checkboxvalue() == true&& agecheck() == true && 
    validateemail() == true && passcheck() == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}