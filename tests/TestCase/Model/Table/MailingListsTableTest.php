<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailingListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailingListsTable Test Case
 */
class MailingListsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MailingListsTable
     */
    protected $MailingLists;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.MailingLists',
        'app.Campaigns',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MailingLists') ? [] : ['className' => MailingListsTable::class];
        $this->MailingLists = TableRegistry::getTableLocator()->get('MailingLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->MailingLists);

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
}
