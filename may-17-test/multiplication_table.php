<!DOCTYPE html>
<html lang="en">
<head>
   <title> Multiplication Table </title>
   <style>
        t1{
            font-size: 40px;
        }
        th, td {
            font-size: 25px;
            width: 50px;
            height: 50px;
        }
   </style>
</head>
<body>
    <div align = "center">
        <t1> <b> Multiplication Table <br> <br> </b> </t1>

        <table border = "1">
        <tr>
            <th style="background-color: black; color: beige;"> 0 </th>
            <?php
                for ($h = 1; $h <=10; $h++){
                    if ($h % 2 == 0){
                        echo '<th style = "text-align: center; background-color: black; color: beige;"> 0 </th>';
                    } else {
                        echo '<th style = "text-align: center; background-color: beige; color: black;"> 0 </th>';
                    }
                }
            ?>
        </tr>
        <?php
            for ($i = 1; $i <= 10; $i++){
                if ($i % 2 == 0){
                    echo '<tr style = "text-align: center; background-color: black; color: beige;"> <th> 0 </th>';
                } else {
                    echo '<tr style = "text-align: center; background-color: beige; color: black;"> <th> 0 </th>';
                }
                for ($j = 1; $j <= 10; $j++){
                    $product = $i * $j;
                    if (($i + $j) % 2 == 0){
                        echo "<td style = 'text-align: center;background-color: black; color: beige;'> ".$product." </td>";
                    } 
                    else {
                        echo "<td style = 'text-align: center; background-color: beige; color: black;'> ".$product." </td>";
                    }
                }
                echo "</tr>";
            }
        ?>
        </table>
    </div>

</body>
</html>
