<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorContact extends Model
{
    //
    public function sponsor()
    {
      return $this->belongsTo(Sponsor::class);
    }
}
