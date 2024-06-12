<?php
session_start();
$_SESSION['usermane']='text';
$_SESSION[''] = '';

session_destroy();
        
header('location: ../index.php');
exit();
?>