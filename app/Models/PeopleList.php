<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Repositories\MediaRepo;
use Illuminate\Database\Eloquent\Model;

class PeopleList extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'people_id',
        'name',
        'designation',
        'department',
        'bio',
        'email',
        'phone',
        'website_link',
        'image',
        'address',
        'status',
        'serial',
    ];

    public function PeopleQualifications()
    {
        return $this->hasMany(PeopleQualification::class)->orderBy('position');
    }

    public function People()
    {
        return $this->belongsTo(People::class);
    }

    // Image Paths
    public function getImgPathsAttribute(){
        return MediaRepo::sizes($this->image_path, $this->image);
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
