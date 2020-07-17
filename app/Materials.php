<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    //main_wordsモデルと多対1で紐付け
    public function main_words(){
        return $this->belongsTo('App\Main_words');
    }
}
