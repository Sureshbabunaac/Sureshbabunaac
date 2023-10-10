<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview-arrayData extends Model
{
    use HasFactory;
    protected $fillable= ['random_list'];
    protected $casts = [
     'random_list' => 'array'
    ];
}
