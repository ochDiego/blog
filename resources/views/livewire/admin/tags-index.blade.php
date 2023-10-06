<div class="card">
    <div class="card-header">
        <input wire:model.live="search" type="text" class="form-control" placeholder="Búscar etiqueta">
    </div>

    @if ($tags->count())

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->name}}</td>
                            <td width="10px">
                                <a class="btn btn-info btn-sm" href="{{route('admin.tags.edit',$tag)}}" role="button">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.tags.destroy',$tag)}}" method="post">
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
            {{$tags->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No hay registros coincidentes...</strong>
        </div>
    @endif
</div>
