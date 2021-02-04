<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodDonation extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bloodRequest()
    {
        return $this->belongsTo('App\BloodRequest');
    }
}
