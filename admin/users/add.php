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
                        <h1>Thêm người dùng</h1>
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
                                        $username = $_POST['username'];
                                        $password = md5($_POST['password']);
                                        $fullname = $_POST['fullname'];
                                        LibraryUser::addUser($username, $password, $fullname);
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd">
                                    <div class="">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="username"></label>
                                    </div>
                                    <div class="">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="password"></label>
                                    </div>
                                    <div class="">
                                        <label>Fullname</label>
                                        <input type="text" name="fullname" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="fullname"></label>
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
                
                
            });
        });
    </script>