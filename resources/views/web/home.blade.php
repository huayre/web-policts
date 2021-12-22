@extends('template.web.index')
@section('content')
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($pages as $page)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img class="first-slide" src="{{$page->url_img}}" alt="First slide" style=" width: 100%;max-height: 420px">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <div class="container" style="margin-top: 3%">
        <div style="height: 30px;padding-left:3px;margin-bottom:2%;border-left: red 4px solid">
            <h2>NOTICIAS Y ANUNCIOS</h2>
        </div>
        <div class="row">
            @foreach($notices as $notice)
                <div class="col-md-4">
                    <a href="/">
                        <img src="{{asset($notice->img_notice)}}" style="max-height: 250px; width: 100%">
                        <p>{{$notice->title}}</p>
                        <small>{{$notice->created_at->diffForHumans()}}</small>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
