<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instrumentales extends Model
{
    protected $primaryKey = 'id_instrumental';
    protected $table = 'instrumentales';
    protected $fillable = ['id_instrumental','nombres','apellidos','direccion','telefono','sexo','edad','email', 'profesorI', 'estudianteI'];
    public $timestamps = false;
}
