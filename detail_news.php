    <?php include_once 'templates/gshock/inc/header.php'; ?>
    
	<style type="text/css">body.kc-css-system .kc-css-858233{display: flex;flex-flow: wrap;justify-content: center;}body.kc-css-system .kc-css-632296{padding-top: 15px;padding-bottom: 30px;}body.kc-css-system .kc-css-6857{text-align: center;}body.kc-css-system .kc-css-400473 .type{font-size: 30px;line-height: 42px;font-weight: 600;}body.kc-css-system .kc-css-400473{border-bottom: 1px solid #dcdcdc;;padding-bottom: 5px;margin-top: 30px;margin-bottom: 20px;}body.kc-css-system .kc-css-695339{margin-top: 20px;}body.kc-css-system .kc-css-214515{background: #fcf8f4;padding-top: 35px;padding-bottom: 35px;}body.kc-css-system .kc-css-728624 .type{font-size: 20px;font-weight: 700;}body.kc-css-system .kc-css-288317 .title{width: 100%;font-size: 18px;font-weight: 700;margin-top: 10px;margin-bottom: 10px;}body.kc-css-system .kc-css-288317 .desc{width: 100%;font-size: 14px;line-height: 20px;margin-top: 5px;}body.kc-css-system .kc-css-288317 .more a{color: #ee1a26;}body.kc-css-system .kc-css-288317 .more a:hover{color: #ee1a26;}body.kc-css-system .kc-css-288317 .more{font-size: 12px;font-weight: 700;}body.kc-css-system .kc-css-288317 .cat{background: #ee1a26;font-size: 12px;font-weight: 700;text-transform: uppercase;padding-right: 5px;padding-left: 5px;margin-right: 15px;}body.kc-css-system .kc-css-288317 .cat_item{color: #ffffff;}body.kc-css-system .kc-css-288317 .item{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-288317{display: grid;margin-top: 20px;grid-template-columns: repeat(3, 1fr);grid-gap: 20px;}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-400473 .type{font-size: 24px;line-height: 30px;}body.kc-css-system .kc-css-288317 .item{width: calc(50vw - 25px);}body.kc-css-system .kc-css-288317{overflow-x: auto;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-288317 .item{width: 68vw;}}</style>
    <div  class="kc-elm kc-css-858233 vnt_image ">
        <div class="thumb">
            <img src="../wp-content/uploads/img_banner_brea_blog.jpg" alt="">
        </div>
    </div>

    <section id="main_single" class="kc-elm kc-css-632296 kc_row vnt_section hide_col">
        <?php
            $nid = $_GET['nid'];
            $query = "SELECT * FROM news WHERE news_id = {$nid}";
            $ketqua = $mysqli->query($query);
            while($arNews = mysqli_fetch_assoc($ketqua)) {
                $name = $arNews['name'];
                $detail_text = $arNews['detail_text'];
        ?>
        <div class="kc-row-container kc-container vnt_col">
            <div  class="kc-elm kc-css-400473 vnt_title"  >
                <h1 class="type"><?php echo $name;?></h1>
            </div>
            <div class="kc-elm kc-css-695339 vnt_the_content">
                <div class="article-details nd-toc-content">
                    <?php echo $detail_text;?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </section>

    <section id="single_related" class="kc-elm kc-css-214515 kc_row vnt_section hide_col">
        <div class="kc-row-container kc-container vnt_col">
            <div  class="kc-elm kc-css-728624 vnt_title"  >
                <h3 class="type">Bài viết liên quan</h3>
            </div>
            <div  class="kc-elm kc-css-288317 vnt_archive post">
                <?php
                    $query = "SELECT * FROM news WHERE news_id != {$nid} ORDER BY RAND() LIMIT 3";
                    $ketqua = $mysqli->query($query);
                    while($arNews = mysqli_fetch_assoc($ketqua)) {
                        $news_id = $arNews['news_id'];
                        $name = $arNews['name'];
                        $picture = $arNews['picture'];
                        $created_at = $arNews['created_at'];
                        $preview_text = $arNews['preview_text'];
                        
                        $nameReplace = libraryString::utf8ToLatin($name);
        				$url = $nameReplace.'-'.$news_id.'.html';
                ?>
                <div class="kc-elm item item_1 odd">
                    <a class="kc-elm thumb" href="<?php echo $url?>" title="<?php echo $name?>"><img src="templates/gshock/img/<?php echo $picture?>" alt="<?php echo $name?>"></a>
                    <div class="kc-elm title">
                        <a href="<?php echo $url?>" title="<?php echo $name?>"><?php echo $name?></a></div>
                    <div class="cat">
                        <a class="cat_item" href="/tin-tuc" alt="Tin tức">Tin tức</a> 
                    </div>
                    <span class="date"><?php echo $created_at;?></span>
                    <div class="kc-elm desc"><?php echo $preview_text?></div>
                    <div class="kc-elm more">
                        <a href="<?php echo $url?>" title="<?php echo $name?>">Xem thêm</a> 
                        <i class="fa-long-arrow-right"></i>
                    </div>    
                </div>
                <?php
                    }
                ?>
        
            </div>
        </div>
    </section>

    <style type="text/css">@media only screen and (min-width: 1000px) and (max-width: 5000px){body.kc-css-system .kc-css-542146{width: 50%;}body.kc-css-system .kc-css-383299{width: 50%;}body.kc-css-system .kc-css-183404{width: 40%;}body.kc-css-system .kc-css-8168{width: 20%;}body.kc-css-system .kc-css-681413{width: 20%;}body.kc-css-system .kc-css-567871{width: 20%;}}body.kc-css-system .kc-css-294102{background: #ee1a26;padding-top: 10px;padding-bottom: 10px;}body.kc-css-system .kc-css-294102 >.kc-container{display: flex;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-652455 .type{color: #ffffff;font-size: 14px;font-weight: 600;text-transform: uppercase;}body.kc-css-system .kc-css-652455{width: 50%;}body.kc-css-system .kc-css-874180{width: 50%;}body.kc-css-system .kc-css-921585{background: #000000;padding-top: 50px;padding-bottom: 50px;}body.kc-css-system .kc-css-921585 >.kc-container{padding-right: 0px;padding-left: 0px;}body.kc-css-system .kc-css-229334 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-229334 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-229334{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-217143 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-217143 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-217143{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-494534 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-494534 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-494534{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-820481 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-820481 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-820481{display: flex;margin-top: 30px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-224882 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-224882 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-224882 .sub{color: #ee1a26;font-size: 24px;font-weight: 700;}body.kc-css-system .kc-css-224882{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-133168 .icon{display: flex;width: 36px;height: 36px;background: #ee1a26;color: #ffffff;font-size: 24px;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-133168 .type{color: #aeaeae;flex: 1;}body.kc-css-system .kc-css-133168{display: flex;margin-top: 15px;flex-flow: wrap;align-items: center;}body.kc-css-system .kc-css-270365 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-767782{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-767782 a{color: #aeaeae;}body.kc-css-system .kc-css-767782 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-767782 p{margin-bottom: 10px;}body.kc-css-system .kc-css-273605 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-908476{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-908476 a{color: #aeaeae;}body.kc-css-system .kc-css-908476 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-908476 p{margin-bottom: 10px;}body.kc-css-system .kc-css-330280 .type{color: #ffffff;font-size: 16px;line-height: 30px;font-weight: 600;}body.kc-css-system .kc-css-217626{color: #aeaeae;font-size: 14px;margin-top: 20px;}body.kc-css-system .kc-css-217626 a{color: #aeaeae;}body.kc-css-system .kc-css-217626 a:hover{color: #ee1a26;}body.kc-css-system .kc-css-217626 p{margin-bottom: 10px;}body.kc-css-system .kc-css-261744 i{color: #ffffff;font-size: 24px;}body.kc-css-system .kc-css-261744 .item{display: flex;width: 36px;height: 36px;background: #ee1a26;margin-right: 10px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-261744{display: flex;}body.kc-css-system .kc-css-42241 .icon{display: flex;width: 40px;height: 40px;background: #ffffff;border-radius: 100% 100% 100% 100%;color: #ee1a26;font-size: 24px;justify-content: center;align-items: center;}body.kc-css-system .kc-css-42241:hover .icon{color: #ee1a26;}body.kc-css-system .kc-css-42241 .type{font-weight: 600;margin-left: 10px;}body.kc-css-system .kc-css-42241{position: fixed;display: flex;background: rgba(238, 26, 38, 0.75);border-radius: 25px 25px 25px 25px;padding: 3px 3px 3px 3px;align-items: center;width: auto;bottom: 40px;left: 10px;z-index: 99;box-shadow: 0 0 5px #ddd;animation-duration: 500ms; animation-name: calllink; animation-iteration-count: infinite; animation-direction: alternate;}body.kc-css-system .kc-css-130685 .thumb img{height: 80px;}body.kc-css-system .kc-css-130685{position: fixed;width: auto;bottom: 120px;right: 10px;z-index: 89;}body.kc-css-system .kc-css-235194 i{color: #ffffff;font-size: 24px;line-height: 24px;}body.kc-css-system .kc-css-235194 .thumb img{height: 80px;}body.kc-css-system .kc-css-235194 .item{padding: 9px 15px 9px 15px;margin-bottom: 1px;}body.kc-css-system .kc-css-235194 .item:hover{background: #000000;}body.kc-css-system .kc-css-235194 .item:first-child{border-top-right-radius: 10px;}body.kc-css-system .kc-css-235194 .item:last-child{border-bottom-right-radius: 10px;}body.kc-css-system .kc-css-235194{position: fixed;background: #ee1a26;border-top-right-radius: 10px;border-bottom-right-radius: 10px;width: auto;bottom: 120px;left: 0;z-index: 89;}@media only screen and (max-width: 1024px){body.kc-css-system .kc-css-42241{bottom: 120px;}body.kc-css-system .kc-css-130685{bottom: 90px;}body.kc-css-system .kc-css-235194{display: none;}}@media only screen and (max-width: 767px){body.kc-css-system .kc-css-652455{width: 100%;}body.kc-css-system .kc-css-874180{width: 100%;margin-top: 15px;}body.kc-css-system .kc-css-8168{margin-top: 20px;}body.kc-css-system .kc-css-681413{margin-top: 20px;}body.kc-css-system .kc-css-567871{margin-top: 20px;}body.kc-css-system .kc-css-261744{margin-top: 20px;}body.kc-css-system .kc-css-130685 .thumb img{height: 60px;}body.kc-css-system .kc-css-235194 .thumb img{height: 60px;}}@media only screen and (max-width: 479px){body.kc-css-system .kc-css-229334 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-217143 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-494534 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-820481 .type{font-size: 14px;line-height: 20px;}body.kc-css-system .kc-css-133168 .type{font-size: 14px;line-height: 20px;}}</style>
    <?php include_once 'templates/gshock/inc/footer.php'; ?>