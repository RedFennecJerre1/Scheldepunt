<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        // Seed the faq_categories table
        $categories = [
            ['name' => 'activities'],
            ['name' => 'apartement'],
            ['name' => 'neighbourhood'],
        ];

        foreach ($categories as $category) {
            FaqCategory::create($category);
        }

        // Seed the faqs table
        $faqs = [
            [
                'faq_category_id' => 1,
                'question' => 'Is there something to do between 10 juli and 21 julie',
                'answer' => 'Yes. The whole city is a festival, named Gentse Feesten',
            ],
            [
                'faq_category_id' => 2,
                'question' => 'Is there a dishwasher in the apartement',
                'answer' => 'Yes, there is a dishwasher available' ],
            // Add more FAQs as needed
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
