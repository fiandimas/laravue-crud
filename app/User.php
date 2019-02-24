<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','username','address','id_level'];
    protected $hidden = ['password'];

    public function level(){
      return $this->belongsTo('App\Level','id_level');
    }
}
