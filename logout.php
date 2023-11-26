<?php

include '_nav.php';
session_start();
echo "Logging you out. Please wait...";

session_destroy();
header("Location: _logout.php");
?>