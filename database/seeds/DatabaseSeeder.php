<?php

use Apiato\Core\Loaders\SeederLoaderTrait;
use Illuminate\Database\Seeder as LaravelSeeder;

/**
 * Class DatabaseSeeder
 *
 */
class DatabaseSeeder extends LaravelSeeder
{
    use SeederLoaderTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runLoadingSeeders();
    }
}
