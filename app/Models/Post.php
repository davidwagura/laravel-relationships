<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'id',
        'title',
        'description',
        'user_id',
    ];
    //An user can have many posts
    public function posts(){
        return $this->hasMany(Post::class);
}
}
