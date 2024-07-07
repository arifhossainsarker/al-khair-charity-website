<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleQualification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'people_list_id',
        'title',
        'position',
        'status',
    ];

    public function PeopleQualificationCategories()
    {
        return $this->hasMany(PeopleQualificationCategory::class)->orderBy('position');
    }

    public function PeopleList()
    {
        return $this->belongsTo(PeopleList::class);
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
