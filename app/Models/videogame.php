<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videogame extends Model
{
    use HasFactory;
    protected $primaryKey="id";
   
    protected $table="videogame";
   

    protected $fillable = [
        'name',
        'category',
        'price',
    ];

}
