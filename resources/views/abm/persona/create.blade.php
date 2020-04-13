@extends ('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Persona</h3>
            {!!Form::open(array('url'=>'abm/persona','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="name">Nombre:</label></br>
                    <input type="text" name="name" class='form-contol' placeholder="Nombre...">  
            </div>
            <div class="form-group">
                <label for="email">Email:</label></br>
                    <input type="text" name="email" class='form-contol' placeholder="Email...">
            </div>
            <div class="form-group">
                <label for="password">Password:</label></br>
                    <input type="text" name="password" class='form-contol'  placeholder="Password...">             
            </div>
            <div class="form-group">
                <button class='btn btn-primary' type="submit">Guardar</button>
                <button class='btn btn-danger' type="reset">Cancelar</button>
            </div>
            {!!Form::close()!!}
            
        </div>
    </div>
@stop
