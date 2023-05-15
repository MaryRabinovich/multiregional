<?php

namespace Modules\Multiregional;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['en' => 'kazan', 'ru' => 'Казань'],
            ['en' => 'moscow', 'ru' => 'Москва'],
            ['en' => 'novosibirsk', 'ru' => 'Новосибирск'],
            ['en' => 'st-petersburg', 'ru' => 'Петербург'],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
