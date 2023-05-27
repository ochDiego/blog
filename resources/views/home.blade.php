<x-template>
    <x-slot name="title">
        Inicio
    </x-slot>

    <x-slot name="header">
        <h1>Bienvenido a la página de inicio</h1>
    </x-slot>

    <p><strong><a href="{{route('entradas.index')}}">Lista de entradas</a></strong></p>

</x-template>