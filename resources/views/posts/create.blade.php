@extends('layouts.app')

@section('content')
    <div class="container pt-1 pb-2">
        <div style="color: #1d68a7">
            <div class="row pt-1" >
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
        <form action="/p" enctype="multipart/form-data" method="post" class="pt-5">
            @csrf
            <div calss="row">
                <div class="col-8 ">

                    <div class="row">
                        <h3>Add New Post</h3>
                    </div>

                    <div class="form-group row">
                        <label for="item_id" class="col-md-4 col-form-label">Item ID</label>

                        <input id="caption" type="text" class="form-control
                               @error('item_id') is-invalid
                               @enderror"
                               name="item_id"
                               value="{{ old('item_id') }}"
                               required autocomplete="item_id" autofocus>

                        @error('item_id')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="item_name" class="col-md-4 col-form-label">Item name</label>

                        <input id="item_name" type="text" class="form-control
                               @error('item_name') is-invalid
                               @enderror"
                               name="item_name"
                               value="{{ old('item_name') }}"
                               required autocomplete="item_name" autofocus>

                        @error('item_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label">Price</label>

                        <input id="price" type="number" class="form-control
                               @error('price') is-invalid
                               @enderror"
                               name="price"
                               value="{{ old('price') }}"
                               required autocomplete="caption" autofocus>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Description</label>

                        <input id="caption" type="text" class="form-control
                               @error('caption') is-invalid
                               @enderror"
                               name="caption"
                               required autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <div class="row">
                        <label for="image1" class="col-md-4 col-form-label">Post Image 1</label>
                        <input type="file" class="form-control-file" id="image1" name="image1">

                        @error('image1')

                        <strong>{{ $message }}</strong>

                        @enderror
                    </div>
                    <div class="row">
                        <label for="image2" class="col-md-4 col-form-label">Post Image 2</label>
                        <input type="file" class="form-control-file" id="image2" name="image2">

                        @error('image2')

                        <strong>{{ $message }}</strong>

                        @enderror
                    </div>
                    <div class="row">
                        <label for="image3" class="col-md-4 col-form-label">Post Image 3</label>
                        <input type="file" class="form-control-file" id="image3" name="image3">

                        @error('image3')

                        <strong>{{ $message }}</strong>

                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Add New Item</button>

                    </div>

                </div>
            </div>
        </form>
    </div>
        <footer>
            @include('layouts.footer')
        </footer>
@endsection

