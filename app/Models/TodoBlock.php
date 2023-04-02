<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    protected $table = 'todo_blocks';
    protected $primaryKey = 'id';

    public function items()
    {
        return $this->hasMany(TodoItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOwnedBy($query, $user)
    {
        return $query->where('user_id', $user->id);
    }
}
