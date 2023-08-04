<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('settings')->insert([
        'key'=> 'site_name',
        'value'=> 'Ability Development College',
       ]);

       DB::table('settings')->insert([
        'key'=> 'اسم الموقع',
        'value'=> 'كلية تنمية القدرات',
       ]);
    }
}
