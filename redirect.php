<?php
include("admin/main.php");
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
$domain=$_SERVER['SERVER_NAME'];
$cid=$_POST['camp'];
$refer=$_POST['ref'];
$file="$cdb/$cid/$cid.json";
if ($cid==""){echo "<meta http-equiv='refresh' content='0 url=https://infotecharmy.in'>";}
if(!file_exists($file)){
echo "<meta http-equiv='refresh' content='0 url=over.php'>";
}else{
$deco=file_get_contents($file);
$dcd=json_decode($deco,true);
$trklink=$dcd['url'];
$typ=$dcd['typ']; 
$cname=$dcd['cname'];
$pr=$dcd['peruser'];
$num=$_POST['token'];
$numberdec1=$_POST['key'];
if(!$numberdec1){$numberdec1="NQOXGCA";}
$LINK=$trklink;

if($typ=="a"){
$CONN="&aff_click_id=$num&sub_aff_id=$numberdec1";}else{

if($typ=="b"){
$CONN="&sub1=$num&sub2=$numberdec1";}else{

if($typ=="c"){
$CONN="&p1=$numberdec1&p2=$num";}else{
if($typ=="f"){
$lin1=str_replace("usr","$num",$LINK);
$lin2=str_replace("rfr","$numberdec1",$lin1);
    
}    
}}}

$user=$num;
setcookie('user',$user,time()+60*60*24*365);
$refer=$numberdec1;
$pth="$cdb/$cid/user/$user.txt";
if (file_exists($pth)){
$click=file_get_contents("$pth");}else{$click='0';}
$uclick=$click+1;
file_put_contents("$pth",$uclick);

$pth1="$cdb/$cid/refer/$refer.txt";
if (file_exists($pth1)){
$users=file_get_contents("$pth1");
    $usercc=file_get_contents("$cdb/$cid/refercount/$refer.txt");
    $ooot=preg_match('/'.$user.'/i',$users,$match);
      if(!$ooot){$refers="$user+$users";}
}else{$refers="$user"; $usercc="0";}
$refcc=$usercc+1;
if($refers){file_put_contents("$pth1",$refers);}
file_put_contents("$cdb/$cid/refercount/$refer.txt",$refcc);

$pth3="$cdb/$cid/clickcount.txt";
if (file_exists($pth3)){
$clickw=file_get_contents("$pth3");}else{$clickw='0';}
$uclickw=$clickw+1;
file_put_contents("$pth3",$uclickw);

if($typ=="f"){$relink="$lin2";}else{$relink="$LINK$CONN";}
echo "<meta http-equiv='refresh' content='2 url=$relink'>";

}

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
<meta name="google" content="notranslate">
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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <style>
      .input{
        display: block;
        width: 90%;
        margin: 5px auto;
        text-align: center;
        color: black;
        font-family: 'Montserrat';
        padding: 0;
        font-size: 15px;
        font-weight: 00;
        height: 45px;
        border: 1px solid #047aed;
        border-radius: 4px;
        background-color: #E1F5FE;
        padding: 0 5px 0 5px;
        box-shadow: 0 5px 30px rgba(255, 255, 255, 0.1);
    }
    
    .box1{
                background-color: white;
        padding: 10px 0px 10px 0px;
                box-shadow: 0 5px 10px 0 rgba(0, 0, 100,.2);
        border-radius:10px;
        outline: none;
    
    }
      .submit{
        height: 45px;
        width: 70%;
        border-radius: 4px;
        margin: 0 auto;
        margin: 15px 0;
        padding: 0 25px 0 25px;
        background-image:<?php echo $color;?>;
        border: 1px solid blue;
        font-family: 'Montserrat';
        font-size: 14px;
        font-weight: 700;
        text-transform: capitalize;
        letter-spacing: 0;
        color: #FFFFFF;
        cursor: pointer;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);
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
<div class="container-login100" style="background-image:<?php echo $color;?>; padding-top:0px;">
    <a href='https://telegram.dog/infotecharmy'> <img src='telegram.png' class='kc_fab_main_btn'></a>
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="padding-top: 0px;padding-bottom: 20px;">
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>


    

<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
        <center>

</span>
<center>
<div style="border-top: 1px solid red; border-right: 1px solid red; border-bottom: 1px solid blue; border-left: 1px solid blue;  border-radius: 5px; padding: 10px; font-family: 'Montserrat',sans-serif; font-size:16px; box-shadow: 0 5px 10px 0 rgba(0, 0, 100,.2);">
    <br><br><font style="font-weight:700">Redirecting... Please wait...!</font><br>	<br><b><br>
<center>   <font style="font-size: 1rem; border-top: 1px solid blue; border-right: 1px solid blue; border-bottom: 1px solid red; border-left: 1px solid red;  border-radius: 3px; padding: 10px;font-weight:900;width:95%;">&#9733; <?php echo $cname;?> Campaign &#9733;</font></center><b><br>
  
<br>
   
    <font style="font-weight:600">
        After Tracking... You will get <b> &#8377;<?php echo $pr ;?></b> Paytm Cash instantly in your Paytm Number <b><?php echo $num;?></b>
        </font> 
<br><br>
<div class='db-l' style=' background: #ffcccb; color: blue; font-size: 14px; padding: 3px 0px 0px 0px; text-align: center;'> <marquee style='font-weight:400;'>PLEASE DON'T PRESS BACK BUTTON OR DON'T DO ANY OTHER TASK WHILE DOING CAMPAIGN...</marquee> 					</div>
<br><br></div></center>
</div>
</div><br></div>
</html>