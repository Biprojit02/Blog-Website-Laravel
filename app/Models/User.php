<?php

namespace App\Models;
// app/Models/User.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define the posts relationship
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
