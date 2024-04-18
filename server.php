<?php

$json_string = file_get_contents('dischi.json');

$list = json_decode($json_string);

/* var_dump($list); */

if(isset($_POST['newCardTitle'])){
  $new_item = [
    'title' => $_POST['newCardTitle'], 
    'author' => $_POST['newCardAuthor'], 
    'year' => $_POST['newCardYear'], 
    'poster' => $_POST['newCardPoster'], 
    'genre' => $_POST['newCardGenre'] 
  ];
  $list[] = $new_item;
  file_put_contents('dischi.json', json_encode($list));
}

header('Content-Type: application/json');

echo json_encode($list);