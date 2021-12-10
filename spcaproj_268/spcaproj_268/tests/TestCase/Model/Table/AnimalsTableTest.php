<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnimalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnimalsTable Test Case
 */
class AnimalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AnimalsTable
     */
    protected $Animals;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Animals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Animals') ? [] : ['className' => AnimalsTable::class];
        $this->Animals = $this->getTableLocator()->get('Animals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Animals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AnimalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
