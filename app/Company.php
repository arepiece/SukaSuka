<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    use Searchable;
      protected $fillable = ['name', 'address', 'website', 'email'];
    //
}


