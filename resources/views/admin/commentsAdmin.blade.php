@extends('layouts.admin')
@section('sidebar')
    @include('admin.sidebarAdmin')
@endsection
@section('content')
    <div class="container" style="margin-top: 70px">

        <div align="right">
            {{--{{ $comments->links() }}--}}
        </div>

        @foreach($comments as $comment)
            <div class="card" style="width: 900px; margin-top: 20px; margin-left: 10%">
                <div class="card-body">
                     {{ $comment->text }} - @if($comment->status == 1) Одобрен @else Не одобрен @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                        {!! Form::open(['url' => 'admin/comments/delete/'.$comment->id, 'method'=>'delete', 'style' => '']) !!}
                        <button class="btn btn-danger float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/delete.png')}}" style="width: 20px;"></button>
                        {!! Form::close() !!}
                    @endif
                    @if($comment->status == 0)
                        @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                            {!! Form::open(['url' => 'admin/comments/'.$comment->id, 'method'=>'put']) !!}
                             <button class="btn btn-success float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/eye-open.png')}}" style="width: 20px; "></button>
                            {!! Form::close() !!}
                        @endif
                        @else
                        @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                            {!! Form::open(['url' => 'admin/comments/'.$comment->id, 'method'=>'put']) !!}
                            <button class="btn btn-success float-right btn-primary" style="margin-top: -30px; margin-left: 5px;"><img src="{{asset('img/eye-close.png')}}" style="width: 20px; "></button>
                            {!! Form::close() !!}
                        @endif
                    @endif
                </div>


            </div>
        @endforeach
        <div align="right">
            {{--{{ $comments->links() }}--}}
        </div>
    </div>
@endsection
