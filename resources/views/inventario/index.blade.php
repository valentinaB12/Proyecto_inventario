
@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

<a   class="btn"  style="background-color: aquamarine; margin-left:210px;" href="{{url('/inventario/create')}}" role="button">
    Crear
</a>
  <div class="table-responsive-xxl  card-body  col-sm-9 offset-sm-8 col-md-9 offset-md-2 pt-1">
        <table id="dato" class="table table-striped" >
            <thead style="background:linear-gradient(#3cb2f6,#07fabd);" class="text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Area</th>
                    <th scope="col">Computador</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">S/N</th>
                    <th scope="col">SO</th>
                    <th scope="col">RAM</th>
                    <th scope="col">DD</th>
                    <th scope="col">Monitor</th>
                    <th scope="col">S/N Monitor</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>


                </tr>
            </thead>
           <tbody>

                 @foreach ($inventarios1 as $in)
               <tr>
                    <td scope="row" >{{$in->id}}</td>
                    <td scope="row" >{{$in->Email}}</td>
                    <td scope="row" >{{$in->Nombres}}</td>
                    <td scope="row" >{{$in->Apellidos}}</td>
                    <td scope="row" >{{$in->Area}}</td>
                    <td scope="row" >{{$in->Tipo_de_Computador}}</td>
                    <td scope="row" >{{$in->Marca}}</td>
                    <td scope="row" >{{$in->Model}}</td>
                    <td scope="row" >{{$in->Numero_serial}}</td>
                    <td scope="row" >{{$in->SO}}</td>
                    <td scope="row" >{{$in->RAM}}</td>
                    <td scope="row" >{{$in->DD}}</td>
                    <td scope="row" >{{$in->Marca_del_monitor}}</td>
                    <td scope="row" >{{$in->Serial_monitor}}</td>

                    <td>

                        <a  class="btn " style="background-color: #72e897;" href="{{url('/inventario/'. $in->id. '/edit')}}" role="button">
                        Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{url('/inventario/'. $in->id)}}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit"  class="btn" style="background-color: #eda4a4;"  onclick="return confirm('Esta seguro que quiere borrar este Usuario')" value="Eliminar">
                        </form>

                    </td>

                </tr>

                @endforeach
           </tbody>

        </table>
   </div>




@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
       $('#dato').DataTable();
    });
</script>
@endsection

@endsection
