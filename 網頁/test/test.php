<?php

echo "<caption><font size='5'> 馬賽克設計圖</font> </caption>";

$size = $_POST["size"];

$num_width = $_POST["num_width"];

$num_heigth = $_POST["num_height"];

$color_1 = $_POST["color_1"];

$color_2 = $_POST["color_2"];

echo "<table bgcolor=$color_1 border='0'>";

for ($i=0; $i<$num_heigth; $i++) {

    echo "<tr>";

    for ($j=0; $j<$num_width; $j++) {

        if (($i+$j) %2 == 0){

            echo "<td width=$size height=$size></td>";

        }else{

            echo "<td width=$size height=$size bgcolor=$color_2></td>";

        }

    }

    echo "</tr>";

}

echo "</table>";

?>