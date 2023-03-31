<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_name', 'admin_user_id', 'last_message_timestamp',
    ];

    protected $primaryKey = 'id';
    protected $table = 'groups';

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_user_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'group_members', 'group_id', 'user_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
