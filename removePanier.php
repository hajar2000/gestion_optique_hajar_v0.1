<?php
session_start();
unset($_SESSION["panier"]);
echo "session destroyed";
header("Location:index.php");

?>
