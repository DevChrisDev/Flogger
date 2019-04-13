<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable = [

   		'title',
   		'description',

    ];


    protected $guarded = [

    	'id',

    ];


   	//RELETION TO TAKS MODEl

  	public function tasks()
  	{
  		return $this->hasMany(Task::class);
  	}
}
