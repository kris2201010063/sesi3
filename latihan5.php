<?php
    //model 1
    //$age = array("peter"=>"35","Ben"=>"37","Joe"=>"43");

    //Model 2
    $age["kris"] = "19";
    $age["Mulia"] = "27";
    $age["Dewi"] = "17";
    $age["Rapi"] = "22";
    $age["Sri"] = "21";


    header("Contect-Type: application/json");
    echo json_encode($age);
            