@csrf 

<label class="uppercase text-white-700 text-xs"> Titulo </label>
<span class="text-red-500 text-xs"> 
    @error('title') 
        {{ $message }}
    @enderror
</span>
<input type="text" name="title" class="rounded text-black border-gray-200 w-full mb-4" value="{{ old('title', $post->title) }}"> 
{{-- old('title', $post->title) es para que no se borre el campo cuando se envia el formulario y hay un error en el mismo. --}}

<label class="uppercase text-white-700 text-xs"> Slug </label>
<span class="text-red-500 text-xs"> 
    @error('slug') 
        {{ $message }}
    @enderror
</span>
<input type="text" name="slug" class="rounded text-black border-gray-200 w-full mb-4" value="{{ old('slug', $post->slug) }}"> 

<label class="uppercase text-white-700 text-xs"> Contenido </label>
<span class="text-red-500 text-xs"> 
    @error('body') 
        {{ $message }}
    @enderror
</span>
<textarea name="body" rows="5" class="rounded text-black border-gray-200 w-full mb-4" >{{ old('body', $post->body) }}</textarea>


<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-600"> Volver </a>

    <input type="submit" value="Enviar" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
</div>