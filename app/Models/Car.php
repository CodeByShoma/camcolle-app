<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'manufacturer',
        'price',
    ];

    public function reviews(){
        //一台の車は沢山のレビューを持っている
        return $this->hasMany(Review::class);
    }


}
