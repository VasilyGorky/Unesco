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

                <div style=" margin-bottom: -20px;"><a class="btn btn-default" href="{{ url('admin/item/'.$item->id) }}" role="button">"{{str_limit($item->title,70)}}"</a></div>
                <div style="margin-left: 65%;"> <b>Создана: </b> {{$item->created_at}}</div>

                <div align="right" style="margin-bottom: 10px">
                    @if(\Illuminate\Support\Facades\Auth::check())

                        {!! Form::open(['url' => 'admin/item/'.$item->id, 'method'=>'delete']) !!}
                        <button class="btn btn-danger float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/delete.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}

                        {!! Form::open(['url' => 'admin/item/'.$item->id.'/edit', 'method'=>'get']) !!}
                        <button class="btn btn-success float-right btn-primary" style="margin-top: -30px; "><img src="{{asset('img/edit.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}

                        @if($item->status == 0)
                                {!! Form::open(['url' => 'admin/item/hidden/'.$item->id, 'method'=>'put']) !!}
                                <button class="btn btn-primary float-right btn-primary" style="margin-top: -30px; margin-right: 5px;"><img src="{{asset('img/eye-open.png')}}" style="width: 20px; "></button>
                                {!! Form::close() !!}
                        @else
                                {!! Form::open(['url' => 'admin/item/hidden/'.$item->id, 'method'=>'put']) !!}
                                <button class="btn btn-primary float-right btn-primary" style="margin-top: -30px; margin-right: 5px;"><img src="{{asset('img/eye-close.png')}}" style="width: 20px; "></button>
                                {!! Form::close() !!}
                        @endif

                    @endif
                </div>
            </div>
        @endforeach
        <div align="right">
            {{ $items->links() }}
        </div>
    </div>
@endsection
