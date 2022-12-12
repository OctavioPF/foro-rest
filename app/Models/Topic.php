<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Topic extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title', 'user_id'
    ]; 

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */

     //campos no visibles en las consultas
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
