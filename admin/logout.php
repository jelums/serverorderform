<?php
require("config.php");
unset($_SESSION['account']);
header("Location: index.php");
die("Redirecting to: index.php");
?>
