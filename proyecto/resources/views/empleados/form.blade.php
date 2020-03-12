
          


<div class="form-group">

<label for="nombre" class="control-label">{{'nombre'}}</label>
        <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" 
                name="nombre" id="nombre" 
                value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre') }}">
                        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
               
        <div class="form-group">
                <label for="apellido" class="control-label">{{'apellido'}}</label>
                        <input type="text" class="form-control {{$errors->has('apellido')?'is-invalid':''}}"
                         name="apellido" id="apellido" 
                                 value="{{isset($empleado->apellido)?$empleado->apellido:old('apellido') }}">
                                        {!! $errors->first('apellido','<div class="invalid-feedback">:message</div>') !!}
        </div>
</br>
                        
        <div class="form-group">
                <label for="direccion" class="control-label">{{'direccion'}}</label>
                        <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':''}}"
                         name="direccion" id="direccion" 
                                value="{{isset($empleado->direccion)?$empleado->direccion:old('direccion') }}">
                                         {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
        </div>      
               
       <div class="form-group">
                <label for="telefono" class="control-label">{{'telefono'}}</label>
                        <input type="text" class="form-control {{$errors->has('telefono')?'is-invalid':''}}"
                        name="telefono" id="telefono" 
                                value="{{isset($empleado->telefono)?$empleado->telefono:old('telefono') }}">
                                {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}

                        </div> 
                        </br> 
                  
                        
    
       <div class="form-group">
                <label for="">Empresa</label>
                         <select name="empresa_id" id="inputempresa_id" class="form-control {{$errors->has('empresa_id')?'is-invalid':''}}">
                                <option value="{{isset($empleado->empresa_id)?$empleado->empresa_id:old('empresa_id') }}"
                                >-- Escoja una Empresa --</option>      
                                @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento['id']}}"> {{$departamento ['nombre']}}</option>
                                @endforeach
                        </select> 

        </div>
        
        </br>
        
       <div class="form-group">
                <label for="edad" class="control-label">{{'edad'}}</label>
                        <input type="text" class="form-control {{$errors->has('edad')?'is-invalid':''}}"
                        name="edad" id="edad" 
                                value="{{isset($empleado->edad)?$empleado->edad:old('edad') }}">
                                {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
        </div>           
</br>
                                        <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

                                        <a class="btn btn-primary" href="{{ url('empleados') }}"> Regresar</a>
        </div>       
            