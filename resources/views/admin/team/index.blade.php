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
                <table class="table table-bordered" id="table-teams">
                    <thead>
                    <tr>
                        <th>Nro</th>
                        <th>Nombres</th>
                        <th>Foto</th>
                        <th>Hoja De Vida</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listTeams as $team)
                        <tr>
                            <td><small class="badge badge-dark">{{$loop->index + 1}}</small></td>
                            <td>{{$team->full_name}}</td>
                            <td><img src="{{asset($team->url_photo)}}"></td>
                            <td><a href="{{$team->url_cv}}" target="_blank">
                                    <i class="fa fa-file-pdf-o text-danger"></i></a>
                            </td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarEmpleado('{{$team->id}}')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                            </td>
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
