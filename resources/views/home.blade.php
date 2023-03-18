@extends('template')
    
@section('content')
    <h1>HOME</h1>

    <div>
        <!-- Destacado -->
    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900">Contenido Técnico</h1>

        <div class="grid grid-cols-1 gap-4 mb-4"> {{-- gap:espacio entre cada grilla --}}
            @foreach($posts as $post)
                <a href="" class="bg-gray-100 rounded-lg px-6 py-4" >
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-5 py-1">Tutorial</span>
                        <span>{{$post->created_at->format('d/m/Y')}}</span>
                    </p>
                    <h2 class="text-lg text-gray-900 py-2">{{ $post->title }}</h2>
                </a>
            @endforeach
        </div>

        {{$posts->links()}}
    </div>
@endsection

