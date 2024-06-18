<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $game[1] = array(
        "id" => 1,
        "title" => "Monter Hunter",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/site_nexus/jogo/Jamil/index.html",
   
        "fotoCard" => "http://localhost/site_nexus/imagens/Cards1.jpg",
        );
    $game[2] = array(
        "id" => 2,
        "title" => "Monter Hunter",
        "description" => "jogo mais bem avaliado...",
   
        "fotoCard" => "http://localhost/site_nexus/imagens/Cards2.jpg",
        );
    $game[3] = array(
        "id" => 3,
        "title" => "Monter Hunter",
        "description" => "jogo mais bem avaliado...",
   
        "fotoCard" => "http://localhost/site_nexus/imagens/Cards3.jpg",
        );
    $game[4] = array(
        "id" => 4,
        "title" => "Monter Hunter",
        "description" => "jogo mais bem avaliado...",
   
        "fotoCard" => "http://localhost/site_nexus/imagens/Cards4.jpg",
        );
    $game[5] = array(
        "id" => 5,
        "title" => "Monter Hunter",
        "description" => "jogo mais bem avaliado...",
   
        "fotoCard" => "http://localhost/site_nexus/imagens/Cards5.jpg",
        );














    echo json_encode($game);



?>

