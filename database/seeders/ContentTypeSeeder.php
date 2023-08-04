<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content_types')->insert([
            'name'=>'unclassified',            
        ]);
        DB::table('content_types')->insert([
            'name'=>'news',            
        ]);
        DB::table('content_types')->insert([
            'name'=>'articles',            
        ]);
        DB::table('content_types')->insert([
            'name'=>'announcements',            
        ]);
    }
}
