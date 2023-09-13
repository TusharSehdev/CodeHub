@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>cart list</h2>
                <a class="btn btn-success" href="/ordernow">Order Now</a>
                <br><br>
                <div class="">
                    @foreach ($products as $item)
                        <div class="row searched-item cart-list-divider">
                            <div class="col-sm-4">
                                <a href="detail/{{ $item->id }}"> <img class="trending-img" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <h2>{{ $item->name }}</h2>
                                    <h5>{{ $item->description }}</h5>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <a href="/removecart/{{$item->cart_id}}">
                                    <button class="btn btn-warning">Remove</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <a class="btn btn-success" href="/ordernow">Order Now</a>

                </div>
            </div>
        </div>
    </div>
@endsection
