<? session_start();?>
<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$teg=$_GET['tig'];

$domain=$_SERVER['SERVER_NAME'];

$reset=$_GET['reset'];
if($reset=="yes"){
unlink("admin/token.php");
echo '<script>alert("Postback Changed...! Update your new Postback link, where you used the old link.")</script>';
echo"<script>window.history.back(); </script>";   
}
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
if(file_exists("admin/token.php")){
include("admin/token.php");
}else{
$token=substr(str_shuffle("OXPAQVNDGIPLJGHFREWCZSA1234567890"), 0, 6); 
$tdata='<?php $token="'.$token.'";?>';
file_put_contents("admin/token.php",$tdata);
}

?>

<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-1" style="font-size:25px !important;">
<span class="login100-form-title p-b-0" style="font-size:25px !important; font-family: "Corben", cursive;">
<center>
<b>
<h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-radius: 15px; padding-bottom:3px; width:70%;" >POSTBACK</h4></b>
<br><a href='postback.php?reset=yes'><button class='submit'>♻️ Reset Token</button></a><br><br>
	<div style=' padding:10px; background: white; border-top:1px solid red;border-right:1px solid red;border-bottom:1px solid blue;border-left:1px solid blue; border-radius:5px;'>
<font color='brown' style='font-weight:600;'>For Offer18</font>
<font color='brown' size='1' style='font-weight:100;'>{aff_click_id}|{sub_aff_id}</font><br>
            <center> <input type='text' readonly id='num'class='input' value='https://<?php echo$domain;?>/api.php?token=<?php echo$token;?>&refer={sub_aff_id}&user={aff_click_id}&offerid={offerid}&event={event_name}&ip={ip}'><button class='submit' id='submit' onclick='myFunction()'>Copy</button></center> </div>		
			
			<br>
			
			
			<br>
			
			<div style=' padding:10px; background: white; border-top:1px solid red;border-right:1px solid red;border-bottom:1px solid blue;border-left:1px solid blue; border-radius:5px;'>
<font color='brown' size='2' style='font-weight:600;'>For other type affiliate panel<br>Replace {aff_click_id} {sub_aff_id} {offerid} {event_name} {ip} with their postback parameters.</font>
</center> </div>		
			
			<br>
</span></span>
<script>
function myFunction() {
  var copyText = document.getElementById("num");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Postback Link Copied for Offer18");
}</script>
</body></html>
