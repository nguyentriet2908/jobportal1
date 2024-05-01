<?php
require '../constants/settings.php';
require 'constants/check-login.php';
require '../constants/db_config.php';
session_start();
$_SESSION['search'] = $_GET['search'];
header("location: view-applicants.php")
?>