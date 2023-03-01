<?php include_once 'templates/gshock/inc/header.php'; ?>
    <style>
  
    </style>
    
    <style type="text/css">body.kc-css-system .kc-css-161135{padding-top: 15px;padding-bottom: 30px;}body.kc-css-system .kc-css-785453{text-align: center;}body.kc-css-system .kc-css-700239 .type{font-size: 30px;line-height: 36px;font-weight: 600;text-align: center;padding-bottom: 20px;margin-bottom: 10px; border-bottom: 3px solid #b81c23;}body.kc-css-system .kc-css-700239{margin-top: 30px;}body.kc-css-system .kc-css-411740{margin-top: 20px;}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-700239 .type{font-size: 24px;line-height: 30px;}}</style>
    <section id="main_page" class="kc-elm kc-css-161135 kc_row vnt_section hide_col" style="background:#f5f5f5">
        <div class="kc-row-container kc-container vnt_col">
            <div  class="kc-elm kc-css-700239 vnt_title"  >
                <h1 class="type" >Tài khoản của tôi</h1>
            </div>
            <div class="kc-elm kc-css-411740 vnt_the_content" >
                <div class="woocommerce" style="text-align: left; width: 80%; margin: 20px auto 70px; ">
                    <?php
                        if(isset($_GET['msg'])) {
                        echo $_GET['msg'];
                        }
                    ?>
                    <div class="woocommerce-notices-wrapper"></div>
                    <?php
                        if(isset($_SESSION['arrMember'])) {
                            $id_member = $_SESSION['arrMember']['member_id'];
                            $account_member = $_SESSION['arrMember']['account'];
                            $pass_member = $_SESSION['arrMember']['password'];
                            $fullname_member = $_SESSION['arrMember']['fullname'];
                            $phone_member = $_SESSION['arrMember']['phone'];
                            $email_member = $_SESSION['arrMember']['email'];
                            $address_member = $_SESSION['arrMember']['address'];
                        }

                        if(isset($_POST['btn-update'])) {
                            $fullname = $_POST['fullname'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            
                            if(!empty($_POST['provinces'])) {
                                $provinces_id = $_POST['provinces'];
                                $sql = "SELECT * FROM `provinces` WHERE provinces_id = '$provinces_id'";
                                $ketqua = $mysqli2->query($sql);
                                $arProvinces = mysqli_fetch_assoc($ketqua);
                                $provinces = $arProvinces['full_name'];
                            }

                            if(!empty($_POST['districts'])) {
                                $districts_id = $_POST['districts'];
                                $sql = "SELECT * FROM `districts` WHERE districts_id = '$districts_id'";
                                $ketqua = $mysqli2->query($sql);
                                $arDistricts = mysqli_fetch_assoc($ketqua);
                                $districts = $arDistricts['full_name'];
                            }

                            $wards = $_POST['wards'];
                            $address = $_POST['address'];

                            $query = "UPDATE members SET fullname='$fullname', phone='$phone', email='$email', address='$address, $wards, $districts, $provinces' WHERE member_id = $id_member";
                            $ketqua = $mysqli->query($query);
                            if($ketqua) {
                                $sql = "SELECT * FROM members WHERE member_id = '$id_member'";
                                $ketqua2 = $mysqli->query($sql);
                                $arMember = mysqli_fetch_assoc($ketqua2);
                                if($arMember!=NULL) {
                                    $_SESSION['arrMember'] = $arMember;
                                }
                                HEADER("LOCATION: /tai-khoan?msg=Cập nhật thông tin thành công!");
                                die();
                            } else {
                                echo "Có lỗi khi cập nhật";
                                die();
                            }
                        }

                    ?>
                    <form class="woocommerce-form woocommerce-form-login login" method="post" style="background: white; border-top-left-radius: 0px; border-top-right-radius: 0px; margin-top: -1px; <?php echo isset($_POST['register'])?'height: 555px':''?>">
                        <?php
                            if(!isset($_POST['btn-edit'])) {
                        ?>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Tên tài khoản</label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" readonly name="account" value="<?php echo $account_member;?>" />			
                        </p>
                        <h2 style="padding-left: 5px; margin-top: 25px;">Thông tin của tôi</h2>
                        <table id="example2" class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Họ tên</th>
                                    <td><?php echo $fullname_member?></td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại liên lạc</th>
                                    <td><?php echo $phone_member?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $email_member?></td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td><?php echo $address_member?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="form-row">
                            <button type="submit" style="margin: 20px 0 0 357px;height: 36px;" class=" button woocommerce-form-login__submit" name="btn-edit">Sửa thông tin</button>
                        </p>
                        <?php
                            } else {
                        ?>
                        <div class="woocommerce-billing-fields__field-wrapper">
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label>Họ tên (*)</label>
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="fullname" value="<?php echo $fullname_member;?>" />			
                            </p>
                            <p class="form-row form-row-first validate-required validate-phone" >
                                <label>Số điện thoại (*)</label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="phone" placeholder="Số điện thoại của bạn" required minlength="10" value="<?php echo $phone_member;?>" pattern="[0-9]+">
                                </span>
                            </p>
                            <p class="form-row form-row-last validate-required validate-email" >
                                <label>Địa chỉ email (*)</label>
                                <span class="woocommerce-input-wrapper"><input type="email" class="input-text" value="<?php echo $email_member;?>" name="email" placeholder="Email của bạn"></span>
                            </p>
                            <p class="form-row form-row-first address-field update_totals_on_change validate-required">
                                <label>Tỉnh/Thành phố (*)</label>
                                <span class="woocommerce-input-wrapper">
                                    <select name="provinces" class="select-address provinces" style="width: 80%" required>
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        <?php
                                            $sql = "SELECT * FROM `provinces`";
                                            $ketqua = $mysqli2->query($sql);
                                            while($arProvinces = mysqli_fetch_assoc($ketqua)) {
                                                $provinces_name = $arProvinces['name'];
                                                $provinces_id = $arProvinces['provinces_id'];
                                        ?>
                                        <option value="<?php echo $provinces_id;?>"><?php echo $provinces_name;?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    
                                </span>
                            </p>
                            <p class="form-row form-row-last validate-required validate-required" >
                                <label>Quận/Huyện (*)</label>
                                <span class="woocommerce-input-wrapper">
                                    <select name="districts" class="select-address districts" style="width: 80%" required>
                                        <option value="">Chọn quận/huyện</option>

                                    </select>
                                </span>
                            </p>
                            <p class="form-row form-row-first validate-required validate-required"  >
                                <label>Xã/Phường (*)</label>
                                <span class="woocommerce-input-wrapper">
                                    <select name="wards" class="select-address wards" style="width: 80%" tabindex="-1" required>
                                        <option value="">Chọn xã/phường</option>
                                        
                                    </select>
                                </span>
                                
                            </p>
                            <p class="form-row form-row-last validate-required" >
                                <label>Địa chỉ (*)</label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="address" placeholder="Ví dụ: Số 20, ngõ 90" required>
                                </span>
                            </p>	
                        </div>
                        <p class="form-row">
                            <button type="submit" style="margin: 20px 0 0 360px;height: 36px;" class=" button woocommerce-form-login__submit" name="btn-update">Cập nhật</button>
                        </p>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

<style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
<?php include_once 'templates/gshock/inc/footer.php'; ?>