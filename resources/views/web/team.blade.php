@extends('template.web.index')
@section('content')
<div class="container-fluid">
    <div style="margin-top: 10%" class="row">
        @foreach($listTeams as $team)
            <div class="col-md-4 text-center h-auto" style="margin-bottom: 10px">
                <img src="{{$team->url_photo}}" style="width: 260px;height: 260px;border-radius: 50%">
                <h3>{{$team->full_name}}</h3>
                @if($loop->first)
                    <h5 style="color: #3c80db">CANDIDATO</h5>
                @else
                    <h5 style="color: #3c80db">REGIDOR</h5>
                @endif
                <p>
                    {{$team->description}}
                </p>
                <a href="{{$team->url_cv}}" target="_blank" class="btn " style="color:#0c85d0;border-radius: 20px;border: #0c85d0 2px solid">Ver hoja de vida</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
{{--style="border-radius: 50%;border: red solid 2px"--}}
