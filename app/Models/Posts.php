<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posts extends Model
{
    use HasFactory;

    protected $with = ['user'];

    public function user() {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}
