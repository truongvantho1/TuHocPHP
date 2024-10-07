<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ketquagiaima</title>
    <link rel="stylesheet" href="ketquagiaima.css">
</head>
<body>
  
    <?php
    $string = $_POST['doanma'];
    $n = str_split($string);
    ?>
<table>
    <tr>
        <?php
    for ($j = 1; $j < 6; $j++){
        $KetQua = array(); 
    for ($i = 0; $i < count($n); $i++)
        {    
        $Kytu = $n[$i];
        $ChuCai = range('a', 'z');
        $ViTri = array_search($Kytu, $ChuCai);
        $new_ViTri = ($ViTri + $j) % 26;
        $KetQua[] = $ChuCai[$new_ViTri]; ?>
        <td>
            <h1>
            <?php
                   }
                   echo" Đây là mã cần giải:";echo implode('', $n);
                   echo"<br>";
                   echo"Khóa của đoạn mã là:$j<br>";
                   echo"Đây là mã đã giải:  " ;echo implode('', $KetQua);
                   echo"<br>";
                   
               }
               ?>
            </h1>
        </td>
    </tr>
    <tr>
        <?php
    for ($j = 6; $j < 11; $j++){
        $KetQua = array(); 
    for ($i = 0; $i < count($n); $i++)
        {    
        $Kytu = $n[$i];
        $ChuCai = range('a', 'z');
        $ViTri = array_search($Kytu, $ChuCai);
        $new_ViTri = ($ViTri + $j) % 26;
        $KetQua[] = $ChuCai[$new_ViTri]; ?>
        <td>
            <h1>
            <?php
                   }
                   echo" Đây là mã cần giải:";echo implode('', $n);
                   echo"<br>";
                   echo"Khóa của đoạn mã là:$j<br>";
                   echo"Đây là mã đã giải:  " ;echo implode('', $KetQua);
                   echo"<br>";
               }
               ?>
            </h1>
        </td>
    </tr>
    <tr>
        <?php
    for ($j = 11; $j < 16; $j++){
        $KetQua = array(); 
    for ($i = 0; $i < count($n); $i++)
        {    
        $Kytu = $n[$i];
        $ChuCai = range('a', 'z');
        $ViTri = array_search($Kytu, $ChuCai);
        $new_ViTri = ($ViTri + $j) % 26;
        $KetQua[] = $ChuCai[$new_ViTri]; ?>
        <td>
            <h1>
            <?php
                   }
                   echo" Đây là mã cần giải:";echo implode('', $n);
                   echo"<br>";
                   echo"Khóa của đoạn mã là:$j<br>";
                   echo"Đây là mã đã giải:  " ;echo implode('', $KetQua);
                   echo"<br>";
                   
               }
               ?>
            </h1>
        </td>
    </tr>
    <tr>
        <?php
    for ($j = 16; $j < 21; $j++){
        $KetQua = array(); 
    for ($i = 0; $i < count($n); $i++)
        {    
        $Kytu = $n[$i];
        $ChuCai = range('a', 'z');
        $ViTri = array_search($Kytu, $ChuCai);
        $new_ViTri = ($ViTri + $j) % 26;
        $KetQua[] = $ChuCai[$new_ViTri]; ?>
        <td>
            <h1>
            <?php
                   }
                   echo" Đây là mã cần giải:";echo implode('', $n);
                   echo"<br>";
                   echo"Khóa của đoạn mã là:$j<br>";
                   echo"Đây là mã đã giải:  " ;echo implode('', $KetQua);
                   echo"<br>";
                
               }
               ?>
            </h1>
        </td>
    </tr>
    <tr>    
        <?php
    for ($j = 21; $j < 26; $j++){
        $KetQua = array(); 
    for ($i = 0; $i < count($n); $i++)
        {    
        $Kytu = $n[$i];
        $ChuCai = range('a', 'z');
        $ViTri = array_search($Kytu, $ChuCai);
        $new_ViTri = ($ViTri + $j) % 26;
        $KetQua[] = $ChuCai[$new_ViTri]; ?>
        <td>
            <h1>
            <?php
                   }
                   echo" Đây là mã cần giải:";echo implode('', $n);
                   echo"<br>";
                   echo"Khóa của đoạn mã là:$j<br>";
                   echo"Đây là mã đã giải:  " ;echo implode('', $KetQua);
                   echo"<br>";
                
               }
               ?>
            </h1>
        </td>
    </tr>     
</table>
<form action="Giaima.php" method="post">
        <input type="submit" value="Quay Lại Trang Trước">
    </form>


</body>
</html>