<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'name',
        'email',
        'phone',
        'message',
        'is_quote',
        'is_replay'
    ];
}
