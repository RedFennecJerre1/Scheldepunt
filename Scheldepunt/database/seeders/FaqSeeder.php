<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {

        $categories = [
            ['name' => 'activities'],
            ['name' => 'apartement'],
            ['name' => 'neighbourhood'],
        ];

        foreach ($categories as $category) {
            FaqCategory::create($category);
        }

        $faqs = [
            [
                'faq_category_id' => 1,
                'question' => 'Is there something to do between 10 juli and 21 juli',
                'answer' => 'Yes. The whole city is a festival, named Gentse Feesten',
            ],
            [
                'faq_category_id' => 2,
                'question' => 'Is there a dishwasher in the apartement',
                'answer' => 'Yes, there is a dishwasher available' ],
            [
                'faq_category_id' => 3,
                'question' => 'How is the neighbourhood?',],
            [
                'question' => 'How nice are the people?',],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
