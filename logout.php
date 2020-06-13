<?php
session_start();
$_SESSION['nama'] = '';
unset($_SESSION['nama']);
session_unset();
session_destroy();
header("location: indexx.php");
?>