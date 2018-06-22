@extends('layouts.app')

@section('content')
    <div class="container" >

        <div style="font-size: 84px;  text-align: center; margin-bottom: 50px;">
            UNESCO
        </div>


        <div align="right">
        {{ $items->links() }}
        </div>

        @foreach($items as $item)
            <div class="" style="border-bottom: 1px solid #d6d8db;">

                <a class="btn btn-default" href="{{ url('items/'.$item->id) }}" role="button"><h2>"{{$item->title}}
                        "</h2></a>
                <p>{{$item->description}}  </p>
                <p><b>Publication date: </b>{{$item->created_at}}</p>

                <div align="left">

                </div>
                <div align="right">
                    <a class="btn btn-default" style="margin-top: -200px;" href="{{ url('items/'.$item->id) }}"
                       role="button">Read article &raquo;</a>
                </div>
            </div>
        @endforeach
        <div align="right">
        {{ $items->links() }}
        </div>
    </div>
@endsection
