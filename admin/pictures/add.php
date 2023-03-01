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
                        <h1>Thêm hình ảnh</h1>
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
                                        $query = "SELECT * FROM products WHERE (name) = '$name'";
                                        $ketqua = $mysqli->query($query);
                                        $arrProduct = mysqli_fetch_assoc($ketqua);
                                        if(!empty($arrProduct)) {
                                            $pid = $arrProduct['product_id'];

                                            $picture = $_FILES['picture']['name'];
                                            $tmp_picture = $_FILES['picture']['tmp_name'];

                                            LibraryPicture::addPicture($pid, $picture, $tmp_picture);
                                        } else {
                                            echo '<p style="color:red;">Bạn nhập sai tên sản phẩm</p>';
                                        }
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" required title=" Xin vui lòng nhập chính xác tên sản phẩm"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" required title=" Vui lòng chọn file"/><br>
                                        <label for="picture" class="error"></label>
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

    <script type="text/javascript" >
        $(document).ready(function(){
            $("#formadd").validate({
                ignore: [],
                debug: false,
                rules: {
                    
                },
                messages:{
                    
                }
            });
        });
    </script>