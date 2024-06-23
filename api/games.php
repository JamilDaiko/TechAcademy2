<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");


$game[1] = array(
    "id" => 1,
    "title" => "Monster Hunter",
    "description" => "Em 'Monster Hunter', você é um caçador armado com uma escopeta calibre 12 enfrentando esqueletos e fantasmas em um mundo de plataformas desafiadoras.",
    "linkJogo" => "https://nexusjj2.000webhostapp.com/jogo/Jamil/index.html",

    "fotoCard" => "https://nexusjj2.000webhostapp.com/imagens/Cards1.jpg",
);
$game[2] = array(
    "id" => 2,
    "title" => "Space Capway",
    "description" => "
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec eleifend dolor. Donec porttitor luctus leo a placerat. Cras ac lacinia est. Praesent feugiat luctus nibh, ac tempor ex.",
    "linkJogo" => "https://nexusjj2.000webhostapp.com/jogo/lucasFiori/index.html",
    
    "fotoCard" => "https://nexusjj2.000webhostapp.com/imagens/Cards2.jpg",
);
$game[3] = array(
    "id" => 3,
    "title" => "Reaper Goblin",
    "description" => "O jogo é inspirado no anime ' Goblin Slayer ',onde o protagonista teve uma infância conturbada ao presenciar seu vilarejo ser invadido por goblins",
    "linkJogo" => "https://nexusjj2.000webhostapp.com/jogo/Lucas/index.html",

    "fotoCard" => "https://nexusjj2.000webhostapp.com/imagens/Cards3.jpg",
);
$game[4] = array(
    "id" => 4,
    "title" => "Encontre seu Caminho",
    "description" => "Encontre Seu Caminho é um jogo de aventura e ação onde o jogador assume o papel de John Lennon, um personagem que acorda em um local desconhecido.",
    "linkJogo" => "https://nexusjj2.000webhostapp.com/jogo/Miguel/index.html",

    "fotoCard" => "https://nexusjj2.000webhostapp.com/imagens/Cards4.jpg",
);
$game[5] = array(
    "id" => 5,
    "title" => "Wanted",
    "description" => "Wanted é um jogo de plataforma que pede ao jogador que resolva um problema, Wanted é um jogo single player com gráficos 2D, venha se divertir nessa jornada!",
    "linkJogo" => "https://nexusjj2.000webhostapp.com/jogo/Matheus/index.html",

    "fotoCard" => "https://nexusjj2.000webhostapp.com/imagens/Cards5.jpg",
);














echo json_encode($game);
