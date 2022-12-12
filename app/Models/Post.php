<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Post extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id', 'message', 'user_id', ' topic_id', 'date'
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
