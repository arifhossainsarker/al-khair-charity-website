<?php

namespace App\Models;

use App\Repositories\MediaRepo;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Active
    public function scopeActive($q, $take = null){
        $q->where('status', 1);
        $q->latest('id');
        if($take){
            $q->take($take);
        }
    }

    // Image Paths
    public function getImgPathsAttribute(){
        return MediaRepo::sizes($this->image_path, $this->image);
    }

    public function getRouteAttribute(){
        return route('news.single', $this->id);
    }

    // Category
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function getCustomShortDescriptionAttribute(){
        return Str::words(strip_tags($this->description), 15,'....');
    }

    public function getVideoPathAttribute(){
        if($this->video){
            return asset('uploads/blog/video/' . $this->video);
        }
        return '';
    }

    public function getVideoThumbnailAttribute()
    {
        parse_str( parse_url($this->feature_video, PHP_URL_QUERY ), $my_array_of_vars );
        if (isset($my_array_of_vars['v'])) return "https://img.youtube.com/vi/".$my_array_of_vars['v']."/sddefault.jpg";
        else return asset('img/default-img.png');
    }
    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->feature_video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 300]);
        return $embed->getHtml();
    }
    public function getVideoHtmlFullAttribute()
    {
        $embed = Embed::make($this->feature_video)->parseUrl();

        if (!$embed)
            return '';

        //$embed->setAttribute(['width' => 300]);
        return $embed->getHtml();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
