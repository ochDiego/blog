<x-template>
    <x-slot name="title">
        Entrada: {{$entrada->title}}
    </x-slot>

    <x-slot name="header">
        <h1>Entrada: {{$entrada->title}}</h1>
    </x-slot>

    <strong><a href="{{route('entradas.index')}}">Volver</a></strong><br><br>

    <strong><a href="{{route('entradas.edit',$entrada)}}">Editar</a></strong><br><br>

    <p><strong>Descripción:</strong> {{$entrada->description}}</p>
    <p><strong>Categoria:</strong> {{$entrada->category}}</p>

    <form action="{{route('entradas.destroy',$entrada)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit">Eliminar</button>

    </form>

</x-template>