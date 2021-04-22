<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $dateFormat = 'h:m:s';
    protected $fillable = [
        'name', 'imageurl', 'description', 'founded'
    ];
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }
  
}
