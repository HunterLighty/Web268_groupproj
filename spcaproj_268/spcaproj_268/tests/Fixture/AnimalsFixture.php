<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnimalsFixture
 */
class AnimalsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'breed' => 'Lorem ipsum dolor sit amet',
                'sex' => 'Lorem ipsum dolor sit a',
                'comments' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
