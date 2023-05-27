<x-template>
    <x-slot name="title">
        Entradas edit
    </x-slot>

    <x-slot name="header">
        <h1>Editar entrada</h1>
    </x-slot>

    <strong><a href="{{route('entradas.show',$entrada)}}">Volver</a></strong><br><br>

    <form action="{{route('entradas.update',$entrada)}}" method="post" autocomplete="off">
        @csrf
        @method('PUT')

        <label for="">Título:</label><br>
        <input type="text" name="title" id="" value="{{old('title',$entrada->title)}}"><br>
        @error('title')
            *<small>{{$message}}</small>
            <br>
        @enderror

        <label for="">Descripción:</label><br>
        <textarea name="description" id="" rows="5">{{old('description',$entrada->description)}}</textarea><br>
        @error('description')
            *<small>{{$message}}</small>
            <br>
        @enderror

        <label for="">Categoria:</label><br>
        <input type="text" name="category" id="" value="{{old('category',$entrada->category)}}"><br>
        @error('category')
            *<small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Editar</button>

    </form>


</x-template>