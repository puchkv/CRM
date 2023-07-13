<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'site' => 'Сайти',
            'design' => 'Дизайн',
            'marketing' => 'Маркетинг',
            'ad' => 'Реклама',
            'media' => 'Медіа',
            'other' => 'Інше',
        ];

        foreach($categories as $category_code => $category_title) {
            \App\Models\Category::create([    
                'code' => $category_code,
                'title' => $category_title
            ]);
        }

        //
    }
}
