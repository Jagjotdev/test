<? session_start();?>
 <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{include("user.php");}
include("admin/main.php");
?>
<!DOCTYPE html><html lang='en'><head> <meta charset='UTF-8'> <meta name='viewport' content='width=device-width, initial-scale=1.0'> <title>CAMP MAKER PANEL</title> 	<link rel='icon' type='image/png' href='https://i.ibb.co/xH2sTT5/icon.png'/>

	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>

	<link rel='stylesheet' type='text/css' href='css/font-awesome.min.css'>

	<link rel='stylesheet' type='text/css' href='css/material-design-iconic-font.min.css'>

	<link rel='stylesheet' type='text/css' href='css/animate.css'>
	
	<link rel='stylesheet' type='text/css' href='css/hamburgers.min.css'>

	<link rel='stylesheet' type='text/css' href='css/animsition.min.css'>

	<link rel='stylesheet' type='text/css' href='css/select2.min.css'>
	
	<link rel='stylesheet' type='text/css' href='css/daterangepicker.css'>

	<link rel='stylesheet' type='text/css' href='css/util.css'>
		<link rel='stylesheet' type='text/css' href='css/new.css'>
		<link rel='stylesheet' type='text/css' href='css/neww.css'>

	<link rel='stylesheet' type='text/css' href='css/main1.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' />
<style>
        .input{
        display: block;
        width: 90%;
        
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
        .name{
    text-align: center;
        color: red;
        font-family: 'Montserrat';
        font-size: 15px;
        font-weight: 600;
        border-bottom: solid blue 3px;
        border-right: solid blue 3px;
        border-left: solid blue 3px;
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 1px;
        border-radius: 5px;}
    .btn { background: #fff; padding: 6px; width: 150px; height: 40px; border: 1px solid #FF4081; margin-bottom: 5px; cursor: pointer; transition: 0.3s; box-shadow: 0 50px #FF4081 inset; color: #fff; font-family: 'Rajdhani', sans-serif;}.btn:hover { box-shadow: 0 0 #FF4081 inset; color: #FF4081;}.btn:focus { outline: none;}
</style>	

<body>
	
<div class='limiter'>
<div class='container-login100' style='background-image: url("bg.jpg");'>
<div class='wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54'>
<span class='login100-form-title p-b-25' style='font-size:25px !important;'>

</span>


    

<span class='login100-form-title p-b-25' style='font-size:25px !important; font-family: 'Corben', cursive;'>
    
</span>
<div class='form-group'>
<?php
$url=$_GET['url'];
$nu=$_GET['pnum'];
$peruser=$_GET['peruser'];
$cname=$_GET['cname'];
$sname=$_GET['sname'];
$ref=$_GET['ref'];
$cn1=$_GET['con1'];
$cn2=$_GET['con2'];
$cn3=$_GET['con3'];
$cn4=$_GET['con4'];
$task=$_GET['task'];
$typ=$_GET['typ'];
$domain=$_SERVER['SERVER_NAME'];
$in='{"url":"'.$url.'","peruser":"'.$peruser.'","ref":"'.$ref.'","cname":"'.$cname.'","sname":"'.$sname.'","con1":"'.$cn1.'","con2":"'.$cn2.'","con3":"'.$cn3.'","con4":"'.$cn4.'","task":"'.$task.'","typ":"'.$typ.'"}';
$user_code=rand(10000,9999999);
mkdir("$cdb/$sname");
mkdir("cd/$sname");
mkdir("cd/$sname/user");
mkdir("cd/$sname/refer");
mkdir("cd/$sname/api");  
file_put_contents("$cdb/$sname/$sname.json",$in);
file_put_contents("$cdb/$sname/clone$sname.json",$in);
 
echo"   <center> <b>
<h4 style='font-weight: 600; font-size: 18px; color:blue; padding-top:3px; padding-bottom:3px; width:100%; border-bottom:1px solid red;' >CAMP EDITED SUCCESSFULLY<br></font></h4></b><br></center>
<center><br>
<div style='border:1px solid black; border-radius:5px;'><input type='text' readonly id='num'class='input' value='https://$domain/camp.php?id=$sname'>
<button class='btn'id='submit' onclick='myFunction()'>Camp Link</button></center></div>";

echo " <center><br><br><div style='border:1px solid black; border-radius:5px;'><input type='text'class='input' readonly id='num1' value='https://$domain/refer.php?camp=$sname'>
<button id='submit'class='btn' onclick='myFunction1()'>Refer Link</button>
</div>";

echo " <center><br><br><div style='border:1px solid black; border-radius:5px;'><input type='text'class='input' readonly id='num7' value='https://$domain/referlist.php'>
<button id='submit'class='btn' onclick='myFunction7()'>Refer List Link</button>
</div>";

echo " <center><br><br><div style='border:1px solid black; border-radius:5px;'><input type='text'class='input' readonly id='num4' value='https://$domain/check.php?camp=$sname'>
<button id='submit'class='btn' onclick='myFunction4()'>Refer Checker</button>
</div>";

?>

<script>
function myFunction() {
  var copyText = document.getElementById("num");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Campaign Link Copied");
}
function myFunction1() {
  var copyText = document.getElementById("num1");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Refer Link Copied");
}
function myFunction2() {
  var copyText = document.getElementById("num2");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Self Refer Link Copied");
}

function myFunction4() {
  var copyText = document.getElementById("num4");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Refer Checker Link Copied");}
  
  function myFunction7() {
  var copyText = document.getElementById("num7");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Refer List Link Copied");
}

</script>