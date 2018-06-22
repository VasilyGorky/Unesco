@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection
@php
    $items = $user->item;



@endphp

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
            {{ Form::submit('Изменить', ['class' => 'btn']) }}
            {!! Form::close() !!}
            </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
            <div>
                {!! Form::open(['url' => 'profile/'.$user->id, 'method'=>'delete']) !!}
                {{ Form::submit('Удалить учетку', ['class' => 'btn']) }}
                {!! Form::close() !!}
            </div>
            @endif
        </div>


            <button class="w3-button w3-block w3-left-align" style="width: 400px" onclick="article()">
               Все статьи пользователя:  <i class="fa fa-caret-down"></i>
            </button>
            <div id="article" class="w3-hide w3-white w3-card" style="width: 850px" >
                @foreach($items as $item)
                <a style="border: 1px solid black; margin-bottom: 10px" class="btn btn-default" href="{{ url('item/'.$item->id) }}" role="button"><h5>
                        {{$item->title}}</h5></a><br>
                @endforeach
            </div>


            {{--<a class="btn btn-default" href="{{ url('item/'.$item->id) }}" role="button"><h5>--}}
                    {{--{{$item->title}}</h5></a>--}}

        <div align="right">
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

