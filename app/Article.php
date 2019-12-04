<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    /**
     * @var array
     */
    protected $fillable = [
        'Title',
        'Content',
        'Published at',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {

        return $this->belongsTo('App\User');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {

        return $this->belongsToMany('App\Tag')->withTimestamps(

        );
    }


    public function getTagListAttribute()
    {

        return $this->tags->pluck('id');
    }



}
