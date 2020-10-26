<?php
    session_start();
    session_destroy();
    header("Location: Userlogin.php");
    exit();
?>