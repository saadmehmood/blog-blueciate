@extends('layouts.main')
@section('content')



    <!-- ##### Single Course Intro Start ##### -->
    <div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url({{ asset('img/banner-img/careers-1024x339.jpg') }}); background-repeat: no-repeat; background-size: cover;">

    </div>
    <!-- ##### Single Course Intro End ##### -->
    <!-- ##### Courses Content Start ##### -->
    <div class="single-course-content section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">

                        <div class="clever-tabs-content">

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="clever-description">

                                        <!-- About Course -->
                                        <div class="about-course mb-30">
                                            <h4>{{ $post->title }}</h4>
                                            <p>
                                                {!! $post->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                @include('jobs/_apply_form', ['post' => $post])

            </div>
        </div>
    </div>
    <!-- ##### Courses Content End ##### -->


{{--  @include ('comments/_list')--}}
@endsection

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#upload-image-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $('#first_name_error').text('');
            $('#last_name_error').text('');
            $('#email_error').text('');
            $('#phone_error').text('');
            $('#file_error').text('');

            $.ajax({
                type:'POST',
                url: `/upload-images`,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response) {
                        this.reset();
                        $('#application_form').hide();
                        $('#thanks_message').show();
                    }
                },
                error: function(response){
                    console.log(response.errors);
                    $('#first_name_error').text(response.responseJSON.errors.first_name);
                    $('#last_name_error').text(response.responseJSON.errors.last_name);
                    $('#email_error').text(response.responseJSON.errors.email);
                    $('#phone_error').text(response.responseJSON.errors.phone);
                    $('#resume_error').text(response.responseJSON.errors.resume);
                }
            });
        });

    </script>
@endpush
