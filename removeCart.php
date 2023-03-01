<?php
    session_start();

    $key = $_GET['key'];
    

    unset($_SESSION['carts'][$key]);
    // array_values($_SESSION['carts']);
    header('location: /thanh-toan');
    die();

    
?>

