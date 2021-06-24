<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato extends Model
{
    use HasFactory;
    protected $table = "dato";
    protected $primaryKey = 'id_dato';
    protected $fillable = ['nombre','paterno','materno','paterno','fk_tipo_documento','documento','direccion','celular','mail',];
    public $timestamps = false;
}
