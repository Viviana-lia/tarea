@extends('layouts.app')

@section('content')

<div class="container">
    

@if(Session::has('Mensaje'))
    
    <div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje')}}
    </div>
   

@endif

<a href="{{ url('empleados/create') }}" class="btn btn-success" style="display:inline" >Agregar Alumno</a>
<br/>
<br/>



<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            
            <th>Nombre Completo</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Empresa</th>

            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
           
            
            <td>{{$empleado->nombre}} {{$empleado->apellido}} </td>
             
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->edad}}</td>

            <td>{{$empleado->departamento->nombre}}
                
            </td>
            
            <td>


            <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado->id.'/edit') }}">Editar 
            </a>

            

            <form method="post" action="{{ url('/empleados/'.$empleado->id) }}" style="display:inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?');">Borrar</button>
            </td>
        </tr>
</form>
    @endforeach
    </tbody>
</table>
{{ $empleados->links() }}
</div>
@endsection