<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tinh Tien Dien</title>
    <style type="text/css">
        body {  
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
            padding: 40px;
            border-radius: 10px;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php 
if(isset($_POST['a']))  

    $a=trim($_POST['a']); 
else  $a=null; 



if(isset($_POST['b'])) 

    $b=trim($_POST['b']); 

else $b=null;

if(isset($_POST['c']))  

    $c=trim($_POST['c']); 

else $c=null;

if(isset($_POST['d']))  

    $d=trim($_POST['d']); 

else $d=2000;

$cv = 0;
$p = 0;
$s = 0;
if(isset($_POST['tinh']))

        if (is_numeric($b) && is_numeric($c) && is_numeric($d) && ($b < $c) )  

            $cv=($c - $b) * $d;

        else {

                echo "<font color='red'>Vui lòng nhập lại! </font>"; 

                $cv="";

            }

else $cv=0;

?>

<form align='center' action="tinhtiendien.php" method="post">

<table>

    <thead>

        <th colspan="2" align="center"><h3>Tinh Tien Dien</h3></th>

    </thead>

    <tr><td>Ten chu ho: </td>

     <td><input type="text" name="a"  value="<?php  echo $a;?> "/></td>

    </tr>

    <tr><td>Chi So Cu: </td>

     <td><input type="text" name="b" value="<?php  echo $b;?> "/></td>

    </tr>
    
    <tr><td>Chi So Moi: </td>

     <td><input type="text" name="c" value="<?php  echo $c;?> "/></td>

    </tr>

    <tr><td>Don Gia: </td>

     <td><input type="text" name="d" value="<?php  echo $d;?> "/></td>

    </tr>

    <tr>
        <td>So tien thanh toan:</td>
        <td><input type="text" name="cv" disabled="disabled" value="<?php echo $cv;?> "/></td>
    </tr>
    
    <tr>
        <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>