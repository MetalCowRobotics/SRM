<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    public function organization()
    {
      return $this->belongsTo(Organization::class);
    }

    public function sponsorContact()
    {
      return $this->hasMany(SponsorContact::class);
    }

    public function sponsorDonation()
    {
      return $this->hasMany(SponsorDonation::class);
    }

    public function sponsorPresentation()
    {
      return $this->hasMany(SponsorPresentation::class);
    }

    public function user()
    {
      return $this->belongsToMany(User::class);
    }
}
