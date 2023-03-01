<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/util/checkUserUtil.php';?>

<?php
    $id = $_GET['id'];
    $query2 = "SELECT * FROM  users WHERE id={$id}";
    $ketqua2 = $mysqli->query($query2);
    $arrUser = mysqli_fetch_assoc($ketqua2);
    if($arrUser['username'] == 'admin' && $_SESSION['arrUser']['username'] != 'admin') {
        header('location: index.php?msg=Bạn không có quyền xóa admin');
        die();
    }
    LibraryUser::delUser($id);
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>
