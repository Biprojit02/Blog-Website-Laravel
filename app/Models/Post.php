<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = ['title', 'content', 'image', 'user_id'];

    // Define the user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
