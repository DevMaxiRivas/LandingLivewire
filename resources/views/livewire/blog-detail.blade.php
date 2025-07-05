<main>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{ $article->title }}</h2>
                        <span>{{ $article->created_at->format('d M Y') }} <span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#!"
                                class="ml-1">{{ $article->category->name }}</a>
                        </p>
                    </div>
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            <img loading="lazy" decoding="async"
                                src="{{ $article->image ? asset('storage/' . $article->image) : 'https://media.sproutsocial.com/uploads/2022/05/How-to-post-on-instagram-from-pc.jpg' }}"
                                alt="Post Thumbnail">
                        </div>
                    </div>
                    <div class="content">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
