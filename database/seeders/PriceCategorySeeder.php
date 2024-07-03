<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_uz' => 'PVX profillar seriyali 6000 (4 kamerali)',
                'name_ru' => 'ПВХ профили серии 6000 ( 4 камеры )',
                'name_en' => 'PVC profiles series 6000 ( 4 chambers )',
            ],
            [
                'name_uz' => 'PVX profillar seriyasi 7000 (5 kamerali)',
                'name_ru' => 'ПВХ профили серии 7000 ( 5 камеры )',
                'name_en' => 'PVC profiles series 7000 (5 chambers)',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('price_categories')->insert($category);
        }
    }
}
