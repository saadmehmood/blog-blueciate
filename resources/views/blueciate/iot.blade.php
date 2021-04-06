@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['iot-1.jpg', 'iot-2.jpg', 'iot-3.jpg'];
        ?>
        @include('blueciate.image-slider')

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 px-0">
                    <h2 class="">IoT connects physical machines and manufacturing equipment with the digital world of cloud, analytics, artificial intelligence, and more.</h2>
                </div>
            </div>
        </div>
@endsection
