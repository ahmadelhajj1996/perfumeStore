<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'title' =>  json_encode(['ar' => 'Dolce and Gabbana',
                                     'en' => 'Dolce and Gabbana',
                                     'tr' => 'Dolce and Gabbana'
                                     ]) ,

            'image' => 'https://fimgs.net/mdimg/vijesti/o.9562.2.jpg'
        ]);
        Category::create([
            'title' =>  json_encode(['ar' => 'Calvin Klein',
                                     'en' => 'Calvin Klein',
                                     'tr' => 'Calvin Klein'
                                     ]) ,

            'image' => 'https://fimgs.net/mdimg/vijesti/o.9562.2.jpg'
        ]);
        Category::create([
            'title' =>  json_encode(['ar' => 'Davidoff',
                                     'en' => 'Davidoff',
                                     'tr' => 'Davidoff'
                                     ]) ,
            'image' => 'https://fimgs.net/mdimg/vijesti/o.9562.2.jpg'
        ]);
        Category::create([
            'title' =>  json_encode(['ar' => 'Giorgio Armani',
                                     'en' => 'Giorgio Armani',
                                     'tr' => 'Giorgio Armani'
                                     ]) ,
            'image' => 'https://fimgs.net/mdimg/vijesti/o.9562.2.jpg'
        ]);

    }
}
