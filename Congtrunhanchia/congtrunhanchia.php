<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CongTruNhanChia</title>
        <link rel="stylesheet" href="congtru.css">
</head>
<body>
    
    
    <form action="TinhCong.php" method="post">
    <h1>Phep Tinh Tren 2 So</h1>
        <h2>cong:<input type="radio" name="a" value="cong" required>
            Tru:<input type="radio" name="a" value="tru" required>
            Nhan:<input type="radio" name="a" value="nhan"required>
            Chia:<input type="radio" name="a" value="chia"required>
        </h2>
        <h2>
            Sothunhat:
            <input type="number", name="Sothunhat" required>
        </h2>
        <h2>
            Sothuhai:
            <input type="number", name="Sothuhai" required>
        </h2>
       
        <h3><input type="submit" value="Chon"></h3>
    </form>
    
</body>
</html>
