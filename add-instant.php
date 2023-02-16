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
<style>

  .switches {
  margin: 20px;
}

.switches h1 {
  font-size: 1.5em;
  margin-bottom: 20px;
}

/* ----- end demo code ----- */

.switch {
  display: inline-block;
  height: 34px;
  min-width: 60px;
  position: relative;
  vertical-align: middle;
}

.switch.disabled {
  cursor: default;
  opacity: 0.5;
}

.switch .slider {
  background-color: red;
  border: 1px solid #047aed;
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  height: 34px;
  left: 0;
  padding: 0 20px 5px 40px;
  position: relative;
  right: 0;
  top: 0;
  transition: 0.4s;
}

.switch .slider .on,
.switch .slider .off {
  line-height: 34px;
}

.switch .slider .off {
  display: block;
}

.switch .slider .on {
  display: none;
}

.switch .slider:before {
  background-color: blue;
  bottom: 4px;
  content: " ";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: all 0.4s;
  width: 26px;
}

.switch .slider.round {
  border-radius: 34px;
}

.switch .slider.round:before {
  border-radius: 50%;
}

.switch input {
  display: none;
}

.switch input:focus + .slider {
  box-shadow: 0 0 1px green;
}

.switch input:checked + .slider {
  background-color: green;
  padding: 0 40px 0 20px;
}

.switch input:checked + .slider:before {
  left: auto;
  right: 4px;
  transition: all 0.4s;
}

.switch input:checked + .slider .on {
  display: block;
}

.switch input:checked + .slider .off {
  display: none;
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

$id=$_GET['id'];
if(file_exists("$cdb/$id/$id.json")){  
  $lid="$id";
$file="$cdb/$id/$id.json";
$json_object=file_get_contents($file);
$dec=json_decode($json_object,true);
$title=$dec['cname'];
$puser=$dec['peruser'];
$ruser=$dec['ref'];
    
    if(file_exists("$cdb/$id/instant.json")){
    $file22="$cdb/$id/instant.json";
$json_object22=file_get_contents($file22);
$dec22=json_decode($json_object22,true);
$offerid=$dec22['offerid'];
$event=$dec22['event'];
$puser=$dec22['puser'];
$ruser=$dec22['ruser'];
$uco=$dec22['uco'];
$rco=$dec22['rco'];
$event1=$dec22['event1'];
$puser1=$dec22['puser1'];
$ruser1=$dec22['ruser1'];
$uco1=$dec22['uco1'];
$rco1=$dec22['rco1'];
$event2=$dec22['event2'];
$puser2=$dec22['puser2'];
$ruser2=$dec22['ruser2'];
$uco2=$dec22['uco2'];
$rco2=$dec22['rco2'];
$same=$dec22['same'];
$elf=$dec22['self'];
if($same){$chk="checked";}
$ip=$dec22['ip'];
if($ip){$chkk="checked";}
if($self){$chskk="checked";}
    }
    
}else{
  echo '<script>alert("Invalid Camp Name...!")</script>';
echo"<script>window.history.back(); </script>";   
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
<h4 style="font-weight: 600; font-size: 1.2rem; color:blue; border-bottom: solid red 3px; border-radius: 15px; padding-bottom:3px; width:70%;" >INSTANT ADDER</h4></b>
<form method="POST" action="instant-added.php" autocomplete="off">
<div class='form-group'>
    <font color="red">&#x29EA;</font><br>
<font size='3'><b>Camp Name: </b><?php echo$title;?></font><br><br>
<input type="hidden" class="input" name="lid" Placeholder="Camp id"value="<?php echo$id;?>" readonly></li>
                 <input type="number" class="input" name="offerid" value="<?php echo$offerid;?>" Placeholder="Offer id">
<input type="text" class="input" name="event" value="<?php echo$event;?>" Placeholder="Event">
                <input type="number" step="any" class="input" name="puser" value="<?php echo$puser;?>" min="1" Placeholder="Amount per User">
<input type="text" class="input" name="uco" value="<?php echo$uco;?>" Placeholder="User payment Comment" maxlength="49" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

<div class="switches">
  <label class="switch">
    <input type="checkbox" onclick="checkClick()">
    <span class="slider round">
      <span class="on">Refer & Earn</span>
      <span class="off">Refer & Earn</span>
    </span>
  </label>
</div><div id="spc"></div>

<div class="switches">
<font color="blue" size="3">Same Paytm</font><br>

  <label class="switch">
    <input name="same" type="checkbox" <?php echo$chk;?> value="yes">
    <span class="slider round">
      <span class="on">Unlimited</span>
      <span class="off">Once</span>
    </span>
  </label>


</div>

<div class="switches">
<font color="blue" size="3">Self Refer</font><br>

  <label class="switch">
    <input name="self" type="checkbox" <?php echo$chskk;?> value="yes">
    <span class="slider round">
      <span class="on">Yes</span>
      <span class="off">No</span>
    </span>
  </label>


</div>

<div class="switches">
  <label class="switch">
    <input type="checkbox" onclick="checkClick2()">
    <span class="slider round">
      <span class="on">2nd Event</span>
      <span class="off">2nd Event</span>
    </span>
  </label>
</div><div id="spc2"></div>


<div class="switches">
  <label class="switch">
    <input type="checkbox" onclick="checkClick3()">
    <span class="slider round">
      <span class="on">3rd Event</span>
      <span class="off">3rd Event</span>
    </span>
  </label>
</div><div id="spc3"></div>
						<div class="switches">
<font color="blue" size="3">IP Protection</font><br>

  <label class="switch">
    <input name="ip" type="checkbox" <?php echo$chkk;?> value="yes">
    <span class="slider round">
      <span class="on">ON</span>
      <span class="off">OFF</span>
    </span>
  </label>


</div>
<button type="submit" class="submit" name="submit" class="btn btn-primary me-1 mb-1">SET</button></span></span>

<script>
var clickCount = 0;
function checkClick() {
  if ( clickCount % 2 == 0 ) {
       document.getElementById("spc").innerHTML = "<input type='number' step='any' class='input' name='ruser' min='1' Placeholder='Amount' value='<?php echo$ruser;?>' > <input type='text' class='input' name='rco' value='<?php echo$rco;?>' Placeholder='Comment' maxlength='49' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>";
  } else {
      document.getElementById("spc").innerHTML = "";
  }

  clickCount++
}
</script>

<script>
var clickCount1 = 0;
function checkClick2() {
  if ( clickCount1 % 2 == 0 ) {
       document.getElementById("spc2").innerHTML = "<input type='text' class='input' name='event1' value='<?php echo$event1;?>' Placeholder='Event 2' ><input type='number' step='any' class='input' name='puser1' min='1' value='<?php echo$puser1;?>' Placeholder='Amount per User'> <input type='text' class='input' name='uco1' value='<?php echo$uco1;?>' Placeholder='User Payment Comment' maxlength='49' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'><input type='number' step='any' class='input' name='ruser1' min='1' value='<?php echo$ruser1;?>' Placeholder='Refer Amount' > <input type='text' class='input' name='rco1' value='<?php echo$rco1?>' Placeholder='Refer Comment' maxlength='49' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' >";
     
  } else {
      document.getElementById("spc2").innerHTML = "";
     
  }

  clickCount1++
}
</script>

<script>
var clickCount2 = 0;
function checkClick3() {
  if ( clickCount2 % 2 == 0 ) {
       document.getElementById("spc3").innerHTML = "<input type='text' class='input' name='event2' value='<?php echo$event2;?>' Placeholder='Event 3' ><input type='number' step='any' class='input' name='puser2' min='1' value='<?php echo$puser2;?>' Placeholder='Amount per User'> <input type='text' class='input' name='uco2' value='<?php echo$uco2;?>' Placeholder='User Payment Comment' maxlength='49' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' ><input type='number' step='any' class='input' name='ruser2' min='1' value='<?php echo$ruser2;?>' Placeholder='Refer Amount' > <input type='text' class='input' name='rco2' value='<?php echo$rco2;?>' Placeholder='Refer Comment' maxlength='49' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' >";
     
  } else {
      document.getElementById("spc3").innerHTML = "";
     
  }

  clickCount2++
}
</script>
</body>
</html>