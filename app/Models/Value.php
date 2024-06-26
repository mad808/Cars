<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $hidden = ['pivot'];


    public function option()
    {
        return $this->belongsTo(Option::class);
    }


    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_values');
    }
}
