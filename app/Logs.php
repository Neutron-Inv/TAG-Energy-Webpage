<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $table = 'logs';
    protected $primaryKey = 'log_id';

    protected $fillable = [
        'email', 'activities',
    ];
}
