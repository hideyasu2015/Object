<?php

use Illuminate\Database\Seeder;
use App\Groups;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('Groups')->insert([
            'group' => '5年生レベル'
        ]);
        
        DB::table('Groups')->insert([
            'group' => '6年生レベル'
        ]);
        
        DB::table('Groups')->insert([
            'group' => '中学生レベル'
        ]);
    }
}
