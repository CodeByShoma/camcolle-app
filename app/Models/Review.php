<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function car(){
        //一つのレビューは一つの車に属している
        return $this->belongsTo(Car::class);
    }

    public function user(){
        //一つのレビューは一つのユーザーに属している
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'car_id',
        'user_id',
        'rating',
        'comment',
        'title',
    ];

}
