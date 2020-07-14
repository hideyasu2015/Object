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
        $group_names = [
            'grade_5',
            'grade_6',
            'jr_high_school'
            ];
            
        foreach ($group_names as $group_name){
            Groups::create([
                'group' => $group_name
                ]);
        }
    }
}
