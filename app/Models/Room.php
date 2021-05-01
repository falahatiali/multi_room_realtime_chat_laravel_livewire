<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
