<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa sản phẩm</h1>
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
                                    $query = "SELECT * FROM products WHERE product_id = {$id}";
                                    $ketqua = $mysqli->query($query);
                                    $arrProduct = mysqli_fetch_assoc($ketqua);

                                    if(isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $categories_id = $_POST['categories_id'];
                                        $price = $_POST['price'];
                                        $sale = $_POST['sale'];
                                        $product_detail = $_POST['product_detail'];
                    
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryProduct::editProduct($name, $price, $sale, $product_detail, $categories_id, $picture, $tmp_picture, $id);
                                    }
                                ?>
                                <form role="form" active="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" required title=" Xin vui lòng nhập" value="<?php echo $arrProduct['name']?>"/>
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
                                            <option <?php echo $categories_id == $arrProduct['categories_id']? 'selected': ''?> value="<?php echo $categories_id?>"><?php echo $name?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" /><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input type="text" name="price" class="form-control" value="<?php echo $arrProduct['price']?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm giá (%)</label>
                                        <input type="text" name="sale" class="form-control" value="<?php echo $arrProduct['sale_off']?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label style="display: block;" >Chi tiết</label>
                                        <textarea  rows="5" name="product_detail" class="ckeditor" id="cktext"><?php echo $arrProduct['product_detail']?></textarea>
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
