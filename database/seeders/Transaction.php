<?php

namespace Database\Seeders;

use App\Models\transactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Transaction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        transactions::create([
            'quantity' => '2',
            'rent_date' => '2022-11-02',
            'return_date' => '2022-11-05',
            'status' => 'Baik',
            'token' => '2',
            'product_id' => '1',
        ]);
    }
}
