$(document).ready(function(){
    $(".provinces").change(function() {
        var pid = $(".provinces").val();
        $.post("http://gshockvn.vne/data.php", {province_id: pid}, function(data){
            $(".districts").html(data);
        });
    });
    $(".districts").change(function() {
        var did = $(".districts").val();
        $.post("http://gshockvn.vne/data2.php", {districts_id: did}, function(data){
            $(".wards").html(data);
        });
    });

    

    $(".quick-view").click(function() {
        var pdid = $(this).data('product_id');
        // alert(pdid);	
        
        $.ajax({
            url: 'http://gshockvn.vne/data3.php',
            type: 'POST',
            data: {product_id:pdid},
            success: function(rs){
                $('.view-productt').html(rs);
                $('#empModal').modal('show');
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });
    });

    $(".order").on('click', function() {
        var pdid = $(this).data('product_id');
        var quantity = $(this).data('quantity');
        var name = $(this).data('name');
        var price = $(this).data('price');
        // alert(price);

        $.ajax({
            url: 'http://gshockvn.vne/data4.php',
            type: 'POST',
            data: {product_id: pdid, quantity:quantity, name:name, price:price},
            success: function(od){
                $(".menu_number").html(od);
            },
            error: function (){
                alert('Có lỗi xảy ra');
            }
        });

    })

    // $(".del_cart").click(function() {
    //     var key = $(this).data('key');
    //     alert(key);

    //     $.post("removeCart.php", {key: key}, function(data){
    //         $(".order-product").html(data);
    //     });
    // });

    // $(".submit").click(function() {
    //     var pid = $(this).data('id');
    //     var rating = $(".rating").val();
    //     var comment = $(".comment").val();
    //     var fullname = $(".fullname").val();
    //     var email = $(".email").val();
    //     // alert(pid);

    //     $.post("dataRatings.php", {rating: rating, comment: comment, fullname: fullname, email: email, pid:pid}, function(data){
    //         $(".comment_sub").html(data);
    //     });
    // });
})