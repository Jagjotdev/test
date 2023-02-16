<?php
include("admin/main.php");
$camp=$_GET['camp'];
$usrs=$_GET['refer'];

$path="$refrs/num/$usrs.json";
if(file_exists($path)){
$file=file_get_contents($path);
$json=json_decode($file,true);
$refer=$json['code'];
}else{
$refer="No Refer";
}

$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
$cid=$camp;
        include("admin/main.php");
$file="$cdb/$cid/$cid.json";
$deco=file_get_contents($file);
$dcd=json_decode($deco,true);
$cname=$dcd['cname'];
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

h1{
    text-align: center;
    margin-bottom: 40px;
}
table { 
    font-weight: 500;
    width: 80%; 
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
    border: 1px solid #ccc; 
    text-align: left; 
    text-align: center
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
}
</style>
</head>
<body>
	
<div class="limiter">
<div class="container-login100" style="background-image: url('bg.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="padding-top:10px;>
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>


    

<span class="login100-form-title p-b-25" style="font-size:25px !important; font-family: "Corben", cursive;">
    
</span>
   <center> <b>
<h4 style='font-weight: 600; font-size: 1.2rem; color:blue; padding-top:3px; padding-bottom:3px; width:70%;'' ><?php echo $cname ;?> Camp Data <br>for Refer- <font color='red'><?php echo $usrs;?></font></h4></b><br><div id='wrapper'>

        <?php
$ref=$refer;
if(file_exists("$cdb/$camp/refer/$ref.txt")){
$src="$cdb/$camp/instant.json";
$deco=file_get_contents($src);
$dcd=json_decode($deco,true);
$offerid=$dcd['offerid'];
$event=$dcd['event'];
$event1=$dcd['event1'];
$event2=$dcd['event2'];

if($offerid){
if(file_exists("admin/instant/$offerid/$event/data.json")){
$rep1="1";    
if(file_exists("admin/instant/$offerid/$event/rnum/$usrs.txt")){
$leads=file_get_contents("admin/instant/$offerid/$event/rnum/$usrs.txt");    
}else{$leads="0";}        
}    

if(file_exists("admin/instant/$offerid/$event1/data.json")){
$rep2="1";    
if(file_exists("admin/instant/$offerid/$event1/rnum/$usrs.txt")){
$leads1=file_get_contents("admin/instant/$offerid/$event1/rnum/$usrs.txt");    
}else{$leads1="0";}        
}    

if(file_exists("admin/instant/$offerid/$event2/data.json")){
$rep3="1";    
if(file_exists("admin/instant/$offerid/$event2/rnum/$usrs.txt")){
$leads2=file_get_contents("admin/instant/$offerid/$event2/rnum/$usrs.txt");    
}else{$leads2="0";}        
}    
}
$tracked=$leads+$leads1+$leads2;
$clk=file_get_contents("$cdb/$camp/refercount/$ref.txt");

echo"
       <div style='margin-bottom:20px;'><font color='blue'>Clicks:</font> <font color='red'>$clk</font> | <font color='blue'>Leads:</font> <font color='red'>$tracked</font><br>"; if($offerid){echo"<br><font color='blue'>Events</font><br>"; if($rep1){echo"<font color='red'>$event</font> <font color='green'>$leads</font>";} if($rep2){echo" || <font color='red'>$event1</font> <font color='green'>$leads1</font>";} if($rep3){echo" || <font color='red'>$event2</font> <font color='green'>$leads2</font>";}}else{echo"INSTANT DATA NOT ADDED";} echo"</div>";
       
       function encode($Number='', $first=0, $last=0, $rep='X'){
    $begin  = substr($Number,0,$first);
    $middle = str_repeat($rep,strlen(substr($Number,$first,$last)));
    $end    = substr($Number, $last);
    $stars  = $begin.$middle.$end;
    return $stars;
}

$file=file_get_contents("$cdb/$camp/refer/$ref.txt");
$pro = explode("+",$file);
for($i = 0; $i < count($pro); $i++){
if(!empty($pro[$i])){

$user=$pro[$i];

$click=file_get_contents("$cdb/$camp/user/$user.txt");

 if(file_exists("admin/instant/$offerid/$event/num/$user.txt")){$rleads=file_get_contents("admin/instant/$offerid/$event/num/$user.txt");}else{$rleads="0";}
    
    if(file_exists("admin/instant/$offerid/$event1/num/$user.txt")){$rleads1=file_get_contents("admin/instant/$offerid/$event1/num/$user.txt");}else{$rleads1="0";}
    
    if(file_exists("admin/instant/$offerid/$event2/num/$user.txt")){$rleads2=file_get_contents("admin/instant/$offerid/$event2/num/$user.txt");}else{$rleads2="0";}
    
    $user=encode($user,3,-3);
    
echo"
     <table>
            <thead>
              <tr>
                <th>User</th>
                <th>Clicks</th>";
                if(!$offerid){echo"<th><font size='2' color='red'>INSTANT DATA NOT ADDED</font></th>";}else{if($rep1 and $rleads>0){echo"<th>$event</th>";} if($rep2 and $rleads1>0){echo"<th>$event1</th>";} if($rep3 and $rleads2>0){echo"<th>$event2</th>";}}
              echo"</tr>
            </thead>
            <tbody>

             <tr> 
                <td data-label='User'><font color='black'><b>$user</b></font></td>
                <td data-label='Clicks'>$click</td>";
                if(!$offerid){echo"<td data-label='INSTANT DATA NOT ADDED'></td>";}else{if($rep1 and $rleads>0){echo"<td td data-label='$event'>$rleads</td>";} if($rep2 and $rleads1>0){echo"<td td data-label='$event1'>$rleads1</td>";} if($rep3 and $rleads2>0){echo"<td td data-label='$event2'>$rleads2</td>";}}
              echo"</tr></tbody>
          </table><br>

";
}}
}else{echo"<center><h3>NO DATA FOUND !!!";}
?>
    
        </div>     
</center>
<div class='col-md-12' style='position:fixed;bottom: 0;width: 100%;background: -webkit-linear-gradient(right, #de1afa,#26b9e4);right: 0;z-index:99;'><a href='https://telegram.dog/<?php echo$tig;?>' style='text-decoration:underline;text-decoration-color:#fff;font-family: Poppins-Bold;' target='_blank' ><div align='center' style='color: white;font-size:20px; padding: 5px;'><img src='join.png' style='width: 30px; margin-left: 5px;'><b>  Join us on Telegram</b> </div></div>


</html>