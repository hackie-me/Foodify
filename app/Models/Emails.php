<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emails extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'emails';
    protected $fillable = [
        'subject',
        'body',
        'from',
        'to',
        'user_id',
        'email_category_id',
    ];
    protected $primaryKey = 'id';

    protected $casts = [
        'attachments' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function emailCategory()
    {
        return $this->belongsTo(EmailCategory::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
