<section class="header-content pb-5">
  <img class="theme-background-img" src="{{asset('images/background.svg')}}" alt="theme background">
  <div class="container my-auto">
    <div class="row mt-5 pt-5 post-container">
        <div class="col-12">
            <div class="post post-full">
                <div class="post-image">
                    <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}" />
                </div>
                <div class="post-data">
                    <div class="post-date">
                        <span class="badge bg-primary rounded-pill">{{$post->created_at->diffForHumans()}}</span>
                    </div>
                    <a class="post-back btn btn-secondary text-white" href="{{route('blog')}}">< Do listy postów</a>
                    <h2 class="post-title my-3">{{$post->title}}</h2>
                    <div class="post-excerpt text-muted">{!! $post->body !!}</div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>