<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_words extends Model
{
    
    //Groupsモデルと多対1で紐付け
    public function groups(){
        return $this->belongsTo('App\Groups');
    }
    //Materialsモデルと1対多で紐付け
    public function materials(){
        return $this->hasMany('App\Materials');
    }
}
