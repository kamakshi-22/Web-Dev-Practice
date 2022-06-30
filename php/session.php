/*Session = creates a file in temporary directory on server where registered session variables are stored */

<?php 
session_start();

//$_SESSION = ASSOCIATIVE ARRAY TO STORE SESSION VARIABLES

if (isset($_SESSION["views"])) {
$_SESSION["views"] = $_SESSION["views"] + 1;
} else {
$_SESSION["views"] = 1;
}
echo "Views = " . $_SESSION["views"];

unset($_SESSION("views")); //unsets session variable
session_destroy(); //destroy all session variables


?>
