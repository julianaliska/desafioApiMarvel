<?php
require_once 'hulk.php';
require_once PHPUnit_Framework_TestCase;

class hulkTest extends PHPUnit_Framework_MockObject_Matcher
{

    
    public function testListaNome()
    {
        $hulk = new Hulk();
        $resultadoEsperado = "Hulk";
        $this->assertEquals($resultadoEsperado, $nomeHulk);
    }

}

