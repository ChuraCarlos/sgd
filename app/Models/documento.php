<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    use HasFactory;
    protected $table = "documento";
    protected $primaryKey = 'id_documento';
    protected $fillable = ['codigo','fk_modelo','nro_documento','descripcion','f_registro','ruta','year','fk_personal','fk_area','observacion','nro_adjunto',];
    //public $timestamps = false;
}
