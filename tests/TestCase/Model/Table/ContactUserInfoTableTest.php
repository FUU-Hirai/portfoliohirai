<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactUserInfoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactUserInfoTable Test Case
 */
class ContactUserInfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactUserInfoTable
     */
    protected $ContactUserInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ContactUserInfo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContactUserInfo') ? [] : ['className' => ContactUserInfoTable::class];
        $this->ContactUserInfo = $this->getTableLocator()->get('ContactUserInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ContactUserInfo);

        parent::tearDown();
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
