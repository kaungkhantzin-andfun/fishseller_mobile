<?php

namespace Database\Seeders;

use App\Models\CategoryGroup;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryGroups = [
            ['name' => '天然鮮魚', 'slug' => 'tennen-sengyo'],
            ['name' => '貝（冷蔵）', 'slug' => 'kai-reizou'],
            ['name' => 'イカ（冷蔵）', 'slug' => 'ika-reizou'],
            ['name' => '海老（冷蔵）', 'slug' => 'ebi-reizou'],
            ['name' => 'カニ（冷蔵）', 'slug' => 'kani-reizou'],
            ['name' => 'タコ（冷蔵/冷凍）', 'slug' => 'tako-reizou-reitou'],
            ['name' => 'ウニ（雲丹）', 'slug' => 'uni'],
            ['name' => 'アナゴ（穴子）', 'slug' => 'anago'],
            ['name' => 'フグ', 'slug' => 'fugu'],
        ];

        foreach ($categoryGroups as $group) {
            CategoryGroup::firstOrCreate(
                ['name' => $group['name']],
                [
                    'name' => $group['name'],
                    'slug' => $group['slug'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}