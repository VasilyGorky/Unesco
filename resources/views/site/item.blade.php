@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection

@section('content')
    <div class="container" style="margin-top: 40px;">
        <p><a class="btn btn-default" href="{{ url('/') }}" role="button">&laquo; Back</a></p>
        <center>
        <div class="card mb-3" style="width: 900px;">
            <div class="card-header" style="">{{$item->title}}</div>

            <img class="card-img-top" src="{{asset('img/'.$item->image)}}"   alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{!!  $item->text!!} </p>
                <p class="card-text"><small class="text-muted">{{$item->created_at}}</small></p>
            </div>
        </div>
        </center>
    </div>

@endsection
@section('comments')
    @include('comments.comments_block', ['essence' => $item])
@endsection
@section('footer')
    <div style="margin-top: 250px; background: #ffffff; height: 150px; width: 100%; text-align: center">
        <div><a href="{{ url('/') }}"> <img align="left" src="{{ asset('img\Unesco-Logo.jpg') }}"
                                            style="width: 300px; margin-top: 20px; margin-left: -40px"></a></div>
        <center>
            <div style="width: 350px;padding-top: 40px; font-size: 13px">
                <p>Адрес: <b>пр-кт Советский, 73, ауд. №2201</b></p>
                <p>Телефон: <b>8 (3842) 58-23-10</b></p>
                <p>Developer: <a href="https://vk.com/pirate_satan"><b>BasiliK</b></a></p>
            </div>
        </center>
        <div><a href="https://kemsu.ru"><img align="right" src="{{ asset('img\320px-Logo-kemsu-2017-2.png') }}"
                                             style="width: 200px; margin-top: -130px; margin-right: 20px;"></a></div>
    </div>
@endsection