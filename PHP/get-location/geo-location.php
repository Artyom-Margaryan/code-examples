<?php

function getLocation() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $userLocation = var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip)));
    echo $userLocation;
}




