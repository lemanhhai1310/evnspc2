<?php include('header.php'); ?>
<div id="slider_home" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push; min-height: 450">

    <ul class="uk-slideshow-items">
        <li>
            <img src="imgs/slider/slider1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-light" style="width: 100%;">
                <div class="uk-container uk-container-large">
                    <div class="uk-grid-stack" uk-grid>
                        <div class="uk-width-1-2@m">
                            <h1 class="title_slide_h" uk-scrollspy="cls: uk-animation-slide-left; target: > span; delay: 500; repeat: true">
                                <span>Năng lượng xanh</span> <br>
                                <span>cho phát triển</span> <br>
                                <span>kinh tế bền vững</span>
                            </h1>
                            <a href="#" class="uk-button uk-button-secondary btn_slide_h">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="imgs/slider/slider2.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-blue" style="width: 100%;">
                <div class="uk-container uk-container-large">
                    <div class="uk-grid-stack" uk-grid>
                        <div class="uk-width-1-2@m">
                            <h1 class="title_slide_h" uk-scrollspy="cls: uk-animation-slide-left; target: > span; delay: 500; repeat: true">
                                <span>Năng lượng xanh</span> <br>
                                <span>cho phát triển</span> <br>
                                <span>kinh tế bền vững</span>
                            </h1>
                            <a href="#" class="uk-button uk-button-secondary btn_slide_h">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="imgs/slider/slider3.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-light" style="width: 100%;">
                <div class="uk-container uk-container-large">
                    <div class="uk-grid-stack" uk-grid>
                        <div class="uk-width-1-2@m">
                            <h1 class="title_slide_h" uk-scrollspy="cls: uk-animation-slide-left; target: > span; delay: 500; repeat: true">
                                <span>Năng lượng xanh</span> <br>
                                <span>cho phát triển</span> <br>
                                <span>kinh tế bền vững</span>
                            </h1>
                            <a href="#" class="uk-button uk-button-secondary btn_slide_h">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center uk-position-z-index"></ul>

</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <h3 class="title_partner uk-text-uppercase uk-text-center">OUR partners</h3>
        <div id="slider_brand" uk-slider="autoplay: true; autoplay-interval: 3000;">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-text-center uk-flex-middle uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                        <li>
                            <img src="imgs/brand/CFE.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/Kepco.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/aes%20dot%20com.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/nepal.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/tenaga.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/CFE.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/Kepco.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/aes%20dot%20com.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/nepal.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/brand/tenaga.png" alt="">
                        </li>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

        </div>
    </div>
</div>
<?php include('footer.php'); ?>