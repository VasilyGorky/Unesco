@extends('layouts.admin')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->isWorker() || \Illuminate\Support\Facades\Auth::user()->isAdmin())

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


                {!! Form::open(['route'=>['publication.store'],'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                @csrf
                {{ Form::label('author','Автор:') }}
                {{ Form::text('author','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('name','Название:') }}
                {{ Form::text('name','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('city','Город:') }}
                {{ Form::text('city','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('year','Год публикации:') }}
                {{ Form::text('year','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                Фото публикации ():
                {{Form::file('image')}}

                Загрузить публикацию <b>(pdf)</b>:
                {{Form::file('file')}}

                {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    @endif
@endsection

