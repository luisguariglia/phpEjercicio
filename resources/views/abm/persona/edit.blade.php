@extends ('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Persona {{$persona->name}}</h3>
            <form action="{{route ('user.update',$persona->id)}}" method='POST'>          
            @csrf
                 <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="name">Nombre:</label></br>
                        <input type="text" name="name" class='form-contol' value="{{$persona->name}}">  
                </div>
                <div class="form-group">
                    <label for="email">Email:</label></br>
                        <input type="text" name="email" class='form-contol' value="{{$persona->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label></br>
                        <input type="text" name="password" class='form-contol'  value="{{$persona->password}}">             
                </div>
                <div class="form-group">
                    <button class='btn btn-primary' type="submit">Guardar</button>
                    <button class='btn btn-danger' type="reset">Cancelar</button>
                </div>
            </form>
            
        </div>
    </div>
@stop
