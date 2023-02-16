<?php
    
error_reporting(0);
session_start();

$session = $_COOKIE['lusrr'];

if(!$session){

echo" <div class='login-box'><h3 class='variablecolor' >Login First...";

echo"<meta http-equiv='refresh' content='0;url=login.php'>";

}else{include("user.php");
include("admin/main.php");
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

   .submit{
        height: 20px;
        width: 50%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        background: #047aed;
        font-family: 'Montserrat';
        font-size: 12px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0;
        color: #FFFFFF;
        cursor: pointer;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);
    }
    
    .submit1{
        height: 20px;
        width: 40%;
        border: 0;
        border-radius: 4px;
        margin: 0 auto;
        background: #047aed;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0;
        color: #FFFFFF;
        cursor: pointer;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 100,.2);
    }
    
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
    text-align: center; 
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
 <br>
   <center> <b>
<?php
       $txn="$cdb/campid.txt";
if(file_exists("$txn")){
$file=file_get_contents("$txn");
$pro = explode("+",$file);
for($i = 0; $i < count($pro); $i++){
if(!empty($pro[$i])){
    $camp=$pro[$i];
    if(file_exists("$cdb/$camp/$camp.json")){
if(file_exists("$cdb/$camp/over.txt")){$fvh="Start";}else{$fvh="Over";}
$report="report.php?camp=$camp";
$edit="edt.php?camp=$camp";
$delete="over.php?id=$camp";
$clink="camp.php?id=$camp";
$rlink="refer.php?camp=$camp";
$ilink="add-instant.php?id=$camp";
if(file_exists("$cdb/$camp/instant.json")){$fff="Edit";}else{$fff="Set";}

echo"
     <table>
            <thead>
              <tr>
                <th>Camp id</th>
                <th>Link</th>
                <th>Tools</th>
                <th>Instant</th>
              </tr>
            </thead>
            <tbody>
         
             <tr> 
                <td data-label='Camp id'><font color='red'>$camp  <a href='$report'><button class='submit1'>Report</button></a></td>
                <td data-label='Link'><a href='$clink'><button class='submit1'>Camp</button></a> <a href='$rlink'><button class='submit1'>Refer</button></a></td>
                <td data-label='Tools'><a href='$edit'><button class='submit1'>Edit</button></a> <a href='$delete'><button class='submit1'>$fvh</button></a></td>
                <td data-label='Instant'><a href='$ilink'><button class='submit1'>$fff</button></a></td>
                
              </tr>      </tbody>
          </table> <br> <br>    

";
}}}}
        ?>
            </tbody>
          </table>
        </div>     
</center>
<div class='col-md-12' style='position:fixed;bottom: 0;width: 100%;background: -webkit-linear-gradient(right, #de1afa,#26b9e4);right: 0;z-index:99;'><a href='https://telegram.dog/$tig' style='text-decoration:underline;text-decoration-color:#fff;font-family: Poppins-Bold;' target='_blank' ><div align='center' style='color: white;font-size:20px; padding: 5px;'><img src='https://cashword.in/images/join.png' style='width: 30px; margin-left: 5px;'><b>  Join us on Telegram</b> </div></div>


</html><?php }?>