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
        .clever-catagory {
            height: 400px;
        }
        .clever-catagory h3 {
            color: #1785b0;
        }
        .clever-catagory::after {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            content: '';
            background-color: rgba(215, 224, 252, 0.3);
            z-index: -1;
        }
        .tl {
            display: flex;
            margin-bottom: 2rem;
        }
        .tl--upper .tl__title {
            text-transform: uppercase;
        }
        .tl__title {
            display: inline-block;
            flex: 0 0 auto;
            color: #002236!important;
            line-height: 1.17;
            padding-right: 1.11111rem;
            position: relative;
        }
        .tl__title span {
            color: #1785b0;
        }
    </style>
@endpush
@section('content')

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(/img/bg-img/careers-bg.jpg);">
        <h3>
            Explore Careers at Blueciate
        </h3>
    </div>
    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-30">
        <div class="container-fluid">
            <div class="row">
                <div class="tl tl--upper">
                    <h2 class="tl__title">
                        <span>OPEN</span> VACANCIES
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 pb-5">
                <span><strong>Blueciate</strong></span> team are not just colleagues. We are the best friends ready to step into the breach. The secret of our productivity is constant open-minded communication and creative atmosphere in our green office in the city center.
                </div>
            </div>
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
