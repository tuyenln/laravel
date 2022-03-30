<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'name' => 'Tuyen',
                'customer_id' => '1',
                'customer_name' => 'tuyen',
                'price' => 142000,
                'created_at' => '2021-06-26 10:04:10',
                'created_at' => '2021-06-26 10:04:10'
            ],
            [
                'name' => "zzz",
                'customer_id' => '2',
                'customer_name' => 'zzz',
                'price' => 152000,
                'created_at' => '2021-06-26 10:04:10',
                'created_at' => '2021-06-26 10:04:10'
            ]
        ]);
    }
}
