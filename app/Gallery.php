<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    public $primaryKey = 'id';
    protected $guard_name = 'web';

    protected $fillable = [
        'heading','file', 'extension', 'type'
    ];
}
