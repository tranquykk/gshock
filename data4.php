<?php
    require_once 'util/DatabaseConnectUtil.php';
    // session_destroy();
    session_start();

    $id = '';
    $quantity = 0;
    $name = '';
    $price = 0;

    // $id = $_POST['product_id'];
    // $quantity = $_POST['quantity'];
    // $name = $_POST['name'];
    // $price = $_POST['price'];
    if(!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];
    }
    if(!empty($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    }
    if(!empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    if(!empty($_POST['price'])) {
        $price = $_POST['price'];
    }

    if(!isset($_SESSION['carts'][$id])) {
        $_SESSION['carts'][$id] = [
            'product_id' => $id,
            'quantity'   => $quantity,
            'name'       => $name,
            'price'      => $price
        ];
    } else {
        $_SESSION['carts'][$id]['quantity'] += $quantity;
    }

    $result = 0;
    
    foreach($_SESSION['carts'] as $cart) {
        if(!empty($cart['quantity'])) {
            $result += $cart['quantity'];
        }
    }

    // echo sizeof($_SESSION['carts']);
?>
    <span class="num"><?php echo $result?></span>