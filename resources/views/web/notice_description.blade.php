@extends('template.web.index')
@section('content')
<div class="container-fluid" style="margin-top: 70px">
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset($notice->img_notice)}}" style="max-height: 500px; width: 100%;border-radius: 8px">
        </div>
        <div class="col-md-6">
            <h3 class="font-weight-bold">{{$notice->title}}</h3>
            <p style="margin-bottom:2%;border-left: #0c85d0 4px solid;background-color: #D4E6F1;padding: 5px">{{$notice->extract}}</p>
            <hr>
            <p>{!! $notice->notice !!}</p>
        </div>
    </div>
</div>
@endsection()
