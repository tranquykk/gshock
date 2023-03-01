<?php include_once 'templates/gshock/inc/header.php'; ?>

    <div class="kc_clfw"></div>
    <section id="main_page" class="kc-elm kc-css-733616 kc_row vnt_section hide_col">
        <div class="kc-row-container kc-container vnt_col">
            <div class="kc-elm kc-css-841837 vnt_title"  >
                <h2 class="type">BẢN ĐỒ CỬA HÀNG</h2>
            </div>
            <div  class="kc-elm kc-css-791415 vnt_editor map_code">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.271997480139!2d106.64013861424613!3d10.790467561886295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eb29326f203%3A0x94bce30297a79dfa!2zNTIgQsOgdSBDw6F0IDYsIFBoxrDhu51uZyAxMywgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1638025331872!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div  class="kc-elm kc-css-303855 vnt_title"  >
                <h1 class="type" style="margin: 10px 0">LIÊN HỆ VỚI CHÚNG TÔI</h1>
            </div>
            <?php
            if(isset($_GET['success'])) {
                echo $_GET['success'];
            }
            ?>
            <div class="kc-elm kc-css-647677 kc_row kc_row_inner">
                <div class="kc-elm kc-css-609019 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                    <div  class="kc-elm kc-css-703649 vnt_title"  >
                        <h3 class="type" style="margin-top: 10px" >THÔNG TIN LIÊN HỆ</h3>
                        <span class="sub">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
                    </div>
                    <div  class="kc-elm kc-css-72723 vnt_editor">
                        <div role="form" class="wpcf7" id="wpcf7-f2760-p268-o1" lang="vi" dir="ltr">
                            <?php
                                $name_member = '';
                                $phone_member = '';
                                $email_member = '';
                                if(isset($_SESSION['arrMember'])) {
                                    $name_member = $_SESSION['arrMember']['fullname'];
                                    $phone_member = $_SESSION['arrMember']['phone'];
                                    $email_member = $_SESSION['arrMember']['email'];
                                }
                                if(isset($_POST['submit'])) {
                                    $name = $_POST['name'];
                                    $phone = $_POST['phone'];
                                    $email = $_POST['email'];
                                    $content = $_POST['content'];
    
                                    $query = "INSERT INTO contacts(fullname, phone, email, content) VALUES ('$name','$phone','$email','$content')";
                                    $ketqua = $mysqli->query($query);
                                    if($ketqua) {
                                        HEADER("LOCATION: lien-he?success=Bạn gửi liên hệ thành công");
                                        die();
                                    } else {
                                        echo "Có lỗi khi gửi liên hệ";
                                        die();
                                    }
                                }
                            ?>
                            <form action="" method="post"  >
                                <span class="wpcf7-form-control-wrap">
                                    <input type="text" name="name" value="<?php echo $name_member;?>" required class="wpcf7-form-control wpcf7-text" placeholder="Họ tên" />
                                </span>
                                <span class="wpcf7-form-control-wrap">
                                    <input type="text" name="phone" required minlength="10" pattern="[0-9]+" value="<?php echo $phone_member;?>" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number wpcf7-text" placeholder="Số điện thoại" />
                                </span>
                                <span class="wpcf7-form-control-wrap">
                                    <input type="email" name="email" size="40" required value="<?php echo $email_member;?>" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" placeholder="Địa chỉ Email" /></span>
                                <span class="wpcf7-form-control-wrap">
                                    <textarea name="content" cols="40" rows="10"  required minlength="20" class="wpcf7-form-control wpcf7-textarea wpcf7-text" placeholder="Nội dung liên hệ"></textarea>
                                </span>
                                <input type="submit" style="margin-bottom: 25px;" name="submit" value="Gửi Liên hệ" class="wpcf7-submit" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="kc-elm kc-css-456572 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                    <div  class="kc-elm kc-css-180154 vnt_title">
                        <h3 class="type" style="margin-top: 10px">CỬA HÀNG ĐỒNG HỒ</h3>
                    </div>
                    <div  class="kc-elm kc-css-425460 vnt_title" >
                        <i class="icon fa-map-marker-alt"></i>
                        <div class="type">52 Bàu Cát 6, Phường 14, Quận Tân Bình - HCM</div>        
                    </div>
                    <div  class="kc-elm kc-css-998258 vnt_title"  >
                        <i class="icon fa-phone"></i>
                        <div class="type">0907862323</div>
                    </div>
                    <div  class="kc-elm kc-css-283893 vnt_title"  >
                        <i class="icon fa-mail-bulk"></i>
                        <div class="type">info@gshockvn.net</div>
                    </div>
                    <div  class="kc-elm kc-css-122134 vnt_title"  >
                        <i class="icon fa-globe"></i><div class="type">www.gshockvn.net</div>
                    </div>
                    <div  class="kc-elm kc-css-585745 vnt_title"  >
                        <i class="icon fa-clock"></i>
                        <div class="type">Giờ làm việc: Từ 9:00 đến 22:00 các ngày trong tuần từ Thứ 2 đến Chủ nhật</div>        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
    <script type="text/javascript"></script><style type="text/css" id="kc-css-general">.kc-off-notice{display: inline-block !important;}.kc-container{max-width:1170px;}</style><style type="text/css" id="kc-css-render">@media only screen and (min-width:1000px) and (max-width:5000px){body.kc-css-system .kc-css-609019{width:50%;}body.kc-css-system .kc-css-456572{width:50%;}}body.kc-css-system .kc-css-733616{padding-top:15px;padding-bottom:30px;}body.kc-css-system .kc-css-233161{text-align:center;}body.kc-css-system .kc-css-841837 .type{font-size:30px;line-height:36px;font-weight:600;text-align:center;}body.kc-css-system .kc-css-841837{margin-top:20px;margin-bottom:20px;}body.kc-css-system .kc-css-791415{height:500px;}body.kc-css-system .kc-css-303855 .type{font-size:30px;line-height:36px;font-weight:600;text-align:center;}body.kc-css-system .kc-css-303855{margin-top:20px;margin-bottom:20px;}body.kc-css-system .kc-css-703649 .type{font-weight:600;text-transform:uppercase;}body.kc-css-system .kc-css-72723{margin-top:15px;}body.kc-css-system .kc-css-180154 .type{font-weight:600;text-transform:uppercase;}body.kc-css-system .kc-css-425460 .icon{display:flex;width:36px;height:36px;background:#ee1a26;color:#ffffff;font-size:24px;margin-right:10px;justify-content:center;align-items:center;}body.kc-css-system .kc-css-425460 .type{flex:1;}body.kc-css-system .kc-css-425460{display:flex;margin-top:30px;flex-flow:wrap;align-items:center;}body.kc-css-system .kc-css-998258 .icon{display:flex;width:36px;height:36px;background:#ee1a26;color:#ffffff;font-size:24px;margin-right:10px;justify-content:center;align-items:center;}body.kc-css-system .kc-css-998258 .type{color:#ee1a26;font-size:24px;font-weight:600;flex:1;}body.kc-css-system .kc-css-998258{display:flex;margin-top:30px;flex-flow:wrap;align-items:center;}body.kc-css-system .kc-css-283893 .icon{display:flex;width:36px;height:36px;background:#ee1a26;color:#ffffff;font-size:24px;margin-right:10px;justify-content:center;align-items:center;}body.kc-css-system .kc-css-283893 .type{font-size:18px;flex:1;}body.kc-css-system .kc-css-283893{display:flex;margin-top:30px;flex-flow:wrap;align-items:center;}body.kc-css-system .kc-css-122134 .icon{display:flex;width:36px;height:36px;background:#ee1a26;color:#ffffff;font-size:24px;margin-right:10px;justify-content:center;align-items:center;}body.kc-css-system .kc-css-122134 .type{font-size:18px;flex:1;}body.kc-css-system .kc-css-122134{display:flex;margin-top:30px;flex-flow:wrap;align-items:center;}body.kc-css-system .kc-css-585745 .icon{display:flex;width:36px;height:36px;background:#ee1a26;color:#ffffff;font-size:24px;margin-right:10px;justify-content:center;align-items:center;}body.kc-css-system .kc-css-585745 .type{flex:1;}body.kc-css-system .kc-css-585745{display:flex;margin-top:30px;flex-flow:wrap;align-items:center;}@media only screen and (max-width:767px){body.kc-css-system .kc-css-841837 .type{font-size:24px;line-height:30px;}body.kc-css-system .kc-css-791415{height:300px;}body.kc-css-system .kc-css-303855 .type{font-size:24px;line-height:30px;}body.kc-css-system .kc-css-456572{margin-top:20px;}}@media only screen and (max-width:479px){body.kc-css-system .kc-css-425460 .type{font-size:14px;line-height:20px;}body.kc-css-system .kc-css-998258 .type{font-size:14px;line-height:20px;}body.kc-css-system .kc-css-283893 .type{font-size:14px;line-height:20px;}body.kc-css-system .kc-css-122134 .type{font-size:14px;line-height:20px;}body.kc-css-system .kc-css-585745 .type{font-size:14px;line-height:20px;}}</style>
    
    

    <?php include_once 'templates/gshock/inc/footer.php'; ?>
