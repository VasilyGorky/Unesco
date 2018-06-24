@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection
@section('content')

    <div>
        <center>
            <div align="" style="margin-top: 50px;  margin-left: 48%">
                {{ $articles->links() }}
            </div>
        </center>
        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isWorker())

            {!! Form::open(['route' => 'article.create', 'method'=>'get']) !!}

            <button class="btn btn-primary "  style="margin-top: 0px; margin-left: 10%">Новая научная работа</button>

            {!! Form::close() !!}<br>
        @endif
        @foreach($articles as $article)
            @php
                $user = $article->users;
                if($user!=null){
             $firstname = $user->firstname;
            $secondname = $user->secondname;
            $id = $user->id;
            }
            else{
            $firstname = 'Не найден';
            $secondname = '';
            }
            @endphp

            <div class="card" style="width: 1100px; margin-left: 10%">
                <div class="card-header" style="margin-top: 0px;"><h6 style="margin-top: -2px;">АВТОР: <a class="btn btn-default" href="{{ url('profile/'.$id) }}">{{$firstname}} {{$secondname}}</a></h6>
                    <div style="margin-top: -20px">
                        @if($article->file != '0')
                        {!! Form::open(['url' => 'uploadPdf/'.$article->id,'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                        <button class="btn float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/download.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isWorker())
                        {!! Form::open(['url' => 'article/'.$article->id, 'method'=>'delete']) !!}
                        <button class="btn btn-danger float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/delete.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isWorker())
                        {!! Form::open(['url' => 'article/'.$article->id.'/edit', 'method'=>'get']) !!}
                        <button class="btn btn-success float-right btn-primary" style="margin-top: -30px; "><img src="{{asset('img/edit.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}
                    @endif
                    </div>
                </div>
                <div class="card-body">

                    <p class="card-text" style="margin-top: -2px"><b>НАЗВАНИЕ:</b> {{$article->title}}</p>
                    <h6 class="card-title"><b>Где и когда опубликована работа:</b> {{$article->published}}</h6>
                    <p><b>Вид печати (центр. или местная):</b> {{$article->view}}</p>
                    <p><b>Кол-во печатн.листов,стр.:</b> {{$article->pages}} стр.</p>
                    <div align="right"><b>{{$article->type}}</b></div>
                </div>
            </div>

        @endforeach

    </div>
    <center>
        <div align="" style="margin-top: 100px;  margin-left: 48%">
            {{ $articles->links() }}
        </div>
    </center>

@endsection

@section('footer')
    @include('footer')
@endsection