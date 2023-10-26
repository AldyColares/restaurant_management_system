<?php

namespace Database\Seeders;

use App\Models\ToPunchTheClock;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToPunchTheClockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        TopunchTheClock::factory()->create([
             'employee_id' => 1,
             'clock-in' => $now
         ]);
    }
}
