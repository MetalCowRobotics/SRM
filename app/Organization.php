<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
