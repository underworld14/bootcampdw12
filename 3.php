<?php 

function drawImage($value) {
    // cek apakah bilangan ganjil atau genap
    if ($value % 2 == 1 ) {
        $output = "";
        $output2 = "";
        $b = "*";
        $s = "=";

        for ($i = 0; $i < $value; $i++) {
            for ($y = 0; $y < $value; $y++) {
            $output .= $b; }

            $output .= "<br>";

        } 


        echo $output;
        echo $output2;
    } else { echo "Masukkan bilangan ganjil !"; }

} 


drawImage(2);


?>