@extends('layouts.app');
@section('content')
    <div class="container-fluid">
        <h1 class="">Agregar Inventario</h1>
        <div class="card" style="width:35rem; margin:auto;">
            <div class="card-body">
                <form action="{{url('/inventario')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('inventario.form')
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin: 1rem">
                    <input type="submit" class="btn btn-info" style="float:right" value="Crear">
                    <a   class="btn"  style="background-color: aquamarine" href="{{url('/inventario/')}}" role="button">
                        Inventario
                    </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
