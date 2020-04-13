@extends ('layouts.admin')
@section('contenido')
    <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script language="JavaScript" type="text/javascript" src="{{asset('js/funcionesQuery.js')}}"></script>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Personas <a href="persona/create">
                <button class="btn btn-success">Nuevo</button>
            </a></h3>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Nombre:</th>
                        <th>Email:</th>
                        <th>Password:</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach($personas as $per)
                    <tr>
                    <td>{{$per->name}}</td>
                    <td>{{$per->email}}</td>
                    <td>{{$per->password}}</td>
                    <td><a href="{{URL::action('personaController@edit',$per->id)}}">
                        <button class="btn btn-info">Editar</button>
                    </a>
                    <button class="btn btn-danger" onclick="eliminar({{$per->id}})"> Eliminar</button>

                    </td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- aca estaba haciendo una prueba de jquery de un tutorial, pero no me funciono.-->
    <!-- usa la clase funcionesQuery, si queres borralo nomas-->
    {!!Form::open()!!}

        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">

        <div class="form-group">
            {!!Form::label('genre','Nombre: ')!!}
            {!! Form::text('genre',null,['class'=>'form-control','id'=>'genre']) !!}
        </div>

        {!!link_to('#',$title='Registrar',$attributes=['id'=>'registro', 'class'=>'btn btn-primary'
        ],$secure = null)!!}

    {!!Form::close()!!}
@endsection
