<?php
$user="admin/user/data.json";
$deco=file_get_contents($user);
$dcd=json_decode($deco,true);
$name=$dcd['name'];
$logo=$dcd['logo'];
$tig=$dcd['tig'];
include("admin/main.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo $logo;?>"/>
    <title><?php echo$name;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: dodgerblue;
   color: white;
   text-align: center;
   padding:8px;
}

.footer a{
    text-decoration:none;
    color:#fff;
}
@import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700;900&display=swap');
        :root {
            --pale-blue: hsl(225, 100%, 94%);
            --bright-blue: hsl(245, 75%, 52%);
            --very-pale-blue: hsl(225, 100%, 98%);
            --desaturated-blue: hsl(224, 23%, 55%);
            --dark-blue: hsl(223, 47%, 23%);
        }
        body {
            font-family: 'Red Hat Display', sans-serif;
            font-size: 16px;
            position: relative;
            width: 100%;
            height: 100vh;
            padding: 0px;
            margin: 0px;
            background: var(--pale-blue);
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url(https://rvs-order-summary-component.netlify.app/images/pattern-background-desktop.svg);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
            z-index: -1;
        }
        main {
            width: 100%;
         
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 320px;
            min-height: 400px;
            margin: 60px auto;
            border-radius: 10px;
            background: white;
        }
        .card .card-header {
            width: 100%;
            height: 156px;
            border-radius: 10px 10px 0px 0px;
        }
        .card .card-header img {
            width: 90%;
            border-radius: 10px 10px 0px 0px;
            margin-left: -5px;
        }
        .card .card-body {
            width: 100%;
            height: auto;
            padding: 25px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .card .card-body .card-title {
            width: 100%;
            font-weight: 900;
            color: var(--dark-blue);
            text-align: center;
            padding: 15px;
            box-sizing: border-box;
        }
        .card .card-body .card-text {
            width: 100%;
            color: var(--desaturated-blue);
            text-align: center;
            line-height: 25px;
            padding: 15px 0px;
            box-sizing: border-box;
        }
        .card .card-body .card-plan {
            display: flex;
            flex-direction: row;
            align-items: center;
            column-gap: 15px;
            background: var(--very-pale-blue);
            border-radius: 10px;
            padding: 8px;
            margin: 5px;
            box-sizing: border-box;
        }
        
     .card .card-body .card-plan2 {
            display: flex;
            flex-direction: row;
            align-items: center;
            column-gap: 0px;
            background: var(--very-pale-blue);
            border-radius: 0px;
            padding: 8px;
            margin: 5px;
            box-sizing: border-box;
        }
        .card .card-body .card-plan .card-plan-img {
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        .card .card-body .card-plan .card-plan-text {
            flex-grow: 6;
            display: flex;
            flex-direction: column;
            row-gap: 4px;
        }
        .card .card-body .card-plan .card-plan-text .card-plan-title {
            color: var(--dark-blue);
            font-weight: 900;
            font-size: 14px;
        }
        .card .card-body .card-plan .card-plan-text .card-plan-price {
            color: var(--desaturated-blue);
            font-size: 14px;
        }
        .card .card-body .card-plan .card-plan-link {
            flex-grow: 1;
        }
        .card .card-body .card-plan .card-plan-link a {
            color: var(--bright-blue);
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
        }
        .card .card-body .card-plan .card-plan-link a:hover {
            color: #766cf1;
            text-decoration: none;;
        }
        .card .card-body .card-payment-button {
            padding: 25px 0px 15px;
            box-sizing: border-box;
        }
        .card .card-body .card-payment-button button {
            width: 100%;
            height: 50px;
            border: 0;
            background: var(--bright-blue);
            color: white;
            font-weight: 700;
            border-radius: 10px;
            box-shadow: 0px 10px 20px 0px hsl(245deg 75% 52% / 44%);
            cursor: pointer;
        }
        .card .card-body .card-payment-button button:hover {
            background: #766cf1;
        }
        .card .card-body .card-cancel-button {
            padding: 15px 0px;
            box-sizing: border-box;
        }
        .card .card-body .card-cancel-button button {
            width: 100%;
            border: 0;
            background: none;
            color: var(--desaturated-blue);
            font-weight: 900;
            text-align: center;
            cursor: pointer;
        }
        .card .card-body .card-cancel-button button:hover {
            color: var(--dark-blue);
        }
        

        @media (max-width: 375px) {
            body {
                height: auto;
            }
            body::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                height: 100%;
                background: url(https://rvs-order-summary-component.netlify.app/images/pattern-background-mobile.svg);
                background-repeat: no-repeat;
                background-size: contain;
                background-position: top;
                z-index: -1;
            }
            
        }
        input{
            all: unset;
        }
        .winners{
       padding: 10px 15px;
       height:150px;
       overflow: auto;
        }
        #win{
            text-align: center;
            margin: 10px;
        }
     .g-recaptcha{
    transform:scale(0.80);

transform-origin:0;
padding:0;
margin:0;

}

 .box1{
                background-color: white;
        padding: 10px 0px 10px 0px;
                box-shadow:2px 2px 6px;
        border-radius:10px;
        outline: none;
    
    }

.box1 {
    background: linear-gradient(201deg, #00f3f5, #005cf5, #f5ba00, #f55800, #f500ec, #f5e500, #00f58b, #d300f5);
    background-size: 1600% 1600%;

    -webkit-animation: AnimationName 24s ease infinite;
    -moz-animation: AnimationName 24s ease infinite;
    -o-animation: AnimationName 24s ease infinite;
    animation: AnimationName 24s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:30% 0%}
    50%{background-position:71% 100%}
    100%{background-position:30% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:30% 0%}
    50%{background-position:71% 100%}
    100%{background-position:30% 0%}
}
@-o-keyframes AnimationName {
    0%{background-position:30% 0%}
    50%{background-position:71% 100%}
    100%{background-position:30% 0%}
}
@keyframes AnimationName {
    0%{background-position:30% 0%}
    50%{background-position:71% 100%}
    100%{background-position:30% 0%}
}
</style>
</head>
<body>

<html><body><main>
<div class="card">
            
              <center>  <br><img src="<?php echo$logo;?>" alt="" width="200px"></center>
            

            <div class="card-body">
                <div class="card-title"><?php echo$name;?></div>


<!-- Start PHP Code  -->

<center><?php $txn="$cdb/campid.txt";
if(file_exists("$txn")){
$file=file_get_contents("$txn");
$pro = explode("+",$file);
for($i = 0; $i < count($pro); $i++){
if(!empty($pro[$i])){
    $camp=$pro[$i];
    if(file_exists("$cdb/$camp/$camp.json")){
if(!file_exists("$cdb/$camp/over.txt")){

$file="$cdb/$camp/$camp.json";   
$deco=file_get_contents($file);
$dcd=json_decode($deco,true);
$cname=$dcd['cname'];
$pr=$dcd['peruser'];
$ref=$dcd['ref'];
$clink="camp.php?id=$camp";
$rlink="refer.php?camp=$camp";

echo"
     <center> 
<div class='box1'><b>
<div style='margin-bottom:10px;'><h4 style='font-weight: 600; font-size: 1.1rem; color:black; padding-bottom:4px; margin-bottom:10px; margin-top:10px; width:80%;' >&#9733; $cname &#9733;</h4><b><font color='blue' size='4' >User: <font color='white'>&#8377;$pr</font>  <font color='black'>|</font> Refer: <font color='white'>&#8377;$ref</font></font></h4></div>

<a href='$clink'><button class='submit' style='font-weight:800;' >Camp Link</button></a>
     <a href='$rlink'><button style='font-weight:800;' >Refer Link</button></a></div> 
<br>  

";
}}}}}?>
        
</center></body>
</html>

</main>     








    </main>
    
 
 <div class="card-payment-button">
  <center><a href="tg:resolve?domain=<?php echo$tig;?>">  <font size="5"> <i class="fa fa-telegram"></i>  <b>Join Telegram</b></font></a></center>
 </div>

 
 
</body>
</html> 