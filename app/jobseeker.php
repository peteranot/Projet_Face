<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobseeker extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fistname','lastname', 'home', 'phone', 'email', 'description', 'diplome', 'cv',
    ];
}
