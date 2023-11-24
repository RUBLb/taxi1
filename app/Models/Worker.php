<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $filllabel = ['name','car_brand','car_number','car_color','driver_status',];
}
