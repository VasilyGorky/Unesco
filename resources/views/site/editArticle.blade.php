@extends('layouts.admin')

@section('content')

    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin() or Illuminate\Support\Facades\Auth::user()->isWorker() )
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

                    {!! Form::open(['route'=>['article.update',$data['id']],'method' => 'put','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                    @csrf
                    <div class="form-group">
                    {{ Form::label('title','Название:') }}
                    {{ Form::text('title',$data['title'], ['required' => 'required', 'class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    {{ Form::label('author','Автор:') }}
                    {{ Form::text('author',$data['author'], ['required' => 'required', 'class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    {{ Form::label('link','Ссылка на автора http://basilizu.beget.tech/(profile/{id}):') }}
                    {{ Form::text('link',$data['link'], ['class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    {{ Form::label('published','Где и когда опубликована работа:') }}
                    {{ Form::text('published',$data['published'], ['required' => 'required', 'class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    {{ Form::label('view','Вид печати (центр. или местная): ') }}
                    {{ Form::text('view',$data['view'], ['required' => 'required', 'class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    {{ Form::label('type','Вид издания (монография, статья, тезисы докладов, сборники статей (ответственный редактор), учебные пособия)
    Изданные и принятые к публикации статьи в реферируемых журналах (указать):') }}
                    {{ Form::text('type',$data['type'], ['required' => 'required', 'class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    {{ Form::label('pages','Кол-во печатн.листов,стр.:') }}
                    {{ Form::text('pages',$data['pages'], ['required' => 'required', 'class' => 'form-control']) }}<br>
                    </div>
                    <div class="form-group">
                    Файл <b>(pdf)</b>: {{$data['file']}}
                    <br>Загрузите новый файл (pdf):
                    {{Form::file('file')}}
                    </div>
                    {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit', 'style'=>'margin-right: 90px; ']) !!}
                    {!! Form::close() !!}
                    <div align="right">
                        {!! Form::open(['url' => 'article/', 'method'=>'get']) !!}
                        {{ Form::submit('Отмена', ['class' => 'btn btn-danger btn-primary', 'style'=>' margin-top: -63px;']) }}
                        {!! Form::close() !!}
                    </div>

            </div>

        </div>
    @endif
@endsection