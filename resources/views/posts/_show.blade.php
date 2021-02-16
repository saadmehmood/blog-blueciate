{{--<div class="card">--}}
{{--  @if ($post->hasThumbnail())--}}
{{--    <a href="{{ route('posts.show', $post)}}">--}}
{{--      {{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top']) }}--}}
{{--    </a>--}}
{{--  @endif--}}

{{--  <div class="card-body">--}}
{{--    <h4 v-pre class="card-title">{{ link_to_route('posts.show', $post->title, $post) }}</h4>--}}

{{--    <p class="card-text"><small v-pre class="text-muted">{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</small></p>--}}

{{--    <p class="card-text">--}}
{{--      <small class="text-muted">{{ humanize_date($post->posted_at) }}</small><br>--}}
{{--      <small class="text-muted">--}}
{{--        <i class="fa fa-comments-o" aria-hidden="true"></i> {{ $post->comments_count }}--}}
{{--        <like--}}
{{--          :likes-count="{{ $post->likes_count }}"--}}
{{--          :liked="{{ json_encode($post->isLiked()) }}"--}}
{{--          :item-id="{{ $post->id }}"--}}
{{--          item-type="posts"--}}
{{--          :logged-in="{{ json_encode(Auth::check()) }}"--}}
{{--        />--}}
{{--      </small>--}}
{{--    </p>--}}
{{--  </div>--}}
{{--</div>--}}


<!-- Single Popular Course -->
@php
$loopIndex = $loop->index;
    if ($loopIndex%3 === 0) {
    $delay = '250ms';
    } elseif ($loopIndex%3 === 1) {
    $delay = '500ms';
    } else {
    $delay = '750ms';
    }
@endphp
<div class="col-12 col-md-6 col-lg-3">
    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="{{ $delay }}">
        @if ($post->hasThumbnail())
            {{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top']) }}
        @else
            <img src="/img/bg-img/c1.jpg" alt="">
        @endif
        <!-- Course Content -->
        <div class="course-content">
            <h4>{{ link_to_route('posts.show', $post->title, $post) }} </h4>
            <div class="meta d-flex align-items-center">
                <a href="#">{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">{{ humanize_date($post->posted_at) }}</a>
            </div>
            <div class="d-flex align-items-center">
            @if ($post->tags())
                @foreach($post->tags as $tag)
                        <a href="#"class="tag-item">{{ $tag->name }}</a>
                @endforeach
            @endif
            </div>
            <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 180, '...') }}</p>
            <a href="{{ route('posts.show', $post->slug) }}" class="read-more">Read More <i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- Seat Rating Fee -->
        <div class="seat-rating-fee d-flex justify-content-between">
            <div class="seat-rating h-100 d-flex align-items-center">
                <div class="seat">
                    <i class="fa fa-user" aria-hidden="true"></i> 10
                </div>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                </div>
            </div>
            <div class="course-fee h-100">
                <a href="#" class="free">Free</a>
            </div>
        </div>
    </div>
</div>

