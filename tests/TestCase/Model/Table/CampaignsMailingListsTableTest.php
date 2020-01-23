<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampaignsMailingListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampaignsMailingListsTable Test Case
 */
class CampaignsMailingListsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampaignsMailingListsTable
     */
    protected $CampaignsMailingLists;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CampaignsMailingLists',
        'app.Campaigns',
        'app.MailingLists',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CampaignsMailingLists') ? [] : ['className' => CampaignsMailingListsTable::class];
        $this->CampaignsMailingLists = TableRegistry::getTableLocator()->get('CampaignsMailingLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CampaignsMailingLists);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
