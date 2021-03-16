@extends('layouts.blueciate-2')
@section('content')


    <div class="container" style="background: url('/blueciate/img/Webinar-background.jpg'); color: white">
            <div class="row">
                <div class="col-8 align-self-center" style="margin: 50px auto; text-align: center;">
                <h1>You're all set! We're excited for you to join us at Transform 2021</h1>
                <p style="color: white; font-size: 18px; line-height: 2">Check your inbox for a link to add the event to your calendar, and keep an eye out for more updates via email</p>
                    <a title="Add to Calendar" class="addeventatc" data-id="MD6071291" href="https://www.addevent.com/event/MD6071291" target="_blank" rel="nofollow">Add to Calendar</a>
                </div>
            </div>
        </div>
    @include('layouts.blueciate.contact')
@endsection
