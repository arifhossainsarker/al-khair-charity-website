<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleQualificationValue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'people_qualification_id',
        'people_qualification_category_id',
        'value',
        'position',
        'status',
    ];

    public function PeopleQualificationCategory()
    {
        return $this->belongsTo(PeopleQualificationCategory::class);
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
