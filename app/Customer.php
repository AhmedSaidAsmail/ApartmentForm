<?php

namespace App;


class Customer extends User
{
    public function apartments(){
       return $this->hasMany(Apartment::class);
    }
}
