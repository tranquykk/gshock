<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/util/checkUserUtil.php';?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

<?php
  //tính tổng số dòng
  $tongSoDong = LibraryPage::pageing('ratings');
  //số truyện trên 1 trang
  $row_count = ROW_COUNT;
  //tổng số trang
  $tongSoTrang = ceil($tongSoDong / $row_count);
  //trang hiện tại
  $trangHienTai = 1;
  if(isset($_GET['page'])) {
  $trangHienTai = $_GET['page'];
  }
  //offset
  $offset = ($trangHienTai - 1)*$row_count;
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý đánh giá, bình luận</h1>
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
              <div class="card-header">
              <?php
                if(isset($_GET['msg'])) {
                    echo $_GET['msg'];
                }
              ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6" style="float: right; padding: 0">
                  <form method="post" action="">
                    <input type="submit" name="search" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                    <input type="search" class="form-control input-sm"  name="find_product" required minlength="2" placeholder="Nhập tên sản phẩm" style="float:right; width: 300px;font-size: 14px;height: 33px;" />
                    <div style="clear:both"></div>
                  </form><br />
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên khách hàng</th>
                      <th>Email</th>
                      <th>Xếp hạng (sao)</th>
                      <th>Bình luận</th>
                      <th>Tên sản phẩm</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $submit = false;
                      $valueSearch = '';
                      if(isset($_POST['search'])) {
                        $submit = true;
                        $valueSearch = $_POST['find_product'];
                      }
                      $ketqua = LibraryRating::showRating($submit, $valueSearch, $offset, $row_count);
                      $count = 0;
                      while($arRating = mysqli_fetch_assoc($ketqua)) {
                        $id = $arRating['rating_id'];
                        $fullname = $arRating['fullname'];
                        $rating_action = $arRating['rating_action'];
                        $email = $arRating['email'];
                        $comment = $arRating['comment'];
                        $product_name = $arRating['name'];
                        $count++;
                    ?>
                    <tr>
                      <td><?php echo $id ?></td>
                      <td><?php echo $fullname ?></td>
                      <td><?php echo $email ?></td>
                      <td><?php echo $rating_action;?> sao</td>
                      <td><?php echo $comment ?></td>
                      <td><?php echo $product_name ?></td>
                      <td class="center">
                        <a href="del.php?id=<?php echo $id;?>" class="btn btn-danger"><i class="fas ion-edit"></i> Xóa</a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6">
                  <div class="dataTables_info" id="dataTables-example_info" style="margin:27px 0 0 5px"><?php echo isset($_POST['search'])?"Kết quả tìm kiếm: $count":"Tổng số lượt đánh giá: $tongSoDong"?></div>
                  </div>
                  <div class="col-sm-6" style="text-align:right;padding-left: 300px">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                      <ul class="pagination">
                        <?php
                          if(!isset($_POST['search'])){
                            if(isset($_GET['page']) && $trangHienTai > 1) {
                        ?>
                        <li class="paginate_button previous" id="dataTables-example_previous"><a href="index.php?page=<?php echo $trangHienTai-1;?>"><i class="ion-chevron-left"></i></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            for($i = 1; $i <= $tongSoTrang; $i++) {
                                $active='';
                                if($i==$trangHienTai) {
                                $active = 'active';
                                }
                            ?>
                        <li class="paginate_button <?php echo $active?>" ><a href="index.php?page=<?php echo $i?>"><?php echo $i?></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if($trangHienTai < $tongSoTrang) {
                        ?>
                        <li class="paginate_button next"  id="dataTables-example_next"><a href="index.php?page=<?php echo $trangHienTai+1;?>"><i class="ion-chevron-right"></i></a></li>
                        <?php
                            }   
                          }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?>