@extends('layouts.blueciate-2')
@section('content')
        <?php
        $images = ['partners/1.PNG', 'partners/2.PNG', 'partners/3.PNG', 'partners/4.PNG','partners/5.PNG', 'partners/6.PNG', 'partners/7.PNG'];
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
