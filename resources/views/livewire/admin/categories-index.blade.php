<div class="card">
    <div class="card-header">
        <input type="text" wire:model.live="search" class="form-control" placeholder="Búscar categoría">
    </div>

    @if ($categories->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                <a class="btn btn-info btn-sm" href="{{route('admin.categories.edit',$category)}}" role="button">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.categories.destroy',$category)}}" method="post">
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
            {{$categories->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No hay registros coincidentes...</strong>
        </div>
    @endif
</div>
