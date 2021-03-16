@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['clients/1.PNG','clients/2.PNG', 'clients/3.PNG', 'clients/4.PNG'];
        ?>
        @include('blueciate.image-slider')

        <article id="services" class="hh-services">
            <div class="container">
                <section>
                    <aside class="g lg-twelfths md-one-whole" id="first">
                    </aside>

                </section>
            </div>
        </article>
        @include('layouts.blueciate.contact')
@endsection
