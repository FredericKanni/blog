<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    //47
    protected $fillable = [
        'name','email','status'];

        //47bis laxiste
       // protected $guarded = [];


    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }


    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }
}
