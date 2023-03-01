<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Chi tiết đơn hàng</h1>
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
                                <table id="example2" class="table table-bordered table-hover">
                                    <?php
                                        $oid = $_GET['id'];
                                        $query = "SELECT * FROM orders INNER JOIN order_detail ON orders.order_id = order_detail.order_id INNER JOIN products ON order_detail.product_id = products.product_id WHERE orders.order_id = $oid";
                                        $ketqua = $mysqli->query($query);
                                        $arOrder = mysqli_fetch_assoc($ketqua);

                                        $order_date = $arOrder['order_date'];
                                        
                                        $customer_name = $arOrder['customer_name'];
                                        $phone = $arOrder['phone'];
                                        $email = $arOrder['email'];
                                        $address = $arOrder['address'];
                                        $note = $arOrder['note'];
                                    ?>
                                    
                                    <tr>
                                        <th colspan="3" style="text-align: center; background: #ececec; font-size: 18px">Đơn hàng</th>
                                    </tr>
                                    

                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá bán</th>
                                        <th>Tạm tính</th>
                                    </tr>
                                    <?php
                                        $query2 = "SELECT * FROM order_detail INNER JOIN products ON order_detail.product_id = products.product_id WHERE order_id = $oid";
                                        $ketqua2 = $mysqli->query($query2);
                                        $result = 0;
                                        while($arOrderDetail = mysqli_fetch_assoc($ketqua2)) {
                                            $product_name = $arOrderDetail['name'];
                                            $price = $arOrderDetail['price'];
                                            $price_after = round(($price / 100) * (100 - $arOrderDetail['sale_off']), -4);
                                            $quantity = $arOrderDetail['quantity'];
                                            $total = $price_after * $quantity;
                                            $result += $total;
                                    ?>
                                    <tr>
                                        <td><?php echo $product_name ;?> <b>× <?php echo $quantity;?></b> </td>
                                        <td><?php echo number_format($price_after, 0, ',', '.');?>₫</td>
                                        <td><?php echo number_format($total, 0, ',', '.');?>₫</td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                    <tr>
                                        <th>Tổng tiền</th>
                                        <th colspan="2" style="text-align:center"><?php echo number_format($result, 0, ',', '.');?> VNĐ</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" style="text-align: center; background: #ececec; font-size: 18px">Thông tin khách hàng</th>
                                    </tr>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <td colspan="2"><?php echo $oid;?></td>
                                    </tr>
                                    <tr>
                                        <th>Thời gian đặt hàng</th>
                                        <td colspan="2"><?php echo $order_date;?></td>
                                    </tr>

                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <td colspan="2"><?php echo $customer_name;?></td>
                                    </tr>
                                    <tr>
                                        <th>Số điện thoại liên lạc</th>
                                        <td colspan="2"><?php echo $phone;?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td colspan="2"><?php echo $email;?></td>
                                    </tr>
                                    <tr>
                                        <th>Địa chỉ</th>
                                        <td colspan="2"><?php echo $address;?></td>
                                    </tr>
                                    <tr>
                                        <th>Ghi chú</th>
                                        <td colspan="2"><?php echo $note;?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <!-- /.content-wrapper -->

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>