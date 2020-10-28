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
    var gend = document.getElementsByName( "gender" );
    var age = document.getElementById( "age" );
    var address = document.getElementById( "address" );
    var pwd = document.getElementById( "pass" );
    var states = document.getElementById( "state" );

    if ( isName( name, "Please enter name" ) )
    {
        if ( lName( lname, "Please enter  last name" ) )
        {
            if ( isEmail( mail, "Please enter a valid email address" ) )
            {
                if ( Isage( age, 18 ) )
                {
                    if ( isPass( pwd, "Enter password" ) )
                    {
                        if ( isNumber( nmb, "Please enter valid phone number" ) )
                        {
                            if ( isAdd( address, "Please enter valid address" ) )
                            {
                                if ( myState( states, "Choose a state" ) )
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

function isNumber( elem, helperMsg )
{
    var num = /^[0-9]+$/;
    if ( elem.value.match( num ) )
    {
        return true;
    }
    else
    {
        alert( "Please enter valid phone number" )
        elem.focus();
        return false;
    }
}

function isGen( elem, helperMsg )
{
    if ( elem[ 0 ].checked == true || elem[ 1 ].checked == true )
    {
        return true;
    }
    else
    {
        alert( helperMsg );
        elem[ 0 ].focus();
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
    var ad = /^[a-zA-Z0-9\s,'-]*$/;
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
    if ( elem.value == "Please Choose" )
    {
        alert( helperMsg );
        elem.focus();
        return false;
    } else
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