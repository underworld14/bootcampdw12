<?php 

function Kembalian($belanja, $jumlahuang) {
    $tb = $belanja;
    $ju = $jumlahuang;
    $output ="";
    $uang = "";

    // kurangi jumlah uang dengan total belanja
    $kembalian = $ju - $tb;

    if ($tb > $ju ) {
        $output .= "Uang anda tidak cukup";
    } else if ($tb == $ju ) {
        $output .= "Anda tidak memiliki kembalian";
    } else if ( $tb < $ju ) {
        // jika ada kembalian 
        // lebih besar dari pada 50000
        if ($kembalian > 50000) {
            $sisa = $kembalian - 50000;
            $uang .= "1 x 50.000";

            if ($sisa > 20000) {
                $sisa = $kembalian - 20000;
                $uang .= "1 x 20.000";
                
                if ($sisa > 10000 ) {
                    $sisa = $kembalian - 10000;
                    $uang .= "1 x 10.000";
                }

            }
        } else if ($kembalian > 20000) {
            $sisa = $kembalian - 20000;
            $uang .= "1 x 20.000";

            if ($sisa > 10000) {
                $sisa = $kembalian - 10000;
                $uang .= "1 x 10000";
                
            }
        } else if ($kembalian > 10000) {
            $sisa = $kembalian - 10000;
            $uang .= "1 x 10000";

        }


        $output .= "Anda Memiliki jumlah kembalian sebesar Rp. " . $kembalian;

    }
    


    echo $output . "<br>";
    if(isset($uang)) { echo $uang . " dengan sisa uang lembar " . $sisa; };
}


Kembalian(30000, 50000);




?>