<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    public function run() {
        $categories = [
            ['category_name' => 'Canned Goods', 'description' => 'Various canned food items'],
            ['category_name' => 'Beverages', 'description' => 'Drinks and beverages'],
            ['category_name' => 'Snacks', 'description' => 'Chips, cookies, and other snacks'],
            ['category_name' => 'Pet Supplies', 'description' => 'Food and accessories for pets'],
            ['category_name' => 'Cleaning Supplies', 'description' => 'Detergents, disinfectants, and cleaning tools'],
        ];

        Category::insert($categories);
    }
}
