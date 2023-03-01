<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa danh mục</h1>
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
                                    $query = "SELECT * FROM categories WHERE categories_id = {$id}";
                                    $ketqua = $mysqli->query($query);
                                    $arrCategories = mysqli_fetch_assoc($ketqua);

                                    if(isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $trademark = $_POST['trademark'];

                                        $logo = $_FILES['logo']['name'];
                                        $tmp_logo = $_FILES['logo']['tmp_name'];
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryCat::editCat($name, $trademark, $logo, $tmp_logo, $picture, $tmp_picturem, $id);
                                    }
                                ?>
                                <form role="form" active="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input type="text" name="name" value="<?php echo $arrCategories['name']?>" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên Thương hiệu</label>
                                        <input type="text" name="trademark" value="<?php echo $arrCategories['trademark']?>" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Logo</label><br>
                                        <input type="file" name="logo"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture"/>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success btn-md" style="margin-top:10px; padding: 5px 15px">Sửa</button>
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