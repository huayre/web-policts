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
    <div class="container" style="margin-top: 40px">
        <div style="height: 30px;padding-left:3px;margin-bottom:2%;border-left: #0c85d0 4px solid">
            <h2 style="color: #0c85d0">NOTICIAS Y ANUNCIOS</h2>
        </div>
            @foreach($notices as $notice)
            <a href="{{route('notice-web',$notice->id)}}">
                <div class="row mb-5">
                    <div class="col-md-5">
                        <img src="{{asset($notice->img_notice)}}" style="max-height: 250px; width: 100%;border-radius: 8px">
                    </div>
                    <div class="col-md-7 border border-5">
                        <p style="font-weight: bold">{{$notice->title}}</p>
                        <small class="text-muted">{{$notice->created_at->diffForHumans()}}</small>
                        <p class="mt-2 text-muted">{{$notice->extract}}</p>
                        <small class="font-weight-bold" style="font-size: 12px">Leer Mas ...</small>
                    </div>
                </div>
            </a>
            @endforeach
       <div style="float: right">
           {{ $notices->links() }}
       </div>
    </div>
@endsection()
