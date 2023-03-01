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
                        <h1>Thêm đơn hàng</h1>
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
                                        $product_name = $_POST['product_name'];
                                        $query = "SELECT * FROM products WHERE (name) = '$product_name'";
                                        $ketqua = $mysqli->query($query);
                                        $arrProduct = mysqli_fetch_assoc($ketqua);

                                        if(!empty($arrProduct)) {
                                            $pid = $arrProduct['product_id'];
                                            $customer_name = $_POST['customer_name'];
                                            $phone = $_POST['phone'];
                                            $address = $_POST['address'];
                                            $quantity = $_POST['quantity'];
                                            $email = $_POST['email'];
                                            $note = $_POST['note'];

                                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                                            $order_date = date('Y/m/d H:i:s');
                                            
                                            LibraryOrder::addOrder($customer_name, $phone, $email, $order_date, $address, $note, $pid, $quantity);
                                        } else {
                                            echo '<p style="color:red;">Bạn nhập sai tên sản phẩm</p>';
                                        }
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên khách hàng</label>
                                        <input type="text" name="customer_name" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="customer_name" class="error"></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại liên lạc</label>
                                        <input type="text" name="phone" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="phone" class="error"></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="email" class="error"></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="address" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="address" class="error"></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="product_name" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="product_name" class="error"></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="number" name="quantity" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="quantyti" class="error"></label> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <input type="text" name="note" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <!-- <label for="note" class="error"></label> -->
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