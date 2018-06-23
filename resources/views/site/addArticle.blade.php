@extends('layouts.admin')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())

        <div class="container" style="margin-top: 50px">
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


                {!! Form::open(['route'=>['article.store'],'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                @csrf
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id}}">
                {{ Form::label('title','Название:') }}
                {{ Form::text('title','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('published','Где и когда опубликована работа:') }}
                {{ Form::text('published','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('view','Вид печати (центр. или местная): ') }}
                {{ Form::text('view','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('type','Вид издания (монография, статья, тезисы докладов, сборники статей (ответственный редактор), учебные пособия)
Изданные и принятые к публикации статьи в реферируемых журналах (указать):') }}
                {{ Form::text('type','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('pages','Кол-во печатн.листов,стр.:') }}
                {{ Form::text('pages','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                Загрузите файл (pdf):
                {{Form::file('file')}}

                {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    @endif
@endsection

