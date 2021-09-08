<?php
session_start();

unset($_SESSION['name']);
unset($_SESSION['memberaccount']);
unset($_SESSION['pwd']);
header('location:./member-index.php');




?>