@csrf
<label class="uppercase text-black text-xs">Título</label>
<input type="text" class="rounded w-full mb-4" value="{{ $post->title }}">

<label class="uppercase text-black text-xs">Contenido</label>
<textarea name="body" rows="5" class="caret-pink-500 rounded w-full mb-4">
  {{ $post->body }}
</textarea>

<div class="flex  justify-between items-center">
  <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
  <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>