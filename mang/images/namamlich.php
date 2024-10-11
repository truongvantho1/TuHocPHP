<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Năm Âm Lịch</title>
    <link rel="stylesheet" href="namamlich.css">
</head>
<?php
   function chuyenDoiNam($namduonglich) {
    $chuKy = array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");
    $conGiap = array("Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");
    $namamlich = "";

    $soNam = $namduonglich -4;
    $soDu = $soNam % 10;
    $namamlich .= $chuKy[$soDu];

    $soDu = $soNam % 12;
    $namamlich .= " " . $conGiap[$soDu];

    return $namamlich;
}

if(isset($_POST['namduonglich'])) {
    $namamlich = chuyenDoiNam($_POST['namduonglich']);
    $conGiapImage = array(
        "Tý" => "chuot.jpg",
        "Sửu" => "suu.jpg",
        "Dần" => "dan.jpg",
        "Mão" => "meo.jpg",
        "Thìn" => "thin.jpg",
        "Tỵ" => "ty.jpg",
        "Ngọ" => "ngo.jpg",
        "Mùi" => "mui.jpg",
        "Thân" => "than.jpg",
        "Dậu" => "dau.jpg",
        "Tuất" => "tuat.jpg",
        "Hợi" => "hoi.jpg"
    );

    $conGiapName = explode(" ", $namamlich)[1];
    $imagePath = $conGiapImage[$conGiapName];
} 

    ?>
<body>
    <table>
        <form action="" method="post">
            <tr>
                <td>
                    <h1>Năm Dương Lịch</h1>
                </td>
                <td>

                </td>
                <td>
                    <h1>Năm Âm Lịch</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>
                        <input type="text" name="namduonglich">
                    </h2> 
                </td>
                <td>
                    <h2>
                    <input name="btn" type="submit" value="=>>">
                    </h2>
                </td>
                <td>
                    <h2>
                        <input type="text" name="namamlich" value="<?php if(isset($_POST['namduonglich'])) echo chuyenDoiNam($_POST['namduonglich']); ?>">
                    </h2>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                 <img src="<?=$imagePath?>" alt="">
                </td>
                <td></td>

            </tr>
        </form>
    </table>

    
</body>
</html>