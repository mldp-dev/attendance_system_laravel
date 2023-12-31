<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomplishment extends Model
{
    use HasFactory;
    protected $table='accomplishments';

    protected $fillable = [
        'accomplishment'
    ];

    public function accomplishments(){
        return $this ->hasMany(Accomplishment::class);
    }
}

