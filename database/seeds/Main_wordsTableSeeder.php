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
            'group_id' => '5',
            'main_word'=> 'can'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '5',
            'main_word'=> 'make'
        ]);
        
        DB::table('Main_words')->insert([
            'group_id' => '5',
            'main_word'=> 'take'
        ]);
    }
}
