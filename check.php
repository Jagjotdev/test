<?php
$camp=$_GET['camp'];
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
include("admin/main.php");

$ptm = $_COOKIE['paytm'];

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
	
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>


    

<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
        <center>
        <img src='<?php echo $logo;?>' width="35%">
    </center>
</span>
<br> 
        <?php
        $cid=$_GET['camp'];
$file="$cdb/$cid/clone$cid.json";
if(file_exists($file)){
$deco=file_get_contents($file);
$dcd=json_decode($deco,true);
$cname=$dcd['cname'];
$ramo=$dcd['ref'];
$uamo=$dcd['peruser'];
$of=$_GET['camp'];

echo"
     
   <center> <b>
<h4 style='font-weight: 600; font-size: 1.2rem; color:blue; border: solid red 3px; border-radius: 5px; padding-top:6px; padding-bottom:6px; width:80%;' >$cname Campaign</h4><br><b>
<h4 style='font-weight: 600; font-size: 1.2rem; color:blue; padding-top:3px; padding-bottom:3px; width:70%;'' >REFER CHECKER</h4></b><br><br><form action='list.php' method='GET'>
      
    
          <div class='control'>
<i class='material-icons md-36' id='i'></i>
<input type='hidden' value='$camp' name='camp'>
          <input  type='number' class='input' placeholder='Enter Refer Number' name='refer' required maxlength='10' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' value='$ptm'></div>
        <input type='submit' class='submit' value='Check' >
</form>
<br><br></div></center>

<div class='col-md-12' style='position:fixed;bottom: 0;width: 100%;background: -webkit-linear-gradient(right, #de1afa,#26b9e4);right: 0;z-index:99;'><a href='https://telegram.dog/$tig' style='text-decoration:underline;text-decoration-color:#fff;font-family: Poppins-Bold;' target='_blank' ><div align='center' style='color: white;font-size:20px; padding: 5px;'><img src='join.png' style='width: 30px; margin-left: 5px;'><b>  Join us on Telegram</b> </div></div>
";
?>

</html>
<?php }else{echo "<meta http-equiv='refresh' content='0 url=https://$domain'>";}?>