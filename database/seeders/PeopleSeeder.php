<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;
use Database\Factories\PeopleFactory;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        People::factory()->count(100)->create();


    }

}