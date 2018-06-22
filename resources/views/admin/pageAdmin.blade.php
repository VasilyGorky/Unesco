@extends('layouts.site')

@section('sidebar')
    @include('admin.sidebarAdmin')
@endsection

@section('content')
    <div class="container" style="margin-top: 40px;">
        <div class="" style="border-bottom: 1px solid #d6d8db;">
            <p class="btn btn-default"  role="button"><h5>"{{$page->title}}"</h5></p>
            <div align="right" style="margin-top: -40px; margin-bottom: 5px;">
            @if(\Illuminate\Support\Facades\Auth::check())
                {!! Form::open(['url' => 'admin/page/'.$page->id.'/edit', 'method'=>'get']) !!}
                {{ Form::submit('Изменить', ['class' => 'btn']) }}
                {!! Form::close() !!}
            @endif
            </div>
        </div>
        <p>{!! $page->text !!}  </p>


    </div>
@endsection
@section('footer')
    @if($page->id=='16')
    <div class="border-top" style="margin-top: 300px; background: #ffffff; height: 150px; width: 100%; text-align: center;">
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
    @elseif($page->id=='7')
        <div class="border-top" style="margin-top: 150px; background: #ffffff; height: 150px; width: 100%; text-align: center;">
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
    @else
        @include('footer')
    @endif

@endsection
