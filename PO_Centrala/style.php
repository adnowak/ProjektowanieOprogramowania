<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
$prefColor = '#16147d';

?>

.formWrapper
{
    width: 50%;
    margin: auto;
    margin-top: 5%;
}

header {
    background-color:  <?=$prefColor?>;
    color: white;
    text-align: center;
}

header h1 {
    background-color:  <?=$prefColor?>;
    color: white;
    font-size: 2.5em;
    width: 100%;
    margin: auto;
    float: left;
    margin-bottom: 3%;
}

caption {
    font-size: 2em;
    padding: 0.5%;
}


body {
    color: black;
    width: 100%;
    margin: 0;
    text-align: center;
}

form {
    font-size: 1em;
    width: 100%;
    height: 60%;
    text-align: right;
    display: grid;
    grid-template-columns: 20% 80%;
}

.infobox {
    font-size: 2 em;
    color: red;
    position: absolute;
    left: 12%;
    top : 12%;
    padding: 0.5%;
}

input {
    font-size: 1em;
    margin: auto;
    margin-top: 0;
    margin-left: 5%;
    width: 70%;
    padding: 2%;
    border-bottom: 1px solid #c9c9f5;
    border-radius: 16px;
}


.submit{
    background-color:  <?=$prefColor?>;
    color: white;
    margin-left: 7%;
    grid-column: 2;
}

a{
    background-color:  <?=$prefColor?>;
    color: white;
    border-bottom: 1px solid #c9c9f5;
    border-radius: 16px;
    padding: 1%;
    text-decoration: none;
    margin: auto;
}

#new{
    position: fixed;
    bottom: 3%;
    right: 3%;
}


.back {
    position: absolute;
    left: 1%;
    top : 0.5%;
    padding: 0.5%;

}




.back2 {
    position: absolute;
    left: 2px;
    top : 0.5%;
    padding: 0.7%;

}

table {
    width: 100%;

}

.error{
    color: red;
    text-align: left;
}

.scrollable {
    width: 50%;
    position: absolute;
    right: 0;
    top: 5%;
    overflow: scroll;
    height: 95%;
}

 tr {
    background-color: white;
}

th {
    background-color:  <?=$prefColor?>;
    color: white;
    border-radius: 16px;
    border: none;
    padding: 12px;
}

td {
    padding: 12px;
    border-bottom: 1px solid #c9c9f5;
    border-radius: 16px;
    overflow-wrap: break-word;

}

 tr:hover {
    background-color: #f3f3f3;
}
