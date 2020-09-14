<style>
    .zoom {
        transition: transform 1s; /* Animation */
        margin: 0 auto;
    }

    .zoom:hover {
        transform: scale(1.15); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        -webkit-filter: saturate(2);
    }
</style>
@extends('layouts.app')
@section('content')
    <div class="container pb-2 pt-1" style="color: #1d68a7">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/poster/HappyBanner.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/poster/HappyBanner.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/poster/HappyBanner.jpg" alt="Third slide">
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


        <div class="row pt-5 pl-4">

            @foreach(\App\Post::whereIn('user_id', [1])->with('user')->latest()->paginate(8) as $post )
            <a href="/p/{{$post->id}}">
            <div class="col-3 p-1 pr-4">
                <div>
                    <p class="pt-2 pb-2"><b>Product:{{$post->item_name}}</b></p>
                </div>
                <div>
                    <img src="/storage/{{$post->image1}}" class="zoom" style="max-height: 250px">

                </div>
                <div>
                    <p class="pt-4"><b class="" style="display:inline-block">Price:{{$post->price}}BDT</b></p>
                </div>
            </div>
            </a>

            @endforeach

        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php
                $posts = \App\Post::whereIn('user_id', [1])->with('user')->latest()->paginate(8);
                ?>
                {{$posts->links()}}

            </div>

        </div>
    </div>
    <footer>
    @include('layouts.footer')
    </footer>
@endsection





