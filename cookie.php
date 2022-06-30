/*Cookie = text files stored on client computer for tracking purpose*/
<?php
$cookie_name = "cookie1";
$cookie_value = "Deepak";
//set cookie(name,value,expiry,path,domain,security)

setcookie("cookie1","Deepak", time() + (86400 * 30), "/","",0); 
/* 86400 = 1 day, path ="/" -> valid for all directories
security = 1 -> https , 0 -> http*/

if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}

//Delete cookie by expiry date
setcookie("cookie1","Deepak", time() - 60, "/","",0); 
?>
