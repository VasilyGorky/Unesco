@extends('layouts.site')

@section('sidebar')
    @include('site.sidebar')
@endsection
@section('content')

    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 " src="{{ asset('/img/2k.png') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background: black; font-size: 25px; color: white;">
                        <p>В 1998 году в КемГУ была создана 17-ая в России кафедра ЮНЕСКО по Новым Информационным Технологиям в
                            образовании и науке.</p></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/img/4k.png') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background: black; font-size: 25px; color: white;">
                        <p> Соглашение об открытии было подписано 22.03.98 г. генеральным секретарем ЮНЕСКО Федерико Майором и
                            ректором КемГУ Ю.А. Захаровым.</p></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/img/3k.png') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background: black; font-size: 20px; color: white;">
                        <p>Кафедра была создана как центр академической мобильности в области разработки и сопровождения
                            информационных технологий, а также обучения и переподготовки специалистов по различным направлениям,
                            используя информационные технологии в научной, образовательной и производственной деятельности.</p></div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->isAdmin() )
            <center>
                <div><a class="btn btn-default" href="{{ url('admin/item') }}" role="button"><h2>Перейти в
                            панель администратора</h2></a></div>
            </center>

        @endif


        <center>

        <div align="left" style="margin-left: 50px; margin-right: 50px; font-size: 25px; border-bottom: 5px solid black;   ">
            Новостная лента
        </div>
        </center>
        <center>
            <div align="" style="margin-top: 50px;  margin-left: 48%">
                {{ $items->links() }}
            </div>
        </center>

        @foreach($items as $item)
            @if($item->status==true)
        <div class="card-deck col-md-4 col-sm-12 col-xs-12 my-col text-center" style="width: 400px;  margin-left: 40px;  display: inline-block;">

            <div class="card" style=" height: 450px; margin-top: 20px;">

                <a href={{ url('item/'.$item->id) }}>
                    @if($item->image != null)
                    <img class="card-img-top " src="{{asset('img/'.$item->image)}}"  width="338" height="190" alt="Card image cap">
                        @else
                        <img class="card-img-top " src="{{asset('img/Unesco-Logo.png')}}"  alt="Card image cap">
                    @endif
                </a>
                <div class="card-body">
                    <h7 class="card-title"> <b><a href={{ url('item/'.$item->id) }}> {{$item->title}} </a></b></h7>
                    <p class="card-text">{{$item->description}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Добавлено: {{$item->created_at}}</small>
                </div>

            </div>

        </div>
@endif
        @endforeach

    </div>
    <center>
        <div align="" style="margin-top: 100px;  margin-left: 48%">
            {{ $items->links() }}
        </div>
    </center>

@endsection

@section('footer')
    @include('footer')
@endsection