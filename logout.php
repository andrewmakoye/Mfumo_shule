<?php
session_start();
session_unset();
session_destroy();
header("Location: ingia.php");
exit();
?>
