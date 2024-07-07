<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceSlot extends Model
{
    use HasFactory, SoftDeletes;

    public function getTimeStringAttribute(){
        return date('h:ia', strtotime($this->start_time)) . ' to ' . date('h:ia', strtotime($this->end_time));
    }
}
