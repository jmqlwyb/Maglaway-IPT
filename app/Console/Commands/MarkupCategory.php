<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\MarkupHistory;

class MarkupCategory extends Command {
    protected $signature = 'markup:set-category {rate} {category}';
    protected $description = 'Update retail prices for a specific category';

    public function handle() {
        $rate = (float) $this->argument('rate');
        $category = Category::where('category_name', $this->argument('category'))->first();

        if (!$category) {
            return $this->error("Category not found!");
        }

        $category->products()->each(fn($product) => $product->update([
            'retail_price' => $product->purchase_price * (1 + $rate)
        ]));

        MarkupHistory::create(['date' => now(), 'mark_up_rate' => $rate]);

        $this->info("Prices updated and history recorded!");
    }
}
