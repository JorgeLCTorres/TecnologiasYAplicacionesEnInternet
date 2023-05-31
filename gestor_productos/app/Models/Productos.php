<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table='products';
    //SE DECLARAN LOS CAMPOS DE LA TABLA PRODUCTS
    protected $fillable = [
        'descripcion_corta',
        'descripcion_larga',
        'precio_venta',
        'precio_compra',
        'stock',
        'peso',
    ];
}
