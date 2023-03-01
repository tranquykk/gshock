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
                        <h1>Sửa hình ảnh</h1>
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
                                    $query = "SELECT sub_picture.*, products.name AS name_product FROM sub_picture INNER JOIN products ON sub_picture.product_id = products.product_id WHERE id = $id";
                                    $ketqua = $mysqli->query($query);
                                    $arrPicture2 = mysqli_fetch_assoc($ketqua);
                                    // $pid = $arrPicture2['product_id'];

                                    if(isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $pid = $arrPicture2['product_id'];

                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryPicture::editPicture($pid, $picture, $tmp_picture, $id);
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" readonly value="<?php echo $arrPicture2['name_product'];?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" /><br>
                                        <br>
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