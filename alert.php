<? session_start();?>
<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$teg=$_GET['tig'];

$domain=$_SERVER['SERVER_NAME'];

$token=$_POST['token'];
if($token){
$tg=$_POST['tg'];
$chhan=$_POST['channel'];   
$a11="@";
$a12="https://t.me/";
$p1=str_replace($a11,"",$chhan);
$tig=str_replace($a12,"",$p1);
$chha=str_replace(" ","",$tig);
$tdata='<?php $bot_token="'.$token.'"; $tg="'.$tg.'"; $chha="'.$chha.'";?>';
file_put_contents("admin/alert.php",$tdata);
echo '<script>alert("Alert Data Updated")</script>';
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

include("admin/alert.php");

?>

<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-1" style="font-size:25px !important;">
<span class="login100-form-title p-b-0" style="font-size:25px !important; font-family: "Corben", cursive;">
<center>
<b>
<h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-radius: 15px; padding-bottom:3px; width:70%;" >ALERT DATA</h4></b>
<br><form method="POST" autocomplete="off">
    <input type="text" class="input" name="token" placeholder="Bot Token" value="<?php echo$bot_token;?>">
    
    <input type="text" class="input" name="tg" placeholder="User id" value="<?php echo$tg;?>">
    
    <input type="text" class="input" name="channel" placeholder="Channel Link" value="<?php echo$chha;?>">
    <button type="submit" class="submit">Set</button>
</form><br>
<div style=' padding:10px; background: white; border-top:1px solid red;border-right:1px solid red;border-bottom:1px solid blue;border-left:1px solid blue; border-radius:5px;'>
<font color='brown' size='2' style='font-weight:300;'>Create bot and get Bot Token from <font color='blue' size='2' style='font-weight:600;'><a href="https://telegram.me/BotFather_bot"><u>Bot Father</u></a></font>, Get User id from <font color='blue' size='2' style='font-weight:600;'><a href="https://telegram.me/userinfobot"><u>Userinfo Bot</u></a></font> and if you want to update channel users also Paste yor Payment alert channel link and make your created bot admin (Give send message permission).</font>
</center> </div>		
</span></span>

</body></html>
