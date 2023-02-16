<?php

include("admin/alert.php");
include("admin/main.php");

$ippp=substr(str_shuffle("123456789012345678901234567890"), 0, 7);
$panel_name="INFOTECH";
$emo = "\u{1F31F}";
$emo1 = "\u{274C}";
$rup = "\u{20B9}";
$ref=$_GET['refer']; 
$pathrr="$refrs/ref/$ref/$ref.json";
if(file_exists($pathrr)){
$file=file_get_contents($pathrr);
$json=json_decode($file,true);
$refer=$json['ref'];
}else{
$refer="invalid refer";
}
$user=$_GET['user'];
$offer=$_GET['offerid']; 
$event=$_GET['event']; 
$ip=$_GET['ip'];
$tkn=$_GET['token'];
 
include("admin/token.php");

if($tkn==$token){

if (file_exists("admin/instant/$offer/$event/data.json")){

$json_object36= file_get_contents("admin/instant/$offer/ins.json"); 
$data36 = json_decode($json_object36, true);
$cname=$data36['title'];
$same=$data36['same'];
$selfrefer=$data36['self'];
$isp=$data36['ip'];
$lid=$data36['id'];

$json_object= file_get_contents("admin/instant/$offer/$event/data.json"); 
$data = json_decode($json_object, true);
$uamo=$data['puser'];
$ramo=$data['ruser'];
$uco=$data['uco'];
$rco=$data['rco'];
$ucom=urlencode($uco);
$rcom=urlencode($rco);

file_put_contents("$cdb/$lid/num/$user.txt",$uamo); 

if(!file_exists("$cdb/$lid/over.txt")){
    
    if($isp){

if (file_exists("admin/instant/$offer/$event/ip/$ip.json")){
    $co=file_get_contents("admin/instant/$offer/$event/lead.txt");
    $msgg1="
*$emo1 New Fake Lead $emo1 *

*Camp Name:*  `$cname`
*Offer id:*  `$offer`
*Event:*  `$event`

*User:*  {`$user`}  { *$rup$uamo* }
*Payment:* Not Sent

*Refer:*  {`$refer`}  { *$rup$ramo* }
*Payment:* Not Sent

*Total valid Leads: $co *

";
$mess1=urlencode($msgg1);

$url99="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$tg&text=$mess1&parse_mode=markdown";
$otpt=file_get_contents($url99);

    echo "Fake Lead";}else{
        
include("admin/payment.php");
$url=$link;

$nunn=substr(str_shuffle("123456789012345678901234567890123456789012345"), 0, 4);
$less=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
$o11="USER$less$nunn";
$o12="REFER$less$nunn";

$l1=str_replace('{paytm}',$user,$url);
$l2=str_replace('{comment}',$ucom,$l1);
$l3=str_replace('{amount}',$uamo,$l2);
$l4=str_replace('{orderid}',$o11,$l3);
//User payment link

$b1=str_replace('{paytm}',$refer,$url);
$b2=str_replace('{comment}',$rcom,$b1);
$b3=str_replace('{amount}',$ramo,$b2);
$b4=str_replace('{orderid}',$o12,$b3);
//Refer payment link

    
    if(file_exists("admin/ban/$user.txt")){
        
        $outputu="Banned";
$outputr="Not Sent";
        
    }else{
        
        if(file_exists("admin/ban/$refer.txt")){
            
            $outputu="Not Sent";
$outputr="Banned";}else{

if(!$same){
if(file_exists("admin/instant/$offer/$event/num/$user.txt")){
   $outputu="Already Completed";
$outputr="User already Completed"; }else{
 
if($selfrefer){

$outputu=file_get_contents($l4);
$outputr=file_get_contents($b4);   

}else{
if($user==$refer){

$outputu=file_get_contents($l4);
$outputr="Self Refer";
}else{

$outputu=file_get_contents($l4);
$outputr=file_get_contents($b4);

}    
}    
}
}}}


$ipp='{"user":"'.$user.'","refer":"'.$refer.'"}';
file_put_contents("admin/instant/$offer/$event/ip/$ip.json",$ipp);

$fff="admin/instant/$offer/$event/num/$user.txt";
if(file_exists("$fff")){$rfg=file_get_contents("$fff");}else{$rfg="0";}
$rfgg=$rfg+1;
file_put_contents("$fff",$rfgg);  

$ffff="admin/instant/$offer/$event/rnum/$ref.txt";
if(file_exists("$ffff")){$rfgf=file_get_contents("$ffff");}else{$rfgf="0";}
$rfggf=$rfgf+1;
file_put_contents("$ffff",$rfggf);  
 
$ci=file_get_contents("admin/instant/$offer/$event/lead.txt");
file_put_contents("admin/instant/$offer/$event/lead.txt",$ci+1);

$cont=file_get_contents("admin/instant/$offer/$event/lead.txt");

if($refer=="123"){$outputr="No refer";}

    $msgg="
*$emo New Conversion $emo *

*Camp Name:*  `$cname`
*Offer id:*  `$offer`
*Event:*  `$event`

*User:*  {`$user`}  { *$rup$uamo* }
*Payment:* `$outputu`

*Refer:*  {`$refer`}  { *$rup$ramo* }
*Payment:* `$outputr`

*Total Leads:* $cont

";

$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$tg&text=$mess&parse_mode=markdown";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);
 
 echo'{"status":"Success","user":"'.$user.'","userpayment":"'.$outputu.'","refer":"'.$refer.'","referpayment":"'.$outputr.'"}';        
        
        
        
        
        
    }} else {


include("admin/payment.php");
$url=$link;

$l1=str_replace('{paytm}',$user,$url);
$l2=str_replace('{comment}',$ucom,$l1);
$l4=str_replace('{amount}',$uamo,$l2);
//User payment link

$b1=str_replace('{paytm}',$refer,$url);
$b2=str_replace('{comment}',$rcom,$b1);
$b4=str_replace('{amount}',$ramo,$b2);
//Refer payment link

    
    if(file_exists("admin/bins/$user.txt")){
        
        $outputu="Banned";
$outputr="Not Sent";
        
    }else{
        
        if(file_exists("admin/bins/$refer.txt")){
            
            $outputu="Not Sent";
$outputr="Banned";}else{

if(!$same){
if(file_exists("admin/instant/$offer/$event/num/$user.txt")){
   $outputu="Already Completed";
$outputr="User already Completed"; }else{
    $outputu=file_get_contents($l4);
$outputr=file_get_contents($b4);
}
}else{

if($user==$refer){

$outputu=file_get_contents($l4);
$outputr="Self Refer";
}else{

$outputu=file_get_contents($l4);
$outputr=file_get_contents($b4);

}}}}


$ipp='{"user":"'.$user.'","refer":"'.$refer.'"}';
file_put_contents("admin/instant/$offer/$event/ip/$ip.json",$ipp);

$fff="admin/instant/$offer/$event/num/$user.txt";
if(file_exists("$fff")){$rfg=file_get_contents("$fff");}else{$rfg="0";}
$rfgg=$rfg+1;
file_put_contents("$fff",$rfgg);  

$ffff="admin/instant/$offer/$event/rnum/$ref.txt";
if(file_exists("$ffff")){$rfgf=file_get_contents("$ffff");}else{$rfgf="0";}
$rfggf=$rfgf+1;
file_put_contents("$ffff",$rfggf);  
 
$ci=file_get_contents("admin/instant/$offer/$event/lead.txt");
file_put_contents("admin/instant/$offer/$event/lead.txt",$ci+1);

$cont=file_get_contents("admin/instant/$offer/$event/lead.txt");


    $msgg="
*$emo New Conversion $emo *

*Camp Name:*  `$cname`
*Offer id:*  `$offer`
*Event:*  `$event`

*User:*  {`$user`}  { *$rup$uamo* }
*Payment:* `$outputu`

*Refer:*  {`$refer`}  { *$rup$ramo* }
*Payment:* `$outputr`

*Total Leads:* $cont

";

$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$tg&text=$mess&parse_mode=markdown";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);


if($chha){
function encode($Number='', $first=0, $last=0, $rep='X'){
    $begin  = substr($Number,0,$first);
    $middle = str_repeat($rep,strlen(substr($Number,$first,$last)));
    $end    = substr($Number, $last);
    $stars  = $begin.$middle.$end;
    return $stars;
}
$userr=encode($user,3,-3);
$referr=encode($refer,3,-3);


 $msgg="
*$emo New Conversion $emo *

*Camp Name:  $cname

User:  $userr  { $rup$uamo }
Payment: $outputu

Refer:  $referr  { $rup$ramo }
Payment: $outputr*

";

$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=@$chha&text=$mess&parse_mode=markdown";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);}
 
 echo'{"status":"Success","user":"'.$user.'","userpayment":"'.$outputu.'","refer":"'.$refer.'","referpayment":"'.$outputr.'"}';



}
}else{
    $cont=file_get_contents("admin/instant/$offer/$event/lead.txt");
      $msgg="
*$emo1 Conversion after Camp Over $emo1 *

*Camp Name:*  `$cname`
*Offer id:*  `$offer`
*Event:*  `$event`

*User:*  {`$user`}  { *$rup$uamo* }
*Payment:* Not Sent

*Refer:*  {`$refer`}  { *$rup$ramo* }
*Payment:* Not Sent

*Total Leads:* $cont

";

$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$tg&text=$mess&parse_mode=markdown";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);
    echo"Camp Stopped";
}}else{
    
     $cont=file_get_contents("admin/instant/$offer/$event/lead.txt");
      $msgg="
*$emo1 Event/Offerid not Matched $emo1 *

*Offer id:*  `$offer`
*Event:*  `$event`

*User:*  {`$user`} 
*Payment:* Not Sent

*Refer:*  {`$refer`}
*Payment:* Not Sent

";

$mess=urlencode($msgg);

$url999="https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$tg&text=$mess&parse_mode=markdown";

$h999[]='Host: api.telegram.org';
$h999[]='accept: */*';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url999);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$h999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one999=curl_exec($ch);
$json999=json_decode($one999,1);
 curl_close ($ch);
    echo"Event/Offerid not matched...!";
}}else{echo"invalid token";}
 ?>
 