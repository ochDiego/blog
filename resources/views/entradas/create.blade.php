<x-template>
    <x-slot name="title">
        Entradas create
    </x-slot>

    <x-slot name="header">
        <h1>Registrar entrada</h1>
    </x-slot>

    <strong><a href="{{route('entradas.index')}}">Volver</a></strong><br><br>

    <form action="{{route('entradas.store')}}" method="post" autocomplete="off">
        @csrf

        <label for="">Título:</label><br>
        <input type="text" name="title" id="" value="{{old('title')}}"><br>
        @error('title')
            *<small>{{$message}}</small>
            <br>
        @enderror

        <label for="">Descripción:</label><br>
        <textarea name="description" id="" rows="5">{{old('description')}}</textarea><br>
        @error('description')
            *<small>{{$message}}</small>
            <br>
        @enderror

        <label for="">Categoria:</label><br>
        <input type="text" name="category" id="" value="{{old('category')}}"><br>
        @error('category')
            *<small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Registrar</button>

    </form>


</x-template>