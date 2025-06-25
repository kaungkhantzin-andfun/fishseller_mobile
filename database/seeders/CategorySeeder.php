<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategorySection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'ア行' => [
                ['name' => 'ア', 'slug' => 'a'],
                ['name' => 'イ', 'slug' => 'i'],
                ['name' => 'ウ', 'slug' => 'u'],
                ['name' => 'エ', 'slug' => 'e'],
                ['name' => 'オ', 'slug' => 'o'],
            ],
            'カ行' => [
                ['name' => 'カ', 'slug' => 'ka'],
                ['name' => 'キ', 'slug' => 'ki'],
                ['name' => 'ク', 'slug' => 'ku'],
                ['name' => 'ケ', 'slug' => 'ke'],
                ['name' => 'コ', 'slug' => 'ko'],
            ],
            'サ行' => [
                ['name' => 'サ', 'slug' => 'sa'],
                ['name' => 'シ', 'slug' => 'shi'],
                ['name' => 'ス', 'slug' => 'su'],
                ['name' => 'セ', 'slug' => 'se'],
                ['name' => 'ソ', 'slug' => 'so'],
            ],
            'タ行'=> [
                ['name' => 'タ', 'slug' => 'ta'],
                ['name' => 'チ', 'slug' => 'chi'],
                ['name' => 'ツ', 'slug' => 'tsu'],
                ['name' => 'テ', 'slug' => 'te'],
                ['name' => 'ト', 'slug' => 'to'],
            ],
            'ナ行'=> [
                ['name' => 'ナ', 'slug' => 'na'],
                ['name' => 'ニ', 'slug' => 'ni'],
                ['name' => 'ヌ', 'slug' => 'nu'],
                ['name' => 'ネ', 'slug' => 'ne'],
                ['name' => 'ノ', 'slug' => 'no'],
            ],
            'ハ行'=> [
                ['name' => 'ハ', 'slug' => 'ha'],
                ['name' => 'ヒ', 'slug' => 'hi'],
                ['name' => 'フ', 'slug' => 'fu'],
                ['name' => 'ヘ', 'slug' => 'he'],
                ['name' => 'ホ', 'slug' => 'ho'],
            ],
            'マ行'=> [
                ['name' => 'マ', 'slug' => 'ma'],
                ['name' => 'ミ', 'slug' => 'mi'],
                ['name' => 'ム', 'slug' => 'mu'],
                ['name' => 'メ', 'slug' => 'me'],
                ['name' => 'モ', 'slug' => 'mo'],
            ],
            'ヤ行'=> [
                ['name' => 'ヤ', 'slug' => 'ya'],
                ['name' => 'ユ', 'slug' => 'yu'],
                ['name' => 'ヨ', 'slug' => 'yo'],
            ],
            'ラ行'=> [
                ['name' => 'ラ', 'slug' => 'ra'],
                ['name' => 'リ', 'slug' => 'ri'],
                ['name' => 'ル', 'slug' => 'ru'],
                ['name' => 'レ', 'slug' => 're'],
                ['name' => 'ロ', 'slug' => 'ro'],
            ],
            'ワ行'=> [
                ['name' => 'ワ', 'slug' => 'wa'],
                ['name' => 'ヲ', 'slug' => 'wo'],
                ['name' => 'ン', 'slug' => 'n'],
            ],
            'その他'=> [
                ['name'=> ' ', 'slug'=> 'misc'],
            ]
        ];

        foreach ($categories as $categorySectionName => $categoryLists) {
            $categorySection = CategorySection::firstOrCreate(
                ['name' => $categorySectionName],
                [
                    'name' => $categorySectionName,
                    'slug' => $categorySectionName,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
            foreach( $categoryLists as $categoryListItem) {
                Category::firstOrCreate(
                    ['name' => $categoryListItem['name']],
                    [
                        'category_section_id' => $categorySection->id,
                        'name' => $categoryListItem['name'],
                        'slug' => $categoryListItem['slug'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}