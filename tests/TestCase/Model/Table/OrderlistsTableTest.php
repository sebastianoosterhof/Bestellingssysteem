<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderlistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderlistsTable Test Case
 */
class OrderlistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderlistsTable
     */
    public $Orderlists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orderlists',
        'app.dishes',
        'app.categories',
        'app.subcategories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Orderlists') ? [] : ['className' => OrderlistsTable::class];
        $this->Orderlists = TableRegistry::get('Orderlists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Orderlists);

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
