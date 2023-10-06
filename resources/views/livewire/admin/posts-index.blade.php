<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="form-control" placeholder="Búscar post">
    </div>

    @if ($posts->count())

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td>
                                <a href="{{asset('storage/' . $post->image->url)}}" target="_BLANK">
                                    <img width="50px" style="height: 30px" src="{{asset('storage/' . $post->image->url)}}" alt="">
                                </a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-info btn-sm" href="{{route('admin.posts.edit',$post)}}" role="button">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.posts.destroy',$post)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$posts->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No hay registros coincidentes...</strong>
        </div>
    @endif
</div>
