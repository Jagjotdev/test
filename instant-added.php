<? session_start();?>
<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$teg=$_GET['tig'];

include("admin/main.php");
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
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{include("user.php");}
?>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-1" style="font-size:25px !important;">
<span class="login100-form-title p-b-0" style="font-size:25px !important; font-family: "Corben", cursive;">
<center>
<b>
<h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-radius: 15px; padding-bottom:3px; width:70%;" >INSTANT ADDER</h4></b>

<?php

$lid=$_POST['lid'];
$offerid=$_POST['offerid'];
$event=$_POST['event'];
$puser=$_POST['puser'];
$ruser=$_POST['ruser'];
$uco=$_POST['uco'];
$rco=$_POST['rco'];
$same=$_POST['same'];
$self=$_POST['self'];
$ip=$_POST['ip'];
$event1=$_POST['event1'];
$puser1=$_POST['puser1'];
$ruser1=$_POST['ruser1'];
$uco1=$_POST['uco1'];
$rco1=$_POST['rco1'];
$event2=$_POST['event2'];
$puser2=$_POST['puser2'];
$ruser2=$_POST['ruser2'];
$uco2=$_POST['uco2'];
$rco2=$_POST['rco2'];
$ssn="$session";
$domain=$_SERVER['SERVER_NAME'];
$tg=file_get_contents("nnppcctt/$ssn/bot.txt");
$emo = "\u{2B50}";
$e2 = "\u{26A1}";
$e3 = "\u{20B9}";
$file="$cdb/$lid/$lid.json";
$json_object=file_get_contents($file);
$dec=json_decode($json_object,true);
$title=$dec['cname'];


if($offerid=="" xor $event=="" xor $puser==""){ echo"<br><br><br><b><font Color='red'>Offer id, Event & Per User amount can't be empty.</font></b>";}else{
    
    
$in='{"offerid":"'.$offerid.'","event":"'.$event.'","puser":"'.$puser.'","ruser":"'.$ruser.'","uco":"'.$uco.'","rco":"'.$rco.'","event1":"'.$event1.'","puser1":"'.$puser1.'","ruser1":"'.$ruser1.'","uco1":"'.$uco1.'","rco1":"'.$rco1.'","event2":"'.$event2.'","puser2":"'.$puser2.'","ruser2":"'.$ruser2.'","uco2":"'.$uco2.'","rco2":"'.$rco2.'","ss":"'.$ssn.'","same":"'.$same.'","self":"'.$self.'","ip":"'.$ip.'"}';


if(file_exists("$cdb/$lid/instant.json")){
    
    
    
    
     $in1='{"offerid":"'.$offerid.'","event":"'.$event.'","puser":"'.$puser.'","ruser":"'.$ruser.'","uco":"'.$uco.'","rco":"'.$rco.'"}';
mkdir("admin/instant/$offerid");
if( is_dir("admin/instant/$offerid/$event") === false){
mkdir("admin/instant/$offerid/$event");}
if( is_dir("admin/instant/$offerid/$event/ip") === false){
mkdir("admin/instant/$offerid/$event/ip");}
if( is_dir("admin/instant/$offerid/$event/num") === false){
mkdir("admin/instant/$offerid/$event/num");}
if( is_dir("admin/instant/$offerid/$event/rnum") === false){
mkdir("admin/instant/$offerid/$event/rnum");}
file_put_contents("admin/instant/$offerid/$event/data.json",$in1);
file_put_contents("admin/instant/$offerid/$event/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event/ip/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event/num/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event/rnum/index.php","nothing");

if($event1){
    $in2='{"event":"'.$event1.'","puser":"'.$puser1.'","ruser":"'.$ruser1.'","uco":"'.$uco1.'","rco":"'.$rco1.'"}';
    if( is_dir("admin/instant/$offerid/$event1") === false){
mkdir("admin/instant/$offerid/$event1");}
if( is_dir("admin/instant/$offerid/$event1/ip") === false){
mkdir("admin/instant/$offerid/$event1/ip");}
if( is_dir("admin/instant/$offerid/$event1/num") === false){
mkdir("admin/instant/$offerid/$event1/num");}
if( is_dir("admin/instant/$offerid/$event1/rnum") === false){
mkdir("admin/instant/$offerid/$event1/rnum");}
file_put_contents("admin/instant/$offerid/$event1/data.json",$in2); 
file_put_contents("admin/instant/$offerid/$event1/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event1/ip/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event1/num/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event1/rnum/index.php","nothing");
}
if($event2){
    $in2='{"event":"'.$event2.'","puser":"'.$puser2.'","ruser":"'.$ruser2.'","uco":"'.$uco2.'","rco":"'.$rco2.'"}';
    if( is_dir("admin/instant/$offerid/$event2") === false){
mkdir("admin/instant/$offerid/$event2");}
 if( is_dir("admin/instant/$offerid/$event2/ip") === false){
mkdir("admin/instant/$offerid/$event2/ip");}
if( is_dir("admin/instant/$offerid/$event2/num") === false){
mkdir("admin/instant/$offerid/$event2/num");}
if( is_dir("admin/instant/$offerid/$event2/rnum") === false){
mkdir("admin/instant/$offerid/$event2/rnum");}
file_put_contents("admin/instant/$offerid/$event2/data.json",$in2);  
file_put_contents("admin/instant/$offerid/$event2/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event2/ip/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event2/num/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event2/rnum/index.php","nothing");
}

file_put_contents("$cdb/$lid/instant.json",$in);
$sntn='{"id":"'.$lid.'","same":"'.$same.'","self":"'.$self.'","title":"'.$title.'","ip":"'.$ip.'"}';
file_put_contents("admin/instant/$offerid/ins.json",$sntn);



    

echo"   
<center>

<ul class='box-info'>
			 <br><br><br> <font color='green' size='4'><b>INSTANT DATA EDITED</b></font>
			";
			
			
			
			
   

}else{
    
    $in1='{"offerid":"'.$offerid.'","event":"'.$event.'","puser":"'.$puser.'","ruser":"'.$ruser.'","uco":"'.$uco.'","rco":"'.$rco.'"}';
mkdir("admin/instant/$offerid");
mkdir("admin/instant/$offerid/$event");
mkdir("admin/instant/$offerid/$event/ip");
mkdir("admin/instant/$offerid/$event/num");
mkdir("admin/instant/$offerid/$event/rnum");
file_put_contents("admin/instant/$offerid/$event/data.json",$in1);
file_put_contents("admin/instant/$offerid/$event/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event/ip/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event/num/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event/rnum/index.php","nothing");

if($event1){
    $in2='{"event":"'.$event1.'","puser":"'.$puser1.'","ruser":"'.$ruser1.'","uco":"'.$uco1.'","rco":"'.$rco1.'"}';
mkdir("admin/instant/$offerid/$event1");
mkdir("admin/instant/$offerid/$event1/ip");
mkdir("admin/instant/$offerid/$event1/num");
mkdir("admin/instant/$offerid/$event1/rnum");
file_put_contents("admin/instant/$offerid/$event1/data.json",$in2);   
file_put_contents("admin/instant/$offerid/$event1/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event1/ip/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event1/num/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event1/rnum/index.php","nothing");
}
if($event2){
    $in3='{"event":"'.$event2.'","puser":"'.$puser2.'","ruser":"'.$ruser2.'","uco":"'.$uco2.'","rco":"'.$rco2.'"}';
mkdir("admin/instant/$offerid/$event2");
mkdir("admin/instant/$offerid/$event2/ip");
mkdir("admin/instant/$offerid/$event2/num");
mkdir("admin/instant/$offerid/$event2/rnum");
file_put_contents("admin/instant/$offerid/$event2/data.json",$in3);  
file_put_contents("admin/instant/$offerid/$event2/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event2/ip/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event2/num/index.php","nothing");
file_put_contents("admin/instant/$offerid/$event2/rnum/index.php","nothing");
}

file_put_contents("$cdb/$lid/instant.json",$in);
$sntn='{"id":"'.$lid.'","same":"'.$same.'","self":"'.$self.'","title":"'.$title.'","ip":"'.$ip.'"}';
file_put_contents("admin/instant/$offerid/ins.json",$sntn);



    

echo"   
<center>

<ul class='box-info'>
			 <br><br><br> <font color='green' size='4'><b>INSTANT DATA ADDED</b></font>
			";
}
file_put_contents("admin/instant/$offerid/camp.txt",$lid);
}

?>
</span></span>
</body>
