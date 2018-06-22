@extends('layouts.admin')

@section('content')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'print preview directionality  image link media template  table  hr  anchor toc  lists  help',
        menubar: true
    });
</script>

@if(\Illuminate\Support\Facades\Auth::check())
<div class="container" style="margin-top: 50px;">
    <div class="content">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach

            </ul>
        </div>
        @endif

        {!! Form::open(['route'=>['item.update',$data['id']],'method' => 'put', 'file'=>true, 'enctype'=>"multipart/form-data"]) !!}
        @csrf
        {{ Form::label('title','Название:') }}
        {{ Form::text('title',$data['title'], ['required' => 'required', 'class' => 'form-control']) }}<br>

        {{ Form::label('description','Описание:') }}
        {{ Form::text('description',$data['description'], ['required' => 'required', 'class' => 'form-control']) }}
        <br>

            <img src="{{asset('img/'.$data['image'])}}" width="200" height="100">
            {{ Form::label('text','Новое изображение:') }}
            {{Form::file('image')}}<br><br>

        {{ Form::label('text','Текст:') }}
        <div class="col-xs-8">
            {{ Form::textarea('text',$data['text'], [ 'required' => 'required', 'class' => 'form-control', 'style'=>'height:160px;'])  }}
            <br>
        </div>


            <div align="right">
        {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit', 'style'=>'margin-right: 90px; ']) !!}
            </div>
        {!! Form::close() !!}
            <div align="right">
        {!! Form::open(['url' => 'admin/item/', 'method'=>'get']) !!}
        {{ Form::submit('Отмена', ['class' => 'btn btn-primary', 'style'=>' margin-top: -63px;']) }}
        {!! Form::close() !!}
</div>
    </div>
</div>
@endif
@endsection