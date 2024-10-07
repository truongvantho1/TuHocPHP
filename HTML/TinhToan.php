<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Tinh.css">
</head>
<body>
    <?php
        $a = $_POST["canhthunhat"];
        $b = $_POST["canhthuhai"];
        $c = $_POST["canhthuba"];
    ?>
   
    <h1 >  
        <?php    
        if ($a == null || $b == null || $c == null) 
            {
                echo "Bạn Không Được Để Trống!!!!!";
                return;
            }
        ?>
    </h1>
    <h2>
        <?php
            if (($a + $b > $c) && ($b + $c > $a) && ($c + $a > $b)) 
                {
                $s = $a + $b + $c;
                echo "Ba Cạnh Của Tam Giác Lần Lượt Là:<br> Cạnh Thứ Nhất: $a<br>";
                echo "Cạnh Thứ Hai: $b<br>";
                echo "Cạnh Thứ Ba: $c<br>";
                echo "Chu Vi Của Tam Giác Là: $s<br>";
                $dienTich = sqrt(($s / 2) * (($s / 2) - $a) * (($s / 2) - $b) * (($s / 2) - $c));
                echo "Diện Tích Của Tam Giác Là $dienTich";      
        ?>
    </h2>
    <h1>
        <?php
            }
            else 
            {
            echo "Đây Không Phải Là Tam Giác!!!!!";
            }
         ?>
    </h1>
    <h3>
    <form action="NhapCanhTamGiac.php" method="post" >
    <h3><input type="submit" value="QuayTrởLạiTrangTrước"></h3>
    </form>
    </h3>
</body>
</html>