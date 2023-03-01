<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm danh mục</h1>
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
                                    if(isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $trademark = $_POST['trademark'];

                                        $logo = $_FILES['logo']['name'];
                                        $tmp_logo = $_FILES['logo']['tmp_name'];
                    
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryCat::addCat($name, $trademark, $logo, $tmp_logo, $picture, $tmp_picture);
                                    }
                                ?>
                                <form role="form" active="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input type="text" name="name" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên Thương hiệu</label>
                                        <input type="text" name="trademark" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Logo</label><br>
                                        <input type="file" name="logo" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" required/>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
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