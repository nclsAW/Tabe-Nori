<?php 
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:index.php');
    } else {
        $user = $_SESSION['username'];
    }
?>