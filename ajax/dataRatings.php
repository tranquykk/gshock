<!-- <?php
    require_once '../util/DatabaseConnectUtil.php';

?>

    <?php

        $pid = $_POST['pid'];
        $comment = $_POST['comment'];
        $rating = $_POST['rating'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];

        $queryRatings = "INSERT INTO ratings(fullname, email, rating_action, comment, product_id) VALUES ('$fullname','$email', $rating,'$comment','$pid')";
        $ketquaRatings = $mysqli->query($queryRatings);
        
        // if($ketquaRatings) {
        //     HEADER('LOCATION:'.$_SERVER['REQUEST_URI']);
        // } else {
        //     echo "có lỗi khi bình luận";
        //     die();
        // }


        $queryRating = "SELECT * FROM `ratings` WHERE product_id = {$pid} ORDER BY rating_id DESC";
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
    ?> -->