<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $filllabel = ['date','place_of_dicpatch','place_of_arrival','price','order_status','feedback','workers_id','dispatchers_id',];

    public function Workers()
    {
        return $this->belongsTo(Workers::class,'workers_id','id');
    }

    public function Dispatchers()
    {
        return $this->belongsTo(Dispatchers::class,'dispatchers_id','id');
    }
}