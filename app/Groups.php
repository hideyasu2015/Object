<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    //main_wordsモデルと1対多で紐付け
    public function main_words(){
        return $this->hasMany('App\Main_words');
    }
}
