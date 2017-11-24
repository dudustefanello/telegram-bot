<?php
    $data = array("name" => "Programador" . "Eduardo" ,
    "desc" => "eduardo@stefanello.cc",
    "idList" => "59ee440c3662eef7acb74a9a",
    "pos" => "top",
    "urlSource" => $url_curriculo, // URL do arquivo que foi anexado pelo PHP
    "key" => "123c8278662e6c833d96501fc65e86f9",
    "token" => "ce180180858d777c75e6eb6ea303f5c3fc24ee02b0787cc71ac9a2f39b14d7c1");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.trello.com/1/cards');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $return = curl_exec($ch);
    echo $return;
    echo "oi";

    curl_close($ch);
?>
