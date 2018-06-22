@extends('layouts.admin')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="container card " style="margin-top: 60px;">
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

                {!! Form::open(['route'=>['user.update',$data['id']],'method' => 'put']) !!}


                    <h4>{{ Form::label('role','Роль:', ['style'=>'margin-top: 15px']) }}</h4>
                        @if($data['role'] == 'Администратор')
                            <p><input class="w3-radio" type="radio" name="role" value="Администратор" checked>
                                <label>Администратор</label></p>

                            <p><input class="w3-radio" type="radio" name="role" value="Работник" >
                                <label>Работник</label></p>

                            <p><input class="w3-radio" type="radio" name="role" value="Гость">
                                <label>Гость</label></p>
                        @elseif($data['role'] == 'Работник')
                            <p><input class="w3-radio" type="radio" name="role" value="Работник" checked>
                                 <label>Работник</label></p>

                            <p><input class="w3-radio" type="radio" name="role" value="Администратор">
                                <label>Администратор</label></p>

                            <p><input class="w3-radio" type="radio" name="role" value="Гость">
                                <label>Гость</label></p>
                        @else
                        <p><input class="w3-radio" type="radio" name="role" value="Гость" checked>
                            <label>Гость</label></p>

                        <p><input class="w3-radio" type="radio" name="role" value="Администратор">
                        <label>Администратор</label></p>

                        <p><input class="w3-radio" type="radio" name="role" value="Работник" >
                        <label>Работник</label></p>

                        @endif



                    <div class="form-row">
                        <div class="form-group col-md-4">
                            {{ Form::label('firstname','Имя:') }}
                            {{ Form::text('firstname',$data['firstname'], ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Имя"]) }}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('secondname','Фамилия:') }}
                            {{ Form::text('secondname',$data['secondname'], ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Фамилия"]) }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            {{ Form::label('email','Email:') }}
                            {{ Form::text('email',$data['email'], ['required' => 'required', 'class' => 'form-control', 'placeholder'=>"Email"]) }}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('password','Новый пароль:') }}
                            {{ Form::text('password','', ['class' => 'form-control', 'placeholder'=>"Пароль"]) }}
                        </div>
                    </div>

                    {{ Form::label('gender','Пол:') }}
                    <p>
                        @if($data['gender'] == 'male')
                        <input style=" margin-top: 10px" class="w3-radio" type="radio"
                               name="gender" value="male" checked>
                        <label>Мужской</label>

                        <input class="w3-radio" type="radio" name="gender" value="female">
                        <label>Женский</label></p>
                        @else
                        <input style=" margin-top: 10px" class="w3-radio" type="radio" name="gender" value="female" checked>
                        <label>Женский</label></p>

                        <input  class="w3-radio" type="radio" name="gender" value="male" >
                        <label>Мужской</label>
                        @endif


                    {{ Form::label('verified','Доступ к сайту:') }}
                    @if($data['verified'] == "1")
                        <input style=" margin-top: 10px" class="w3-radio" type="radio"
                               name="verified" value="1" checked>
                        <label>Разрешено</label>

                        <input class="w3-radio" type="radio" name="verified" value="0">
                        <label>Запрещено</label></p>
                    @else
                        <input style=" margin-top: 10px" class="w3-radio" type="radio"
                               name="verified" value="1" >
                        <label>Разрешено</label>

                        <input class="w3-radio" type="radio" name="verified" value="0" checked>
                        <label>Запрещено</label></p>

                    @endif

                <div align="right">
                    {!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit', 'style'=>'margin-right: 90px; ']) !!}
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