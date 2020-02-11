<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>
echo "<pre>";
    print_r($user,false);
    echo "</pre>";
die;
<body>
<?php

function tao_mang($n){
    $mang_so=array();
    for ($i=0;$i<$n;$i++){
        $mang_so[$i]=mt_rand(0,20);

    }

    return $mang_so;
}
//Hàm mt_rand($start , $end) trả về một số ngẫu nhiên trong đoạn $start đến $end. 
function xuat_mang($mang_so){
    echo implode("",$mang_so);
}
//Hàm implode($glue, $piece) trả về kiểu string, dùng để nối các phần tử của mảng lại với nhau bằng $glue

//function tim_min($mang_so){
 //   if(isset($mang_so[0])){
 //       $min=$mang_so[0];
  //      $n=count($mang_so);
  //      for ($i=1;$i<$n;$i++){
   //         if($mang_so[$i]<$min)
  //              $min=$mang_so[$i];
   //     }
  //      echo $min;-----------
//    }
//}

?>
<form action="test1.php" method="POST">
    <table>
        <thead>
        <tr>
            <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nhập số phần tử:</td>
            <td><input type="text" name="so_phan_tu" width="100%" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Phát sinh và tính toán"></td>
        </tr>
        <tr>
            <td>Mảng: </td>
            <td><input type="text" name="mang_so" disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
        </tr>


        </tbody>
    </table>
</form>
</body>
</html>

