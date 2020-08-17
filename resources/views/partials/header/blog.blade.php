<section class="header-content pb-5">
  <img class="theme-background-img" src="{{asset('images/background.svg')}}" alt="theme background">
  <div class="container my-auto">
    <div class="row mt-5 pt-5 post-container">
        @foreach($posts as $post)
            <div class="post">
                <div class="post-image">
                    <a href="{{route('post', [ 'post' => $post->slug])}}">
                        <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}" />
                    </a>
                </div>
                <div class="post-data">
                    <div class="post-date">
                        <span class="badge bg-primary rounded-pill">{{$post->created_at->diffForHumans()}}</span>
                    </div>
                    <a class="text-decoration-none" href="{{route('post', [ 'post' => $post->slug])}}">
                        <h2 class="post-title my-3">{{$post->title}}</h2>
                    </a>
                    <div class="post-excerpt text-muted">{{$post->excerpt}}
                        <div><a class="btn-secondary btn text-white mt-3" href="{{route('post', [ 'post' => $post->slug])}}">Zobacz więcej ></a></div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center my-5">
            {{ $posts->links() }}
        </div>
    </div>
  </div>
</section>