@extends('admin.template.main)

@section('title','Lista de imagenes')

@section('content')
<div clas=""row>
    @foreach($images as $image)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="/images/news/{{$image->imagen}}" class="img-responsive">
                </div>
                <div class="panel-footer">Panel Footer</div>
            </div>
        </div>
</div>

@endsection
