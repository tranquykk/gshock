
    <?php
        require_once 'util/DatabaseConnectUtil.php';

        $key = $_POST['product_id'];
        $query = "SELECT * FROM products WHERE product_id = $key";
        $ketqua = $mysqli->query($query);
        while($arProduct = mysqli_fetch_assoc($ketqua)) {
            $product_id = $arProduct['product_id'];
            $categories_id = $arProduct['categories_id'];
            $price = number_format($arProduct['price'], 0, ',', '.');
            $sale_off = $arProduct['sale_off'];
            $price_after = round(($arProduct['price'] / 100) * (100 - $sale_off), -4);
            $price_save = number_format($arProduct['price'] - $price_after,0 , '.', ',');
            $name = $arProduct['name'];
    ?>
            
    <div id="product-<?php echo $key?>" class="product type-product post-<?php echo $key?> status-publish first instock product_cat-g-shock product_cat-g-steel has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
        <div class="wc-quick-view-product-gallery woocommerce-product-gallery woocommerce-product-gallery--with-images images woocommerce-product-gallery--columns-6 woocommerce-product-gallery--control-nav-thumbs" data-columns="6" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s; width: 600px;height: 500px;"> -->
            <div class="flex-viewport" style="overflow: hidden; position: relative; height: 100%; margin-top: -25px;">
                <figure class="woocommerce-product-gallery__wrapper" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"> 
                    <?php
                        $query = "SELECT * FROM sub_picture WHERE product_id = $key";
                        $ketqua = $mysqli->query($query);
                        while($arPicture = mysqli_fetch_assoc($ketqua)) {
                            $picture = $arPicture['picture'];
                    ?>
                    <div data-thumb="http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?>" class="woocommerce-product-gallery__image" style="width: 500px;  margin-right: 0px; float: left; display: block;">
						<img width="600" height="600" src="http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?>" class="wp-post-image" alt="" decoding="async" loading="lazy" title="Dong-Ho-GST-S110-1ADR.jpg" data-caption="" data-src="http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?>" data-large_image="http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?>" data-large_image_width="1080" data-large_image_height="1080" srcset="http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 600w, http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 768w, http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 999w, http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 300w, http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 100w, http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 64w, http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?> 1080w" sizes="(max-width: 600px) 100vw, 600px" data-xoowscfly="fly" draggable="false">
					</div>
                    <?php
                        }
                    ?>
                </figure>
            </div>
            <ol class="flex-control-nav flex-control-thumbs">
                <?php
                    $query = "SELECT * FROM sub_picture WHERE product_id = $key";
                    $ketqua = $mysqli->query($query);
                    $curent = 0;
                    while($arPicture = mysqli_fetch_assoc($ketqua)) {
                        $picture = $arPicture['picture'];
                        $curent += 1;
                ?>
                <li>
                    <img onclick="currentSlide(<?php echo $curent;?>)" src="http://gshockvn.vne/templates/gshock/img/<?php echo $picture ?>" class="demo" draggable="false" width="100" height="100">
                </li>
                <?php
                    }
                ?>
            </ol>
        </div>
        <div class="wc-quick-view-product-summary summary entry-summary">
            <span class="vnt_onsale">-<?php echo $sale_off ?>%</span>
            <h1 class="product_title entry-title"><?php echo $name ?></h1>
            <p class="price">
                <del aria-hidden="true">
                    <span class="woocommerce-Price-amount amount">
                        <bdi><?php echo $price ?>
                            <span class="woocommerce-Price-currencySymbol">₫</span>
                        </bdi>
                    </span>
                </del>
                <ins>
                    <span class="woocommerce-Price-amount amount">
                        <bdi><?php echo number_format($price_after, 0, ',', '.');?>
                            <span class="woocommerce-Price-currencySymbol">₫</span>
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
                                        <h2><b>Bộ sản phẩm gồm:</b></h2>
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
            <form class="cart" action="/thanh-toan" method="get" enctype="multipart/form-data">
                <div class="quantity">
                    <label class="screen-reader-text" for="quantity_6372fc7c52004">Số lượng</label>
                    <div class="dc_quantity_input">
                        <input class="minus" type="button" value="−">
                        <input type="number" id="quantity_6372fc7c52004" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric">
                        <input class="plus" type="button" value="+">
                        <input type="hidden" name="product_id" value="<?php echo $product_id;?>" />
                    </div>
                </div>
                <button type="submit" class="single_add_to_cart_button button alt wp-element-button" style="margin-top: 10px">Mua ngay</button>
            </form>

            <div class="bk-btn" style="margin-top: 10px"></div>
        </div>
    </div>
<?php
    }
?> 


<script>
// let slideIndex = 1;
// showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("woocommerce-product-gallery__image");
  let dots = document.getElementsByClassName("demo");
//   let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" flex-active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " flex-active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>