<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    Protected $fillable = [
'first_name',
'last_name',
'email',
'phone',
'city',
    ];
}
