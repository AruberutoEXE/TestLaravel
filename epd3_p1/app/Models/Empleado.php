<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends  Trabajador
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['horasTrabajadas','precioPorHora','trabajador_id'];
    public function trabajador(){
        return $this->belongsTo(Trabajador::class, 'trabajador_id');
    }
}
