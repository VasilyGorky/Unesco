@extends('layouts.admin')

@section('content')
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
                    <div style="margin-left: 40%; margin-top: 15%">
                {!! Form::open(['route'=>['report.update',$data['id']],'method' => 'put','file' => true, 'enctype'=>"multipart/form-data"]) !!}

                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                    {{ Form::label('year','Год публикации:') }}
                    {{ Form::text('year',$data['year'], ['required' => 'required', 'class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    Отчет <b>(pdf)</b>: {{$data['file']}}
                    <br><br>{{ Form::label('text',' Заменить отчет (zip):') }}
                    {{Form::file('file')}}<br><br>
                </div>
                {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit', 'style'=>'margin-right: 90px; ']) !!}
                {!! Form::close() !!}
                <div style="margin-left: 25%">
                    {!! Form::open(['url' => 'report/', 'method'=>'get']) !!}
                    {{ Form::submit('Отмена', ['class' => 'btn btn-danger btn-primary', 'style'=>' margin-top: -63px;']) }}
                    {!! Form::close() !!}
                </div>
                    </div>
            </div>
        </div>
    @endif
@endsection