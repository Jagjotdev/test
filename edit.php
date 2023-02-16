<? session_start();?>
<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$teg=$_GET['tig'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $name;?>

</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
	<link rel="stylesheet" type="text/css" href="css/main1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMontserrat:300,400,500%7CRoboto');
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
.select100{
    padding:5px 3px;
    width:99%;
    border-radius:5px;
}    
</style>
</head>
<body>
		       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
    include("user.php");
    if(!isset($_GET['id'])){

$status=$_GET['status'];
     if($status=="success"){
       echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="delete.js"></script>';
    echo"<meta http-equiv='refresh' content='2;url=admin.php'>";
     }}}
?>
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>


    

<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
        <center>
    
    </center><br><center>
<b>
<h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-top: solid red 3px; border-radius: 10px; padding-top:3px; padding-bottom:3px; width:70%;" >CAMPAIGN EDITOR</h4></b></span></center>
<br> 

 
  <?php
if(!isset($_GET['sb'])){
echo '<center><form action="" method="GET" autocomplete="off"> 
       <input type="text" name="offid" class="input inp" placeholder="Enter Campaign Short Name">
          
         
        
         <input type="submit" id="submit" name="sb" class="submit" value="Next">
          
        </form>';
        }
        
if(isset($_GET['sb'])){
$oid=$_GET['offid'];
$file="cdb/$oid/$oid.json";
if(!file_exists($file)){
echo '<script>alert("This Campaign Does not Exists")</script>';
echo"<meta http-equiv='refresh' content='0;url=edit.php'>";
}else{
echo"<meta http-equiv='refresh' content='0;url=edt.php?camp=$oid'>";
}}
  ?>