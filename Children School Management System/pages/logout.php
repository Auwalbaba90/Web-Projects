<?php
session_start();
unset($_SESSION['submit']);
session_destroy();
header('Location:login.php');
?>
