<?php
session_start();
session_unset();
session_destroy(); 
header("Location: menu_superior.php");
exit();
?>
