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
                <div class="col-12" style="display: none">
                    <div class="blog-catagories mb-30 d-flex flex-wrap justify-content-between">

                        <!-- Single Catagories -->
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc1.jpg);">
                            <a href="#">
                                <h6>Art &amp; Design</h6>
                            </a>
                        </div>

                        <!-- Single Catagories -->
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc2.jpg);">
                            <a href="#">
                                <h6>Business</h6>
                            </a>
                        </div>

                        <!-- Single Catagories -->
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc3.jpg);">
                            <a href="#">
                                <h6>IT &amp; Software</h6>
                            </a>
                        </div>

                        <!-- Single Catagories -->
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc4.jpg);">
                            <a href="#">
                                <h6>Languages</h6>
                            </a>
                        </div>

                        <!-- Single Catagories -->
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc5.jpg);">
                            <a href="#">
                                <h6>Programming Languages</h6>
                            </a>
                        </div>

                        <!-- Single Catagories -->
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc6.jpg);">
                            <a href="#">
                                <h6>psychology</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
{{--        </div>--}}
{{--    </section>--}}

{{--    <!-- ##### Popular Course Area Start ##### -->--}}
{{--    <section class="popular-courses-area section-padding-30">--}}
{{--        <div class="container">--}}


            @include ('posts/_search_form')

            <div class="d-flex justify-content-between">
                <div class="p-2">
                    @if (request()->has('q'))
                        <h2>{{ trans_choice('posts.search_results', $posts->count(), ['query' => request()->input('q')]) }}</h2>
                    @else
                        <h2>@lang('posts.last_posts')</h2>
                    @endif
                </div>

                <div class="p-2">
                    <a href="{{ route('posts.feed') }}" class="pull-right" data-turbolinks="false">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    @include('posts/_show', ['post' => $post])
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
