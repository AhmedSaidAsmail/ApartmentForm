<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalService extends Model
{
    protected $fillable = [
        'apartment_id', 'service'
    ];
}
