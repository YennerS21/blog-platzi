<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
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
