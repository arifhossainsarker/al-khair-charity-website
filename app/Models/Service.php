<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'service_type_id', 'title', 'sub_title', 'is_video', 'image', 'video', 'short_description',
        'description', 'date', 'amount', 'discount_amount',
        'is_free', 'tags', 'expire_date', 'is_limit', 'limit','add_type', 'position', 'status',
    ];

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }
    public function getVideoPathAttribute(){
        if($this->video){
            return asset('uploads/service/video/' . $this->video);
        }
        return '';
    }
    public function scopeActive($q, $take = null, $skip = 0){
        $q->where('status', 1);
        $q->orderBy('position');
        if($take){
            $q->skip($skip);
            $q->take($take);
        }
    }

    public function userServices()
    {
        return $this->hasMany(UserService::class);
    }
    public function serviceMaterials()
    {
        return $this->hasMany(ServiceMaterial::class);
    }
}
