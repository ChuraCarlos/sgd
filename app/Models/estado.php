<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    use HasFactory;
    protected $table = "estado";
    protected $primaryKey = 'id_estado';
    protected $fillable = ['nombre_estado'];
    public $timestamps = false;
}
