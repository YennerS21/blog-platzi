<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Clase Post contiene un metodo user()
 * el cual le indica a una relacion
 * entre las clase Post y User
 * Un Post pertenece a un User 
 * 
 */
class Post extends Model
{
    use HasFactory;

    /**
     * En este objeto se declaran
     * los campos de la BD que
     * se van a usar para
     * gestionar los registros
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];


    /**
     * Este metodo nos realiza la conexion entre la
     * la tabla Posts y Users
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
