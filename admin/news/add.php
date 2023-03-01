<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm bài đăng</h1>
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
                                        $preview_text = $_POST['preview_text'];
                                        $detail_text = $_POST['detail_text'];
                                        //set giờ theo múi giờ Việt Nam
                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $created_at = date('Y-m-d');
                    
                                        $picture = $_FILES['picture']['name'];
                                        $tmp_picture = $_FILES['picture']['tmp_name'];

                                        LibraryNews::addNews($name, $created_at, $preview_text, $detail_text, $picture, $tmp_picture);
                                    }
                                ?>
                                <form role="form" active="" method="post" id="formadd" enctype="multipart/form-data">
                                    <div class="">
                                        <label>Tên tin</label>
                                        <input type="text" name="name" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="name" class="error"></label>
                                    </div>
                                    <div class="">
                                        <label>Hình ảnh</label><br>
                                        <input type="file" name="picture" required title=" Vui lòng chọn file"/><br>
                                        <label for="picture" class="error"></label>
                                    </div>
                                    <div class="">
                                        <label>Mô tả</label>
                                        <input type="text" name="preview_text" class="form-control" required title=" Xin vui lòng nhập"/>
                                        <label for="preview_text" class="error"></label>
                                    </div>
                                    <div class="">
                                        <label style="display: block;" >Chi tiết</label>
                                        <textarea  rows="5" name="detail_text" class="ckeditor" id="cktext" ></textarea>
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
                    detail_text:{
                        required: function() {
                            CKEDITOR.instances.detail_text.updateElement();
                        },
                        required:true
                    },
                },
                messages:{
                    detail_text:{
                        required:"Vui lòng nhập trường này",
                    },
                }
            });
        });
    </script>