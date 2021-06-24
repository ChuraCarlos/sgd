<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;
    protected $table = "personal";
    protected $primaryKey = 'id_personal';
    protected $fillable = ['fk_dato','fk_usuario','fk_cargo','fk_area',]; 
    public $timestamps = false;
}
