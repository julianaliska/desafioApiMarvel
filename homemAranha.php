<?php

require ("dados.php");
    
class homemAranha{    

    public function listaNome(){

    require "dados.php";
    
    echo "<div class=blocos><div class=nomeHomemAranha><br>".$homemAranha["data"]["results"][0]["name"]."<br></div>";
    }

    function listaPersonagem(){
    require "dados.php";
    echo "<br><img src='".$homemAranha["data"]["results"][0]["thumbnail"]["path"].".jpg'style='widht: 100%; height:250px;'><br><br>";;

    $dados2 = $homemAranha['data']['results'][0]['stories']['items'];

    $contador2 = 0;
    foreach ($dados2 as $valores2){   
        echo $valores2["name"]?><br><?php
        $contador2++;
        if($contador2 > 4)break;

    }}} ?></div>