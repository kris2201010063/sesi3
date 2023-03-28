<?php
    $mhs = array(
        array("Ardika","2233445512","Denpasar"),
        array("Wahyu Hidayat","12121311223","Magelang"),
        array("Samsul","3212345621","Mataram"),
        array("Zizi","442324456","Jawa"),
    );
    header("Contect-Type: application/json");
        echo json_encode($mhs);
            