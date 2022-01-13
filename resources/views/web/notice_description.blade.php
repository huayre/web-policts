@extends('template.web.index')
@section('content')
<style>
    @media (min-width: 390px) {
     .imagen-desing {
         height: 450px;
         width: 80%;
         border-radius: 8px;
         display: block;
         margin: auto;
     }
    }
    @media (max-width: 389px) {
        .imagen-desing {
            height: 450px;
            width: 100%;
            border-radius: 8px;
            display: block;
            margin: auto;
        }
    }
</style>
<div class="container" style="margin-top: 70px">
    <h3 class="font-weight-bold">{{$notice->title}}</h3>
    <p style="margin-bottom:2%;border-left: #0c85d0 4px solid;background-color: #D4E6F1;padding: 5px">{{$notice->extract}}</p>
    <img src="{{asset($notice->img_notice)}}" class="imagen-desing">
    <div style="margin-top: 10px">
        {!! $notice->notice !!}
    </div>
</div>
@endsection()
