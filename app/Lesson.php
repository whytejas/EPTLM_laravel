<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    /**
     * @var array
     */
    protected $fillable = [
        'session_date',
        'total_volunteers',
        'created_at',
    ];


    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class);
    }


}
