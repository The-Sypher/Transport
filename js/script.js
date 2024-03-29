//Needed to be initialized
$(document).ready(function () {
    $("[data-toggle='tooltip']").tooltip();
});
$("#anchor").click( function (e) {
    e.preventDefault();
    $( "body" ).animate({
        scrollTop: $( "#contactUs" ).offset().top
    },2000);
});
function validate()
{

    var name = document.getElementById( "fname" );
    var lname = document.getElementById( "last" );
    var mail = document.getElementById( "email" );
    var nmb = document.getElementById( "tel" );
    var age = document.getElementById( "age" );
    var address = document.getElementById( "address" );
    var pwd = document.getElementById( "pass" );
    var states = document.getElementById( "state" );
    var dob = document.getElementById("dob");
    var license = document.getElementById("license");

    if ( isName( name, "Please enter name" ) )
    {
        if ( lName( lname, "Please enter  last name" ) )
        {
            if ( isEmail( mail, "Please enter a valid email address" ) )
            {
                if ( isPass( pwd, "Enter password" ) )
                {
                    if ( Isage( age, 18 ) )
                    {
                        if ( isNumber( nmb, "Please enter valid phone number" ) )
                        {
                            if ( isAdd( address, "Please enter valid address" ) )
                            {
                                if(isdob(dob, "Please select date"))
                                {
                                    if ( myState( states, "Choose a state" ) )
                                    {
                                        if(isli(license, "Please enter valid license number"))
                                        {
                                            return true;
                                        }
                                    }   
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}

function notEmpty( elem, helperMsg )
{
    if ( elem.value == "" )
    {
        alert( helperMsg );
        elem.focus();
        return false;
    }
    return true;
}

function isName( elem, helperMsg )
{
    var al = /^[a-zA-Z]+$/;
    if ( elem.value.match( al ) )
    {
        return true;
    }
    else
    {
        alert( helperMsg );
        elem.focus();
        return false;
    }
}

function lName( elem, helperMsg )
{
    var last = /^[a-zA-Z]+$/;
    if ( elem.value.match( last ) )
    {
        return true;
    }
    else
    {
        alert( helperMsg );
        elem.focus();
        return false;
    }
}

function isEmail( elem, helperMsg )
{
    var em = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if ( elem.value.match( em ) )
    {
        return true;
    }
    else
    {
        alert( helperMsg );
        elem.focus();
        return false;
    }
}
function isdob(elem, helperMsg)
{
    if(elem.value)
    {
        return true;
    }
    else
    {
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
function isNumber( elem, helperMsg )
{
    var num = /^[0-9]+$/;
    if ( elem.value.match( num ) )
    {
        return true;
    }
    else
    {
        alert( helperMsg);
        elem.focus();
        return false;
    }
}

function Isage( elem, min )
{
    if ( elem.value >= min )
    {
        return true;
    }
    else
    {
        alert( "Person should be above 18 yrs of age" );
        elem.focus();
        return false;
    }
}

function isAdd( elem, helperMsg )
{
    var ad = /^[a-zA-Z0-9\s,'-]+$/;
    if ( elem.value.match( ad ) )
    {
        return true;
    }
    else
    {
        alert( helperMsg );
        elem.focus();
        return false;
    }
}

function myState( elem, helperMsg )
{
    if (elem.value == " ")
    {
        alert( helperMsg );
        elem.focus();
        return false;
    } 
    else
    {
        return true;
    }
}

function isPass( elem, helperMsg )
{
    var p = /^[0-9a-zA-Z]+$/;
    if ( elem.value.match( p ) )
    {
        return true;
    }
    else
    {
        alert( helperMsg );
        elem.focus();
        return false;
    }
}

function isli( elem, helperMsg)
{
    var regex = /^(([A-Z]{2}[0-9]{2}( ))|([A-Z]{2}-[0-9]{2}))((19|20)[0-9][0-9])([0-9]{7})+$/;
    if(elem.value.match(regex))
    {
        return true;
    }
    else
    {
        alert(helperMsg);
        elem.focus;
        return false;
    }
}

function val()
{
    var email = document.getElementById("email");
    var pass = document.getElementById("password");

    if(notEmpty(email, "Please enter email"))
    {
        if(notEmpty(pass, "Please enter password"))
        {
            if(isEmail(email, "Enter valid e-mail address"))
            {
                if(isPass(pass, "Please enter valid password"))
                {
                    return true;
                }
            }
        }
    }
    return false;
}
