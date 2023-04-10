
<?php
    require_once 'util/DatabaseConnectUtil.php';

    $key = $_POST['districts_id'];
    $sql = "SELECT * FROM wards WHERE district_id = '$key'";
    $ketqua = $mysqli2->query($sql);
    while($arWards = mysqli_fetch_assoc($ketqua)) {
        $wards_name = $arWards['name'];
        $fullname = $arWards['full_name'];
?>

<option value="<?php echo $fullname;?>"><?php echo $wards_name;?></option>

<?php
    }
?>