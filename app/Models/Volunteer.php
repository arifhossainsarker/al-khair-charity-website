<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Repositories\MediaRepo;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'dob',
        'address',
        'street_address',
        'address_line_2',
        'city',
        'state',
        'zip_code',
        'country',
        'gender',
        'disability',
        'disability_desc',
        'ethnicity',
        'volunteered_exp',
        'occupation',
        'volunteering_area_int',
        'ref_name',
        'ref_with_relation',
        'ref_email',
        'ref_mobile',
        'emg_name',
        'emg_with_relation',
        'emg_email',
        'emg_phone',
        'criminal_bg',
    ];


    // Image Paths
    // public function getImgPathsAttribute(){
    //     return MediaRepo::sizes($this->image_path, $this->image);
    // }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'integer',
    ];
}
