<?php

session_start();
unset($_SESSION['ofnum']);
header("location:orglogin.php");

?>