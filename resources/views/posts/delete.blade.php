@extends('layouts.app')

@section('content')
    <div class="container pb-2 pt-1">
        <div style="color: #1d68a7">
            <div class="row" >
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
            </div>
        </div>

        <form action="" enctype="multipart/form-data" method="post" class="delete_form pt-5">
            @csrf
            <div calss="row">
                <div class="col-8 ">

                    <div class="row">
                        <h3>Delete Item</h3>
                    </div>

                    <div class="form-group row">
                        <label for="item_id" class="col-md-4 col-form-label">Item ID</label>

                        <input id="item_id" type="text" class="form-control
                               @error('item_id') is-invalid
                               @enderror"
                               name="item_id"
                               value="Delete Item"
                               required autocomplete="item_id" autofocus>

                        @error('item_id')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-danger" type="submit">Delete Item</button>

                    </div>

                </div>
            </div>
        </form>

    </div>
    <script>
        $(document).ready(function () {
            $('.delete_form').on('submit',function () {
                if(confirm("Are you sure you want to delete it?")){
                    return true;
                }
                else{
                    return false;
                }
            });

        });
    </script>
    <footer>
        @include('layouts.footer')
    </footer>
@endsection
