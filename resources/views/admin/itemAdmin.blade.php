@extends('layouts.admin')
@section('sidebar')
    @include('admin.sidebarAdmin')
@endsection
@section('content')
    <div class="container" style="margin-bottom: 50px;">
        <p><a class="btn btn-default" href="{{ url('/admin/item') }}" role="button">&laquo; Back</a></p>
        <div>
            <div>
                <h2 style="border-bottom: 1px solid #d6d8db">{{$item->description}}</h2><br>
                @php
                    $user = $item->users;
                 $firstname = $user->firstname;
                $secondname = $user->secondname;
                $id = $user->id;
                @endphp
                <p align="right"><b>Автор: </b><a class="btn btn-default" href="{{ url('profile/'.$id) }}">{{$firstname}} {{$secondname}}</a></p>
                <h3>"{{$item->title}}"</h3>
                <p>{{$item->image}}</p>
                <p>{!!  $item->text!!}  </p>
                <p><b>Дата публикации: </b> {{$item->created_at}}</p>
            </div>
        </div>
        <div align="right">
            @if(\Illuminate\Support\Facades\Auth::check())

                {!! Form::open(['url' => 'admin/item/'.$item->id, 'method'=>'delete', 'style' => 'margin-right: 120px; margin-bottom: -36px;']) !!}
                {{ Form::submit('Удалить x', ['class' => 'btn']) }}
                {!! Form::close() !!}

                {!! Form::open(['url' => 'admin/item/'.$item->id.'/edit', 'method'=>'get']) !!}
                {{ Form::submit('Изменить', ['class' => 'btn']) }}
                {!! Form::close() !!}

            @endif
        </div>
    </div>
@endsection
@section('comments')
    @include('comments.comments_block', ['essence' => $item])

@endsection
