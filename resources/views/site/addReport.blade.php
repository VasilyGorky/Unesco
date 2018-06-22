@extends('layouts.admin')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isAdmin())

        <div class="container" style="margin-top: 50px">
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
                {!! Form::open(['route'=>['report.store'],'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                {{ Form::label('year','Год:') }}
                {{ Form::text('year','', ['required' => 'required', 'class' => 'form-control']) }}<br>
                        </div></div>

                Загрузить отчет <b>(zip)</b>:
                {{Form::file('file')}}

                <br><br>{{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
</div>
            </div>
        </div>
    @endif
@endsection

