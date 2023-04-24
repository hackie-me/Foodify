<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;
    protected $table = "currencies";
    protected $primaryKey = "id";
    protected $fillable = [
        "name"
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
