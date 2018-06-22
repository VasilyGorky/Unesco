@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection

@section('content')
    <div class="container" style="margin-top: 40px;">
            <div class="" style="border-bottom: 1px solid #d6d8db;">
                <p class="btn btn-default"  role="button"><h5>"{{$page->title}}"</h5></p>
            </div>
        <p>{!!  $page->text!!}  </p>

    </div>
@endsection
@section('footer')
    @include('footer')
@endsection
