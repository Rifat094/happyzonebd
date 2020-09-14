@extends('layouts.app')

@section('content')
    <div class="container pb-2 pt-1">

        <div class="offset-5" >
            <h3>
                Your Search Results
            </h3>

        </div>
        <br>


        <div class="row p-3 offset-1 ">
            <div class="col-6 pb-2 border-bottom">
                <h5>Item Name</h5>
            </div>
            <div class="col-3 pb-2 border-bottom">
                <h5> Price</h5>
            </div>
            <div class="col-3 pb-2 border-bottom">
                <h5> Image</h5>
            </div>

            @foreach($products as $product)
                <div class="col-6 pb-1 pt-4">
                    <a href="/p/{{$product->id}}" style="color: #1b1e21"><h5>{{$product->item_name}}</h5></a>
                </div>
                <div class="col-3 pb-1 pt-4">
                    <a href="/p/{{$product->id}}" style="color: #1b1e21"><h5> {{$product->price}} Taka</h5></a>
                </div>
                <div class="col-3 pb-1 pt-4">
                    <a href="/p/{{$product->id}}"><img src="/storage/{{$product->image1}}" style="max-height: 100px"></a>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                {{$products->appends(request()->input())->links()}}

            </div>

        </div>
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
@endsection
