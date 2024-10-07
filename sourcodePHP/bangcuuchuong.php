<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BangCuuChuong.css">
    
</head>
    <body >
        <table>

            <tr>   
                <?php
                    $n=0;
                    $i=0;
                    for ($i= 1; $i<=10; $i++){
                        if($i<=5){
                ?>
                <th>
                    <?php
                        for ($j= 0; $j<= 10; $j++)
                            {
                            $n=$i* $j; 
                            echo"$i * $j = $n    <br> ";
                            }
                        }else{
                            ?>
                </th>            
                <td>
                                <?php
                                     for ($j= 0; $j<= 10; $j++)
                                     {
                                     $n=$i* $j; 
                                     echo"$i * $j = $n    <br> ";
                                     }                            
                        }
                    } 
                                ?>
                 </td>
            </tr>    
            
            
        </table>

        
    </body>
</html>
