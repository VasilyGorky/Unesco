@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <center>
    <div class="container" style="margin-top: 200px;">

        <div>

            <div>
                 <p> Имя:  {{ $user->firstname }}</p>
                <p>Фамилия: {{ $user->secondname }} </p>
                <p>E-mail: {{ $user->email }} </p>
            </div>
            @if(\Illuminate\Support\Facades\Auth::check())
            <div>
            {!! Form::open(['url' => 'profile/'.$user->id.'/edit', 'method'=>'get']) !!}
            {{ Form::submit('Изменить данные', ['class' => 'btn']) }}
            {!! Form::close() !!}
            </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                <div>
            <button type="button" class="btn " data-toggle="modal" data-target="#exampleModalCenter">
                Изменить пароль
            </button>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                @if($user->role!='Администратор')
            <div>
                <br>{!! Form::open(['url' => 'profile/'.$user->id, 'method'=>'delete']) !!}
                {{ Form::submit('Удалить учетную запись', ['class' => 'btn']) }}
                {!! Form::close() !!}
            </div>
                    @endif
            @endif
        </div>

@if($user->role=='Работник')
    @if($user->article!=null)
            {{--<button class="w3-button w3-block w3-left-align" style="width: 400px" onclick="article()">
               Все статьи пользователя:  <i class="fa fa-caret-down"></i>
            </button>
            <div id="article" class="w3-hide w3-white w3-card" style="width: 850px" >
                @foreach($articles as $article)
                <a style="border: 1px solid black; margin-bottom: 10px" class="btn btn-default" href="{{ url('$article/'.$article->id) }}" role="button"><h7>
                        {{str_limit($article->title,40)}}</h7></a><br>
                @endforeach--}}
            </div>
        @endif
@endif
        <div align="right">
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Изменение пароля</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {!! Form::open(['url'=>'profile/updatePas/'.$user->id,'method' => 'put']) !!}
                    <div class="modal-body">

                        {{ Form::label('password','Новый пароль:') }}
                        {{ Form::text('password','', [ 'class' => 'form-control', 'type'=>'password']) }}


                    </div>
                    <div class="modal-footer">
                        {!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit']) !!}
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


    </div>
    </center>



    <script>

        function article() {
            var x = document.getElementById("article");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-green", "");
            }
        }
    </script>

@endsection

