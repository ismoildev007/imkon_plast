<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategoriyalarni massiv ko'rinishida tuzamiz
        $categories = [
            [
                'name_uz' => 'Plitalar uchun aksessuarlar',
                'name_ru' => 'Аксессуары для плинтусов',
                'name_en' => 'Accessories for skirting boards',
            ],
            [
                'name_uz' => 'Eshiklar',
                'name_ru' => 'Двери',
                'name_en' => 'Doors',
            ],
            [
                'name_uz' => 'PVX granulalar',
                'name_ru' => 'ПВХ гранулы',
                'name_en' => 'PVC granules',
            ],
            [
                'name_uz' => 'Etek taxtalari',
                'name_ru' => 'Плинтусы',
                'name_en' => 'Skirting boards',
            ],
            [
                'name_uz' => 'Profillar',
                'name_ru' => 'Профили',
                'name_en' => 'Profiles',
            ],
            [
                'name_uz' => 'Burchaklar',
                'name_ru' => 'Уголки',
                'name_en' => 'Corners',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
