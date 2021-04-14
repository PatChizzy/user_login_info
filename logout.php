

<?php


session_start();

session_unset();

session_destroy();	

header("Location: login_page.php");
echo "You're logged out
?>