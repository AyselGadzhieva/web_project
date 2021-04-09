<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'email','password'
    ];
    protected $hidden = [
        'password', 
    ];
    protected $table = 'exercises';
    public function post_images()
    {
        return $this->hasMany(Images::class, 'post_id');
    }

}
