<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
        'email',
        'phone',
        'address',
        'description',
        'amount',
        'payment_method',
        'status',
    ];

    // Category
    public function Category(){
        return $this->belongsTo(Category::class);
    }


}
