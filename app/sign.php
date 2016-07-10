<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sign extends Model
{
    protected $fillable = [
      'stdID','gen','name','lastName','engName','engLastName','nickName','birth','religion','school','size','blood','fac','email','tel','disease','tel2','facebook','interest'
    ];

}
