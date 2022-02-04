<?php


    $curl = curl_init('https://www.imdb.com/'); //Website Link which you want to hit
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    echo $i."<br>";

$page = curl_exec($curl);
echo $page;


exit();