<div class="form-group">
    {!! Form::label('name', 'Nombre:',) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug del post', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría:',) !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas:</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null,) !!}
            {{$tag->name}}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado:</p>

    <label class="mr-2">
        {!! Form::radio('status', 1, true,) !!}
        Borrador
    </label>

    <label class="mr-2">
        {!! Form::radio('status', 2, null,) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{asset('storage/' . $post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2023/08/06/13/25/waves-8172942_1280.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post:',) !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo recusandae ipsum nihil hic temporibus voluptatum rem dolores corrupti voluptas, vitae praesentium perspiciatis incidunt ducimus quibusdam. Quam deserunt quisquam esse inventore.
        </p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:',) !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el extracto del post']) !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Contenido:',) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el contenido del post']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
