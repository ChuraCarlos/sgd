<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    use HasFactory;
    protected $table = "cargo";
    protected $primaryKey = 'id_cargo';
    protected $fillable = ['nombre_cargo']; 
    public $timestamps = false;
}
