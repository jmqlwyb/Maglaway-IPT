<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\MarkupHistory;

class MarkupSet extends Command {
    protected $signature = 'markup:set {rate : Markup rate (e.g., 0.05 for 5%)}';
    protected $description = 'Update retail prices for all products you selected or choose ';

    public function handle() {
        $rate = (float)$this->argument('rate');

        Product::chunk(200, function ($products) use ($rate) {
            foreach ($products as $product) {
                $product->retail_price = $product->purchase_price * (1 + $rate);
                $product->save();
            }
        });

        MarkupHistory::create([
            'date' => now()->toDateString(),
            'mark_up_rate' => $rate
        ]);

        $this->info('Retail prices updated successfully!');
    }
}
