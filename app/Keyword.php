<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'word', 'answer_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
}