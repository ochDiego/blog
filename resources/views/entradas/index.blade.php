<x-template>
    <x-slot name="title">
        Entradas
    </x-slot>

    <x-slot name="header">
        <h1>Listado de entradas</h1>
    </x-slot>

    <strong><a href="{{route('home')}}">Inicio</a></strong><br><br>

    <strong><a href="{{route('entradas.create')}}">Nueva entrada</a></strong>

    <ul>
        @foreach ($entradas as $entrada)
            <li>
                <a href="{{route('entradas.show',$entrada)}}">{{$entrada->title}}</a>
            </li>
        @endforeach
    </ul>

    {{$entradas->links()}}


</x-template>