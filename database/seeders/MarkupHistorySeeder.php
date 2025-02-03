<?php

namespace Database\Seeders;

use App\Models\MarkupHistory;
use Illuminate\Database\Seeder;

class MarkupHistorySeeder extends Seeder {
    public function run() {
        $markupHistories = [
            ['date' => '2023-10-01', 'mark_up_rate' => 0.05],
            ['date' => '2023-10-05', 'mark_up_rate' => 0.06],
            ['date' => '2023-10-10', 'mark_up_rate' => 0.04],
        ];

        foreach ($markupHistories as $history) {
            MarkupHistory::create($history);
        }
    }
}
