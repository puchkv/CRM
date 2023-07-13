<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'new' => 'Нові',
            'create_paper' => 'Створення документа',
            'invoice' => 'Перемовини',
            'in_progress' => 'В процесі',
            'final_invoice' => 'Фінальні перемовини',
            'deal_won' => 'Угоду укладено',
            'deal_lost' => 'Угоду не укладено',
            'moved_to_project' => 'Переведено в проєкт',
            'closed' => 'Закриті',
        ];

        foreach ($statuses as $status_code => $status_name) {
            \App\Models\LeadStatus::create([    
                'status_code' => $status_code,
                'status_name' => $status_name
            ]);
        }
    }
}
