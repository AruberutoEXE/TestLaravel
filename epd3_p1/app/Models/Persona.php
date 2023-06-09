<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'edad'];
    
}
