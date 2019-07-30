<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'customer_id',
        'name',
        'owner',
        'phone',
        'neighborhood_id',
        'street',
        'building_no',
        'area',
        'sort',
        'rooms_no',
        'floors_no',
        'parking_no',
        'lobby_area',
        'air_conditioning_type',
        'fire_system',
        'internal_services',
        'external_services',
    ];

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function images()
    {
        return $this->hasOne(Image::class);
    }

    public function internals()
    {
        return $this->hasMany(InternalService::class);
    }

    public function externals()
    {
        return $this->hasMany(ExternalService::class);
    }

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }
}
