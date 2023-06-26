<?php

namespace App\Models;

use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //SE AGREGAN LOS CAMPOS QUE SE GUARDARAN
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    //public function user(){
    //    return $this->belongsTo(User::class)->select(['name', 'username']);
    //}

    //CREAR UNA RELACIÓN DONDE UN POST PUEDE TENER MÚLTIPLES COMENTARIOS
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
