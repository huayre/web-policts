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
    <form id="form-notice">
        <div class="form-group">
            <label>Titulo</label>
            <input class="form-control border-primary" type="text" name="title" id="title">
        </div>
        <div class="form-group" >
            <label>Resumen</label>
            <textarea wrap="10" class="form-control border-primary" name="extract" id="extract">
            </textarea>
        </div>
        <div class="form-group">
            <label>Imagen</label>
            <input class="form-control border-primary" type="file" name="img_notice" id="img_notice">
        </div>
        <div class="form-group">
            <label>Contenido</label>
            <textarea wrap="20" class="form-control border-primary" name="notice" id="notice">
            </textarea>
        </div>
        <button type="button" class="btn btn-success btn-block" id="btn-create-notice-message"></button>
        <button type="button" class="btn btn-success btn-block" id="btn-create-notice"></button>

    </form>
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script src="{{asset('js/admin/notice.js')}}"></script>
@endsection
