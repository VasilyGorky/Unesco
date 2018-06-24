@extends('layouts.site')

@section('content')

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


            {!! Form::open(['url'=>'profile/'.$data['id'],'method' => 'put']) !!}
            @csrf
            {{ Form::label('firstname','Имя:') }}
            {{ Form::text('firstname',$data['firstname'], ['required' => 'required', 'class' => 'form-control']) }}<br>

            {{ Form::label('secondname','Фамилия:') }}
            {{ Form::text('secondname',$data['secondname'], ['required' => 'required', 'class' => 'form-control']) }}
            <br>

            {{ Form::label('email','E-mail:') }}
            {{ Form::text('email',$data['email'], ['required' => 'required', 'class' => 'form-control']) }}
            <br>

            <div align="right">
                {!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit', 'style'=>'margin-right: 90px; ']) !!}
            </div>
            {!! Form::close() !!}
            <div align="right">
                {!! Form::open(['url' => '/', 'method'=>'get']) !!}
                {{ Form::submit('Отмена', ['class' => 'btn btn-danger', 'style'=>' margin-top: -63px;']) }}
                {!! Form::close() !!}
            </div>


        </div>

    </div>
@endsection