<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commissions')->insert([
            'commission1' => 60,
            'commission2' => 8,
            'created_at' => Carbon::now()
        ]);
    }
}
