<?php

namespace Database\Seeders;

use App\Models\SystemRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systemroles = [
            [
            "sr_name" => "admin",
                ],
            [
                "sr_name" => "guest",
            ],


        ];
        foreach ($systemroles as $systemrole) {
            SystemRole::create($systemrole);
        }

    }
}
