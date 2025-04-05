<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['guest_name', 'content', 'relationship', 'commented_at'];
    protected $dates = ['commented_at'];
    protected $casts = ['commented_at' => 'datetime']; // Ensure it's treated as a datetime field
}

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'type'];
}
