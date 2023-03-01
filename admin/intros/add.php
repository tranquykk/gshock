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
                        <h1>Thêm mục giới thiệu</h1>
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
                                        $intro_id = $_POST['intro_id'];
                                        $slogan = $_POST['slogan'];
                                        $content = $_POST['content'];
                    
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryIntro::addIntro($slogan, $content, $picture, $tmp_picture);
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd" enctype="multipart/form-data">
                                    <div class="">
                                        <label>Slogan</label>
                                        <input type="text" name="slogan" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="slogan" class="error"></label>
                                    </div>
                                    <div class="">
                                        <label>Nội dung</label>
                                        <input type="text" name="content" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="content" class="error"></label>
                                    </div>
                                    <div class="">
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