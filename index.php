<?php include('header.php'); ?>
<div id="slider_home" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push; min-height: 450">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
        <li>
            <img src="imgs/slider/slider1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-light" style="width: 100%;">
                <?php include('content_slider.php'); ?>
            </div>
        </li>
        <li>
            <img src="imgs/slider/slider2.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-blue" style="width: 100%;">
                <?php include('content_slider.php'); ?>
            </div>
        </li>
        <li>
            <img src="imgs/slider/slider3.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-light" style="width: 100%;">
                <?php include('content_slider.php'); ?>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center uk-position-z-index"></ul>

    <div id="menu_link_slide" class="uk-position-bottom uk-visible@m">
        <div class="uk-container uk-container-large">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">thông tin dự án</a></li>
                        <li><a href="#">quan hệ quốc tế</a></li>
                        <li><a href="#">dịch vụ trực tuyến</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
    <a href="#footer" class="icon-scroll uk-position-bottom-center" uk-scroll></a>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large uk-margin-medium">
        <h3 class="title_partner uk-text-uppercase uk-text-center">OUR partners</h3>
        <div id="slider_brand" uk-slider="autoplay: true; autoplay-interval: 3000;">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-text-center uk-flex-middle uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                        <li>
                            <a href=""><img src="imgs/brand/CFE.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/Kepco.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/aes%20dot%20com.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/nepal.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/tenaga.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/CFE.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/Kepco.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/aes%20dot%20com.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/nepal.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="imgs/brand/tenaga.png" alt=""></a>
                        </li>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left uk-position-small uk-margin-remove-left uk-margin-remove-right uk-padding-remove-left uk-padding-remove-right" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-margin-remove-left uk-margin-remove-right uk-padding-remove-left uk-padding-remove-right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

        </div>
    </div>
    <div class="uk-container uk-container-large">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-auto@l">
                <figure class="logo_f uk-invisible uk-visible@l">
                    <a href="#"><img src="imgs/logo.svg" alt=""></a>
                </figure>
            </div>
            <div class="uk-width-expand@l">
                <form class="uk-grid-small uk-grid-collapse box_register uk-grid" uk-grid="">
                    <div class="uk-width-expand uk-first-column">
                        <input class="uk-input" type="email" placeholder="Đăng kí email ở đây">
                    </div>
                    <div class="uk-width-auto">
                        <button type="submit" class="uk-button uk-button-primary">Gửi</button>
                    </div>
                </form>
            </div>
            <div class="uk-width-auto@l">
                <figure class="logo_f uk-invisible uk-visible@l">
                    <a href="#"><img src="imgs/logo.svg" alt=""></a>
                </figure>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>