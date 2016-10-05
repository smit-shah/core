<?php
    require '../config/config.php';
    unset($_SESSION['user']);
    header('Location: ' . SITE . '/admin/');
?>