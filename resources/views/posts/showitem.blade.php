<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
    $countryName = $_POST['search'];

    $sql = 'SELECT * FROM posts WHERE item_name = :item_name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['item_name' => $countryName]);
    $row = $stmt->fetch();
} else {
    header('location: .');
    exit();
}
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100" alt="">
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
@endsection
