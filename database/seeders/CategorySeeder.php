<?php

namespace Database\Seeders;

use App\Models\Category;
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
            ['name' => 'ア', 'slug' => 'a'],
            ['name' => 'イ', 'slug' => 'i'],
            ['name' => 'ウ', 'slug' => 'u'],
            ['name' => 'エ', 'slug' => 'e'],
            ['name' => 'オ', 'slug' => 'o'],
            ['name' => 'カ', 'slug' => 'ka'],
            ['name' => 'キ', 'slug' => 'ki'],
            ['name' => 'ク', 'slug' => 'ku'],
            ['name' => 'ケ', 'slug' => 'ke'],
            ['name' => 'コ', 'slug' => 'ko'],
            ['name' => 'サ', 'slug' => 'sa'],
            ['name' => 'シ', 'slug' => 'shi'],
            ['name' => 'ス', 'slug' => 'su'],
            ['name' => 'セ', 'slug' => 'se'],
            ['name' => 'ソ', 'slug' => 'so'],
            ['name' => 'タ', 'slug' => 'ta'],
            ['name' => 'チ', 'slug' => 'chi'],
            ['name' => 'ツ', 'slug' => 'tsu'],
            ['name' => 'テ', 'slug' => 'te'],
            ['name' => 'ト', 'slug' => 'to'],
            ['name' => 'ナ', 'slug' => 'na'],
            ['name' => 'ニ', 'slug' => 'ni'],
            ['name' => 'ヌ', 'slug' => 'nu'],
            ['name' => 'ネ', 'slug' => 'ne'],
            ['name' => 'ノ', 'slug' => 'no'],
            ['name' => 'ハ', 'slug' => 'ha'],
            ['name' => 'ヒ', 'slug' => 'hi'],
            ['name' => 'フ', 'slug' => 'fu'],
            ['name' => 'ヘ', 'slug' => 'he'],
            ['name' => 'ホ', 'slug' => 'ho'],
            ['name' => 'マ', 'slug' => 'ma'],
            ['name' => 'ミ', 'slug' => 'mi'],
            ['name' => 'ム', 'slug' => 'mu'],
            ['name' => 'メ', 'slug' => 'me'],
            ['name' => 'モ', 'slug' => 'mo'],
            ['name' => 'ヤ', 'slug' => 'ya'],
            ['name' => 'ユ', 'slug' => 'yu'],
            ['name' => 'ヨ', 'slug' => 'yo'],
            ['name' => 'ラ', 'slug' => 'ra'],
            ['name' => 'リ', 'slug' => 'ri'],
            ['name' => 'ル', 'slug' => 'ru'],
            ['name' => 'レ', 'slug' => 're'],
            ['name' => 'ロ', 'slug' => 'ro'],
            ['name' => 'ワ', 'slug' => 'wa'],
            ['name' => 'ヲ', 'slug' => 'wo'],
            ['name' => 'ン', 'slug' => 'n'],
            ['name' => '', 'slug' => 'misc'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                [
                    'name' => $category['name'],
                    'slug' => $category['slug'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}