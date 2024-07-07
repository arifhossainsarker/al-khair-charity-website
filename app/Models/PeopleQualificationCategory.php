<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleQualificationCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'people_qualification_id',
        'title',
        'position',
        'status',
    ];

    public function PeopleQualificationValues()
    {
        return $this->hasMany(PeopleQualificationValue::class)->orderBy('position');
    }

    // public function getValuesAttribute()
    // {
    //     return $this->hasMany(PeopleQualificationValue::class)->orderBy('position');
    // }

    public function PeopleQualification()
    {
        return $this->belongsTo(PeopleQualification::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'integer',
    ];
}
