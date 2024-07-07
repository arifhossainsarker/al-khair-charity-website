<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\MediaRepo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'position',
        'meta_title',
        'meta_description',
        'meta_tags',
        'feature_type',
        'image',
        'image_path',
        'video',
        'media_id',
        'status',
        'featured'

    ];

    // Image Paths
    public function getImgPathsAttribute(){
        return MediaRepo::sizes($this->image_path, $this->image);
    }


}
