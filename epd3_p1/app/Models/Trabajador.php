<?php

namespace App\Models;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['telefonos','persona_id'];
    public function persona(){
        return $this->belongsTo(Persona::class, 'persona_id');
    }
}
