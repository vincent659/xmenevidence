<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    // using guarded to ensure no mass assignable for security purposes.
    protected $fillable = [
        'name', 'email', 'meat', 'description', 'beforePicture', 'afterPicture',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
