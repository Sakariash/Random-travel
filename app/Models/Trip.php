<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\User;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'continent',
    ];
}
