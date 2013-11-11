<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://raw.github.com/colin4124/hackerchai/master/home.html');
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);
echo $data;
?>