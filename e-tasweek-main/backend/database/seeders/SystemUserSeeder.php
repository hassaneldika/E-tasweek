<?php

namespace Database\Seeders;

use App\Models\SystemUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use voku\helper\ASCII;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SystemUser::factory()->times(10)->create();
    }
}
