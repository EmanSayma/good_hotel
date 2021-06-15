<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tag()
    {
        return $this->hasOne(Tag::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
