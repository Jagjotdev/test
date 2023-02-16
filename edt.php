<? session_start();?>
<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$teg=$_GET['tig'];

?>


<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Campaign Maker Panel</title> 
	<link rel="icon" type="image/png" href="<?php echo $logo;?>"/>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/new.css">
		<link rel="stylesheet" type="text/css" href="css/neww.css">

	<link rel="stylesheet" type="text/css" href="css/main1.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>

.name{
    text-align: center;
        color: black;
        font-family: 'Montserrat';
        font-size: 15px;
        font-weight: 300;
        border-top: solid blue 1px;
        border-right: solid blue 1px;
        border-left: solid blue 1px;
        padding-right: 10px;
        padding-left: 10px;
        padding-top: 3px;
        border-radius: 4px
}
        .input{
        display: block;
        width: 90%;
        margin: 5px auto;
        text-align: center;
        color: black;
        font-family: 'Montserrat';
        padding: 0;
        font-size: 15px;
        font-weight: 500;
        height: 38px;
        border: 1px solid #047aed;
        border-radius: 4px;
        background-color: #E1F5FE;
        outline: none;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);}
    
    .submit { background: #fff; padding: 6px; width: 150px; height: 40px; border: 1px solid #FF4081; margin-top: 10px; cursor: pointer; transition: 0.3s; box-shadow: 0 50px #FF4081 inset; color: #fff; font-family: 'Rajdhani', sans-serif;}.btn:hover { box-shadow: 0 0 #FF4081 inset; color: #FF4081;}.btn:focus { outline: none;}
    
</style>	
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{include("user.php");}
$id=$_GET['camp'];
include("admin/main.php");
$file="$cdb/$id/$id.json";
$json_object=file_get_contents($file);
$dec=json_decode($json_object,true);
$trklink=$dec['url'];
$cn=$dec['cname'];
$csn=$dec['sname'];
$uamo=$dec['peruser'];
$refamo=$dec['ref'];
$stp1=$dec['con1'];
$stp2=$dec['con2'];
$stp3=$dec['con3'];
$stp4=$dec['con4'];
$task=$dec['task'];
$typ=$dec['typ'];

?>

<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-1" style="font-size:25px !important;">
<span class="login100-form-title p-b-0" style="font-size:25px !important; font-family: "Corben", cursive;">
<center>
<b>
<h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-radius: 15px; padding-bottom:3px; width:70%;" >CAMPAIGN EDITOR</h4></b>
<form method="GET" action="edited.php">
<div class="form-group">
    <font color="red">&#x29EA;</font><br>
    <br>
     <input type="hidden"class='input5' name="typ" value="f">

    <font class="name">Tracking Link</font><br><input type="text"class="input5" name="url" Placeholder="Tracking Link" value="<?php echo$trklink;?>">
     <br><font class="name">Campaign Name</font><br><input type="text"class="input4" name="cname" Placeholder="Campaign Name" value="<?php echo$cn;?>">
    <input type="hidden"class="input3" name="sname" Placeholder="Campaign Short Name"value="<?php echo$csn;?>" readonly>
        <br><font class="name">User Amount</font><br><input type="number"class="input2" name="peruser" Placeholder="Amount per user " value="<?php echo$uamo;?>">
    <br><font class="name">Refer Amount</font><br><input type="number" class="input1" name="ref" Placeholder="Amount per refer " value="<?php echo$refamo;?>">
    <br><font class="name">Task to do</font><br><input type="text"class="input4" name="task" Placeholder="Task to do" value="<?php echo$task;?>">
     <br><font class="name">Step-1</font><br><input type="text"class="input" name="pnum" Placeholder="Step 1: Enter Your Number"  readonly value="Enter Your Number" readonly>
    <br><font class="name">Step-2</font><br><input type="text"class="input" name="con1" Placeholder="Step 2:                                   " value="<?php echo$stp1;?>">
       <br><font class="name">Step-3</font><br> <input type="text"class="input" name="con2" Placeholder="Step 3:                                   " value="<?php echo$stp2;?>">
    <br><font class="name">Step-4</font><br><input type="text"class="input" name="con3" Placeholder="Step 4:                                   " value="<?php echo$stp3;?>">
     <br><font class="name">Step-5</font><br><input type="text"class="input" name="con4" Placeholder="Step 5:                                   " value="<?php echo$stp4;?>">
    <input type="Submit"class="submit" name="submit" value="Edit Camp"></span></span>
</body>
