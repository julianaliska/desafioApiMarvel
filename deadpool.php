<?php

require ("dados.php");
    
class deadpool{    

    function listaNome(){

    require "dados.php";

    $nomeDeadpool = $deadpool["data"]["results"][0]["name"];
    echo "<div class =blocos><div class=nome>".$nomeDeadpool."<br></div>";

    }

    function listaPersonagem(){

    require "dados.php";
    echo "<br><img src='".$deadpool["data"]["results"][0]["thumbnail"]["path"].".jpg'style='widht: 100%; height:250px;'><br><br>";

    $dados3 = $deadpool['data']['results'][0]['stories']['items'];

    $contador3 = 0;
    foreach ($dados3 as $valores3){   
        echo $valores3["name"]?><br><?php
        $contador3++;
        if($contador3 > 4)break;

    }}}
    ?></div>