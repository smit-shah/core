<?php
    session_start();

    if(isset($_SERVER['HTTPS']))
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    else
        $protocol = 'http';

    if (strpos($_SERVER['HTTP_HOST'], 'localhost') > -1) {
        define('LOCAL', true);
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'core');
        define('SITE', $protocol . "://" . $_SERVER['HTTP_HOST'] . '/core/');
        define('PATH', $_SERVER['DOCUMENT_ROOT'] . '/core/');
    }
    else {
        define('LOCAL', false);
        define('DB_HOST', '');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'core');
        define('SITE', $protocol . "://" . $_SERVER['HTTP_HOST'] . '/');
        define('PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
    }

    define('PUBLIC_PATH', PATH . 'public/');
    define('CSS_PATH', PUBLIC_PATH . 'css/');
    define('JS_PATH', PUBLIC_PATH . 'js/');
    define('IMAGES_PATH', PUBLIC_PATH . 'images/');

    define('PUBLIC_URL', SITE . 'public/');
    define('CSS_URL', PUBLIC_URL . 'css/');
    define('JS_URL', PUBLIC_URL . 'js/');
    define('IMAGES_URL', PUBLIC_URL . 'images/');

    define('ADMIN_PATH', PATH . 'admin/');
    define('DASHBOARD_URL', SITE . 'admin/dashboard/');
    define('USERS_URL', SITE . 'admin/users/');

    require("Db.php");
    require("CRUD.php");

    $current_user = isset($_SESSION['user']) ? $_SESSION['user'] : [];

    $db = new Db();

    if (isset($_POST['csrf'])) {
        $_SESSION['user'] = ['name' => 'smit'];   
        header('Location: ' . SITE . 'admin/dashboard.php');
        die();
    }

    if (strpos($_SERVER['REQUEST_URI'], 'admin') !== FALSE ) {
        if (!isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'login') === FALSE && strpos($_SERVER['REQUEST_URI'], 'logout') === FALSE ) {
            header('Location: ' . SITE . 'admin/login.php');
            die();
        }
        if (isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'login') !== FALSE) {
            header('Location: ' . SITE . 'admin/dashboard.php');
            die();
        }
    }

    function pr($obj) {
        echo 'Data:<pre>';
        print_r($obj);
        die();
    }
    

    /*echo '<pre>';
    print_r($_SERVER);
    die();*/
?>