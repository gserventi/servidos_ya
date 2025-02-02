@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('mesa.index')}}"><i class="fas fa-arrow-left h2"></i></a>
    <a class="ms-3" href="{{route('caja.create')}}"><i class="fas fa-plus h2"></i></a>

</div>
<div class="container container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Cajas</h1>
        </div>
<table class="table table-bordered">
    <thead>
    <tr>
{{--        <th>ID</th>--}}
        <th>Fecha</th>
        <th>Hora</th>
        <th>Importe Total</th>
        <!--<th>Acciones</th>-->
    </tr>
    </thead>
    <tbody>
    @foreach($cajas as $caja)
        <tr class="align-text-bottom">
{{--            <td>{{ $caja->id }}</td>--}}
            <td>{{ $caja->fecha }}</td>
            <td>{{ $caja->hora }}</td>
            <td>$ {{ $caja->importe_total}}</td>
            <!--<td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('caja.edit',$caja->id) }}">Editar</a>

                <form action="{{ route('caja.destroy',$caja->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn-danger rounded-3 mx-1 p-2" type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>-->
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
</div>
@include('includes.footer')

