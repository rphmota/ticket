<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'devices';

    protected $fillable = [
        'name', 'description', 'tombo', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
