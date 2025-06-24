<?php

namespace Database\Seeders;

use App\Models\CategorySection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorySections = [
            ['name' => 'ア行', 'slug' => 'a-gyou'],
            ['name' => 'カ行', 'slug' => 'ka-gyou'],
            ['name' => 'サ行', 'slug' => 'sa-gyou'],
            ['name' => 'タ行', 'slug' => 'ta-gyou'],
            ['name' => 'ナ行', 'slug' => 'na-gyou'],
            ['name' => 'ハ行', 'slug' => 'ha-gyou'],
            ['name' => 'マ行', 'slug' => 'ma-gyou'],
            ['name' => 'ヤ行', 'slug' => 'ya-gyou'],
            ['name' => 'ラ行', 'slug' => 'ra-gyou'],
            ['name' => 'ワ行', 'slug' => 'wa-gyou'],
            ['name' => 'その他', 'slug' => 'sonota'],
        ];

        foreach ($categorySections as $section) {
            CategorySection::firstOrCreate(
                ['name' => $section['name']],
                [
                    'name' => $section['name'],
                    'slug' => $section['slug'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}