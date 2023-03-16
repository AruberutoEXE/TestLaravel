<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['telefonos','persona_id'];
}
