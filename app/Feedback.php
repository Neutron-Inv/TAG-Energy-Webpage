<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
    */
    protected $table = 'feedbacks';
    
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'remark', 'status'
    ];
}
