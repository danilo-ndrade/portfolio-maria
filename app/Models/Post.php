<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillabe = ['title,', 'body', 'user_id', 'post-date', 'post-local', 'external-url'];
}
