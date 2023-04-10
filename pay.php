<?php include_once 'templates/gshock/inc/header.php'; ?>

    
	<style type="text/css">body.kc-css-system .kc-css-161135{padding-top: 15px;padding-bottom: 30px;}body.kc-css-system .kc-css-785453{text-align: center;}body.kc-css-system .kc-css-700239 .type{font-size: 30px;line-height: 36px;font-weight: 600;text-align: center;padding-bottom: 20px;margin-bottom: 10px; border-bottom: 3px solid #1e85be;;}body.kc-css-system .kc-css-700239{margin-top: 30px;}body.kc-css-system .kc-css-411740{margin-top: 20px;}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-700239 .type{font-size: 24px;line-height: 30px;}}</style>
    <section id="main_page" class="kc-elm kc-css-161135 kc_row vnt_section hide_col">
        <div class="kc-row-container kc-container vnt_col">
            <div  class="kc-elm kc-css-700239 vnt_title"  >
                <h1 class="type" >Thanh toán</h1>
            </div>
 			<div class="kc-elm kc-css-411740 vnt_the_content">
			<?php
				if((isset($_GET['quantity']) && isset($_GET['product_id'])) || isset($_GET['success']) || isset($_SESSION['carts'])) {
					if(isset($_GET['quantity']) && isset($_GET['product_id'])) {
						$quantity = $_GET['quantity'];
						$product_id = $_GET['product_id'];

					}
			?>
			 	<?php
				if(isset($_GET['success'])) {
					$success = $_GET['success'];
				?>
				<div style="height: 250px; margin-top: 40px; text-align: center;">
					<h4><?php echo $success;?></h4>
				</div>
				<?php
					} else {
				?>
				<form class="woocommerce-cart-form" action="" method="post">
					<div class="woocommerce">
						<div class="woocommerce-notices-wrapper"></div>
						<div class="col2-set" id="customer_details" style="width: 98%; margin: 5px auto;">
							
							<div class="col-1">
								<div class="woocommerce-billing-fields">
									<h3>Thông tin thanh toán</h3>
									<?php
										if(isset($_SESSION['arrMember'])) {
											$id_member = $_SESSION['arrMember']['member_id'];
											$fullname_member = $_SESSION['arrMember']['fullname'];
											$phone_member = $_SESSION['arrMember']['phone'];
											$email_member = $_SESSION['arrMember']['email'];
											$address_member = $_SESSION['arrMember']['address'];
									?>
									<table id="example2" class="table table-bordered table-hover" style="font-size: 14px;">
										<tbody>
											<tr>
												<th>Họ tên</th>
												<td><?php echo $fullname_member?></td>
											</tr>
											<tr>
												<th style="width: 140px;">Số điện thoại</th>
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
									<?php
										} else {
									?>
									<div class="woocommerce-billing-fields__field-wrapper">
										<p class="form-row form-row-first validate-required" >
											<label>Tên (*)</label>
											<span class="woocommerce-input-wrapper">
												<input type="text" class="input-text " name="first_name" required>
											</span>
										</p>
										<p class="form-row form-row-last validate-required">
											<label>Họ (*)</label>
											<span class="woocommerce-input-wrapper">
												<input type="text" class="input-text " name="last_name" required>
											</span>
										</p>
										<p class="form-row form-row-first validate-required validate-phone" >
											<label>Số điện thoại (*)</label>
											<span class="woocommerce-input-wrapper">
												<input type="text" class="input-text " name="phone" placeholder="Số điện thoại của bạn" required minlength="10"  pattern="[0-9]+">
											</span>
										</p>
										<p class="form-row form-row-last validate-required validate-email" >
											<label>Địa chỉ email (*)</label>
											<span class="woocommerce-input-wrapper"><input type="email" class="input-text"  name="email" placeholder="Email của bạn"></span>
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
															$provinces_id = $arProvinces['province_id'];
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
										<p class="form-row form-row-first validate-required validate-required" >
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
									<?php
										}
									?>
								</div>
							</div>
							<div class="col-2">
								<div class="woocommerce-additional-fields">
									<h3>Thông tin bổ sung</h3>
									<div class="woocommerce-additional-fields__field-wrapper">
										<p class="form-row notes" id="order_comments_field">
											<label >Ghi chú đơn hàng (tuỳ chọn)</label>
											<span class="woocommerce-input-wrapper">
												<textarea name="note" id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." ></textarea>
											</span>
										</p>					
									</div>
								</div>
							</div>
						</div>
					</div>
					

					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h3>Đơn hàng của bạn</h3>
							<?php
							if(isset($_GET['quantity']) && isset($_GET['product_id'])) {
								$query = "SELECT * FROM products WHERE product_id = {$product_id}";
								$ketqua = $mysqli->query($query);
								while($arProduct = mysqli_fetch_assoc($ketqua)) {
									$product_name = $arProduct['name'];
									$price = number_format($arProduct['price'], 0, ',', '.');
									$sale_off = $arProduct['sale_off'];
									$price_after = round(($arProduct['price'] / 100) * (100 - $sale_off), -4);
									$price_save = number_format($arProduct['price'] - $price_after,0 , '.', ',');
									$total = $price_after * $quantity;
							?>
							<table cellspacing="0" class="shop_table shop_table_responsive">
								<tr class="cart-subtotal">
									<th>Sản phẩm</th>
									<th>Tạm tính</th>
								</tr>
								<tr class="order-total">
									<td><?php echo $product_name?> <b>× <?php echo $quantity;?></b></td>
									<td><?php echo number_format($price_after, 0, ',', '.');?></td>
								</tr>
								<tr class="order-total">
									<th>Tổng</th>
									<th><?php echo number_format($total, 0, ',', '.');?></th>
								</tr>

							</table>
							<?php
								}
							} else {
								if(!empty($_SESSION['carts'])) {
							?>
								<table cellspacing="0" class="shop_table shop_table_responsive">
								<tr class="cart-subtotal">
									<th>Sản phẩm</th>
									<th>Tạm tính</th>
								</tr>
								<tbody class="order-product">
								<?php
									$total = 0;
									// echo '<pre>';
									//     var_dump($_SESSION['carts']);
									// echo '</pre>';
									foreach($_SESSION['carts'] as $key => $cart) {
										$price = $cart['price'];
										$quantity = $cart['quantity'];
										$result = (int)$price * (int)$quantity;
										$total += $result;
										if($cart['price'] != null) {
								?>
								<tr class="order">
									<td><?php echo $cart['name']?> <b>× <?php echo $cart['quantity'];?></b></td>
									<td style="height:16px;line-height:16px"><?php echo number_format($result, 0, ',', '.');?>
										<a href="removeCart.php?key=<?php echo $key?>" class="del_cart" style="float: right; margin-right: 5px; width: 16px; height: 16px; text-indent: -9999px; background-size: contain; background-repeat: no-repeat; background-position: center center; background-image: url(templates/gshock/img/222.png);"> </a>
									</td>
								</tr>
								<?php
										}
									}
								?>
								</tbody>
								<tr class="order-total">
									<th>Tổng</th>
									<th><?php echo number_format($total, 0, ',', '.');?></th>
								</tr>

							</table>
							<?php
								}
							}
							?>
							<div class="wc-proceed-to-checkout">
								<div class="bk-btn" style="margin-top: 10px"></div>
								<?php
									if(empty($_SESSION['carts'])) {
										HEADER("LOCATION: /thanh-toan?success= Giỏ hàng rỗng! ");
										die();
									}
									if(isset($_POST['pay'])) {
										date_default_timezone_set('Asia/Ho_Chi_Minh');
                                        $order_date = date('Y/m/d H:i:s');
										$note = $_POST['note'];
										if(isset($_SESSION['arrMember'])) {
											$query2 = "INSERT INTO orders(customer_name, phone, email, order_date, address, note) VALUES ('$fullname_member','$phone_member', '$email_member', '$order_date','$address_member', '$note')";
										} else {
											$first_name = $_POST['first_name'];
											$last_name = $_POST['last_name'];
											$phone = $_POST['phone'];
											$email = $_POST['email'];
											
											if(!empty($_POST['provinces'])) {
												$provinces_id = $_POST['provinces'];
												$sql = "SELECT * FROM `provinces` WHERE province_id = '$province_id'";
												$ketqua = $mysqli2->query($sql);
												$arProvinces = mysqli_fetch_assoc($ketqua);
												$provinces = $arProvinces['full_name'];
											}

											if(!empty($_POST['districts'])) {
												$districts_id = $_POST['districts'];
												$sql = "SELECT * FROM `districts` WHERE district_id = '$districts_id'";
												$ketqua = $mysqli2->query($sql);
												$arDistricts = mysqli_fetch_assoc($ketqua);
												$districts = $arDistricts['full_name'];
											}

											$wards = $_POST['wards'];
											$address = $_POST['address'];
											$query2 = "INSERT INTO orders(customer_name, phone, email, order_date, address, note) VALUES ('$last_name $first_name','$phone','$email', '$order_date', '$address, $wards, $districts, $provinces', '$note')";
										}

										$ketqua2 = $mysqli->query($query2);
										if($ketqua2) {
											$query3 = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 1";
											$ketqua3 = $mysqli->query($query3);
											$arrOrder = mysqli_fetch_assoc($ketqua3);
											$oid = $arrOrder['order_id'];

											if(empty($_SESSION['carts'])) {
												$query4 = "INSERT INTO order_detail(order_id, product_id, quantity) VALUES ($oid, '$product_id', $quantity)";
												$ketqua4 = $mysqli->query($query4);
											} else {
												foreach($_SESSION['carts'] as $cart) {
													$product_id = $cart['product_id'];
													$quantity = $cart['quantity'];
													$query4 = "INSERT INTO order_detail(order_id, product_id, quantity) VALUES ($oid, '$product_id', $quantity)";
													$ketqua4 = $mysqli->query($query4);
												}
											}
											
											if($ketqua4) {
												if(isset($_SESSION['carts'])) {
													unset($_SESSION['carts']);
												}
												HEADER("LOCATION: /thanh-toan?success=Quý khách đã đặt hàng thành công. Cửa hàng sẽ sớm liên lạc lại với quý khách, xin kính chào quý khách! ");
												die();
											} else {
												echo "có lỗi khi đặt hàng";
												die();
											}
										} else {
											echo "có lỗi khi đặt hàng";
											die();
										}
									}
								?>
									<input type="submit" name="pay" style="margin-bottom: 40px; padding: 10px 8px" class="checkout-button button alt wc-forward" value="Tiến hành thanh toán">
								
							</div>
						</div>
					</div>
				</form>
				<?php
				}
				?>
				<?php
					} else {
						echo '<h3 style="height: 100px; text-align: center;line-height: 100px;">Giỏ hàng rỗng</h3>';
					}
				?>
			</div>
        </div>
    </section>


<style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
<?php include_once 'templates/gshock/inc/footer.php'; ?>