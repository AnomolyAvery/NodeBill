<?php

namespace Database\Seeders;

use App\Models\PlanCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = PlanCategory::create([
            'name' => 'Game Servers',
            'description' => 'An example description for the Game Servers Category',
        ]);

        $category->plans()->createMany([
            [
                'name' => 'Unturned Hosting',
                'description' => @"
                <ul>
                    <li>
                        Pterodactyl Panel
                    </li>
                    <li>
                        DDoS Protection
                    </li>
                    <li>
                        24/7 Support
                    </li>
                    <li>
                        Free MySQL Database
                    </li>
                </ul>
            ",
                'price_monthly' => 0,
                'price_quarterly' => 0,
                'price_semiannually' => 0,
                'price_annually' => 0,
            ],
            [
                'name' => 'Rust Hosting',
                'description' => @"
                <ul>
                    <li>
                        Pterodactyl Panel
                    </li>
                    <li>
                        DDoS Protection
                    </li>
                    <li>
                        24/7 Support
                    </li>
                    <li>
                        Free MySQL Database
                    </li>
                </ul>
            ",
                'price_monthly' => 0,
                'price_quarterly' => 0,
                'price_semiannually' => 0,
                'price_annually' => 0,
            ],
        ]);

        $category = PlanCategory::create([
            'name' => 'Minecraft Hosting',
            'description' => 'An example description for the Minecraft Category',
        ]);

        $category->plans()->createMany([
            [
                'name' => 'Budget Hosting',
                'description' => @"
                <ul>
                    <li>
                        Pterodactyl Panel
                    </li>
                    <li>
                        DDoS Protection
                    </li>
                    <li>
                        24/7 Support
                    </li>
                    <li>
                        Free MySQL Database
                    </li>
                </ul>
            ",
                'price_monthly' => 0,
                'price_quarterly' => 0,
                'price_semiannually' => 0,
                'price_annually' => 0,
            ],
            [
                'name' => 'Premium Hosting',
                'description' => @"
                <ul>
                    <li>
                        Pterodactyl Panel
                    </li>
                    <li>
                        DDoS Protection
                    </li>
                    <li>
                        24/7 Support
                    </li>
                    <li>
                        Free MySQL Database
                    </li>
                </ul>
            ",
                'price_monthly' => 0,
                'price_quarterly' => 0,
                'price_semiannually' => 0,
                'price_annually' => 0,
            ],
        ]);

        $category = PlanCategory::create([
            'name' => 'Disabled Category',
            'description' => 'An example description for the Disabled Category',
            'enabled' => false,
        ]);

        $category->plans()->create([
            'name' => 'Disabled Plan',
            'description' => @"
                <ul>
                    <li>
                        Disabled content
                    </li>
                </ul>
            ",
        ]);
    }
}
