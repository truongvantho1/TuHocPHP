  `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinhToan</title>
    <link rel="stylesheet" href="TinhCong.css">
</head>
<body>
    
</body>
</html>


<?php
  
  $a = $_POST['a'];
  $Sothunhat = $_POST['Sothunhat'];
  $Sothuhai = $_POST['Sothuhai'];

  
  if ($a == 'cong') {
    $result = $Sothunhat + $Sothuhai;
  } elseif ($a == 'tru') {
    $result = $Sothunhat - $Sothuhai;
  } elseif ($a == 'nhan') {
    $result = $Sothunhat * $Sothuhai;
  } elseif ($a == 'chia') {
    if ($Sothuhai != 0) {
      $result = $Sothunhat / $Sothuhai;
    } else {
      $result = 'Khong the chia cho 0 !';
    }
  }
?>
 
 <form action="congtrunhanchia.php" method="post">
 <h1>Phep Tinh Tren 2 So</h1>
       
        <h2>
            Sothunhat:<?php
            echo"$Sothunhat"
            ?>
        </h2>
        <h2>
            Sothuhai:<?php
            echo"$Sothuhai"
            ?>
        <h2>Kết quả: 
            <?php
            echo" $result"
            ?>
        </h2>
        <h3><input type="submit" value="quay tro ve"></h3>
        
 </form>
 
