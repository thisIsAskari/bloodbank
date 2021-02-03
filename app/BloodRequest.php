<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

//    public function donations()
//    {
//        return $this->hasMany('App\Models\BloodDonation', 'blood_request_id', 'id');
//    }
}
