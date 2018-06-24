@extends('layouts.admin')
@section('sidebar')
    @include('admin.sidebarAdmin')
@endsection
@section('content')
    <div class="container" style="margin-bottom: 50px;">
        <p><a class="btn btn-default" href="{{ url('/admin/item') }}" role="button">&laquo; Back</a></p>
        <div class="container" style="margin-top: 40px;">
            <p><a class="btn btn-default" href="{{ url('/') }}" role="button">&laquo; Back</a></p>
            <center>
                <div class="card mb-3" style="width: 900px; position: relative">
                    <div class="card-header" style="">{{$item->title}}
                        <div align="right" style="margin-top: 5px">
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
                        </div></div>

                    <img class="card-img-top" src="{{asset('img/'.$item->image)}}"   alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{!!  $item->text!!} </p>
                        <p class="card-text"><small class="text-muted">{{$item->created_at}}</small></p>
                    </div>
                </div>
            </center>
        </div>
    </div>
@endsection
@section('comments')
    @include('comments.comments_block', ['essence' => $item])

@endsection
