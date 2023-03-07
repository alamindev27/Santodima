<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_name' => 'SANTODIMA',
            'logo' => 'images/logo/default-logo.png',
            'favicon' => 'images/logo/default-favicon.png',
            'meta_author' => 'Admin',
            'meta_description' => 'meta description',
            'created_at' => Carbon::now()
        ]);
    }
}
