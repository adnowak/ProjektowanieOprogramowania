<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
$colorCookieName = "prefColor";
$prefColor = '#16147d';

if(isset($_COOKIE[$colorCookieName])) {
    $prefColor = "#" . $_COOKIE[$colorCookieName] ;
}else{

}
?>



header {
    color: white;
    text-align: center;
    background-color: <?=$prefColor?>;
}

header h1 {
    color: white;
    font-size: 2.5em;
    width: 99.4%;
    margin: auto;
    float: left;
    text-align: center;
    padding: 0.3%;
    margin-bottom: 3%;
    padding-top: 0.8%;
    background-color: <?=$prefColor?>;
}

h3 {
  
    padding: 0.5%;
}

.sideButton {
    width: 25%;
    height: auto;
}

#settings
{
    display: block;
    float: right;
}

#logout
{
    display: block;
    float: left;
}

.back2 {
    background-color:  <?=$prefColor?>;
    color: white;
    border-bottom: 1px solid #c9c9f5;
    border-radius: 16px;
    padding: 1%;
    text-decoration: none;
    position: absolute;
    left: 2px;
    top : 0.5%;
    padding: 0.7%;

}

body {
    width: 100%;
    margin: 0;
    font-family: 'MyWebFont', Fallback, sans-serif;
}

main {
    width: 100%;
    height: 100%;
    margin: auto;
    font-size: 1.25em;
    margin-top: 24px;
    text-align: center;
}

img {
    height: auto;
    width: 33%;
}


#colors {
    display: block;
    margin-left: 32%;
}

.colorPicker {
    float: left;
    margin: 0.5vw;
    min-height: 5vw;
    min-width: 5vw;
    display: block;
    border-top: 1px solid #c9c9f5;
    border-bottom: 1px solid #c9c9f5;
    border-radius: 16px;
}

#loginPositioner
{
    margin-top: 10%;
    background-color: <?=$prefColor?>;
    width: 30%;
    border-radius: 16px;
    border: 1px solid #c9c9f5;
    box-shadow: 3px 3px 30px 5px <?=$prefColor?>;;
}

#loginWrapper
{
    margin-top: 10%;
    margin-bottom: 10%;
}

.loginInput
{
    width: 80%;
    font-size: 20px;
    margin-top: 5%;
    border-radius: 5px;
    padding: 2%;
    outline: none;
}

.loginSubmit
{
    width: 80%;
    margin-top: 5%;
    margin-bottom: 5%;
    font-size: 20px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    padding: 3% 2%;
    outline: none;
}

#cookieConsent {
    background-color: rgba(20,20,20,0.8);
    min-height: 26px;
    font-size: 14px;
    color: #ccc;
    line-height: 26px;
    padding: 8px 0 8px 30px;
    font-family: "Trebuchet MS",Helvetica,sans-serif;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    display: none;
    z-index: 9999;
}
#cookieConsent a {
    color: #4B8EE7;
    text-decoration: none;
}
#closeCookieConsent {
    float: right;
    display: inline-block;
    cursor: pointer;
    height: 20px;
    width: 20px;
    margin: -15px 0 0 0;
    font-weight: bold;
}
#closeCookieConsent:hover {
    color: #FFF;
}
#cookieConsent a.cookieConsentOK {
    background-color: <?=$prefColor?>;
    color: #fff;
    display: inline-block;
    border-radius: 5px;
    padding: 0 20px;
    cursor: pointer;
    float: right;
    margin: 0 60px 0 10px;
}
#cookieConsent a.cookieConsentOK:hover {
    background-color: <?=$prefColor?>;
}
