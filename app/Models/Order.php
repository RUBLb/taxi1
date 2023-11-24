<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $filllabel = ['date','place_of_dicpatch','place_of_arrival','price','order_status','feedback','workers_id','dispatchers_id',];

    public function Worker()
    {
        return $this->belongsTo(related: Worker::class, foreginKey: 'workers_id', ownerKey:'id');
    }

    public function Dispatchers()
    {
        return $this->belongsTo(related: Dispatchers::class, foreginKey: 'workers_id', ownerKey:'id');
    }
}