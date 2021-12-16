<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //relationship with user table
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
