<?php
    session_start();
    ob_start();

    session_destroy();
    header('location: /dang-nhap');

    ob_end_flush();
?>