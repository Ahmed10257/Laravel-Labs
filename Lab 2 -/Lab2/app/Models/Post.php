<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes ;

    protected $fillable = ['title', 'body', 'published', 'published_at', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
