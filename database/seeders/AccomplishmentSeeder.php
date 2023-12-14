<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Accomplishment;
use Illuminate\Database\Seeder;

class AccomplishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    accomplishment::factory(100)->create();
    }
}
