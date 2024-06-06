<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_uz' => 'Jismoniy shaxslar uchun',
                'name_ru' => 'Для частных лиц',
                'name_en' => 'For individuals',
            ],
            [
                'name_uz' => 'Yuridik shaxslar uchun',
                'name_ru' => 'Для юридических лиц',
                'name_en' => 'For legal entities',
            ],
            [
                'name_uz' => 'Tenderlar',
                'name_ru' => 'Тендеры',
                'name_en' => 'Tenders',
            ],
            [
                'name_uz' => 'Rasmlar',
                'name_ru' => 'Картинки',
                'name_en' => 'Pictures',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('post_categories')->insert($category);
        }
    }
}
