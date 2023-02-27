@csrf 

<label class="uppercase text-white-700 text-xs"> Titulo </label>
<input type="text" name="title" class="rounded text-black border-gray-200 w-full mb-4" value="{{ $post->title }}"> 

<label class="uppercase text-white-700 text-xs"> Contenido </label>
<textarea name="body" rows="5" class="rounded text-black border-gray-200 w-full mb-4" >{{ $post->body }}</textarea>


<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-600"> Volver </a>

    <input type="submit" value="Enviar" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
</div>