@extends('layouts.admin')

@section('content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'print preview directionality  image link media template  table  hr  anchor toc  lists  help',
            menubar: true
        });
    </script>
    @if(\Illuminate\Support\Facades\Auth::check())

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


                {!! Form::open(['route'=>['item.store'],'method' => 'post','file' => true, 'enctype'=>"multipart/form-data"]) !!}
                @csrf
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id}}">
                {{ Form::label('title','Название:') }}
                {{ Form::text('title','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('description','Описание:') }}
                {{ Form::text('description','', ['required' => 'required', 'class' => 'form-control']) }}<br>

                {{ Form::label('text','Текст:') }}
                <div class="col-xs-8">
                    {{ Form::textarea('text','', ['class' => 'form-control', 'id'=>'editor'])  }}<br>
                </div>

                    Article image:
                    {{Form::file('image')}}

                {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    @endif
@endsection

