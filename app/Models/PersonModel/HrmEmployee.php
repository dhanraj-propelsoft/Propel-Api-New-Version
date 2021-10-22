<?php

namespace App\Models\PersonModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrmEmployee extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasManyThrough('App\Models\PersonModel\Person', 'App\Models\PersonModel\PersonMobile', 'person_id', 'id');
    }
    public function personData()
    {
        return $this->belongsTo('App\Models\PersonModel\Person','person_id');
    }
}
