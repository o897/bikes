<?php
require_once('CSRF.php');

session_start();
session_unset();
session_destroy();

echo "Logout";
header("location: ../index.php");

