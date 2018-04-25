<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LivrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LivrosTable Test Case
 */
class LivrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LivrosTable
     */
    public $Livros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.livros',
        'app.autores',
        'app.generos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Livros') ? [] : ['className' => LivrosTable::class];
        $this->Livros = TableRegistry::get('Livros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Livros);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
