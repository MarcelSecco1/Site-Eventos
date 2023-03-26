<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    //isso é um array
    protected $casts = ["items" => "array"];

    protected $dates = ['date'];
}
