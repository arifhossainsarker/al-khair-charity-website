<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'permission',
    ];
    protected $casts  = [
        'permission'=>'json'
      ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
