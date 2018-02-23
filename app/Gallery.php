<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'name', 'description',
    ];

    const STORE_RULES = [
            'name' => 'required|min:2|max:255',
            'description' => 'max:1000'
        ];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function images() {
    	return $this->hasMany(Image::class);
    }

}
