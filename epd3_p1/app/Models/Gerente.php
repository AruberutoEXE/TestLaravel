<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['salario','trabajador_id'];
    public function trabajador(){
        return $this->belongsTo(Trabajador::class, 'trabajador_id');
    }
}
