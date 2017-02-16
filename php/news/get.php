<?php

include '../db/database.php';

if((int)$_POST['item']){

    $offset = $_POST['item'] == 1 ? 1 : $_POST['item'];

    $news = $db->SelectRows('SELECT * FROM news ORDER BY date DESC LIMIT '.$_POST['item'].','.$offset);

    $dataNews = [];

    foreach($news as $item){

        $dataNews[] = [
            'id' => $item->id,
            'title' => $item->title,
            'text' => $item->text,
            'date' => $item->date,
            'url' => $item->url
        ];

    }

    echo json_encode($dataNews);
}

