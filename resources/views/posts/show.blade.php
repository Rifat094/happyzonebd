@extends('layouts.app')

@section('content')
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-8">
                <!--img src="/storage/{{$post->image}}" class="w-100" alt=""-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/storage/{{$post->image1}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/storage/{{$post->image2}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/storage/{{$post->image3}}" alt="Third slide">
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
            </div>
            <div class="col-4">

                <div class="d-flex align-items-center-center">
                    <div class="pr-3 pt-4">
                        <h4><b>Item:{{$post->item_name}}</b></h4>
                    </div>
                    <div>
                        <div class="font-weight pt-4">
                            <h4><span class="text-dark"> ID:{{$post->item_id}}</span></h4>
                        </div>
                    </div>
                </div>

                <hr>

                <div>
                    <p>
                    <span class="font-weight-bold pt-3">
                          <h5><span class="text-dark">Price: {{$post->price}} Taka</span></h5>
                    </span>
                        <h7>Item Description: {{$post->caption}}</h7>
                    </p>
                </div>
                <hr>
                <div>
                    <h8>
                        Contact to place order
                        <br>
                        phone:01521329993
                        <br>
                        <a href="https://www.facebook.com/happyzonebd365">
                            Also you can contact us on Facebook
                        </a>
                    </h8>

                </div>

            </div>

        </div>

    </div>
    <footer>
        @include('layouts.footer')
    </footer>
@endsection
