<?php include_once 'templates/gshock/inc/header.php'; ?>
	
	<div class="kc_clfw"></div>
		<div class="kc-elm kc-css-256604 kc_col-sm-12 vnt_slick " data-slick='{"slidesToShow": 1,  "slidesToScroll": 1, "centerMode": false, "variableWidth": false, "dots": true, "arrows": true, "autoplay": true,  "autoplaySpeed": 6000, "infinite": true, "adaptiveHeight": true ,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 2, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 1, "slidesToScroll": 1, "adaptiveHeight": true}}]}'>
			<div class="kc-elm kc-css-660617 slick_item">
				<div class="kc-elm kc-css-306089 vnt_image ">
					<div class="thumb">
						<img src="templates/gshock/img/hong-ho-casio-1-1_auto_x2-scaled.jpg" alt="">
					</div>
					<a href="/cua-hang" title="" class="link"></a>
				</div>
			</div>
			<div class="kc-elm kc-css-977486 slick_item"><div  class="kc-elm kc-css-753663 vnt_image ">
				<div class="thumb">
					<img src="templates/gshock/img/gravitymaster-2_auto_x2-scaled.jpg" alt="">
				</div>
				<a href="/cua-hang" title="" class="link"></a>
			</div>
		</div>
		<div class="kc-elm kc-css-15423 slick_item">
			<div  class="kc-elm kc-css-984818 vnt_image ">
				<div class="thumb">
					<img src="templates/gshock/img/gravitymaster1_auto_x2-scaled.jpg" alt="">
				</div>
				<a href="/cua-hang" title="" class="link"></a>
			</div>
		</div>
	</div>

	<section id="home_dichvu" class="kc-elm kc-css-608473 kc_row vnt_section hide_col">
		<div class="kc-row-container kc-container home_dichvu_cont vnt_col">
			<div class="kc-elm kc-css-298228 vnt_title" >
				<div class="thumb">
					<img class="img_1" src="templates/gshock/img/vanchuyen.png" alt="Free COD Toàn Quốc">
				</div>
				<h4 class="type">Free COD Toàn Quốc</h4>
				<span class="sub">Chúng tôi miễn phí vận chuyển với tất cả các đơn hàng trị giá trên 2.000.000Đ</span>        
			</div>
			<div  class="kc-elm kc-css-687972 vnt_title"  >
				<div class="thumb">
					<img class="img_1" src="templates/gshock/img/dienthoai.png" alt="Hỗ Trợ Online 24/24">
				</div>
				<h4 class="type">Hỗ Trợ Online 24/24</h4>
				<span class="sub">Chúng tôi luôn luôn hỗ trợ khách hàng 24/24 tất cả các ngày trong tuần</span>        
			</div>
			<div  class="kc-elm kc-css-830078 vnt_title"  >
				<div class="thumb">
					<img class="img_1" src="templates/gshock/img/hotro.png" alt="Miễn Phí Đổi Trả">
				</div>
				<h4 class="type">Miễn Phí Đổi Trả</h4>
				<span class="sub">Đổi mới trong vòng 1 tháng, bảo hành 5 năm, thay pin trọn đời</span>        
			</div>

			<div  class="kc-elm kc-css-469696 vnt_title"  >
				<div class="thumb">
					<img class="img_1" src="templates/gshock/img/quatang.png" alt="Quà Tặng Hấp Dẫn">
				</div>
				<h4 class="type">Quà Tặng Hấp Dẫn</h4>
				<span class="sub">Chương trình khuyễn mãi cực lớn và hấp dẫn vào mỗi chủ nhật hàng tuần</span>        
			</div>
		</div>
	</section>

	<section id="home_danhmuc" class="kc-elm kc-css-468987 kc_row vnt_section hide_col_cont">
		<div  class="kc-elm kc-css-719214 vnt_title"  >
			<h2 class="type">DANH MỤC SẢN PHẨM</h2>
			<span class="sub"></span>
		</div>
		<div id="home_catsp" class="kc-elm kc-css-390335 kc_row kc_row_inner home_catsp">
			<?php
				$query = "SELECT * FROM categories ORDER BY RAND() LIMIT 4";
				$ketqua = $mysqli->query($query);
				while($arCategories = mysqli_fetch_assoc($ketqua)) {
					$categories_id = $arCategories['categories_id'];
					$name = $arCategories['trademark'];
					$nameReplace = libraryString::utf8ToLatin($name);
                    $url = '/cua-hang/'.$nameReplace.'-'.$categories_id;
			?>
			<div class="kc-elm kc-css-425632 vnt_title home_category" >
				<div class="thumb">
					<img class="img_1" src="/templates/gshock/img/<?php echo $arCategories['picture'];?>" alt="G-Shock ">
				</div>
				<div class="col">
					<div class="type"><?php echo $arCategories['trademark'];?></div>
					<span class="sub">Xem thêm</span> <i class="icon fa-long-arrow-right"></i>
				</div>
				<a href="<?php echo $url;?>" class="link " title="" ></a>
			</div>
			<?php
				}
			?>
		</div>
	</section>

	<div  class="kc-elm kc-css-76422 vnt_title"  >
		<h2 class="type">Top Sản phẩm bán chạy</h2>
		<span class="sub"></span>
	</div>
	<section id="home_topsp" class="kc-elm kc-css-511986 kc_row vnt_section hide_col">
		<div class="kc-row-container kc-container vnt_col">
			<div  class="kc-elm kc-css-908998 vntabs tabs_topsp">
				<!-- <ul class="vntabs_nav ">  
					<li class="vntabs_item vntabs_nav_item">
						<div class="title">G-Shock </div>
					</li>
					<li class="vntabs_item vntabs_nav_item">
						<div class="title">Baby-G</div>
					</li>    
				</ul> -->
				<div class="kc-elm vntabs_content">
					<div class="kc-elm kc-css-551015 vntabs_cont">
						<div  class="kc-elm kc-css-687750 vnt_archive vnt_product">
							<?php
								$query = "SELECT * FROM products ORDER BY product_id DESC LIMIT 8";
								$ketqua = $mysqli->query($query);
								while($arProduct = mysqli_fetch_assoc($ketqua)) {
									$product_id = $arProduct['product_id'];
									$categories_id = $arProduct['categories_id'];
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
									<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
										<img src="templates/gshock/img/<?php echo $arProduct['picture'];?>" alt="<?php echo $arProduct['name'];?>">
									</a>
									<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-action="quick-view-<?Php echo $product_id;?>" class="quick-view <?Php echo $product_id;?> open-modal wc-quick-view-button button"></a>
									<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-quantity="1" data-name="<?Php echo $name;?>" data-price="<?Php echo $price_after;?>" class="order add_to_cart_button ajax_add_to_cart">Mua ngay</a>
									<span class="saleup">
										Giảm 
										<span class="woocommerce-Price-amount amount">
											<bdi><?php echo $price_save;?>
												<span class="woocommerce-Price-currencySymbol">&#8363;</span>
											</bdi>
										</span>
									</span>
								</div>
								<div class="kc-elm title" data-tooltip="GST-B100-1ADR">
									<a href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>"><?php echo $arProduct['name'];?></a>
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
						<div  class="kc-elm kc-css-142397 vnt_title"  >
							<div class="type">Xem thêm</div>
							<i class="icon fa-long-arrow-right"></i>
							<a href="/cua-hang" class="link " title="G-Shock" ></a>        
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home_flash_sale" class="kc-elm kc-css-392683 kc_row vnt_section hide_col_cont">
		<div class="kc-elm kc-css-740946 vnt_title"  >
			<h2 class="type">FLASH SALE HÀNG TUẦN</h2>
			<span class="sub"></span>
		</div>
		<div class="kc-elm kc-css-519744 products vnt_slick vnt_archive vnt_product product_slider flex_true" data-slick='{"centerMode": false, "variableWidth": false, "slidesToShow": 1, "slidesToScroll": 1, "dots": true, "arrows": false, "autoplay": true,  "autoplaySpeed": 10000, "infinite": true,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 1, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 1, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 1, "slidesToScroll": 1}}]}'>
			<?php
				$query = "SELECT * FROM products ORDER BY sale_off DESC LIMIT 3;";
				$ketqua = $mysqli->query($query);
				while($arProduct = mysqli_fetch_assoc($ketqua)) {
					$product_id = $arProduct['product_id'];
					$categories_id = $arProduct['categories_id'];
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
					<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
						<img src="templates/gshock/img/<?php echo $arProduct['picture'];?>" alt="<?php echo $arProduct['name'];?>">
					</a>
					<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-action="quick-view-<?Php echo $product_id;?>" class="quick-view <?Php echo $product_id;?> open-modal wc-quick-view-button button"></a>
					<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-quantity="1" data-name="<?Php echo $name;?>" data-price="<?Php echo $price_after;?>" class="order add_to_cart_button ajax_add_to_cart">Mua ngay</a>
					<span class="saleup">Giảm
						<span class="woocommerce-Price-amount amount">
							<bdi><?php echo $price_save ;?>
								<span class="woocommerce-Price-currencySymbol">&#8363;</span>
							</bdi>
						</span>
					</span>
				</div>
				<div class="col">
					<div class="kc-elm title" data-tooltip="MSG-S200-7ADR">
						<a href="<?php echo $url?>" title="MSG-S200-7ADR"><?php echo $arProduct['name'];?></a>
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
					<a href="/thanh-toan?quantity=1&product_id=<?php echo $product_id;?>" data-product_id="1929" class="dat_hang ajax_add_to_cart">Đặt hàng</a>
				</div>
			</div>
			<?php
				}
			?>	    
		</div>
	</section>

	<section id="home_danhmuc1" class="kc-elm kc-css-318809 kc_row vnt_section hide_col_cont">
		<div  class="kc-elm kc-css-314684 vnt_title" >
			<h2 class="type">Đồng hồ G-Shock</h2>
			<span class="sub"></span>
			<a href="cua-hang/g-shock-1" class="link " title="G-Shock" >G-Shock</a>        
		</div>
		<div class="kc-elm kc-css-997858 kc_row kc_row_inner">
			<div class="kc-elm kc-css-683267 kc_col-sm-6 kc_column_inner kc_col-sm-6">
				<div  class="kc-elm kc-css-383943 vnt_archive vnt_product">
					<?php
						$query = "SELECT * FROM products WHERE categories_id = 1 ORDER BY product_id DESC LIMIT 2";
						$ketqua = $mysqli->query($query);
						while($arProduct = mysqli_fetch_assoc($ketqua)) {
							$product_id = $arProduct['product_id'];
							$categories_id = $arProduct['categories_id'];
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
							<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
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
						<div class="kc-elm title" data-tooltip="GA-2100-1A AP ROYAL OAK (DIAMOND)">
							<a href="<?php echo $url?>" title="GA-2100-1A AP ROYAL OAK (DIAMOND)">GA-2100-1A AP ROYAL OAK (DIAMOND)</a>
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
							<div class="vntp_sale">-<?php echo $arProduct['sale_off'];?>%</div>
						</div>		    
					</div>
					<?php
						}
					?>
				</div>
			</div>
			<div class="kc-elm kc-css-786034 kc_col-sm-6 kc_column_inner kc_col-sm-6">
				<div class="kc-elm kc-css-689019 vnt_image hover_zoom">
					<div class="thumb">
						<img src="templates/gshock/img/hd-gshock.jpg" alt="">
					</div>
					<div class="kc-elm ovelay">
						<div class="ovelay_cont">40% OFF</div>
					</div>
						<a href="category.php?cat_id=<?php echo $categories_id;?>" title="" class="link"></a>
					</div>
				</div>
			</div>
			<div class="kc-elm kc-css-981936 products vnt_slick vnt_archive vnt_product product_slider flex_true" data-slick='{"centerMode": false, "variableWidth": false, "slidesToShow": 4, "slidesToScroll": 2, "dots": true, "arrows": false, "autoplay": false,   "infinite": true,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 3, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 3, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}]}'>
				<?php
					$query = "SELECT * FROM products WHERE categories_id = 1 ORDER BY product_id LIMIT 8";
					$ketqua = $mysqli->query($query);
					while($arProduct = mysqli_fetch_assoc($ketqua)) {
						$product_id = $arProduct['product_id'];
						$categories_id = $arProduct['categories_id'];
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
						<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
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
					<div class="kc-elm title" data-tooltip="GA-2100-1A AP ROYAL OAK (DIAMOND)">
						<a href="<?php echo $url?>" title="GA-2100-1A AP ROYAL OAK (DIAMOND)">GA-2100-1A AP ROYAL OAK (DIAMOND)</a>
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
						<div class="vntp_sale">-<?php echo $arProduct['sale_off'];?>%</div>
					</div>		    
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>


	<section id="home_danhmuc2" class="kc-elm kc-css-302218 kc_row vnt_section hide_col_cont">
		<div  class="kc-elm kc-css-697542 vnt_title"  >
			<h2 class="type" style="text-align: center">Đồng hồ Baby-G</h2>
			<span class="sub"></span>
			<a href="/cua-hang/baby-g-2" class="link " title="Baby-G" >Baby-G</a>        
		</div>
		<div class="kc-elm kc-css-968217 kc_row kc_row_inner">
			<div class="kc-elm kc-css-76877 kc_col-sm-6 kc_column_inner kc_col-sm-6">
				<div class="kc-elm kc-css-425632 vnt_title home_category" >
					<div class="thumb">
						<img src="templates/gshock/img/baby.png" alt="">
					</div>
				</div>
			</div>
			<div class="kc-elm kc-css-706634 kc_col-sm-6 kc_column_inner kc_col-sm-6">
				<div  class="kc-elm kc-css-180559 vnt_archive vnt_product">
					<?php
						$query = "SELECT * FROM products WHERE categories_id = 2 ORDER BY product_id DESC LIMIT 2";
						$ketqua = $mysqli->query($query);
						while($arProduct = mysqli_fetch_assoc($ketqua)) {
							$product_id = $arProduct['product_id'];
							$categories_id = $arProduct['categories_id'];
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
							<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
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
						<div class="kc-elm title" data-tooltip="GA-2100-1A AP ROYAL OAK (DIAMOND)">
							<a href="<?php echo $url?>" title="GA-2100-1A AP ROYAL OAK (DIAMOND)">GA-2100-1A AP ROYAL OAK (DIAMOND)</a>
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
							<div class="vntp_sale">-<?php echo $arProduct['sale_off'];?>%</div>
						</div>		    
					</div>
					<?php
						}
					?>
				</div>
			</div>

			<div class="kc-elm kc-css-85340 products vnt_slick vnt_archive vnt_product product_slider flex_true" data-slick='{"centerMode": false, "variableWidth": false, "slidesToShow": 4, "slidesToScroll": 2, "dots": true, "arrows": false, "autoplay": false,   "infinite": true,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 3, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 3, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}]}'>
				<?php
					$query = "SELECT * FROM products WHERE categories_id = 2 LIMIT 8";
					$ketqua = $mysqli->query($query);
					while($arProduct = mysqli_fetch_assoc($ketqua)) {
						$product_id = $arProduct['product_id'];
						$categories_id = $arProduct['categories_id'];
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
						<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
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
					<div class="kc-elm title" data-tooltip="GA-2100-1A AP ROYAL OAK (DIAMOND)">
						<a href="<?php echo $url?>" title="GA-2100-1A AP ROYAL OAK (DIAMOND)">GA-2100-1A AP ROYAL OAK (DIAMOND)</a>
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
						<div class="vntp_sale">-<?php echo $arProduct['sale_off'];?>%</div>
					</div>		    
				</div>
				<?php
					}
				?>
			</div>
		</div>
		<div  class="kc-elm kc-css-666202 vnt_editor">
			<script>
				jQuery(document).ready(function($) {
				$('.home_mcat').slick({
						rows: 2,
						dots: true,
						arrows: false,
						infinite: true,
						speed: 300,
						slidesToShow: 2,
						slidesToScroll: 2
				});
				});
			</script>
		</div>
	</section>

	<section id="home_danhmuc3" class="kc-elm kc-css-741686 kc_row vnt_section hide_col_cont">
		<div class="kc-elm kc-css-896181 vnt_title">
			<h2 class="type">Đồng hồ mới về</h2>
			<span class="sub"></span>
			<a href="cua-hang" class="link " title="" ></a>        
		</div>
		<div class="kc-elm kc-css-101607 kc_row kc_row_inner">
			<div class="kc-elm kc-css-790867 kc_col-sm-6 kc_column_inner kc_col-sm-6">
				<div  class="kc-elm kc-css-245435 vnt_archive vnt_product home_danhmuc_phukien">
					<?php
						$query = "SELECT * FROM products ORDER BY product_id DESC LIMIT 10";
						$ketqua = $mysqli->query($query);
						while($arProduct = mysqli_fetch_assoc($ketqua)) {
							$product_id = $arProduct['product_id'];
							$categories_id = $arProduct['categories_id'];
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
							<a class="kc-elm permalink" href="<?php echo $url?>" title="<?php echo $arProduct['name'];?>">
								<img src="templates/gshock/img/<?php echo $arProduct['picture'];?>" style="height:268px" alt="<?php echo $arProduct['name'];?>">
							</a>
							<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-action="quick-view" class="quick-view open-modal wc-quick-view-button button"></a>
							<a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-quantity="1" data-name="<?Php echo $name;?>" data-price="<?Php echo $price_after;?>" class="order add_to_cart_button ajax_add_to_cart">Mua ngay</a>
							<span class="saleup">Giảm
								<span class="woocommerce-Price-amount amount">
									<bdi><?php echo $price_save;?>
										<span class="woocommerce-Price-currencySymbol">&#8363;</span>
									</bdi>
								</span>
							</span>
						</div>
						<div class="kc-elm title" data-tooltip="GA-2100-1A AP ROYAL OAK (DIAMOND)">
							<a href="<?php echo $url?>" title="GA-2100-1A AP ROYAL OAK (DIAMOND)">GA-2100-1A AP ROYAL OAK (DIAMOND)</a>
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
							<div class="vntp_sale">-<?php echo $arProduct['sale_off'];?>%</div>
						</div>		    
					</div>
					<?php
						}
					?>
				</div>
				<div class="kc-elm kc-css-960096 vnt_editor">
					<script>
						jQuery(document).ready(function($) {
						$('.home_danhmuc_phukien').slick({
								rows: 2,
								dots: true,
								arrows: false,
								infinite: true,
								speed: 300,
								slidesToShow: 2,
								slidesToScroll: 2
						});
						});
					</script>
				</div>
			</div>
			<div class="kc-elm kc-css-964907 kc_col-sm-6 kc_column_inner kc_col-sm-6">
				<div  class="kc-elm kc-css-147149 vnt_image hover_zoom">
					<div class="thumb">
						<img src="templates/gshock/img/GBA-400-1A9DR-4.jpg" alt="">
					</div>
				</div>	
			</div>
		</div>
	</section>

	<section id="home_tinbai" class="kc-elm kc-css-620935 kc_row vnt_section hide_col_cont">
		<div  class="kc-elm kc-css-318252 vnt_title"  >
			<h2 class="type">TIN TỨC</h2>
			<span class="sub"></span>
			<a href="tin-tuc" class="link " title="Tin tức" >Tin tức</a>        
		</div>
		<div  class="kc-elm kc-css-228787 vnt_archive post">
			<?php
				$query = "SELECT * FROM news ORDER BY RAND() LIMIT 3";
				$ketqua = $mysqli->query($query);
				while($arNews = mysqli_fetch_assoc($ketqua)) {
					$news_id = $arNews['news_id'];
					$name = $arNews['name'];
					$nameReplace = libraryString::utf8ToLatin($name);
					$url = $nameReplace.'-'.$news_id.'.html';
			?>
			<div class="kc-elm item item_1 odd">
				<a class="kc-elm thumb" href="<?php echo $url?>" title="<?php echo $arNews['name'];?>">
					<img src="templates/gshock/img/<?php echo $arNews['picture'];?>" alt="<?php echo $arNews['name'];?>">
				</a>
				<div class="kc-elm title">
					<a href="<?php echo $url?>" title="<?php echo $arNews['name'];?>"><?php echo $arNews['name'];?></a>
				</div>
				<div class="cat">
					<a class="cat_item" href="/tin-tuc" alt="Tin tức">Tin tức</a>
				</div>
				<span class="date"><?php echo $arNews['created_at'];?></span>
				<div class="kc-elm desc"><?php echo $arNews['preview_text'];?></div>
				<div class="kc-elm more">
					<a href="<?php echo $url?>" title="<?php echo $arNews['name'];?>">Xem thêm</a>
					<i class="fa-long-arrow-right"></i>
				</div>    
			</div>
			<?php
				}
			?>
		</div>
	</section>
	
	<div class="jquery-modal blocker hide" id="empModal" role="dialog">
		<div id="quick-view" class="view-productt wc-quick-view-modal woocommerce single-product wc-quick-view-product with-product-image with-product-details modal" data-image-width="600" style="display: inline-block;">
			
		</div>
		<a href="javascript:void(0)" data-dismiss="modal" style="position: absolute; top: 8.5px; right: 150px; display: block; width: 30px;height: 30px;text-indent: -9999px;background-size: contain;background-repeat: no-repeat; background-position: center center;background-image: url(templates/gshock/img/111.png); z-index: 100">Close</a>
	</div>
	

	<style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
	<?php
		if(isset($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo '<script> alert("'.$msg.'") </script>';
		}
	?>

	
	<?php include_once 'templates/gshock/inc/footer.php'; ?>
