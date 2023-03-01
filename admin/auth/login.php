<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2"></div>
        </div>
    </section>
        <?php  //var_dump($_SESSION['arrUser']) ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 style="text-align:center">Đăng nhập</h2>
                        </div>
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Form Elements -->
                                    <div class="panel panel-default" style="text-align:center; width: 45%;margin: 20px auto 70px;">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                        if(isset($_POST['submit'])) {
                                                            $username = $_POST['username'];
                                                            $password = md5($_POST['password']);
                                                            $query = "SELECT * FROM users WHERE `username` = '{$username}' AND `password` = '{$password}'";
                                                            $ketqua = $mysqli->query($query);
                                                            $arrUser = mysqli_fetch_assoc($ketqua);
                                                            if($arrUser!=NULL) {
                                                                $_SESSION['arrUser'] = $arrUser;
                                                                header('location: ../');
                                                            } else {
                                                                echo 'Sai username hoặc password';
                                                            }
                                                        }
                                                    ?>
                                                    <form role="form" active="" method="post" style="">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="username" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="password" class="form-control" />
                                                        </div>

                                                        <button type="submit" name="submit" class="btn btn-success btn-md">Đăng nhập</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
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