<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
	protected $fillable = [

		'country_id',
		'name',
		'email',
		'mobile_number',
	];



	public function country(){

			return $this->belongsTo('App\Country');
	}


}
