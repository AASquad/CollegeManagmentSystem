<?php
session_start();

unset($_SESSION['auth']);
unset($_SESSION['passing']);
unset($_SESSION['passingpass']);
header('Location:../login.php');
?>

