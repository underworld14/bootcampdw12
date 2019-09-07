<?php 

// fungsi cek username
function cekPassword ($pass) {
    if ( preg_match( "/^[a-zA-Z0-9]*$/", $pass ) && strlen($pass) <= 8 ) {
        echo "password valid";
    } else {
        echo "password tidak valid";
    }
}

cekPassword("cod3Mas");















?>