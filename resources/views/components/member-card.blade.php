<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
    <div class="card bg-transparent border-0 text-center">
        <div class="card-img">
            <img loading="lazy" decoding="async" src="{{ asset('storage/' . $member->image) }}" alt="Scarlet Pena"
                class="rounded w-100" width="300" height="332">
            <ul class="card-social list-inline">
                @if ($member->fb_url)
                    <li class="list-inline-item"><a class="facebook" href="{{ $member->fb_url }}"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                @endif
                @if ($member->tw_url)
                    <li class="list-inline-item"><a class="twitter" href="{{ $member->tw_url }}"><i
                                class="fab fa-twitter"></i></a>
                    </li>
                @endif
                @if ($member->in_url)
                    <li class="list-inline-item"><a class="instagram" href="{{ $member->in_url }}"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="card-body">
            <h3>{{ $member->name }}</h3>
            <p>{{ $member->designation }}</p>
        </div>
    </div>
</div>
