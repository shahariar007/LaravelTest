<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class LocationAuthorizationModel extends Model
{
    protected $table = 'location_authorization';
    public function special()
    {
        $this->belongsTo('App/models/SpecialDate','special_id_date','id');
    }

}
