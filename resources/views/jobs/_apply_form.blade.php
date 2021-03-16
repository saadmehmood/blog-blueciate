
@push('styles')
    <style>
        .apply-form {

            position: sticky;
            z-index: 1;
            box-shadow: 0 3px 20px rgb(0 0 0 / 15%);
            padding: 35px 50px;
            border-radius: 6px;
            background-color: #ffffff;
            top: 100px;
        }
    </style>
@endpush
<!-- Contact Form -->
<div class="col-12 col-lg-4">
    <div class="apply-form" id="application_form">
        <h4>Apply Now</h4>

        <form method="post" id="upload-image-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <input name="job_id" type="hidden" value="{{ $post->id }}">
                        <input name="first_name" type="text" class="form-control" placeholder="First Name">
                        <p id="first_name_error"></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                        <p id="last_name_error"></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <p id="email_error"></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <input name="phone" type="number" class="form-control" placeholder="Phone">
                        <p id="phone_error"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Upload Resume</label>
                        <input type="file" name="resume" class="form-control" placeholder="Upload Resume">
                        <p id="resume_error"></p>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn clever-btn w-100">Apply Now</button>
                </div>
            </div>
        </form>
    </div>
    <div class="apply-form" id="thanks_message" style="display: none">
        <div class="response__content">
            <h2 class="response__title"><span>Thanks</span> for<br>
                sending resume.</h2>
            <p>We will get back to you as soon as we can.</p>
        </div>
    </div>
</div>
