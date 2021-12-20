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
        .img-holder {position: relative;}
        .img-holder .btn-delete {
            position: absolute;
            top: 2px;
            left: 11px;
        }
    </style>
    @include('admin.page.create_modal')
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="openModalPage()">NUEVA
            IMAGEN
        </button>
    </div>
    <div class="row">
       @foreach($listPage as $page)
           <div class="col-md-6 mb-4 img-holder">
                <img src="{{$page->url_img}}" style="height: 230px;width:100%;border: #0ba1b5 2px solid">
               <button class="btn-delete" onclick="deletePage({{$page->id}})" style="border: none;background-color: red"><i class="fa fa-trash text-light"></i></button>
           </div>
        @endforeach
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/admin/page.js')}}"></script>
@endsection
