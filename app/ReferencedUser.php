<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferencedUser extends Model
{
    //
    protected $fillable = [
    'reference_code_id', 'user_id'
    ];
}
