<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalService extends Model
{
    protected $fillable = [
        'apartment_id', 'service'
    ];
}
