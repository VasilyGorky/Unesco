@extends('layouts.admin')
@section('sidebar')
    @include('admin.sidebarAdmin')
@endsection
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
    <div class="container" >

        <div align="right">
            {{ $users->links() }}
        </div>


        <div class="w3-container"  style="margin-left: -110px; margin-top: 50px;">
            @if(\Illuminate\Support\Facades\Auth::check())

                {!! Form::open(['route' => 'user.create', 'method'=>'get']) !!}

                {{ Form::submit('Добавить пользователя', ['class' => 'btn btn-primary']) }}

                {!! Form::close() !!}
            @endif
                <h2>Таблица пользователей</h2>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Все</a>
                        <a class="nav-item nav-link" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">Администраторы</a>
                        <a class="nav-item nav-link" id="nav-worker-tab" data-toggle="tab" href="#nav-worker" role="tab" aria-controls="nav-worker" aria-selected="false">Работники</a>
                        <a class="nav-item nav-link" id="nav-user-tab" data-toggle="tab" href="#nav-user" role="tab" aria-controls="nav-user" aria-selected="false">Пользователи</a>
                    </div>
                </nav>
                <div class="tab-content " id="nav-tabContent" >
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <table class="w3-table-all w3-hoverable" style="font-size: 13px;">
                            <thead>
                            <tr class="w3-light-grey" >
                                <th>Verified</th>
                                <th>ID</th>
                                <th>РОЛЬ</th>
                                <th>ИМЯ</th>
                                <th>ФАМИЛИЯ</th>
                                <th>E-MAIL</th>
                                <th>ПОЛ</th>
                                <th>СОЗДАН</th>
                                <th>Изменить</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>


                            @foreach($users as $user)
                                <tr>
                                    @if($user->verified=='1')
                                    <td>yes</td>
                                    @else
                                        <td>no</td>
                                    @endif
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->role}}</td>
                                    <td><a class="btn btn-default" href="{{ url('profile/'.$user->id) }}">{{$user->firstname}}</a></td>
                                    <td>{{ $user->secondname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        {!! Form::open(['url' => 'admin/user/'.$user->id.'/edit', 'method'=>'get']) !!}
                                        <button class="btn btn-info btn-lg" type="submit"><img src="{{ asset('img\PixelKit.png') }}" width="15px"></button>
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        @if(($user->role != 'Администратор') || ($user->id != 1))
                                            {!! Form::open(['url' => 'admin/user/'.$user->id, 'method'=>'delete']) !!}
                                            <button class="btn btn-danger btn-lg" type="submit"><img src="{{ asset('img\PixelKit (1).png') }}" width="15px"></button>
                                            {!! Form::close() !!}
                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                        <table class="w3-table-all w3-hoverable " style="font-size: 13px;">
                            <thead>
                            <tr class="w3-light-grey" >
                                <th>Verified</th>
                                <th>ID</th>
                                <th>РОЛЬ</th>
                                <th>ИМЯ</th>
                                <th>ФАМИЛИЯ</th>
                                <th>E-MAIL</th>
                                <th>ПОЛ</th>
                                <th>СОЗДАН</th>
                                <th>Изменить</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>


                            @foreach($users as $user)
                                @if($user->role=='Администратор')
                                <tr>
                                    @if($user->verified=='1')
                                        <td>yes</td>
                                    @else
                                        <td>no</td>
                                    @endif
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->role}}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->secondname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        {!! Form::open(['url' => 'admin/user/'.$user->id.'/edit', 'method'=>'get']) !!}
                                        <button class="btn btn-info btn-lg" type="submit"><img src="{{ asset('img\PixelKit.png') }}" width="15px"></button>
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        @if(($user->role != 'Администратор') || ($user->id != 1))
                                            {!! Form::open(['url' => 'admin/user/'.$user->id, 'method'=>'delete']) !!}
                                            <button class="btn btn-danger btn-lg" type="submit"><img src="{{ asset('img\PixelKit (1).png') }}" width="15px"></button>
                                            {!! Form::close() !!}
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-worker" role="tabpanel" aria-labelledby="nav-worker-tab">
                        <table class="w3-table-all w3-hoverable " style="font-size: 13px;">
                            <thead>
                            <tr class="w3-light-grey" >
                                <th>Verified</th>
                                <th>ID</th>
                                <th>РОЛЬ</th>
                                <th>ИМЯ</th>
                                <th>ФАМИЛИЯ</th>
                                <th>E-MAIL</th>
                                <th>ПОЛ</th>
                                <th>СОЗДАН</th>
                                <th>Изменить</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>


                            @foreach($users as $user)
                                @if($user->role=='Работник')
                                    <tr>
                                        @if($user->verified=='1')
                                            <td>yes</td>
                                        @else
                                            <td>no</td>
                                        @endif
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->role}}</td>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->secondname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            {!! Form::open(['url' => 'admin/user/'.$user->id.'/edit', 'method'=>'get']) !!}
                                            <button class="btn btn-info btn-lg" type="submit"><img src="{{ asset('img\PixelKit.png') }}" width="15px"></button>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            @if(($user->role != 'Администратор') || ($user->id != 1))
                                                {!! Form::open(['url' => 'admin/user/'.$user->id, 'method'=>'delete']) !!}
                                                <button class="btn btn-danger btn-lg" type="submit"><img src="{{ asset('img\PixelKit (1).png') }}" width="15px"></button>
                                                {!! Form::close() !!}
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                        <table class="w3-table-all w3-hoverable " style="font-size: 13px;">
                            <thead>
                            <tr class="w3-light-grey" >
                                <th>Verified</th>
                                <th>ID</th>
                                <th>РОЛЬ</th>
                                <th>ИМЯ</th>
                                <th>ФАМИЛИЯ</th>
                                <th>E-MAIL</th>
                                <th>ПОЛ</th>
                                <th>СОЗДАН</th>
                                <th>Изменить</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>


                            @foreach($users as $user)
                                @if($user->role=='Гость')
                                    <tr>
                                        @if($user->verified=='1')
                                            <td>yes</td>
                                        @else
                                            <td>no</td>
                                        @endif
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->role}}</td>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->secondname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            {!! Form::open(['url' => 'admin/user/'.$user->id.'/edit', 'method'=>'get']) !!}
                                            <button class="btn btn-info btn-lg" type="submit"><img src="{{ asset('img\PixelKit.png') }}" width="15px"></button>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            @if(($user->role != 'Администратор') || ($user->id != 1))
                                                {!! Form::open(['url' => 'admin/user/'.$user->id, 'method'=>'delete']) !!}
                                                <button class="btn btn-danger btn-lg" type="submit"><img src="{{ asset('img\PixelKit (1).png') }}" width="15px"></button>
                                                {!! Form::close() !!}
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>



        </div>


        <div align="right">
            {{ $users->links() }}
        </div>
    </div>
@endsection
