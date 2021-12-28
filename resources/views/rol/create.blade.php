@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('rol.index')}}"><i class="fas fa-arrow-left h2"></i></a>
    <a class="ms-3" href="{{route('rol.create')}}"><i class="fas fa-plus h2"></i></a>

</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de creación de roles</h1>
        </div>
<form action="{{ route('rol.store') }}" method="post">
    @csrf
    @include('rol.form')
</form>
    </div>
</div>
@include('includes.footer')
