<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    protected $fillable = ['name'];

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }
}
