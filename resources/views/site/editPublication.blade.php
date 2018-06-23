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

                    {!! Form::open(['route'=>['publication.update',$data['id']],'method' => 'put','file' => true, 'enctype'=>"multipart/form-data"]) !!}

                    <div class="form-group">
                        {{ Form::label('author','Автор:') }}
                        {{ Form::text('author',$data['author'], ['required' => 'required', 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('name','Название:') }}
                        {{ Form::text('name',$data['name'], ['required' => 'required', 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('city','Город:') }}
                        {{ Form::text('city',$data['city'], ['required' => 'required', 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('year','Год публикации:') }}
                        {{ Form::text('year',$data['year'], ['required' => 'required', 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        Фото публикации (jpg):<img src="{{asset('img/'.$data['image'])}}" width="80" height="115">
                        {{ Form::label('text','Новое фото:') }}
                        {{Form::file('image')}}<br><br>

                        Публикацию <b>(pdf)</b>: {{$data['file']}}
                        {{ Form::label('text',' Загрузить новую публикацию (pdf):') }}
                        {{Form::file('file')}}<br><br>
                    </div>
                    {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit', 'style'=>'margin-right: 90px; ']) !!}
                    {!! Form::close() !!}
                <div align="right">
                    {!! Form::open(['url' => 'publication/', 'method'=>'get']) !!}
                    {{ Form::submit('Отмена', ['class' => 'btn btn-danger btn-primary', 'style'=>' margin-top: -63px;']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endif
@endsection