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
    if ($loopIndex%2 === 0) {
    $delay = '250ms';
    } elseif ($loopIndex%2 === 1) {
    $delay = '500ms';
    } else {
    $delay = '750ms';
    }
@endphp
<div class="col-12 col-md-12 col-lg-6">
    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="{{ $delay }}">
        <!-- Course Content -->
        <div class="blog-content">
            <h4 style="font-size: 2rem">{{ $post->title }} </h4>
            <div class="meta d-flex align-items-center">
                Publish Date:
                <strong>{{ humanize_date($post->posted_at) }}</strong>
                &nbsp;&nbsp;Location: <strong>{{ $post->location }}</strong>
            </div>
            <div class="d-flex align-items-center">
            </div>
            <p>{{ \Illuminate\Support\Str::limit(strip_tags(trim(html_entity_decode($post->description))), 180, '...') }}</p>
            <a href="{{ route('careers.show', $post->slug) }}" class="read-more">Read More <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

