<?php include_once 'templates/gshock/inc/header.php'; ?>
<?php

    if(!empty($_GET['name'])) {
        $product_name = $_GET['name'];
    }

    if(!empty($_GET['cat_id'])) {
        $cid = $_GET['cat_id'];
        $queryTSD = "SELECT count(*) AS TSD FROM products WHERE categories_id = $cid";
    } else {
        $queryTSD = "SELECT count(*) AS TSD FROM products";
    }

    $ketquaTSD = $mysqli->query($queryTSD);
    $arrTSD = mysqli_fetch_assoc($ketquaTSD);
    //tính tổng số dòng
    $tongSoDong = $arrTSD['TSD'];
    // $tongSoDong = LibraryPage::pageing('products');
    $row_count = 12;
    //tổng số trang
    $tongSoTrang = ceil($tongSoDong / $row_count);
    //trang hiện tại
    $trangHienTai = 1;
    if(isset($_GET['page'])) {
    $trangHienTai = $_GET['page'];
    }
    //offset
  $offset = ($trangHienTai - 1)*$row_count;
?>
    <style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-26183{width: 70%;}body.kc-css-system .kc-css-939157{width: 30%;}}body.kc-css-system .kc-css-900236{padding-top: 30px;padding-bottom: 30px;}body.kc-css-system .kc-css-751984{text-align: center;}body.kc-css-system .kc-css-720299 .type{font-size: 30px;line-height: 42px;font-weight: 600;text-align: center;}body.kc-css-system .kc-css-720299{;margin-top: 30px;}body.kc-css-system .kc-css-498031 .icon{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-498031{position: fixed;display: none;width: 36px;height: 36px;background: #f97e6c;border-top-left-radius: 5px;border-bottom-left-radius: 5px;justify-content: center;align-items: center;top: 40%;right: 0;z-index: 10;}body.kc-css-system .kc-css-448206{background: #f7f7f7;display: flex;width: 100%;margin-top: 30px;margin-right: 0px;margin-left: 0px;padding-right: 15px;border-radius: 4px 4px 4px 4px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-26183{display: flex;width: 100%;padding-left: 0px;flex: 1;}body.kc-css-system .kc-css-541136 .icon{color: #dd3333;font-size: 24px;}body.kc-css-system .kc-css-541136{position: absolute;display: none;width: 36px;height: 36px;justify-content: center;align-items: center;top: 10px;right: 10px;z-index: 10;}body.kc-css-system .kc-css-940477 .widgettitle:hover{color: #ee1a26;}body.kc-css-system .kc-css-940477 .widgettitle{font-size: 16px;line-height: 46px;font-weight: 600;padding-top: 0px;padding-bottom: 0px;margin: 0px 0px 0px 0px;}body.kc-css-system .kc-css-940477{margin-right: 30px;padding-right: 15px;padding-left: 15px;width: auto;}body.kc-css-system .kc-css-137267 .widgettitle:hover{color: #ee1a26;}body.kc-css-system .kc-css-137267 .widgettitle{font-size: 16px;line-height: 46px;font-weight: 600;padding-top: 0px;padding-bottom: 0px;margin: 0px 0px 0px 0px;}body.kc-css-system .kc-css-137267{display: none;margin-right: 30px;padding-right: 15px;padding-left: 15px;width: auto;}body.kc-css-system .kc-css-492227{width: auto;}body.kc-css-system .kc-css-803886 .title{width: 100%;font-size: 16px;font-weight: 500;text-align: center;margin-top: 10px;margin-bottom: 5px;}body.kc-css-system .kc-css-803886 .price{display: flex;width: 100%;color: #ee1a26;font-size: 16px;font-weight: 600;padding-right: 5px;padding-left: 5px;flex-flow: wrap;justify-content: center;align-items: center;}body.kc-css-system .kc-css-803886 .price del{color: #aeaeae;font-size: 12px;font-weight: 400;margin-right: 10px;margin-left: 10px;}body.kc-css-system .kc-css-803886 .item{display: flex;background: #ffffff;padding-bottom: 8px;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-803886{display: grid;margin-top: 30px;grid-template-columns: repeat(4, 1fr);grid-gap: 15px;grid-row-gap: 30px;}body.kc-css-system .kc-css-716495{display: flex;padding-top: 30px;padding-bottom: 30px;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-994671 .type{width: 100%;font-size: 30px;line-height: 42px;font-weight: 600;text-transform: uppercase;text-align: center;}body.kc-css-system .kc-css-994671 .sub{width: 90px;height: 2px;background: #ee1a26;margin-top: 15px;}body.kc-css-system .kc-css-994671 .cont{width: 100%;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-994671{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-391273{width: 100%;max-width: 1170px;padding-right: 15px;padding-left: 15px;margin-top: 30px;}body.kc-css-system .kc-css-391273 .slick-list{margin-right: -10px;margin-left: -10px;}body.kc-css-system .kc-css-391273 .slick-slide{margin-right: 10px;margin-left: 10px;}body.kc-css-system .kc-css-979947 .icon{color: #ee1a26;}body.kc-css-system .kc-css-979947 .thumb{width: 100%;margin-bottom: 10px;}body.kc-css-system .kc-css-979947 .thumb img,body.kc-css-system .kc-css-979947 .thumb svg{display: block;}body.kc-css-system .kc-css-979947:hover .type{color: #ee1a26;}body.kc-css-system .kc-css-979947 .type{font-weight: 600;margin-right: 10px;}body.kc-css-system .kc-css-979947{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-9262 .icon{color: #ee1a26;}body.kc-css-system .kc-css-9262 .thumb{width: 100%;margin-bottom: 10px;}body.kc-css-system .kc-css-9262 .thumb img,body.kc-css-system .kc-css-9262 .thumb svg{display: block;}body.kc-css-system .kc-css-9262:hover .type{color: #ee1a26;}body.kc-css-system .kc-css-9262 .type{font-weight: 600;margin-right: 10px;}body.kc-css-system .kc-css-9262{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-390209 .icon{color: #ee1a26;}body.kc-css-system .kc-css-390209 .thumb{width: 100%;margin-bottom: 10px;}body.kc-css-system .kc-css-390209 .thumb img,body.kc-css-system .kc-css-390209 .thumb svg{display: block;}body.kc-css-system .kc-css-390209:hover .type{color: #ee1a26;}body.kc-css-system .kc-css-390209 .type{font-weight: 600;margin-right: 10px;}body.kc-css-system .kc-css-390209{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-73527 .icon{color: #ee1a26;}body.kc-css-system .kc-css-73527 .thumb{width: 100%;margin-bottom: 10px;}body.kc-css-system .kc-css-73527 .thumb img,body.kc-css-system .kc-css-73527 .thumb svg{display: block;}body.kc-css-system .kc-css-73527:hover .type{color: #ee1a26;}body.kc-css-system .kc-css-73527 .type{font-weight: 600;margin-right: 10px;}body.kc-css-system .kc-css-73527{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-683255 .icon{color: #ee1a26;}body.kc-css-system .kc-css-683255 .thumb{width: 100%;margin-bottom: 10px;}body.kc-css-system .kc-css-683255 .thumb img,body.kc-css-system .kc-css-683255 .thumb svg{display: block;}body.kc-css-system .kc-css-683255:hover .type{color: #ee1a26;}body.kc-css-system .kc-css-683255 .type{font-weight: 600;margin-right: 10px;}body.kc-css-system .kc-css-683255{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-87768{background: #fcf8f4;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-376027 .type{width: 100%;font-size: 30px;line-height: 42px;font-weight: 600;text-transform: uppercase;text-align: center;}body.kc-css-system .kc-css-376027 .sub{width: 90px;height: 2px;background: #ee1a26;margin-top: 15px;}body.kc-css-system .kc-css-376027 .cont{width: 100%;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-376027{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-191378{margin-top: 20px;}body.kc-css-system .kc-css-191378 .slick-list{margin-right: -8px;margin-left: -8px;}body.kc-css-system .kc-css-191378 .slick-slide{margin-right: 8px;margin-left: 8px;}body.kc-css-system .kc-css-166268 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-166268 .desc{text-align: center;}body.kc-css-system .kc-css-250101 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-250101 .desc{text-align: center;}body.kc-css-system .kc-css-287593 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-287593 .desc{text-align: center;}body.kc-css-system .kc-css-491352 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-491352 .desc{text-align: center;}body.kc-css-system .kc-css-355450 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-355450 .desc{text-align: center;}body.kc-css-system .kc-css-340932 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-340932 .desc{text-align: center;}body.kc-css-system .kc-css-114557 .title{font-weight: 600;text-align: center;}body.kc-css-system .kc-css-114557 .desc{text-align: center;}@media only screen and (max-width: 900px){body.kc-css-system .kc-css-803886 .item{width: calc(100vw/3 - 21px);}body.kc-css-system .kc-css-803886{overflow-x: auto;}}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-498031{display: flex;}body.kc-css-system .kc-css-541136{display: flex;}body.kc-css-system .kc-css-87768{padding-right: 10px;padding-left: 10px;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-720299 .type{font-size: 24px;line-height: 30px;}body.kc-css-system .kc-css-448206{margin-top: 0px;padding-right: 0px;padding-bottom: 15px;flex-flow: wrap;}body.kc-css-system .kc-css-26183{padding-right: 0px;flex-flow: wrap;flex: inherit;}body.kc-css-system .kc-css-940477{width: 100%;margin-right: 0px;}body.kc-css-system .kc-css-137267{width: 100%;margin-right: 0px;}body.kc-css-system .kc-css-492227{padding-left: 15px;margin-top: 15px;}body.kc-css-system .kc-css-803886 .item{width: 100%;}body.kc-css-system .kc-css-803886{grid-template-columns: repeat(2, 1fr);}body.kc-css-system .kc-css-994671 .type{font-size: 24px;}body.kc-css-system .kc-css-994671 .sub{margin-top: 5px;}body.kc-css-system .kc-css-376027 .type{font-size: 24px;}body.kc-css-system .kc-css-376027 .sub{margin-top: 5px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-376027 .type{font-size: 20px;}}</style>
    <div  class="kc-elm kc-css-801333 vnt_editor">
        <img width="1920" height="397" src="/templates/gshock/img/ga-100-banner-zps2d312xp7-1-3.jpg" class="attachment-full size-full wp-post-image" />
    </div>

    <section id="main_product_archive" class="kc-elm kc-css-900236 kc_row vnt_section hide_col">
        <div class="kc-row-container kc-container vnt_col">
            <div  class="kc-elm kc-css-720299 vnt_title"  >
                <h1 class="type">Cửa hàng</h1>
            </div>
            <style type="text/css">body.kc-css-system .kc-css-85203{max-width: 1170px;border: 1px solid #dcdcdc;border-radius: 5px 5px 5px 5px;padding: 10px 15px 10px 15px;margin-top: 20px;}body.kc-css-system .kc-css-448774 .thumb img,body.kc-css-system .kc-css-448774 .thumb svg{max-height: 36px;}body.kc-css-system .kc-css-448774 .type{width: 100%;font-size: 16px;font-weight: 600;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-448774 .sub{font-size: 13px;line-height: 16px;}body.kc-css-system .kc-css-448774{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-441933 .thumb img,body.kc-css-system .kc-css-441933 .thumb svg{max-height: 36px;}body.kc-css-system .kc-css-441933 .type{width: 100%;font-size: 16px;font-weight: 600;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-441933 .sub{font-size: 13px;line-height: 16px;}body.kc-css-system .kc-css-441933{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-271215 .thumb img,body.kc-css-system .kc-css-271215 .thumb svg{max-height: 36px;}body.kc-css-system .kc-css-271215 .type{width: 100%;font-size: 16px;font-weight: 600;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-271215 .sub{font-size: 13px;line-height: 16px;}body.kc-css-system .kc-css-271215{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-576134 .thumb img,body.kc-css-system .kc-css-576134 .thumb svg{max-height: 36px;}body.kc-css-system .kc-css-576134 .type{width: 100%;font-size: 16px;font-weight: 600;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-576134 .sub{font-size: 13px;line-height: 16px;}body.kc-css-system .kc-css-576134{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-577071 .thumb img,body.kc-css-system .kc-css-577071 .thumb svg{max-height: 36px;}body.kc-css-system .kc-css-577071 .type{width: 100%;font-size: 16px;font-weight: 600;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-577071 .sub{font-size: 13px;line-height: 16px;}body.kc-css-system .kc-css-577071{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-846483 .thumb img,body.kc-css-system .kc-css-846483 .thumb svg{max-height: 36px;}body.kc-css-system .kc-css-846483 .type{width: 100%;font-size: 16px;font-weight: 600;text-align: center;margin-top: 10px;}body.kc-css-system .kc-css-846483 .sub{font-size: 13px;line-height: 16px;}body.kc-css-system .kc-css-846483{display: flex;flex-flow: wrap;justify-content: center;}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-448774 .type{font-size: 13px;}body.kc-css-system .kc-css-441933 .type{font-size: 13px;}body.kc-css-system .kc-css-271215 .type{font-size: 13px;}body.kc-css-system .kc-css-576134 .type{font-size: 13px;}body.kc-css-system .kc-css-577071 .type{font-size: 13px;}body.kc-css-system .kc-css-846483 .type{font-size: 13px;}}</style>
    	    <div class="kc-elm kc-css-85203 kc_col-sm-12 vnt_slick " data-slick='{"slidesToShow": 6,  "slidesToScroll": 3, "centerMode": false, "variableWidth": false, "dots": false, "arrows": true, "autoplay": true,  "autoplaySpeed": 10000, "infinite": true, "adaptiveHeight": false ,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 5, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 4, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}]}'>
                <?php
                    $query = "SELECT * FROM categories";
                    $ketqua = $mysqli->query($query);
                    while($arCategories = mysqli_fetch_assoc($ketqua)) {
                        $categories_id = $arCategories['categories_id'];
                        $name = $arCategories['trademark'];
                        $nameReplace = libraryString::utf8ToLatin($name);
                        $url = '/cua-hang/'.$nameReplace.'-'.$categories_id;
                ?>
                <div class="kc-elm kc-css-744250 slick_item">
                    <div  class="kc-elm kc-css-448774 vnt_title"  >
                        <div class="thumb">
                            <img class="img_1" src="/templates/gshock/img/<?php echo $arCategories['logo_img'];?>">
                        </div>
                        <div class="type"><?php echo $arCategories['name'];?></div>
                        <!-- <span class="sub">100+ sản phẩm</span> -->
                        <a href="<?php echo $url;?>" class="link " title="" ></a>        
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div  class="kc-elm kc-css-498031 vnt_title"  >
                <i class="icon fa-filter"></i>
                <button type="button" class="link" data-toggle="modal" data-target="#aproduct_filter"></button>        
            </div>
            <div id="aproduct_filter" class="kc-elm kc-css-448206 kc_row kc_row_inner">
                <div class="kc-elm kc-css-26183 kc_col-sm-8 kc_column_inner kc_col-sm-8">
                    <div  class="kc-elm kc-css-541136 vnt_title"  >
                        <i class="icon fa-times-octagon"></i>
                        <button type="button" class="link" data-toggle="modal" data-target="#aproduct_filter"></button>        
                    </div>
                    <div class="widget woocommerce widget_product_categories kc-elm kc-css-940477 pcat_filter">
                        <h2 class="widgettitle">Bộ sưu tập</h2>
                        <ul class="product-categories">
                            <?php
                                $query = "SELECT * FROM categories";
                                $ketqua = $mysqli->query($query);
                                while($arCategories = mysqli_fetch_assoc($ketqua)) {
                                    $categories_id = $arCategories['categories_id'];
                                    $name = $arCategories['trademark'];
                                    $nameReplace = libraryString::utf8ToLatin($name);
                                    $url = '/cua-hang/'.$nameReplace.'-'.$categories_id;
                            ?>
                            <li class="cat-item cat-item-23">
                                <a href="<?php echo $url;?>"><?php echo $arCategories['trademark'];?></a>
                                <span class="count">(14)</span>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>	
                </div>
	            <div class="kc-elm kc-css-492227 vnt_editor">
                    
                    <form action="/cua-hang" class="woocommerce-ordering" method="get">
                        <select name='orderby' class="orderby" aria-label="Đơn hàng của cửa hàng">
                            <option value="new" <?php echo (!isset($_GET['orderby']) || (isset($_GET['orderby']) && $_GET['orderby']=='new'))?"selected='selected'":"" ?> >Sản phẩm mới</option>
                            <option value="min" <?php echo (isset($_GET['orderby']) && $_GET['orderby']=='min')?"selected='selected'":"" ?> >Giá: Thấp → Cao</option>
                            <option value="max" <?php echo (isset($_GET['orderby']) && $_GET['orderby']=='max')?"selected='selected'":"" ?> >Giá: Cao → Thấp</option>
			            </select>
	                    <input type="hidden" name="cat_id" <?php echo (!empty($_GET['cat_id']))?"value=$cid":"" ?> />
	                </form>
                </div>
	        </div>
            <div class="kc-elm kc-css-803886 vnt_archive vnt_product">
                <?php
                    
                    if(isset($_GET['orderby']) && !empty($_GET['cat_id'])) {
                        if($_GET['orderby'] == 'new') {
                            $query = "SELECT * FROM products WHERE categories_id = {$cid} ORDER BY product_id DESC LIMIT $offset, $row_count";
                        } else if($_GET['orderby'] == 'min') {
                            $query = "SELECT * FROM products WHERE categories_id = {$cid} ORDER BY price ASC LIMIT $offset, $row_count";
                        } else if($_GET['orderby'] == 'max') {
                            $query = "SELECT * FROM products WHERE categories_id = {$cid} ORDER BY price DESC LIMIT $offset, $row_count";
                        }
                    } else if(isset($_GET['orderby']) && $_GET['cat_id']=='') {
                        if($_GET['orderby'] == 'new') {
                            $query = "SELECT * FROM products ORDER BY product_id DESC LIMIT $offset, $row_count";
                        } else if($_GET['orderby'] == 'min') {
                            $query = "SELECT * FROM products  ORDER BY price ASC LIMIT $offset, $row_count";
                        } else if($_GET['orderby'] == 'max') {
                            $query = "SELECT * FROM products  ORDER BY price DESC LIMIT $offset, $row_count";
                        }
                    } else if(isset($_GET['cat_id'])) {
                        $query = "SELECT * FROM products WHERE categories_id = {$cid} ORDER BY product_id DESC LIMIT $offset, $row_count";
                    } else if(isset($_GET['name'])) {
                        $query = "SELECT * FROM products WHERE name LIKE '%{$product_name}%' LIMIT $offset, $row_count";
                    } else {
                        $query = "SELECT * FROM products ORDER BY product_id DESC LIMIT $offset, $row_count";
                    }
                    $count = 0;
                    $ketqua = $mysqli->query($query);
                    while($arProduct = mysqli_fetch_assoc($ketqua)) {
                        $count++;
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
                            <img src="/templates/gshock/img/<?php echo $arProduct['picture'];?>" alt="<?php echo $arProduct['name'];?>">
                        </a>
                        <a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-action="quick-view" class="quick-view open-modal wc-quick-view-button button"></a>
                        <a href="javascript:void(0)" data-product_id="<?Php echo $product_id;?>" data-quantity="1" data-name="<?Php echo $name;?>" data-price="<?Php echo $price_after;?>" class="order add_to_cart_button ajax_add_to_cart">Mua ngay</a>
                        <span class="saleup">Giảm
                            <span class="woocommerce-Price-amount amount">
                                <bdi><?php echo $price_save ;?>
                                    <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </bdi>
                            </span>
                        </span>
                    </div>
                    <div class="kc-elm title" data-tooltip="<?php echo $arProduct['name'];?>">
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
            <div class="kc-elm vnt_pagenavi">
                <?php
                if(isset($_GET['name'])) {
                    echo "<h3>Kết quả được tìm thấy: $count</h3>";
                } else {
                    if(isset($_GET['page']) && $trangHienTai > 1) {
                        $url = '/cua-hang/page-'.$trangHienTai-1;
                ?>
                <a class="next page-numbers" href="<?php echo $url;?>">
                    <i class="fa-chevron-left"></i>
                </a>
                <?php
                    }

                    for($i = 1; $i <= $tongSoTrang; $i++) {
                        $current='';
                        if($i==$trangHienTai) {
                            $current = 'current';
                            // $url2 = '/cua-hang/page-'.$i;
                        }
                ?>
                <a class="page-numbers <?php echo $current?>" href="<?php echo '/cua-hang/page-'.$i;?>"><?php echo $i?></a>
                <?php
                    }
                ?>
                <?php

                    if($trangHienTai < $tongSoTrang) {
                        $url3 = '/cua-hang/page-'.$trangHienTai+1;
                ?>
                <a class="next page-numbers" href="<?php echo $url3;?>">
                    <i class="fa-chevron-right"></i>
                </a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section id="pcat_bst" class="kc-elm kc-css-716495 kc_row vnt_section hide_col_cont">
        <div  class="kc-elm kc-css-994671 vnt_title"  >
            <h2 class="type">Bộ sưu tập</h2>
            <span class="sub"></span>
        </div>
        <div class="kc-elm kc-css-391273 kc_col-sm-12 vnt_slick " data-slick='{"slidesToShow": 3,  "slidesToScroll": 3, "centerMode": false, "variableWidth": false, "dots": true, "arrows": false, "autoplay": true,  "autoplaySpeed": 10000, "infinite": true, "adaptiveHeight": false ,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 2, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 1, "slidesToScroll": 1, "adaptiveHeight": true}}]}'>
            <?php
                $query = "SELECT * FROM categories";
                $ketqua = $mysqli->query($query);
                while($arCategories = mysqli_fetch_assoc($ketqua)) {
                    $categories_id = $arCategories['categories_id'];
                    $name = $arCategories['trademark'];
                    $nameReplace = libraryString::utf8ToLatin($name);
                    $url = '/cua-hang/'.$nameReplace.'-'.$categories_id;
            ?>
            <div class="kc-elm kc-css-53094 slick_item">
                <div  class="kc-elm kc-css-979947 vnt_title"  >
                    <div class="thumb">
                        <img class="img_1" src="/templates/gshock/img/<?php echo $arCategories['picture'];?>" style="width: 367px; height:250px" alt="<?php echo $arCategories['trademark'];?>">
                    </div>
                    <div class="type"><?php echo $arCategories['trademark'];?> </div> 
                    <i class="icon fa-long-arrow-right"></i>
                    <a href="<?php echo $url;?>" class="link " title="<?php echo $arCategories['trademark'];?>" ><?php echo $arCategories['trademark'];?></a>        
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>

    <section id="pcat_khachhang" class="kc-elm kc-css-87768 kc_row vnt_section hide_col_cont">
    	<div  class="kc-elm kc-css-376027 vnt_title"  >
            <h2 class="type">KHÁCH HÀNG CỦA CHÚNG TÔI</h2>
            <span class="sub"></span>
            <div class="cont">Ai nói bạn không thể tỏa sáng?</div>
        </div>
        <div class="kc-elm kc-css-191378 kc_col-sm-12 vnt_slick " data-slick='{"slidesToShow": 5,  "slidesToScroll": 3, "centerMode": false, "variableWidth": false, "dots": true, "arrows": false, "autoplay": true,  "autoplaySpeed": 10000, "infinite": true, "adaptiveHeight": false ,  "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 4, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 3, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 2, "slidesToScroll": 1}}]}'>
            <?php
                $query = "SELECT * FROM intros";
                $ketqua = $mysqli->query($query);
                while($arIntro = mysqli_fetch_assoc($ketqua)) {
            ?>
            <div class="kc-elm kc-css-78721 slick_item">
                <div class="kc-elm kc-css-166268 vnt_image " style="width: 100%;">
                    <div class="thumb">
                        <img src="/templates/gshock/img/<?php echo $arIntro['picture'];?>" style="width: 100%; height: 160px" >
                    </div>
                    <div class="title"><?php echo $arIntro['slogan'];?></div>    
                    <div class="desc"><?php echo $arIntro['content'];?></div>        	
                    <a data-fancybox href="/templates/gshock/img/<?php echo $arIntro['picture'];?>" title="" class="link"></a>
                </div>
            </div>
            <?php
                }
            ?>
            <div class="kc-elm kc-css-387364 slick_item">
                <div class="item"></div>
            </div>
        </div>    
    </section>
    
    <div class="jquery-modal blocker hide" id="empModal" role="dialog">
		<div id="quick-view" class="view-productt wc-quick-view-modal woocommerce single-product wc-quick-view-product with-product-image with-product-details modal" data-image-width="600" style="display: inline-block;">
			
		</div>
		<a href="javascript:void(0)" data-dismiss="modal" style="position: absolute; top: 8px; right: 150px; display: block; width: 30px;height: 30px;text-indent: -9999px;background-size: contain;background-repeat: no-repeat; background-position: center center;background-image: url(http://gshockvn.vne/templates/gshock/img/111.png); z-index: 100">Close</a>
	</div>


<style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
<?php include_once 'templates/gshock/inc/footer.php'; ?>