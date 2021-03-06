<?php

namespace resources\view\PRACTICAL\Controllers;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = "apartment";
    protected $fillable = [
        "name",
        "address",
        "price",
        "public_information",
        "detail_information",
        "images"
    ];
}
