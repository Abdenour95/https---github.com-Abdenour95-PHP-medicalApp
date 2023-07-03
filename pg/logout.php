<?php   session_start();
session_destroy();
header('Location:index.php?p=5');
exit;
?>
