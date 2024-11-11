<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';
    
    protected $fillable = [
        'title',
        'category',
        'content',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
