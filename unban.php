<? session_start();?>
<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$teg=$_GET['tig'];

$link=$_POST['link'];
if($link){
$tdata='<?php $link="'.$link.'";?>';
file_put_contents("admin/payment.php",$tdata);
echo '<script>alert("Payment Link Updated")</script>';
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
    
    	table { 
    font-weight: 500;
    width: 100%; 
    table-layout: fixed;
    border-collapse: collapse; 
    margin: 0 auto;
}
/* Zebra striping */
tr:nth-of-type(odd) { 
    background: #f2f2f2; 
}
th { 
    background: #E74C3C; 
    color: #fff; 
    font-weight: 600; 
}
td, th { 
    padding: 4px; 
    border: 1px solid blue; 
    text-align: left; 
}
/*Mobile View*/
@media 
only screen and 
    (max-width: 760px){
    td, tr { 
        display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	tr {
        border: 0px solid blue;
        border-radius: 10px;
    }
    tr + tr{
        
        margin-top: 1.5em;
    }
	td { 
		/* make like a "row" */
		border-bottom: 2px solid blue; 
		border-radius: 5px;
		position: relative;
		padding-left: 50%; 
        background-color: #F8D9D5;
        text-align: left; 
	}
	
	td:before { 
        content: attr(data-label);
        display: inline-block;
        line-height: 1.5;
	    margin-left: -100%;
        width: 100%;
		white-space: nowrap;
	}
	 .submit1{
        height: 20px;
        width: 60px;
        border: 0;
        border-radius: 4px;
        margin-left: 25px;
        background: #047aed;
        font-family: 'Montserrat';
        font-size: 14px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0;
        color: #FFFFFF;
        cursor: pointer;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);
    }
    
</style>	
	       <?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{include("user.php");

include("admin/payment.php");

?>

<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-1" style="font-size:25px !important;">
<span class="login100-form-title p-b-0" style="font-size:25px !important; font-family: "Corben", cursive;">
<center>
<b>

<?php
		$id=$_GET['id'];
if(!$id){
    echo"<font size='4' color='red'><b>Invalid Number</b></font>";
    echo"<meta http-equiv='refresh' content='1;url=ban.php'>";
}else{
  if(!file_exists("admin/ban/$id.txt")){
      echo"<meta http-equiv='refresh' content='2;url=ban.php'><font size='4' color='red'><b>Number Not Exists in Banned Number List<br><br></b></font>";
  }else{
      unlink("admin/ban/$id.txt");
      echo"<font size='4' color='green'><b>Number Unbanned Successfully.</b></font>";
      echo"<meta http-equiv='refresh' content='2;url=ban.php'>";
  }  
}
			
			?>
			
		
</span></span>

</body></html>
<?php }?>