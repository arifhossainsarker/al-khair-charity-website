<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceMaterial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'service_id', 'title','type', 'is_video', 'video', 'doc', 'position', 'status',
    ];
}
