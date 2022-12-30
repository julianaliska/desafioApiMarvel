<?php 

class hulk{    

        function listaNome(){

        require "dados.php";

        $nomeHulk = $hulk["data"]["results"][0]["name"];
        echo "<div class =blocos><div class=nome>".$nomeHulk."<br></div>";
        }

        function listaPersonagem(){
        require "dados.php";
        echo "<br><img src='".$hulk["data"]["results"][0]["thumbnail"]["path"].".jpg'style='widht: 100%; height:250px;'><br><br>";

        $dados = $hulk['data']['results'][0]['stories']['items'];
    
            $contador = 0;
            foreach ($dados as $valores){   
                echo $valores["name"]?><br><?php
                $contador++;
                if($contador > 4)break;
            }}}?>
        </div>
