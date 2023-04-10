
<?php
    require_once 'util/DatabaseConnectUtil.php';

    $key = $_POST['province_id'];
    $sql = "SELECT * FROM districts WHERE province_id = '$key'";
    $ketqua = $mysqli2->query($sql);
    while($arDistricts = mysqli_fetch_assoc($ketqua)) {
        $districts_name = $arDistricts['name'];
        $districts_id = $arDistricts['district_id'];
?>

<option value="<?php echo $districts_id;?>"><?php echo $districts_name;?></option>

<?php
    }
?>



