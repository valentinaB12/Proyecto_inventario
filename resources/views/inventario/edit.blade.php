@extends('layouts.app');
@section('content')
    <div class="container-fluid">
        <h1 class=""></h1>
        <div class="card" style="width:35rem; margin:auto;">
            <div class="card-body">

                <form action="{{url('/inventario/'.$datos->id)}}" method="POST">
                    @csrf

                    {{method_field('PATCH')}}
                    @include('inventario.form')

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin: 1rem">

                        <input type="submit"  class="btn btn-info" style="float:right" onclick="return confirm('Esta seguro que quiere Editar este Usuario')"value="Editar">

                        <a   class="btn"  style="background-color: aquamarine" href="{{url('/inventario/')}}" role="button">
                            Inventario
                        </a>
                    </div>


                </form>

            </div>
        </div>
    </div>
@endsection
