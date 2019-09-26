<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
        'name',
        'description',
        'created_by'
    ];

    public function schedules() 
    {
        return $this->belongsToMany(Link::class);
    }
}
