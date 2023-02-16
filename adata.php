<? session_start();?>
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{
    include("user.php");
    }
?>
<?php
$camp=$_GET['camp'];
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
$b='linear-gradient(135deg, #D4145A 0%, #FBB03B 51%, #D4145A 100%)';
$c='linear-gradient(135deg, #009245 0%, #FCEE21 51%, #009245 100%)';
$e='linear-gradient(135deg, #614385 0%, #516395 51%, #614385 100%)';
$f='linear-gradient(135deg, #02AABD 0%, #00CDAC 51%, #02AABD 100%)';
$h='linear-gradient(135deg, #FF5F6D 0%, #FFC371 51%, #FF5F6D 100%)';
$i='linear-gradient(135deg, #11998E 0%, #38EF7D 51%, #11998E 100%)';
$j='linear-gradient(135deg, #EA8D8D 0%, #A890FE 51%, #EA8D8D 100%)';
$k='linear-gradient(135deg, #D8B5FF 0%, #1EAE98 51%, #D8B5FF 100%)';
$l='linear-gradient(135deg, #FF61D2 0%, #FE9090 51%, #FF61D2 100%)';
$m='linear-gradient(135deg, #4E65FF 0%, #92EFFD 51%, #4E65FF 100%)';
$o='linear-gradient(135deg, #868F96 0%, #596164 51%, #868F96 100%)';
$p='linear-gradient(135deg, #09203F 0%, #537895 51%, #09203F 100%)';
$q='linear-gradient(135deg, #764BA2 0%, #667EEA 51%, #764BA2 100%)';
$r='linear-gradient(135deg, #2E3192 0%, #1BFFFF 51%, #2E3192 100%)';
$length="1"; 
$char="bcefhijklmopqr";
$clr=substr(str_shuffle($char), 0, $length);
$color=$$clr;
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
        .input1{
        display: block;
        width: 90%;
        height: 180px;
        margin: 5px auto;
        text-align: center;
        color: black;
        font-family: 'Montserrat';
        padding: 0;
        font-size: 15px;
        font-weight: 500;
        height: 50px;
        border: 1px solid #047aed;
        border-radius: 4px;
        background-color: #E1F5FE;
        outline: none;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);
    }
    
                         .kc_fab_main_btn {
  width: 320px;
  color: #FFF;
  font-size: 45px;
  
  transition: .3s;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  bottom: 1%;
  right: 1px;
  position: fixed;
}

.kc_fab_main_btn:focus {
  transform: scale(5);
  transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
}
</style>
</head>
<body>
	    <a href='https://telegram.dog/infotecharmy'> <img src='telegram.png' class='kc_fab_main_btn'></a>
<div class="limiter">
<div class="container-login100" style="background-image:<?php echo $color;?>;">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>


    

<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
        <center>
     <h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-top: solid red 3px; border-radius: 10px; padding-top:3px; padding-bottom:3px; width:70%;" ><?php
$dfile="admin/user/data.json";
if(file_exists($dfile)){
    echo'EDIT';
}else{
    echo'ADD';
}?> CAMPAIGN DATA</h4>   
    </center>
</span>

   <center> <b>
<br><form action='added.php' method='GET'>
      
    
          <div class='control'>
<input  type='text' class='input' placeholder='Channel Name' name='name' value='<?php echo $name;?>' required>

<input  type='text' class='input' placeholder='Logo Link' name='logo' value='<?php echo $logo;?>' required>
<?php
if(file_exists($dfile)){
    echo"<input  type='text' class='input' placeholder='Channel Username without @' value='$tig' name='tig' required>";
}else{
    echo"<textarea  type='text' style='height:80px;padding-top:5px;' class='input1' placeholder='Channel Username without @
Ex- My channel link is https://t.me/infotecharmy
Then I enter only infotecharmy here' name='tig' required></textarea>";
}
?>


</div>
       
        <input type='submit' class='submit' value='SET' >
</form>
<br><br></div></center>



</html>