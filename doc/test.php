<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){
if(isset($_POST['nhap_mang'])){
    $mang_so = explode(",", $_POST['nhap_mang']);
    $mang_duy_nhat = array_unique($mang_so);
    $so_lan = array_count_values($mang_so);
}
}
function so_lan_xuat_hien($mang_so){

        $chuoi = "";
        foreach($mang_so as $key => $value){
            $chuoi .= $key . ":". $value . " ";
        }
        echo $chuoi;
}

function mang_duy_nhat($mang_so){
    if(isset($mang_so[0])){
        echo implode(", ", $mang_so);
    }
}


?>
<body>
<form action="test.php" method="POST">
    <table border="0">
        <thead>
        <tr>
            <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Mảng:</td>
            <td><input type="text" name="nhap_mang" value="" ></td>
        </tr>
        <tr>
            <td>Số lần xuất hiện:</td>
            <td><input type="text" name="so_lan_xuat_hien" value="<?php so_lan_xuat_hien($so_lan); ?>" disabled="disabled" ></td>
        </tr>
        <tr>
            <td>Mảng duy nhất:</td>
            <td><input type="text" name="mang_duy_nhat" value="<?php mang_duy_nhat($mang_duy_nhat); ?>" disabled="disabled" ></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Thực hiện"></td>
        </tr>
        </tbody>
    </table>

</form>
</body>
</html>


