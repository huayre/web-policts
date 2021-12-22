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
    <div>
        <a href="{{route('notice.create')}}"  class="btn btn-primary btn-rounded btn-fw mb-3">
            NUEVA NOTICIA
        </a>
    </div>
@endsection
@section('scripts')
{{--    <script src="{{asset('js/admin/page.js')}}"></script>script--}}
@endsection
