@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection
@section('content')

    <div style="margin-top: 100px">



            <div align="right" style="margin-top: 30px;  margin-left: 75%; margin-bottom: -50px;">
                {{ $reports->links() }}
            </div>

        @if( \Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isWorker())

            {!! Form::open(['route' => 'report.create', 'method'=>'get']) !!}

            <button class="btn btn-primary "  style="margin-top: 0px; margin-left: 17%">Добавить отчет</button>

            {!! Form::close() !!}<br>
        @endif
        @foreach($reports as $report)
            <center>
                <div class="card" style="width: 900px; margin-top: 10px">
                    <div class="card-body">
                        <b>ОТЧЁТ</b> по кафедре за {{ $report->year }}г.
                        @if($report->file != '0')
                        {!! Form::open(['url' => 'downloadZip/'.$report->id,'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                        <button class="btn float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/download.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}
                            @endif
                        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isWorker())
                            {!! Form::open(['url' => 'report/'.$report->id, 'method'=>'delete']) !!}
                            <button class="btn btn-danger float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/delete.png')}}" style="width: 20px;"></button>
                            {!! Form::close() !!}
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isWorker())
                            {!! Form::open(['url' => 'report/'.$report->id.'/edit', 'method'=>'get']) !!}
                            <button class="btn btn-success float-right btn-primary" style="margin-top: -30px; "><img src="{{asset('img/edit.png')}}" style="width: 20px;"></button>
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </center>
        @endforeach

    </div>
    <center>
        <div align="" style="margin-top: 100px;  margin-left: 48%">
            {{ $reports->links() }}
        </div>
    </center>

@endsection

@section('footer')
    @include('footer')
@endsection