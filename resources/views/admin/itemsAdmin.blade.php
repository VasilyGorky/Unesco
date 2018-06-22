@extends('layouts.admin')
@section('sidebar')
    @include('admin.sidebarAdmin')
@endsection
@section('content')
    <div class="container" style="margin-top: 70px">



        @if(\Illuminate\Support\Facades\Auth::check())

            {!! Form::open(['route' => 'item.create', 'method'=>'get']) !!}

            {{ Form::submit('Добавить новость +', ['class' => 'btn btn-primary']) }}

            {!! Form::close() !!}<br>
        @endif
        <div align="right" style="margin-top: -70px; margin-bottom: 50px;"> <a class="btn btn-default" href="{{ url('item') }}" role="button"><h2>Предпросмотр</h2></a></div>


        <div align="right">
            {{ $items->links() }}
        </div>

        @foreach($items as $item)
            <div class="" style="border-bottom: 1px solid #d6d8db;">

                <div style=" margin-bottom: -20px;"><a class="btn btn-default" href="{{ url('admin/item/'.$item->id) }}" role="button">"{{$item->title}}"</a></div>
                @php
                    $user = $item->users;
                 $firstname = $user->firstname;
                $secondname = $user->secondname;
                $id = $user->id;
                @endphp
                <div style="margin-left: 450px;"><b>Автор: </b><a class="btn btn-default" href="{{ url('profile/'.$id) }}">{{$firstname}} {{$secondname}}</a> <b>/ Создана: </b> {{$item->created_at}}</div>

                <div align="right" style="margin-bottom: -40px">
                    @if(\Illuminate\Support\Facades\Auth::check())

                        {!! Form::open(['url' => 'admin/item/'.$item->id, 'method'=>'delete']) !!}
                        {{ Form::submit('Удалить x', ['class' => 'btn','style'=>'margin-right: 100px; margin-top: -60px;']) }}
                        {!! Form::close() !!}

                        {!! Form::open(['url' => 'admin/item/'.$item->id.'/edit', 'method'=>'get']) !!}
                        {{ Form::submit('Изменить', ['class' => 'btn','style'=>' margin-top: -105px;']) }}
                        {!! Form::close() !!}

                    @endif
                </div>
            </div>
        @endforeach
        <div align="right">
            {{ $items->links() }}
        </div>
    </div>
@endsection
