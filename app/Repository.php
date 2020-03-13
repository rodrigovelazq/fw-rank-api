<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Repository extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'repository';
    
    protected $fillable = [
        'name', 'available'
    ];
}
