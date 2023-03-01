<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/util/checkUserUtil.php';?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa phần giới thiệu</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM intros WHERE intro_id = {$id}";
                                    $ketqua = $mysqli->query($query);
                                    $arrIntro = mysqli_fetch_assoc($ketqua);

                                    if(isset($_POST['submit'])) {
                                        $intro_id = $_POST['intro_id'];
                                        $slogan = $_POST['slogan'];
                                        $content = $_POST['content'];
                    
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryIntro::editIntro($slogan, $content, $picture, $tmp_picture, $id);
                                    }
                                ?>
                                <form role="form" active="" method="post" enctype="multipart/form-data">
                                    <div class="">
                                        <label>Slogan</label>
                                        <input type="text" name="slogan" class="form-control" value="<?php echo $arrIntro['slogan'] ?>"/>
                                        <label for="slogan" class="error"></label>
                                    </div>
                                    <div class="">
                                        <label>Nội dung</label>
                                        <input type="text" name="content" class="form-control" value="<?php echo $arrIntro['content']; ?>"/>
                                        <label for="content" class="error"></label>
                                    </div>
                                    <div class="">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture"/><br>
                                        <label for="picture" class="error"></label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Sửa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <!-- /.content-wrapper -->

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>
