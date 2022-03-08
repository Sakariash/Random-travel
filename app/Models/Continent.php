<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    /*
    * @var string
    */
    protected $primaryKey = 'id';
    protected $fillable = [
        'continent'
    ];
    public $timestamps = false;
}
