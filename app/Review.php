<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $fillable = [
	    "name",
	    "email",
	    "content",
        "location",
        "status"
	];

    protected $casts = [
        "name" => "string",
        "email" => "string",
        "content" => "string",
        "location" => "string"
    ];

}
