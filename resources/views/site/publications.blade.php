@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection
@section('content')

    <div style="margin-top: 60px">

            <div align="right" style="margin-top: 30px;  margin-left: 75%;">
                {{ $publications->links() }}
            </div>

        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isAdmin())

            {!! Form::open(['route' => 'publication.create', 'method'=>'get']) !!}

            <button class="btn btn-primary "  style="margin-top: 0px; margin-left: 17%">Новая публикация</button>

            {!! Form::close() !!}<br>
        @endif
        @foreach($publications as $publication)
            <div class="card" style="margin-top: 10px; margin-left: 17%; width: 900px;  ">
                <div class="card-header" style="margin-top: 0px;"><h6>{{$publication->author}}</h6>
                @if($publication->file != '0')
                    {!! Form::open(['url' => 'downloadPdf/'.$publication->id,'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                    <button class="btn float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/download.png')}}" style="width: 20px;"></button>
                    {!! Form::close() !!}
                @endif
                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isAdmin())
                {!! Form::open(['url' => 'publication/'.$publication->id, 'method'=>'delete']) !!}
                <button class="btn btn-danger float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/delete.png')}}" style="width: 20px;"></button>
                {!! Form::close() !!}
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isAdmin())
                        {!! Form::open(['url' => 'publication/'.$publication->id.'/edit', 'method'=>'get']) !!}
                        <button class="btn btn-success float-right btn-primary" style="margin-top: -30px; "><img src="{{asset('img/edit.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}
                    @endif
                </div>
                <div style="margin-left: 20px; margin-top: 10px;">
                    <img class="card-img-top " src="{{asset('img/'.$publication->image)}}" style="width: 80px; height: 115px;"  alt="Card image cap">
                </div>
                <div class="card-body" style="margin-left: 100px; margin-top: -130px; height: 150px">
                    <p class="card-text">{{$publication->name}}</p>
                        <h6 class="card-title">{{$publication->city}}, {{$publication->year}}г.</h6>

                </div>
            </div>

        @endforeach

    </div>
    <center>
        <div align="" style="margin-top: 100px;  margin-left: 48%">
            {{ $publications->links() }}
        </div>
    </center>

@endsection

@section('footer')
    @include('footer')
@endsection