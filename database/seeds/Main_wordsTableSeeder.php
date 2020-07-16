<?php

use Illuminate\Database\Seeder;
use App\Main_words;

class Main_wordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Main_words')->insert([
            'group_id' => '1',
            'main_word'=> 'can'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '1',
            'main_word'=> 'make'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '1',
            'main_word'=> 'eat'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '2',
            'main_word'=> 'walk'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '2',
            'main_word'=> 'run'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '2',
            'main_word'=> 'dush'
        ]);
        DB::table('Main_words')->insert([
            'group_id' => '3',
            'main_word'=> 'test1'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '3',
            'main_word'=> 'test2'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '3',
            'main_word'=> 'test3'
        ]);
    }
}
