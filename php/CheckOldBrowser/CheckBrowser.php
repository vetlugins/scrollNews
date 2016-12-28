<?php

function checkBrowser($browser,$version){

    $error = false;

    $incorrect = array(
        'Internet Explorer' => '10',
        'Chrome' => '50',
        'Opera' => '37',
        'Firefox' => '46',
        'Safari' => '8'
    );

    foreach($incorrect as $key=>$value){

        if($key == $browser){
            if($value >= $version){
                $error = true;
            }
        }

    }

    if($error === true){
        return true;
    }else{
        return false;
    }

}