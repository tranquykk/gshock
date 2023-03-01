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
                        <h1>Sửa người dùng</h1>
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
                                    $query2 = "SELECT * FROM  users WHERE id={$id}";
                                    $ketqua2 = $mysqli->query($query2);
                                    $arrUser = mysqli_fetch_assoc($ketqua2);
                                    if($arrUser['username'] == 'admin' && $_SESSION['arrUser']['username'] != 'admin') {
                                        header('location: index.php?msg=Bạn không có quyền sửa admin');
                                    }
                                    if(isset($_POST['submit'])) {
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                        $fullname = $_POST['fullname'];

                                        $ketqua = LibraryUser::editUser($fullname, $password, $id);
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?php echo $arrUser['username']?>" readonly class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $arrUser['fullname']?>"/>
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
