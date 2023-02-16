<? session_start();?>
<?php 

$b='linear-gradient(135deg, #2E3192 0%, #1BFFFF 51%, #2E3192 100%)';
$c='linear-gradient(135deg, #D4145A 0%, #FBB03B 51%, #D4145A 100%)';
$d='linear-gradient(135deg, #009245 0%, #FCEE21 51%, #009245 100%)';
$e='linear-gradient(135deg, #662D8C 0%, #ED1E79 51%, #662D8C 100%)';
$f='linear-gradient(135deg, #EE9CA7 0%, #FFDDE1 51%, #EE9CA7 100%)';
$g='linear-gradient(135deg, #614385 0%, #516395 51%, #614385 100%)';
$h='linear-gradient(135deg, #02AABD 0%, #00CDAC 51%, #02AABD 100%)';
$i='linear-gradient(135deg, #FF512F 0%, #DD2476 51%, #FF512F 100%)';
$j='linear-gradient(135deg, #FF5F6D 0%, #FFC371 51%, #FF5F6D 100%)';
$k='linear-gradient(135deg, #11998E 0%, #38EF7D 51%, #11998E 100%)';
$l='linear-gradient(135deg, #C6EA8D 0%, #FE90AF 51%, #C6EA8D 100%)';
$m='linear-gradient(135deg, #EA8D8D 0%, #A890FE 51%, #EA8D8D 100%)';
$n='linear-gradient(135deg, #D8B5FF 0%, #1EAE98 51%, #D8B5FF 100%)';
$o='linear-gradient(135deg, #FF61D2 0%, #FE9090 51%, #FF61D2 100%)';
$p='linear-gradient(135deg, #BFF098 0%, #6FD6FF 51%, #BFF098 100%)';
$q='linear-gradient(135deg, #4E65FF 0%, #92EFFD 51%, #4E65FF 100%)';
$r='linear-gradient(135deg, #A9F1DF 0%, #FFBBBB 51%, #A9F1DF 100%)';
$s='linear-gradient(135deg, #C33764 0%, #1D2671 51%, #C33764 100%)';
$t='linear-gradient(135deg, #93A5CF 0%, #E4EfE9 51%, #93A5CF 100%)';
$u='linear-gradient(135deg, #868F96 0%, #596164 51%, #868F96 100%)';
$v='linear-gradient(135deg, #09203F 0%, #537895 51%, #09203F 100%)';
$w='linear-gradient(135deg, #FFECD2 0%, #FCB69F 51%, #FFECD2 100%)';
$x='linear-gradient(135deg, #A1C4FD 0%, #C2E9FB 51%, #A1C4FD 100%)';
$y='linear-gradient(135deg, #764BA2 0%, #667EEA 51%, #764BA2 100%)';
$z='linear-gradient(135deg, #FDFCFB 0%, #E2D1C3 51%, #FDFCFB 100%)';
$length="1"; 
$char="bcdefghijklmnopqrstuvwxyz";
$clr=substr(str_shuffle($char), 0, $length);
$color=$$clr;

?>
<DOCTYPE html>
<html><head><meta name='viewport' content='width=device-width'/>
<title>Login to Reset</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');

* {
 box-sizing: border-box;
}

body {
 background-image:<?php echo $color;?>;
 font-family: 'Open Sans', sans-serif;
 display: flex;
 align-items: center;
 justify-content: center;
 min-height: 100vh;
 margin: 0;
}

.container {
 background-color: #fff;
 border-radius: 5px;
 box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
 overflow: hidden;
 width: 350px;
 max-width: 100%;
}

.header {
 border-bottom: 1px solid #f0f0f0;
 background-color: #f7f7f7;
 padding: 20px 40px;
}

.header h2 {
 margin: 0;
}

.form {
 padding: 30px 40px; 
}

.form-control {
 margin-bottom: 10px;
 padding-bottom: 20px;
 position: relative;
}

.form-control label {
 display: inline-block;
 margin-bottom: 5px;
}

.form-control input {
 border: 2px solid #f0f0f0;
 border-radius: 4px;
 display: block;
 font-family: inherit;
 font-size: 14px;
 padding: 10px;
 width: 100%;
}

.form-control input:focus {
 outline: 0;
 border-color: #777;
}

.form-control.success input {
 border-color: #2ecc71;
}

.form-control.error input {
 border-color: #e74c3c;
}

.form-control i {
 visibility: hidden;
 position: absolute;
 top: 40px;
 right: 10px;
}

.form-control.success i.fa-check-circle {
 color: #2ecc71;
 visibility: visible;
}

.form-control.error i.fa-exclamation-circle {
 color: #e74c3c;
 visibility: visible;
}

.form-control small {
 color: #e74c3c;
 position: absolute;
 bottom: 0;
 left: 0;
 visibility: hidden;
}

.form-control.error small {
 visibility: visible;
}

.form button {
 background-color: #8e44ad;
 border: 2px solid #8e44ad;
 border-radius: 4px;
 color: #fff;
 display: block;
 font-family: inherit;
 font-size: 16px;
 padding: 10px;
 margin-top: 20px;
 width: 100%;
}

input[type=submit]{
 background-image:<?php echo $color;?>;
 border: 2px solid blue;
 border-radius: 4px;
 color: #fff;
 display: block;
 font-family: inherit;
 font-size: 16px;
 font-weight:700;
 padding: 10px;
 margin-top: 20px;
 width: 70%;
 }
 
 .butn{
 background-color: #8e44ad;
 border: 2px solid #fff;
 border-radius: 4px;
 color: #fff;
 display: block;
 font-family: inherit;
 font-size: 16px;
 padding: 10px;
 width: 100%;
 }
</style>
<?php   
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!isset($_COOKIE['lusrr'])){

echo" <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='loginfirst.js'></script><div class='login-box'><h3 class='variablecolor' >Please Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

    }else{ include("user.php");
    }?>
<div class="container">
 <div class="header">
<h2>Change Password</h2>
</div>
<form id="form" class="form" action="" method="POST">
  <div class="form-control">
 
       
   <input type="hidden" name="oldu" class="password"  value="<?php echo $session;?>" placeholder="Enter current Username" required>

  <?php
  $ttt="newuserss/$session.txt";
  $pdd=file_get_contents($ttt);
?>

   <input type="hidden" name="old" class="password"  value="<?php echo $pdd;?>" placeholder="Enter current Password" required>
    <div class="form-control">
   <label for="username">New Username</label>
   <input type="text" name="newu" class="password"  placeholder="Set New Username" required>
  </div>
  <div class="form-control">
   <label for="username">New Password</label>
   <input type="text" name="new" class="password"  placeholder="Set New Password" required>
  </div>

<center><input type="submit" name="submit" value="Set" required/></center>

</form>

 <?php
   error_reporting(0);
   
   
     if(!isset($_POST['submit'])){
      
      echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="loginfirst.js"></script>';
     }
    if($_POST['submit']){
        $oldu=$_POST['oldu'];
        $old=$_POST['old'];
        $newu=$_POST['newu'];
        $new=$_POST['new'];
        $data="newuserss/$oldu.txt";
        if(file_exists($data)){}else{
        echo'<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/not.js"></script>';
            return;
        }  
           $pwd1=file_get_contents($data);
           if($old==$pwd1){
               
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/changed.js"></script>';
    $npt="newuserss/$oldu.txt";
            unlink($npt);
    file_put_contents("newuserss/$newu.txt",$new);
    
            echo"Updated...<meta http-equiv='refresh' content='0;url=admin.php'>";    
            
            setcookie('lusrr',$newu,time()+60*60*24*365);
            $tgh="<meta http-equiv='refresh' content='1;url=login.php'>";
            $fv='<?php
if($session=="'.$newu.'"){}else{echo"'.$tgh.'";}?>';
file_put_contents("user.php",$fv);
                        
         }else{
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/wrongpass.js"></script>';            
               exit;
           }

    }
    ?>
       