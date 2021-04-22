<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected  $table = 'car_model';
    protected  $primaryKey = 'id';
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}
