@extends('layouts.admin')

@section('content')

    @if(\Illuminate\Support\Facades\Auth::check())

        <div class="container card" style="margin-top: 60px">
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

                <div style="border-bottom: 1px solid black;">
                    <h1>Страница добавления нового пользователя</h1>
                </div>

                {!! Form::open(['route'=>['user.store'],'method' => 'post']) !!}
                @csrf
                <input type="hidden" id="verified" name="verified" value="1">


                <h4>{{ Form::label('role','Роль:', ['style'=>'margin-top: 15px']) }}</h4>
                <p><input class="w3-radio" type="radio" name="role" value="Администратор">
                    <label>Администратор</label></p>

                <p><input class="w3-radio" type="radio" name="role" value="Работник" checked>
                    <label>Работник</label></p>

                <p><input class="w3-radio" type="radio" name="role" value="Гость">
                    <label>Гость</label></p>

                <div class="form-row">
                    <div class="form-group col-md-4">

                        {{ Form::text('firstname','', ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Имя"]) }}
                    </div>
                    <div class="form-group col-md-4">

                        {{ Form::text('secondname','', ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Фамилия"]) }}
                    </div>
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">


                            {{ Form::text('email','', ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Email"]) }}
                        </div>
                        <div class="form-group col-md-4">

                            {{ Form::text('password','', ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Пароль"]) }}
                        </div>
                    </div>

                        {{ Form::label('gender','Пол:') }}
                        <p>
                            <input style="margin-left: 20px; margin-top: 10px" class="w3-radio" type="radio"
                                   name="gender" value="male" checked>
                            <label>Мужской</label>

                            <input class="w3-radio" type="radio" name="gender" value="female">
                            <label>Женский</label></p>

                        <div align="right">
                            {{ Form::submit('Добавить', ['class' => 'btn btn-success', 'style'=>'margin-right: 90px; ']) }}
                        </div>

                        {!! Form::close() !!}
                    <div align="right">
                        {!! Form::open(['url' => 'admin/user/', 'method'=>'get']) !!}
                        {{ Form::submit('Отмена', ['class' => 'btn btn-danger', 'style'=>' margin-top: -63px;']) }}
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
    @endif
@endsection
