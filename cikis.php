<?php

session_start();
 $_SESSION['giris'] = false;
session_unset();
header("location:anasayfa.php");

?>