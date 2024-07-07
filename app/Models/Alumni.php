<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Repositories\MediaRepo;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'designation',
        'batch_no',
        'description',
        'image',
        'image_path',
        'media_id',
        'status',
    ];

    // Image Paths
    public function getImgPathsAttribute(){
        return MediaRepo::sizes($this->image_path, $this->image);
    }
}
