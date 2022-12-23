<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

//$table->string('se_name');
//$table->string('se_description');
//$table->boolean('isActive');

    public function run()
    {
//        Service::factory()->times(10)->create();


        $services = [
            ["se_name" => "Graphic Design",
                "se_description" => "Design Templates",
                "isActive" => 1
            ],
            ["se_name" => "Social Media Management",
                "se_description" => "Manage Social Media Accounts",
                "isActive" => 1
            ],
            ["se_name" => "Web Development",
                "se_description" => "Develop websites using many frameworks",
                "isActive" => 1
            ],
            ["se_name" => "Video Editing",
                "se_description" => "Make/Edit Professional videos",
                "isActive" => 1
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
