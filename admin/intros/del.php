<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>

<?php
    $id = $_GET['id'];
    LibraryIntro::delIntro($id);
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>