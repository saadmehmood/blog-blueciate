@push('styles')
<style>
    .info-form-heading {
        color: #22b149;
        font-size: 1.1em;
        text-transform: capitalize;
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .info-form {
        background-color: #F7F7F7;
    }
    .info-form .form-outline {
        width: 80%;
    }
    .info-form-description {
        color: #595757;
        line-height: 1.5em;
        font-family: "Open Sans", sans-serif;
        font-weight: 300;
        font-style: normal;
    }
    .info-form .form-label {
        font-size: 0.8em;
    }
    .info-form .floating-image {
        position: absolute;
        top: 15%;
        left: 78%;
        height: 60%;
        width: 100%;
    }
</style>
@endpush
@extends('layouts.blueciate-2')
@section('content')
        <article id="services" class="hh-services">
            <div class="container">
                <section class="row mx-0">
                        <h3 class="info-form-heading">This guide is designed to explain to your understanding, answer your questions and give you the information you need to accelerate your digital transformation…with BPM!</h3>
                        <p class="info-form-description">
                            AuraQuantic and implementation partner BlueCiate work together for new generation  Business Process Management (BPM) software that empowers businesses to connect people, processes and data within the full enterprise in order to get work done faster and more effectively, while increasing satisfaction and decreasing costs.

                        </p>
                        <div class="info-form col-md-7">
                        <form method="post" action="{{ route('bpmsReadyMail') }}" name="contact"  id="ajax-contact" novalidate="novalidate">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" class="form-control" />
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" class="form-control" />
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="emailAddress">Email Address</label>
                                <input type="text" id="emailAddress" name="emailAddress" class="form-control" />
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control" />
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="company">Company</label>
                                <input type="text" id="company" name="company" class="form-control" />
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="country">Country</label>
                                <input type="text" id="country" name="country" class="form-control" />
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="btnSubmit" class="btn btn-primary">Download</button>
                        </form>
                            <img class="floating-image" src="/blueciate/Images/on-stage.png">
                        </div>

                </section>
            </div>
        </article>
        @include('layouts.blueciate.contact')
@endsection
@push('scripts')
<!-- set form validation -->
<script>
    jQuery(document).ready(function ($) {
        $("#ajax-contact").validate({
            rules: {
                firstName: {
                    required: true,
                    minlength: 2
                },
                lastName: {
                    required: true,
                    minlength: 2
                },
                emailAddress: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 2
                },
                company: {
                    required: true
                }
            },
            messages: {
                firstName: {
                    required: "Please enter a correct name",
                    minlength: "Your bane seens a bit doesn't it?"
                },
                lastName: {
                    required: "Please enter a correct name",
                    minlength: "Your bane seens a bit doesn't it?"
                },
                emailAddress: {
                    required: "please enter your email address",
                    email: "please enter a valid email address"
                },
                phone: {
                    required: "Please enter a phone number"
                },
                company: {
                    required: "please enter company."
                }
            }
        });
    });

</script>
@endpush
