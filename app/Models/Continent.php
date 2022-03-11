<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Continent extends Model
{
    use HasFactory;

    /*
    * @var string
    */
    protected $primaryKey = 'id';
    protected $fillable = [
        'continent'
    ];
    public $timestamps = false;

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
