<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    use HasFactory;
    protected $table = "area";
    protected $primaryKey = 'id_area';
    protected $fillable = ['nombre_area']; 
    public $timestamps = false;
}
