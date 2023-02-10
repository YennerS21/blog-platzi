<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
/**
 * Esta clase PageController contiene
 * 2 metodos publicos que retornan una vista.
 * 
 */
class PageController extends Controller
{
    /**
     * Función home
     *
     * @param Request $request es usado para obtener la peticion realizada
     * por el usuario.
     * 
     * @return View al realizar la consulta se retorna la vista home y un objeto con sus datos.
     */
    public function home(Request $request){
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")
        ->with('user')
        ->latest()
        ->paginate();
        return view('home', ['posts'=>$posts]);
    }
    /**
     * Funcion post
     *
     * @param Post $post permite asignar las publicaciones/posts a la vista.
     * @return View se pasan los datos del parametro a la vista post como un objeto listo para usar
     */
    public function post(Post $post){
        return view('post', ['post'=>$post]);
    }
}
