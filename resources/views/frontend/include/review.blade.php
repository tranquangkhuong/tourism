<section id="review">
    <div class="video-review">
        <div class="grid wide">
            <div class="row">
                <div class="col l-8 l-o-2 c-10 c-o-1">

                    <div class="title">
                        <div class="grid">
                            <div class="wrap-title">
                                <div class="banner-content banner-content-choose">
                                    <h2 class="banner-heading__medium banner-heading--color">Beauty of the world</h2>
                                    <h1 class="banner-heading__big">Go & Discover</h1>
                                    <p class="banner-text-small">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                        elit. Aene an commodo ligula eget dolor. Aenean massa. Cum sociis the</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- video -->
                    <div class="video">
                        <div class="video-frames js-video">
                            <img src="{{ URL::asset('frontend/img/hoi-an-travel.jpg') }}" alt=""
                                class="video-frames__imge" onclick="playVideo()">
                            <span class="video-frames-button">
                                <img src="{{ URL::asset('frontend/img/play-button.png') }}" alt=""
                                    class="video-frames-button__play" onclick="playVideo()">
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal-video js-modal-video-close" onclick="stopVideo()" id="videoModal">
        <div class="video-wrap wy">
            <div class="youtube">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/Ilui-mb3sT0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; controls; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    </div>
</section>
