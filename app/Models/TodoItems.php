<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'block_id',
        'is_completed',
        'is_archived',
    ];

    protected $table = 'todo_items';
    protected $primaryKey = 'id';

    public function block()
    {
        return $this->belongsTo(TodoBlock::class);
    }

    public function scopeOwnedBy($query, $user)
    {
        return $query->where('user_id', $user->id);
    }
}

