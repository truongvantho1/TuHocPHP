<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />

</head>

<body>
    <?php 
        $sTukhoa = $_POST["book"];
    ?>
    <h3>Tìm sách</h3>
       
    Từ Khóa tìm sách là:
    <?php 
        echo $sTukhoa; 
    ?>
    <br/>
    Kết quả tìm là:
</body>

</html>