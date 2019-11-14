<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	 protected $guarded = [];

	 public function profileImage(){
	 	return '/storage/'.($this->image)?$this->image:'/storage/images/srVqAAM9MZpmMKzEkKuZXZ036hNEGaObTLOTAdti.png';
	 }

	 public function followers(){
	 	return $this->belongsToMany(User::class);
	 }
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
