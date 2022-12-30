<?php
require_once 'homemAranha.php';
require_once 'PHPUnit_Framework_TestCase';

/**
 * homemAranha test case.
 */
class homemAranhaTest extends PHPUnit_Framework_TestCase
{

    public function testListName(){
        $homemAranha = new HomemAranha();
        $resultadoEsperado = "Spider-Man (Peter Parker)";
        
        $this->assertEquals($resultadoEsperado, $nomeHomemAranha);
    }
}