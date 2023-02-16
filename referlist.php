<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];

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
        include("admin/main.php");
if(!isset($_POST['submit'])){
echo"
     
   <center> <b>
<h4 style='font-weight: 600; font-size: 1.2rem; color:blue; border: solid red 3px; border-radius: 5px; padding-top:6px; padding-bottom:6px; width:80%;' >REFER & EARN</h4></b><br><br><br><form action='' method='POST'>
      
    
          <div class='control'>
<i class='material-icons md-36' id='i'></i>
         Select Offer<br><select name='offer' style='width:75%; height:30px; text-align:center; font-weight:500; border: solid blue 2px; color:red; background:white;'>";
       $txn="$cdb/campid.txt";
if(file_exists("$txn")){
$file=file_get_contents("$txn");
$pro = explode("+",$file);
for($i = 0; $i < count($pro); $i++){
if(!empty($pro[$i])){
    $camp=$pro[$i];
    if(!file_exists("$cdb/$camp/over.txt")){
        $file="$cdb/$camp/$camp.json";
$deco=file_get_contents($file);
$dcd=json_decode($deco,true);
$cname=$dcd['cname'];
    echo"<option value='$camp'>$cname</option>";    
    }}}} echo"</select><br><br> <input  type='number' class='input' placeholder='Enter Paytm Number' name='number' required maxlength='10' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' autocomplete='off' value='$ptm'></div>
      
          	
        <button class='submit' name='submit' >Create Link</button>
</form>
<br><br></div></center>";
}

if(isset($_POST['submit'])){
$paytm=$_POST['number'];
setcookie('paytm',$paytm,time()+60*60*24*365);
$domain=$_SERVER['SERVER_NAME'];
$offer=$_POST['offer'];

	$path="$refrs/num/$paytm.json";
	if(file_exists($path)){
	$get=file_get_contents($path);
	$json=json_decode($get,true);
	$code=$json['code'];
	
	$url="https://$domain/camp.php?id=$offer&ref=$code";
	$url1="https://$domain/list.php?id=$offer&refer=$paytm";


        echo'
          <center>  <h5 class="h6paytm">Link Generated</h5></center>
          <div class="control">
          <input  type="text"id="myInput" class="input" required value="'.$url.'" readonly></div>
          	
  <center>
        <button class="submit" onclick="myFunction()" name="submit" >Copy Link</button>
<br><br>
<input  type="text"id="myInput11" class="input" required value="'.$url1.'" readonly>
          	
   <center>
        <button class="submit" style="font-size:13px;" onclick="myFunction11()" name="submit" >Refer Checker</button></div>
</center>
         
          <br>

</center>
         
          <br>
    </div>';
    



}else{
$a=substr(str_shuffle("OXPAQVNDGIPLJGHFREWCZSA"), 0, 7);
     $url="https://$domain/camp.php?id=$offer&ref=$a";
$url1="https://$domain/list.php?id=$offer&refer=$paytm";

        echo'
         <center> <h5 class="h6paytm">Link Generated</h5></center>
          <div class="control">
          <input  type="text"id="myInput1" class="input" required value="'.$url.'" readonly></div>
          	
   <center>
        <button class="submit" onclick="myFunction1()" name="submit" >Refer Link</button>
<br><br>

<input  type="text"id="myInput11" class="input" required value="'.$url1.'" readonly>
          	
  
        <button class="submit" style="font-size:13px;" onclick="myFunction11()" name="submit" >Refer Checker</button></div>
</center>
         
          <br>
    </div>';
    
	
mkdir("$refrs/ref/$a");

$p='{"ref":"'.$paytm.'","code":"'.$a.'"}';
file_put_contents("$refrs/ref/$a/$a.json",$p);
file_put_contents("$refrs/num/$paytm.json",$p);
}}
?>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br>
<?php
echo"
<div class='col-md-12' style='position:fixed;bottom: 0;width: 100%;background: -webkit-linear-gradient(right, #de1afa,#26b9e4);right: 0;z-index:99;'><a href='https://telegram.dog/$tig' style='text-decoration:underline;text-decoration-color:#fff;font-family: Poppins-Bold;' target='_blank' ><div align='center' style='color: white;font-size:20px; padding: 5px;'><img src='join.png' style='width: 30px; margin-left: 5px;'><b>  Join us on Telegram</b> </div></div>
";
?>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert('Refer Link Copied');
}
</script>
<script>
function myFunction1() {
  var copyText = document.getElementById("myInput1");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert('Refer Link Copied');
}
function myFunction11() {
  var copyText = document.getElementById("myInput11");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert('Refer Checker Link Copied');
}
</script>

</html>