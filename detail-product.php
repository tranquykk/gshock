	<?php include_once 'templates/gshock/inc/header.php'; ?>
	<style>
		@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

		fieldset, label { margin: 0; padding: 0; }
		body{ margin: 20px; }
		h1 { font-size: 1.5em; margin: 10px; }

		/****** Style Star Rating Widget *****/

		.rating { 
		border: none;
		float: left;
		}

		.rating > input { display: none; } 
		.rating > label:before { 
		margin: 5px;
		font-size: 1.25em;
		font-family: FontAwesome;
		display: inline-block;
		content: "\f005";
		}

		.rating > .half:before { 
		content: "\f089";
		position: absolute;
		}

		.rating > label { 
		color: #ddd; 
		float: right; 
		}

		/***** CSS Magic to Highlight Stars on Hover *****/

		.rating > input:checked ~ label, /* show gold star when clicked */
		.rating:not(:checked) > label:hover, /* hover current star */
		.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

		.rating > input:checked + label:hover, /* hover current star when changing rating */
		.rating > input:checked ~ label:hover,
		.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
		.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

		.comment_content {
			margin: 0 15px;
			border-top: 1px solid rgba(0, 0, 0, 0.2);
			padding: 0 0 30px;
		}

		.comment_content b {
			font-size: 13px;
			padding-left: 10px;
		}

		.comment_sub {
			width: 100%;
			padding: 5px 0 20px;
		}

		.img_avatar {
			width: 44px;
			height: 44px;
			float: left;
			border-radius: 22px;
			margin: 0 10px 0 10px;
		}

		.sub-info {
			float: left;
			width: 91%;
			border: 1px solid rgba(0, 0, 0, 0.1);
			border-radius: 5px;
			margin-bottom: 20px;
		}

		.sub-info h4 {
			margin: 2px 0 0 12px;
			font-size: 14px;
			font-weight: 600;
		}

		.sub-info p {
			margin: 0px 0 0 16px;
			font-size: 14px;
			padding: 0;
		}

		.sub-info a {
			display: block;
			color: blue;
			font-weight: 700;
			margin: 3px 0 0 15px;
			text-decoration: none;
		}

		/* #dis {
			color: #FFD700;
		} */

	</style>

	<?php
		if(isset($_GET['id'])) {
			$product_id = $_GET['id'];
		}
		if(isset($_GET['cid'])) {
			$cid = $_GET['cid'];
		}

		$fullname_member = '';
		$email_member = '';
		if(isset($_SESSION['arrMember'])) {
			$fullname_member = $_SESSION['arrMember']['fullname'];
			$email_member = $_SESSION['arrMember']['email'];
		}

	?>

    <div id="product-958" class="kc-elm vnt_product_single product type-product post-958 status-publish first instock product_cat-g-shock product_cat-gravity-master has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
		<style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-483988{width: 50%;}body.kc-css-system .kc-css-630873{width: 50%;}body.kc-css-system .kc-css-65068{width: 100%;}}body.kc-css-system .kc-css-327134{margin-top: 15px;margin-bottom: 15px;}body.kc-css-system .kc-css-327134 >.kc-container{background: #ffffff;padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-483988{position: relative;}body.kc-css-system .kc-css-304239{position: relative;margin-top: 15px;}body.kc-css-system .kc-css-254845{font-size: 12px;font-weight: 600;}body.kc-css-system .kc-css-599149 .type{color: #054f56;font-size: 30px;line-height: 36px;font-weight: 700;margin: 30px 0 10px}body.kc-css-system .kc-css-66721 .thumb{margin-right: 5px;}body.kc-css-system .kc-css-66721 .title{font-size: 12px;font-weight: 500;}body.kc-css-system .kc-css-66721 .item{display: flex;align-items: center;}body.kc-css-system .kc-css-66721{display: grid;grid-template-columns: repeat(2, 1fr);grid-gap: 10px;border-top: 1px solid #e5e5e5;border-bottom: 1px solid #e5e5e5;;padding-top: 10px;padding-bottom: 10px;margin: 10px 0}body.kc-css-system .kc-css-282402{margin-top: 10px;}body.kc-css-system .kc-css-541547 >.kc-container{background: #ffffff;padding-top: 30px;padding-bottom: 30px;}body.kc-css-system .kc-css-610913 .vntabs_nav{display: flex;align-items: center;}body.kc-css-system .kc-css-610913 .vntabs_item:hover{color: #ffffff;background: #000000;}body.kc-css-system .kc-css-610913 .vntabs_item.is-active{color: #ffffff;background: #000000;}body.kc-css-system .kc-css-610913 .vntabs_item{text-align: center;border-radius: 5px 5px 5px 5px;padding: 10px 20px 10px 20px;margin-right: 2px;margin-left: 2px;justify-content: center;}body.kc-css-system .kc-css-10501{margin-top: 10px;overflow: hidden;}body.kc-css-system .kc-css-357613{background: #fcf8f4;padding-top: 30px;padding-bottom: 30px;}body.kc-css-system .kc-css-661155 .type{width: 100%;font-size: 30px;line-height: 42px;font-weight: 600;text-transform: uppercase;text-align: center;}body.kc-css-system .kc-css-661155 .sub{width: 90px;height: 2px;background: #f97e6c;margin-top: 15px;}body.kc-css-system .kc-css-661155 .cont{width: 100%;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-661155{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-638453{margin-bottom: 15px;}body.kc-css-system .kc-css-638453 >.kc-container{background: #ffffff;padding-top: 15px;padding-bottom: 15px;}body.kc-css-system .kc-css-206016 .type{width: 100%;color: #105056;font-size: 18px;line-height: 40px;font-weight: 700;text-transform: uppercase;}body.kc-css-system .kc-css-206016 .sub{width: 60px;height: 2px;background: #a92c38;margin-bottom: -1px;}body.kc-css-system .kc-css-206016{display: flex;border-bottom: 1px solid #dcdcdc;;flex-flow: wrap;}body.kc-css-system .kc-css-17996 .title{width: 100%;font-size: 16px;font-weight: 500;text-align: center;}body.kc-css-system .kc-css-17996 .price{display: flex;color: #ee1a26;font-size: 16px;font-weight: 600;flex-flow: wrap;justify-content: center;align-items: center;}body.kc-css-system .kc-css-17996 .price del{color: #aeaeae;font-size: 12px;font-weight: 400;margin-right: 10px;margin-left: 10px;}body.kc-css-system .kc-css-17996 .item{display: flex;background: #ffffff;padding: 5px 5px 5px 5px;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-17996{max-width: 1170px;padding-right: 15px;padding-left: 15px;margin-top: 30px;}body.kc-css-system .kc-css-17996 .slick-list{margin-right: -10px;margin-left: -10px;}body.kc-css-system .kc-css-17996 .slick-slide{margin: 10px 10px 10px 10px;}body.kc-css-system .kc-css-17996 .slick-dots{margin-top: 15px;}body.kc-css-system .kc-css-478378{background: rgba(0, 0, 0, 0.50);display: flex;width: 100%;height: 100%;margin-right: 0px;margin-left: 0px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-65068{background: #ffffff;position: relative;width: 96%;max-width: 480px;padding: 0px 0px 0px 0px;border-radius: 10px 10px 10px 10px;max-height: 86vh;overflow-y: auto;}body.kc-css-system .kc-css-317584 .icon{color: #dd3333;font-size: 24px;}body.kc-css-system .kc-css-317584{position: absolute;display: flex;width: 36px;height: 36px;justify-content: center;align-items: center;top: 10px;right: 10px;z-index: 10;}body.kc-css-system .kc-css-262370 .type{color: #ffffff;font-size: 16px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-262370 .sub{color: #ffffff;}body.kc-css-system .kc-css-262370{display: grid;background: #000000;border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px 50px 10px 15px;}body.kc-css-system .kc-css-467875{padding: 15px 15px 15px 15px;}body.kc-css-system .kc-css-84231{padding: 15px 15px 15px 15px;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-327134{margin-top: 0px;margin-bottom: 0px;}body.kc-css-system .kc-css-317584{display: flex;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-66721{grid-template-columns: 1fr;}body.kc-css-system .kc-css-661155 .type{font-size: 24px;}body.kc-css-system .kc-css-661155 .sub{margin-top: 5px;}body.kc-css-system .kc-css-17996{margin-top: 15px;}}</style>
    	<section id="before_single_product" class="kc-elm kc-css-74667 kc_row vnt_section hide_col_cont">
    		<div class="kc-elm kc-css-284788 kc_col-sm-12 kc_column kc_col-sm-12">
				<div class="kc-col-container">
					<div class="woocommerce-notices-wrapper"></div>		
				</div>
			</div>
    	</section>
		<?php
		$query = "SELECT * FROM products WHERE product_id = {$product_id}";
		$ketqua = $mysqli->query($query);
		while($arProduct = mysqli_fetch_assoc($ketqua)) {
			$product_id = $arProduct['product_id'];
			$categories_id = $arProduct['categories_id'];
			$price = number_format($arProduct['price'], 0, ',', '.');
			$sale_off = $arProduct['sale_off'];
			$price_after = round(($arProduct['price'] / 100) * (100 - $sale_off), -4);
			$price_save = number_format($arProduct['price'] - $price_after,0 , '.', ',');
		?>
    	<section id="main_single_product" class="kc-elm kc-css-327134 kc_row product vnt_section hide_col">
			<div class="kc-row-container kc-container vnt_col">
				<div class="kc-elm kc-css-483988 kc_col-sm-6 kc_column kc_col-sm-6">
					<div  class="kc-elm kc-css-304239 vnt_editor product-gallery">
						<div class="woocommerce-product-gallery images">
							<div class="vntwp_gallery vntsp_gallery">
								<?php
									$query = "SELECT * FROM sub_picture WHERE product_id = $product_id";
									$ketqua = $mysqli->query($query);
									while($arPicture = mysqli_fetch_assoc($ketqua)) {
										$picture = $arPicture['picture'];
								?>
								<div class="woocommerce-product-gallery__image vntp_image">
									<a class="fancybox" data-fancybox="vntsp_gallery" href="templates/gshock/img/<?php echo $picture ?>" tabindex="-1">
										<img width="600" height="600" src="templates/gshock/img/<?php echo $picture ?>" class="wp-post-image img-attr " alt="" loading="lazy" title="ga-1100rg-1adr_master" data-lazy="templates/gshock/img/<?php echo $picture ?>" data-large_image="templates/gshock/img/<?php echo $picture ?>" srcset="templates/gshock/img/<?php echo $picture ?> 600w, templates/gshock/img/<?php echo $picture ?> 768w, templates/gshock/img/<?php echo $picture ?> 300w, templates/gshock/img/<?php echo $picture ?> 100w, templates/gshock/img/<?php echo $picture ?> 64w, templates/gshock/img/<?php echo $picture ?> 800w" sizes="(max-width: 600px) 100vw, 600px" data-xooWscFly="fly" />
									</a>
								</div>
								<?php
									}
								?>
							</div>
							<div class="vntwp_gallery vntsp_gallery_thumb">
								<?php
									$query = "SELECT * FROM sub_picture WHERE product_id = $product_id";
									$ketqua = $mysqli->query($query);
									while($arPicture = mysqli_fetch_assoc($ketqua)) {
										$picture = $arPicture['picture'];
								?>
								<div class="woocommerce-product-gallery__image vntp_image">
									<img style="width:107px;height:107px" src="templates/gshock/img/<?php echo $picture ?>" class="wp-post-image img-attr " alt="" loading="lazy" title="ga-1100rg-1adr_master" data-lazy="templates/gshock/img/<?php echo $picture ?>" data-large_image="templates/gshock/img/<?php echo $picture ?>" srcset="templates/gshock/img/<?php echo $picture ?> 100w, templates/gshock/img/<?php echo $picture ?> 768w, templates/gshock/img/<?php echo $picture ?> 300w, templates/gshock/img/<?php echo $picture ?> 600w, templates/gshock/img/<?php echo $picture ?> 64w, templates/gshock/img/<?php echo $picture ?> 800w" sizes="(max-width: 100px) 100vw, 100px" data-xooWscFly="fly" />
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="kc-elm kc-css-630873 kc_col-sm-6 kc_column kc_col-sm-6">
					<div  class="kc-elm kc-css-599149 vnt_title"  >
						<h1 class="type" style="text-align: left"><?php echo $arProduct['name'];?></h1>
					</div>
					<div  class="kc-elm kc-css-410538 vnt_editor">
						<p class="price">
							<del aria-hidden="true">
								<span class="woocommerce-Price-amount amount">
									<bdi><?php echo $price;?>
										<span class="woocommerce-Price-currencySymbol">&#8363;</span>
									</bdi>
								</span>
							</del>
							<ins>
								<span class="woocommerce-Price-amount amount">
									<bdi><?php echo number_format($price_after, 0, ',', '.');?>
										<span class="woocommerce-Price-currencySymbol">&#8363;</span>
									</bdi>
								</span>
							</ins>
						</p>
						<div class="woocommerce-product-details__short-description">
							<div class="woocommerce-product-details__short-description">
								<div class="grid-1 grid--1 narrow-wrap">
									<div class="narrow-layout">
										<div class="narrow-contents">
											<div class="header-grid grid-1 grid-n--1 bg-ultra-light-grey bg--white frame">
												<div class="column bg-white">
													<h2>
														<b>Bộ sản phẩm gồm:</b>
													</h2>
													<ul class="infocomes">
														<li>1 đồng hồ chính hãng.</li>
														<li>Thẻ bảo hành 5 năm tất cả các lỗi do nhà sản xuất.</li>
														<li>Thẻ thay pin miễn phí trọn đời.</li>
														<li>1 vòng đeo tay G-SHOCK.</li>
														<li>Thẻ giảm giá 200.000 ( cho lần mua tiếp theo).</li>
														<li>1 hộp giấy + 1 hộp thiếc (tùy sản phẩm).</li>
														<li>Miễn phí vận chuyển toàn quốc.</li>
														<li>Sách hướng dẫn sử dụng các thứ tiếng.</li>
														<li>Thông tin các đối tác bảo hành G-SHOCK &amp; BABY-G trên toàn cầu.</li>
														<li>Hỗ trợ hướng dẫn sử dụng và tư vấn sản phẩm trọn đời.</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div  class="kc-elm kc-css-66721 vnt_list">
    					<div class="item item_1">
    						<div class="thumb">
								<img src="templates/gshock/img/giao-hang.png" alt="Giao hàng toàn quốc">
							</div>
							<div class="title">Giao hàng toàn quốc</div>    
						</div>
    					<div class="item item_2">
    						<div class="thumb">
								<img src="templates/gshock/img/thanh-toan.png" alt="Thanh toán khi nhận hàng">
							</div>
							<div class="title">Thanh toán khi nhận hàng</div>   
						</div>

						<div class="item item_3">
							<div class="thumb">
								<img src="templates/gshock/img/doi-tra-hang.png" alt="Cam kết đổi/trả hàng miễn phí">
							</div>
							<div class="title">Cam kết đổi/trả hàng miễn phí</div>   
						</div>

						<div class="item item_4">
							<div class="thumb">
								<img src="templates/gshock/img/bao-hanh.png" alt="Hàng chính hãng/Bảo hành 10 năm">
							</div>
							<div class="title">Hàng chính hãng/Bảo hành 10 năm</div>    
						</div>
					</div>
					<div  class="kc-elm kc-css-282402 vnt_editor single_product_add_cart">
						<form class="cart" action="/thanh-toan" method="get" enctype='multipart/form-data'>
							<div class="quantity">
								<label class="screen-reader-text">Số lượng</label>
								<div class="dc_quantity_input">
									<input class="minus" type="button" value="−">
									<input type="number" class="input-text qty text" step="1" min="1" name="quantity" value="1" size="4" pattern="[0-9]*" inputmode="numeric" />
									<input class="plus" type="button" value="+">
									<input type="hidden" name="product_id" value="<?php echo $product_id;?>" />
								</div>
							</div>
							<button class="bk-btn-paynow" style="display: inline-block;background-color: #e00 !important;color: #fff !important; padding:7px 2px; margin: 10px 0 10px 150px;">
								<strong>Mua ngay</strong>
								<span>Giao tận nơi hoặc nhận tại cửa hàng</span>
							</button>
							<button type="submit" name="add-to-cart" value="958" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>
						</form>
					</div>
				</div>
				
        	</div>
    	</section>

		<section id="single_content" class="kc-elm kc-css-541547 kc_row vnt_section hide_col">
			<div class="kc-row-container kc-container vnt_col">
				<div class="kc-elm kc-css-610913 vntabs">
					<ul class="vntabs_nav ">  
						<li class="vntabs_item vntabs_nav_item">
							<div class="title">Thông tin sản phẩm</div>
						</li>
					</ul>
					<div class="kc-elm vntabs_content">
						<div class="kc-elm kc-css-714457 vntabs_cont">
							<div class="kc-elm kc-css-10501 woocommerce vnt_the_content">
								<div class="accordion_content_inner">
									<div id="rmjs-1" class="bg-article expand">
										<?php echo $arProduct['product_detail']?>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
			}
		?>

    	<section id="psingle_danhgia" class="kc-elm kc-css-357613 kc_row vnt_section hide_col">
        	<div class="kc-row-container kc-container vnt_col">
				<div  class="kc-elm kc-css-661155 vnt_title"  >
        			<h2 class="type">REVIEWS CỦA KHÁCH HÀNG</h2>
					<span style="margin-bottom: 30px;" class="sub"></span>
    			</div>
				<div  class="kc-elm kc-css-887434 vnt_editor">
					<div id="reviews" class="woocommerce-Reviews">
						<div id="review_form_wrapper">
							<div id="review_form">
								<div id="respond" class="comment-respond">
										<?php
											$queryRating = "SELECT * FROM `ratings` WHERE product_id = {$product_id} ORDER BY rating_id DESC";
											$ketquaRating = $mysqli->query($queryRating);
											for ($arrRating = array (); $row = $ketquaRating->fetch_assoc(); $arrRating[array_shift($row)] = $row);
											if(count($arrRating)!=0) {
												foreach($arrRating as $key => $value) {
										?>
										<div class="comment_sub">
											<img src="templates/gshock/img/men.png" alt="" class="img_avatar">
											<div class="sub-info">
												<h4><?php echo $value['fullname'];?></h4>
												<p style="margin: 0 0 7px 12px;"><?php echo $value['comment']?></p>
												<fieldset disabled class="rating dis" style="margin: -8px 0 0 10px; font-size: 10px"  >
													<input type="radio" name="rating_action <?php echo $key;?>" <?php echo ($value['rating_action']==5)?"checked":"" ?>/><label id="dis"></label>
													<input type="radio" name="rating_action <?php echo $key;?>" <?php echo ($value['rating_action']==4)?"checked":"" ?>/><label id="dis"></label>
													<input type="radio" name="rating_action <?php echo $key;?>" <?php echo ($value['rating_action']==3)?"checked":"" ?>/><label id="dis"></label>
													<input type="radio" name="rating_action <?php echo $key;?>" <?php echo ($value['rating_action']==2)?"checked":"" ?>/><label id="dis"></label>
													<input type="radio" name="rating_action <?php echo $key;?>" <?php echo ($value['rating_action']==1)?"checked":"" ?>/><label id="dis"></label>
												</fieldset>
											</div>
											<div class="clr"></div>
										</div>
										<?php
												}
												echo '<h3 style="font-weight:500; margin-top: 20px">Thêm bình luận</h3>';
											} else {
										?>
										<br>
										<div id="comments">
											<p class="woocommerce-noreviews" style="margin-bottom: 30px;">Chưa có đánh giá nào.</p>
										</div>
										<span id="reply-title" class="comment-reply-title">
											Hãy là người đầu tiên nhận xét sản phẩm
										</span>
										<?php
											}
										?>
									<form action="#" method="post" id="commentform" class="comment-form">
										<p class="comment-notes">
											<span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> 
											<span class="required-field-message" >
												Các trường bắt buộc được đánh dấu
												<span class="required" >*</span>
											</span>
										</p>
										<div class="comment-form-rating">
											<p style="margin: 10px 0 0px">Đánh giá của bạn (*)</p>
											<fieldset class="rating" style="margin-left: 10px;" required>
												<input type="radio" id="star5" name="rating" value="5" required/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
												<input type="radio" id="star4" name="rating" value="4" required/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
												<input type="radio" id="star3" name="rating" value="3" required/><label class = "full" for="star3" title="Meh - 3 stars"></label>
												<input type="radio" id="star2" name="rating" value="2" required/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
												<input type="radio" id="star1" name="rating" value="1" required/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
											</fieldset>
											<br>
										</div>
										<p class="comment-form-comment">
											<p style="margin-top: 22px">Nhận xét của bạn (*)<p>
											<textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
										</p>
										<p class="comment-form-author">
											<label for="author">Họ Tên (*)</span></label>
											<input id="author" name="fullname" type="text" size="30" required value="<?php echo $fullname_member;?>"/>
										</p>
										<p class="comment-form-email">
											<label for="email">Email (*)</span></label>
											<input name="email" type="email" size="30" required value="<?php echo $email_member;?>"/>
										</p>
										
										<p class="form-submit" style="text-align: center">
											<input name="submit" style="margin: 30px 0 10px 0" type="submit" class="submit" value="Gửi đi" />
										</p>
									</form>
									<?php
										if(isset($_POST['submit'])) {
											$comment = $_POST['comment'];
											$rating = $_POST['rating'];
											$fullname = $_POST['fullname'];
											$email = $_POST['email'];

											$queryRatings = "INSERT INTO ratings(fullname, email, rating_action, comment, product_id) VALUES ('$fullname','$email', $rating,'$comment','$product_id')";
											$ketquaRatings = $mysqli->query($queryRatings);
											
											if($ketquaRatings) {
												HEADER('LOCATION:'.$_SERVER['REQUEST_URI']);
											} else {
												echo "có lỗi khi bình luận";
												die();
											}
										}
									?>
								</div>
								<!-- #respond -->
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
    	</section>

    	<section id="sanpham_lienquan" class="kc-elm kc-css-638453 kc_row vnt_section hide_col">
        	<div class="kc-row-container kc-container vnt_col">
				<div  class="kc-elm kc-css-206016 vnt_title"  >
					<h3 class="type">Sản phẩm liên quan</h3>
					<span class="sub"></span>        
    			</div>
				<div class="kc-elm kc-css-17996 products vnt_slick vnt_archive vnt_product product_slider flex_true" data-slick='{"centerMode": false, "variableWidth": false, "slidesToShow": 4, "slidesToScroll": 2, "dots": true, "arrows": false, "autoplay": false,   "infinite": true,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 3, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 3, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}]}'>
					<?php
						$query = "SELECT * FROM products WHERE product_id != {$product_id} AND categories_id = {$cid} ORDER BY product_id DESC LIMIT 6";
						$ketqua = $mysqli->query($query);
						while($arProduct = mysqli_fetch_assoc($ketqua)) {
							$product_id = $arProduct['product_id'];
							$price = number_format($arProduct['price'], 0, ',', '.');
							$sale_off = $arProduct['sale_off'];
							$price_after = round(($arProduct['price'] / 100) * (100 - $sale_off), -4);
							$price_save = number_format($arProduct['price'] - $price_after,0 , '.', ',');
							$name = $arProduct['name'];
							$nameReplace = libraryString::utf8ToLatin($name);
							$url = '/'.$nameReplace.'-'.$product_id.'-'.$categories_id.'.html';
					?>
					<div class="kc-elm product item item_1 odd ">
						<div class="kc-elm thumb">
							<a class="kc-elm permalink" href="<?php echo $url ?>" title="<?php echo $arProduct['name'];?>">
								<img src="templates/gshock/img/<?php echo $arProduct['picture'];?>" alt="<?php echo $arProduct['name'];?>">
							</a>
							<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-action="quick-view-<?Php echo $product_id;?>" class="quick-view <?Php echo $product_id;?> open-modal wc-quick-view-button button"></a>
							<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-quantity="1" data-name="<?Php echo $name;?>" data-price="<?Php echo $price_after;?>" class="order add_to_cart_button ajax_add_to_cart">Mua ngay</a>
							<span class="saleup">Giảm
								<span class="woocommerce-Price-amount amount">
									<bdi><?php echo $price_save;?>
										<span class="woocommerce-Price-currencySymbol">&#8363;</span>
									</bdi>
								</span>
							</span>
						</div>
						<div class="kc-elm title" data-tooltip="<?php echo $arProduct['name'];?>">
							<a href="<?php echo $url ?>" title="<?php echo $arProduct['name'];?>"><?php echo $arProduct['name'];?></a>
						</div>
						<div class="price">
							<del aria-hidden="true">
								<span class="woocommerce-Price-amount amount">
									<bdi><?php echo $price;?>
										<span class="woocommerce-Price-currencySymbol">&#8363;</span>
									</bdi>
								</span>
							</del>
							<ins>
								<span class="woocommerce-Price-amount amount">
									<bdi><?php echo number_format($price_after, 0, ',', '.');?>
										<span class="woocommerce-Price-currencySymbol">&#8363;</span>
									</bdi>
								</span>
							</ins>
							<div class="vntp_sale">-<?php echo $sale_off;?>%</div>
						</div>		    
					</div>
					<?php
						}
					?>
				</div>
        	</div>
    	</section>

    	<script src="templates/gshock/js/bk_plus_v2.popup.js"></script>
    	
	</div>
	<div class="jquery-modal blocker hide" id="empModal" role="dialog">
		<div id="quick-view" class="view-productt wc-quick-view-modal woocommerce single-product wc-quick-view-product with-product-image with-product-details modal" data-image-width="600" style="display: inline-block;">
			
		</div>
		<a href="javascript:void(0)" data-dismiss="modal" style="position: absolute; top: 6px; right: 159px; display: block; width: 30px;height: 30px;text-indent: -9999px;background-size: contain;background-repeat: no-repeat; background-position: center center;background-image: url(templates/gshock/img/111.png); z-index: 100">Close</a>
	</div>

<style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
<?php include_once 'templates/gshock/inc/footer.php'; ?>