<?php
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gshock';

    $mysqli = new mysqli($localhost, $username, $password, $database);
    $mysqli->set_charset('utf8');
    if(mysqli_connect_errno()) {
        echo 'Có lỗi khi kết nối: '.mysqli_connect_error();
        exit();
    }

?>


<?php
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'address';

    $mysqli2 = new mysqli($localhost, $username, $password, $database);
    $mysqli2->set_charset('utf8');
    if(mysqli_connect_errno()) {
        echo 'Có lỗi khi kết nối: '.mysqli_connect_error();
        exit();
    }

?>