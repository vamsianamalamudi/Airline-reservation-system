<?php
session_start();

if(isset($_SESSION['name'])){
session_unset();
session_destroy();
header("Location: loginn.php");
exit();
}

header("Location: loginn.php");
exit();

?>