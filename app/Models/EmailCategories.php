<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailCategories extends Model
{
    use HasFactory;

    protected $table = 'email_categories';
    protected $fillable = [
        'name',
        'user_id',
    ];

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }
}
