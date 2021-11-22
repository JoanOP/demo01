<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;
    public $table='tiendas';
    public $timestamps=false;
     protected $fillable = [
         'nombre',
         'precio',
         'imagen',
         'tipo',
         'fabricante',
         
     ];

    
}
