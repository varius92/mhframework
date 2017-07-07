<?php

function pr($x)
{
    echo  '<pre>';
    print_r($x);
    echo '</pre>';
}

if ($handle = opendir('./templates/')) {
    $sites = [];
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $entry = basename($entry, '.php');
            array_push($sites, $entry);
        }
    }
    closedir($handle);
}
