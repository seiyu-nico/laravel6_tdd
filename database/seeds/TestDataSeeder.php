<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;
use PHPUnit\Runner\Filter\Factory as FilterFactory;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Customer::class, 2)
            ->create()
            ->each(function ($customer) {
                factory(\App\Models\Report::class, 2)
                    ->make()
                    ->each(function ($report) use ($customer) {
                        $customer->reports()->save($report);
                    });
            });
    }
}
