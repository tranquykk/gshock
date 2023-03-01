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
                        <h1>Thêm sản phẩm</h1>
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
                                        $categories_id = $_POST['categories_id'];
                                        $price = $_POST['price'];
                                        $sale = $_POST['sale'];
                                        $product_detail = $_POST['product_detail'];
                    
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryProduct::addProduct($name, $price, $sale, $product_detail, $categories_id, $picture, $tmp_picture);
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" required title=" Xin vui lòng nhập"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select class="form-control" name="categories_id">
                                            <?php
                                                $ketqua = LibraryCat::showCat();
                                                while($arrCategories = mysqli_fetch_assoc($ketqua)) {
                                                    $categories_id = $arrCategories['categories_id'];
                                                    $name = $arrCategories['name'];
                                            ?>
                                            <option value="<?php echo $categories_id?>"><?php echo $name?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" required title=" Vui lòng chọn file"/><br>
                                        <label for="picture" class="error"></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input type="text" name="price" class="form-control" required title=" Xin vui lòng nhập"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm giá (%)</label>
                                        <input type="text" name="sale" class="form-control" required title=" Xin vui lòng nhập"/>
                                    </div>
                                    <div class="form-group">
                                        <label style="display: block;" >Chi tiết</label>
                                        <textarea  rows="5" name="product_detail" class="ckeditor" id="cktext" ></textarea>
                                        <label for="cktext" style="color:red;margin-top:5px" class="error"></label>
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
                    product_detail:{
                        required: function() {
                            CKEDITOR.instances.product_detail.updateElement();
                        },
                        required:true
                    },
                },
                messages:{
                    product_detail:{
                        required:"Vui lòng nhập trường này",
                    },
                }
            });
        });
    </script>