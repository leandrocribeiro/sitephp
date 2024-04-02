<?php

namespace App\Models\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ModelBook extends Model
{
    protected $table = 'book';
    protected $fillable=['title','author','pages','price','user_id'];

    public function relUsers(){
        return $this->hasOne('App\Models\User','id','user_id');
        }

}

