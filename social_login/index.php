<?php
session_start();
if (isset($_SESSION['id'])) {
// Redirection to login page twitter or facebook
header("location: home.php");
}
if (array_key_exists("login", $_GET)) 
{
$oauth_provider = $_GET['oauth_provider'];
if ($oauth_provider == 'twitter')
{
header("Location: login-twitter.php");
}
else if ($oauth_provider == 'facebook')
 {
header("Location: login-facebook.php");
}
}
?>
//HTML Code
<a href="?login&oauth_provider=twitter">Twitter_Login</a>
<a href="?login&oauth_provider=facebook">Facebook_Login</a>