<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Listado de publicaciones!") }}

                    <table class="mb-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Slug</th>
                                <th>Contenido</th>
                                <th>Fecha de creación</th>
                                <th>Fecha de actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="border-b border-gray-200 text-sm">
                                    <td class="px-6 py-4">{{ $post->id }}</td>
                                    <td class="px-6 py-4">{{ $post->title }}</td>
                                    <td class="px-6 py-4">{{ $post->slug }}</td>
                                    <td class="px-6 py-4">{{ $post->body }}</td>
                                    <td class="px-6 py-4">{{ $post->created_at }}</td>
                                    <td class="px-6 py-4">{{ $post->updated_at }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('posts.edit', $post) }}">Editar</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" 
                                                value="Eliminar"
                                                class="bg-red-800 text-white rounded px-4 py-2"
                                                onclick="return confirm('Desea eliminar?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
