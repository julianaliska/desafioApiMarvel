<?php

        $tempo = time();
        $chavePrivada = "Sua chave privada vai aqui"; 
        $chavePublica = "Sua chave pública vai aqui"; 
        $hash = md5("$tempo$chavePrivada$chavePublica");
        $url = "https://gateway.marvel.com:443/v1/public/characters?name=Hulk&ts=$tempo&apikey=$chavePublica&hash=$hash";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $url = "https://gateway.marvel.com:443/v1/public/characters?name=Hulk&ts=$tempo&apikey=$chavePublica&hash=$hash";
        curl_setopt($curl, CURLOPT_URL, $url);
        $resultado = curl_exec($curl);
        curl_close($curl);
        $hulk = json_decode($resultado, true);

        $url3 = "https://gateway.marvel.com:443/v1/public/characters/1009268?ts=$tempo&apikey=$chavePublica&hash=$hash";
        $curl3 = curl_init();
        curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl3, CURLOPT_URL, $url3);
        curl_close($curl3);
        $resultado3 = curl_exec($curl3);
        $deadpool = json_decode($resultado3, true);

        $url2 = "https://gateway.marvel.com:443/v1/public/characters/1009610?ts=$tempo&apikey=$chavePublica&hash=$hash";
        $curl2 = curl_init();
        curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_URL, $url2);
        $resultado2 = curl_exec($curl2);
        curl_close($curl2);
        $homemAranha = json_decode($resultado2, true);

?>
