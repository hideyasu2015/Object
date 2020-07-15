<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Materials')->insert([
            'main_word_id' => '1',
            'english'=> 'I can break an egg in the blink of an eye',
            'japanese'=> '私は瞬きで卵を割ることができます。',
            'photo'=> 'hannah-tasker-ZBkH8G4_yyE-unsplash.jpg'
        ]);
        
        DB::table('Materials')->insert([
            'main_word_id' => '1',
            'english'=> 'Walnuts are delicious to eat with their shells',
            'japanese'=> 'くるみは、殻ごと食べるのが美味しい。',
            'photo'=> 'austin-pacheco-FtL07GM9Q7Y-unsplash.jpg'
        ]);
        
        DB::table('Materials')->insert([
            'main_word_id' => '1',
            'english'=> 'My dad is Baikinman',
            'japanese'=> '僕のパパは、バイキンマンです。',
            'photo'=> 'steven-libralon-Do1GQljlNk8-unsplash.jpg'
        ]);
        
        DB::table('Materials')->insert([
            'main_word_id' => '1',
            'english'=> "I can't close my armpit",
            'japanese'=> '私は、脇を閉められません。',
            'photo'=> 'ben-white-lVCHfXn3VME-unsplash.jpg'
        ]);
        
        DB::table('Materials')->insert([
            'main_word_id' => '1',
            'english'=> 'How to make Anpanman',
            'japanese'=> 'アンパンマンの作り方。',
            'photo'=> 'jason-rosewell--iAgKHaNUqI-unsplash.jpg'
        ]);
    }
}
