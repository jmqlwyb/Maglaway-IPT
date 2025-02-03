<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    public function run() {
        $products = [
            [
                'product_name' => 'Canned Corn',
                'description' => 'Sweet corn in a can',
                'category_id' => 1, // Canned Goods
                'purchase_price' => 50.00,
                'retail_price' => 60.00,
                'quantity' => 100,
            ],
            [
                'product_name' => 'Canned Beans',
                'description' => 'Baked beans in a can',
                'category_id' => 1, // Canned Goods
                'purchase_price' => 40.00,
                'retail_price' => 50.00,
                'quantity' => 150,
            ],
            [
                'product_name' => 'Orange Juice',
                'description' => 'Freshly squeezed orange juice',
                'category_id' => 2, // Beverages
                'purchase_price' => 30.00,
                'retail_price' => 40.00,
                'quantity' => 200,
            ],
            [
                'product_name' => 'Potato Chips',
                'description' => 'Crunchy potato chips',
                'category_id' => 3, // Snacks
                'purchase_price' => 20.00,
                'retail_price' => 25.00,
                'quantity' => 300,
            ],
            [
                'product_name' => 'Cheese',
                'description' => 'Cheddar cheese block',
                'category_id' => 4, // Dairy
                'purchase_price' => 80.00,
                'retail_price' => 100.00,
                'quantity' => 50,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
