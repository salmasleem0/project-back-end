<?php

namespace Database\Seeders;

use App\Models\sale;
use Illuminate\Database\Seeder;

class saleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        sale::create([
    'name' => 'perfume',
    'price' => 150,
    'price' => 100,
    'description' => 'Apple Perfume',
    'image' => 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
        ]);
    }
}
