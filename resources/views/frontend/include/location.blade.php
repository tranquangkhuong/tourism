<section id="post-stamp">
    <div class="title">
        <div class="grid">
            <div class="wrap-title">
                <div class="banner-content banner-content-choose">
                    <h2 class="banner-heading__medium banner-heading--color">
                             Tour hót
                    </h2>
                    <h1 class="banner-heading__big">Tour Chọn Nhiều Nhất</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="stamp-photo-list">
        @foreach ($locations as $location)
        <!-- stamp-photo--horizontal active -->
        <div class="stamp-photo-item ">
            <a href="#" class="stamp-photo__link">
                <img class="stamp-photo__img" src="{{ asset($location->image_path) }}"
                    onerror="this.onerror=null;this.src='{{ asset('/images/placeholder600x600.png') }}'" />
                <div class="stamp-photo-info">
                    <h1 class="stamp-info-title">{{ $location->name }}</h1>
                    <p class="stamp-info-content">{{ $location->description }}</p>
                </div>
            </a>
        </div>
        @endforeach

        <div class="stamp-photo-item">
            <a href="#" class="stamp-photo__link">
                <img class="stamp-photo__img" src="{{ asset('frontend/img/stamp3.jpg') }}"
                    onerror="this.onerror=null;this.src='{{ asset('/images/placeholder600x600.png') }}'" />
                <div class="stamp-photo-info">
                    <h1 class="stamp-info-title">{{ $location->name }}</h1>
                    <p class="stamp-info-content">{{ $location->description }}</p>
                </div>
            </a>
        </div>
        <div class="stamp-photo-item">
            <a href="#" class="stamp-photo__link">
                <img class="stamp-photo__img" src="{{ asset('frontend/img/stamp2.jpg') }}"
                    onerror="this.onerror=null;this.src='{{ asset('/images/placeholder600x600.png') }}'" />
                <div class="stamp-photo-info">
                    <h1 class="stamp-info-title">{{ $location->name }}</h1>
                    <p class="stamp-info-content">{{ $location->description }}</p>
                </div>
            </a>
        </div>

    </div>
</section>
