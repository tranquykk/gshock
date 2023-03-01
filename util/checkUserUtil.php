<?php
    if(empty($_SESSION['arrUser'])) {
        header('location: /admin/auth/login.php');
    }
?>