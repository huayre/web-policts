@extends('template.admin.index')
@section('content')
    <style>
        .avatar_diseño {
            width: 100px;
            height: 100px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #5cb85c;
        }
        .swal-height{
            height: 350px;
        }
    </style>
    @include('admin.team.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="openModalTeam()">NUEVO
            INTEGRANTE
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_empleados">
                    <thead>
                    <tr>
                        <th>Nro</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Nro. Celular</th>
                        <th>Correo</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listTeams as $team)
                        <tr>
                            <td><small class="badge badge-dark">{{$loop->index + 1}}</small></td>
                            <td>{{$team->full_name}}</td>
                            <td><img src="{{asset($team->url_photo)}}"></td>
{{--                            <td>{{$empleado->num_dni}}</td>--}}
{{--                            <td>{{$empleado->num_celular}}</td>--}}
{{--                            <td>{{$empleado->correo}}</td>--}}
{{--                            <td>--}}
{{--                                <button class="btn btn-default p-1" onclick="eliminarEmpleado('{{$empleado->id}}')"><i--}}
{{--                                        class="fa fa-trash-o text-danger"></i></button>--}}
{{--                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>--}}
{{--                                <a href="{{$empleado->url_copia_dni}}" target="_blank" class="btn btn-default p-1"><i class="fa fa-address-card text-primary"></i></a>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/admin/team.js')}}"></script>
@endsection
