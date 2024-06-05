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
                'name_uz' => 'Litsenziya va sertifikat',
                'name_ru' => 'Лицензия и сертификат',
                'name_en' => 'License and certificate',
            ],
            [
                'name_uz' => 'Biznes reja',
                'name_ru' => 'Бизнес-план',
                'name_en' => 'Business plan',
            ],
            [
                'name_uz' => 'Moliyaviy Hisobot',
                'name_ru' => 'Финансовый отчет',
                'name_en' => 'Financial Statement',
            ],
            [
                'name_uz' => 'Kompaniya strategiyasi',
                'name_ru' => 'Стратегия компании',
                'name_en' => 'Company strategy',
            ],
            [
                'name_uz' => 'Audutorlik hulosasi',
                'name_ru' => 'Аудиторский отчет',
                'name_en' => 'Audit report',
            ],
            [
                'name_uz' => 'Affillangan shaxslar',
                'name_ru' => 'Аффилированное лицо',
                'name_en' => 'Affiliated Person',
            ],
            [
                'name_uz' => 'Muhim faktlar',
                'name_ru' => 'Важные факты',
                'name_en' => 'Important facts',
            ],
            [
                'name_uz' => 'Ustav',
                'name_ru' => 'Устав',
                'name_en' => 'Charter',
            ],
            [
                'name_uz' => 'Yuridik shaxs guvohnomasi',
                'name_ru' => 'Юридическое удостоверение личности',
                'name_en' => 'Legal identity card',
            ],
            [
                'name_uz' => 'Aksiyadorlar qarori',
                'name_ru' => 'Решение акционеров',
                'name_en' => 'Resolution of shareholders',
            ],
            [
                'name_uz' => 'Dvidentlar to\'lash',
                'name_ru' => 'Выплата дивидендов',
                'name_en' => 'Payment of dividends',
            ],
            [
                'name_uz' => 'Aksiyalarni sotib olish',
                'name_ru' => 'Покупка акций',
                'name_en' => 'Purchase of shares',
            ],
            [
                'name_uz' => 'Korporativ boshqaruv',
                'name_ru' => 'Корпоративное управление',
                'name_en' => 'Corporate governance',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
