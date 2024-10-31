<?php

namespace Database\Seeders;

use App\Models\DashboardButton;
use Illuminate\Database\Seeder;

class DashboardButtonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =0; $i <9; $i++) {
            DashboardButton::create([
                'title' => null,
                'color' => '#000000',
                'link' => null
            ]);
        }   
    }
}
