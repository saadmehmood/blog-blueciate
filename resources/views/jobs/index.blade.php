@extends('layouts.main')
@push('styles')
    <style>
        .single-popular-course img {
            height: 194px;
        }
        .course-content {
            height: 300px;
        }
        .section-padding-30 {
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .tag-item {
            display: inline-block;
            font-size: .66667rem;
            font-weight: 400;
            line-height: 1.43;
            color: #33b44a;
            border-radius: 16px;
            border: solid 2px #33b44a;
            background-color: #fff;
            padding: .22222rem .66667rem;
            margin: 0 .44444rem .44444rem 0;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            text-transform: uppercase;
            transition: background-color .2s ease,color .2s ease;
        }
        .tag-item:hover {
            display: inline-block;
            font-size: .66667rem;
            font-weight: 400;
            line-height: 1.43;
            color: #fff;
            border-radius: 16px;
            border: solid 2px #33b44a;
            background-color: #33b44a;
            padding: .22222rem .66667rem;
            margin: 0 .44444rem .44444rem 0;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            text-transform: uppercase;
            transition: background-color .2s ease,color .2s ease;

        }
        .read-more:hover {
            color: #33b44a;
        }
    </style>
@endpush
@section('content')

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-30">
        <div class="container-fluid">
            <div class="row">
                @foreach($posts as $post)
                    @include('jobs/_show', ['post' => $post])
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms">
                        <a href="#" class="btn clever-btn btn-2">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Course Area End ##### -->
@endsection
