<?php
require_once 'deadpool.php';

/**
 * deadpool test case.
 */
class deadpoolTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var deadpool
     */
    private $deadpool;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        // TODO Auto-generated deadpoolTest::setUp()

        $this->deadpool = new deadpool(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated deadpoolTest::tearDown()
        $this->deadpool = null;

        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests deadpool->listaNome()
     */
    public function testListaNome()
    {
        // TODO Auto-generated deadpoolTest->testListaNome()
        $this->markTestIncomplete("listaNome test not implemented");

        $this->deadpool->listaNome(/* parameters */);
    }

    /**
     * Tests deadpool->listaPersonagem()
     */
    public function testListaPersonagem()
    {
        // TODO Auto-generated deadpoolTest->testListaPersonagem()
        $this->markTestIncomplete("listaPersonagem test not implemented");

        $this->deadpool->listaPersonagem(/* parameters */);
    }
}

