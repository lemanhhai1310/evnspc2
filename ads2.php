<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>Trang chủ - EVNSPC</title>
        <link rel="shortcut icon" href="imgs/favicon-19.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <!--CSS-->
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
        <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/layout.css">
        <!--JS-->
        <script src="assets/jquery/jquery-3.3.1.js"></script>
        <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
        <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
        <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v3.2'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="2428809380682169"
         theme_color="#24892d">
    </div>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<div class="top_header uk-visible@m">
    <div class="uk-container uk-container-large">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Hỗ trợ trực tuyến 24/7: 19001006 - 19009000</a></li>
                </ul>

            </div>
        </nav>
    </div>
</div>
<header id="header" class="uk-position-z-index uk-width-1-1 uk-active" uk-sticky>
    <div class="uk-container uk-container-large">
        <nav class="uk-navbar-container uk-navbar-transparent uk-navbar uk-flex-between" uk-navbar>

            <div class="uk-navbar-left">

                <a class="uk-navbar-item uk-logo logo_f uk-padding-remove-left" href="."><img src="imgs/logo.svg" alt=""></a>

            </div

            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <a href="#">về chúng tôi</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300;">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="vechungtoi-tongquan.php">Tổng quan</a></li>
                                <li><a href="vechungtoi-chinhsachchatluong.php">Chính sách chất lượng</a></li>
                                <li><a href="vechungtoi-quatrinhhinhthanhvaphattrien.php">Quá trình hình thành phát triển</a></li>
                                <li><a href="vechungtoi-bandieuhanh.php">Ban điều hành</a></li>
                                <li><a href="vechungtoi-sodotochuc.php">Sơ đồ tổ chức</a></li>
                                <li><a href="vechungtoi-donvithanhvien.php">Đơn vị thành viên</a></li>
                                <li>
                                    <a href="#">Công bố thông tin</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Thông cáo báo chí</a></li>
                                        <li><a href="vechungtoi-congbothongtinevnspc.php">Công bố thông tin EVN SPC</a></li>
                                        <li><a href="#">Đề án tái cơ cấu doanh nghiệp</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Văn hóa doanh nghiệp</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Tin mới</a></li>
                                        <li><a href="#">Câu chuyện văn hóa</a></li>
                                        <li><a href="#">Văn hóa EVNSPC với Khách hàng</a></li>
                                        <li><a href="#">Gương điển hình</a></li>
                                        <li><a href="#">Sự kiện văn hóa</a></li>
                                    </ul>
                                </li>
                                <li><a href="vechungtoi-thanhtich.php">Thành tích EVNSPC</a></li>
                                <li><a href="vechungtoi-doitac.php">Đối tác EVNSPC</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">lĩnh vực hoạt động</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Sản xuất phân phối, xuất nhập khẩu điện năng</a></li>
                                <li><a href="#">Đầu tư & Phát triển lưới điện</a></li>
                                <li><a href="#">Tư vấn & Thiết kế quy hoạch điện</a></li>
                                <li><a href="#">Ứng dụng công nghệ</a></li>
                                <li><a href="#">Đào tạo & Phát triển nguồn nhân lực</a></li>
                                <li><a href="#">Thị trường điện</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">đầu tư & dự án</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Thông tin dự án</a></li>
                                <li><a href="#">Kêu gọi đầu tư</a></li>
                                <li><a href="#">Quan hệ quốc tế</a></li>
                                <li><a href="#">Tin đầu tư dự án</a></li>
                                <li>
                                    <a href="#">Đấu thầu</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="dautuduan-kehoachdauthau.php">Kế hoạch đấu thầu</a></li>
                                        <li><a href="#">Thông báo mời thầu</a></li>
                                        <li><a href="#">Kết quả lựa chọn nhà thầu</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">an toàn & tiết kiệm điện</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">An toàn điện</a></li>
                                <li><a href="#">Tiết kiệm điện</a></li>
                                <li>
                                    <a href="#">Năng lượng xanh</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Điện áp mái</a></li>
                                        <li><a href="#">Mô hình ESCO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">dịch vụ</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Chương trình tri ân Khách hàng</a></li>
                                <li><a href="#">Dịch vụ điện trực tuyến</a></li>
                                <li><a href="#">Thanh toán trực tuyến</a></li>
                                <li><a href="#">Hỏi đáp dịch vụ điện</a></li>
                                <li>
                                    <a href="#">Giá điện</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Biểu Giá điện</a></li>
                                        <li><a href="#">Thông tin giá điện</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Tư vấn sử dụng điện</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">tin tức & truyền thông</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Tin hoạt động trong EVN SPC</a></li>
                                <li><a href="#">Đảng - Đoàn thể</a></li>
                                <li><a href="#">Hoạt động cộng đồng</a></li>
                                <li><a href="#">Tin ngành điện</a></li>
                                <li><a href="#">PCTT&TKCN</a></li>
                                <li><a href="#">Thư viện ảnh</a></li>
                                <li><a href="#">Thư viện Video</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">liên hệ</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="lienhe-evnspc.php">Liên hệ EVNSPC</a></li>
                                <li><a href="lienhe-lienketnoibo.php">Liên kết nội bộ</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="uk-navbar-nav uk-hidden@m">
                    <li>
                        <a href="#" class="uk-padding-remove-right">
                            <div id="mobile_menu_toggler">
                                <div id="m_nav_menu" class="m_nav">
                                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <?php include('mobile_menu.php'); ?>
    <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

        <div class="uk-container">
            <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Tìm kiếm..." autofocus>
                </form>
            </div>
        </div>

        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

    </div>
    <div class="block-ads uk-position-fixed uk-position-z-index">
        <div class="uk-grid-collapse" hidden uk-grid>
            <div>
                <div class="uk-margin-remove uk-padding-remove" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <a href="#"><img src="imgs/ads/EN/Layer%201.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="uk-grid-collapse uk-child-width-1-2@m" uk-grid>
            <div>
                <div class="uk-margin-remove uk-padding-remove" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <a href="#"><img src="imgs/ads/EN/Layer%205.png" alt=""></a>
                </div>
            </div>
            <div>
                <div class="uk-margin-remove uk-padding-remove" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <a href="#"><img src="imgs/ads/EN/Layer%206.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="uk-grid-collapse uk-child-width-1-3@m" hidden uk-grid>
            <div>
                <div class="uk-margin-remove uk-padding-remove" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <a href="#"><img src="imgs/ads/EN/Layer%202.png" alt=""></a>
                </div>
            </div>
            <div>
                <div class="uk-margin-remove uk-padding-remove" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <a href="#"><img src="imgs/ads/EN/Layer%203.png" alt=""></a>
                </div>
            </div>
            <div>
                <div class="uk-margin-remove uk-padding-remove" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <a href="#"><img src="imgs/ads/EN/Layer%204.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include('fixed1.php'); ?>
<div id="slider_home" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push; min-height: 450; autoplay: true; pause-on-hover: true;">

    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true">
        <li>
            <img src="imgs/slider/slider1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-light" style="width: 100%;">
                <?php include('content_slider.php'); ?>
            </div>
        </li>
        <li>
            <img src="imgs/slider/slider2.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-blue" style="width: 100%;">
                <?php include('content_slider.php'); ?>
            </div>
        </li>
        <li>
            <img src="imgs/slider/slider3.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-light" style="width: 100%;">
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
                        <li><a href="#">thông tin dự án</a></li>
                        <li><a href="#">quan hệ quốc tế</a></li>
                        <li><a href="#">dịch vụ trực tuyến</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
    <a href="#footer" class="icon-scroll uk-position-bottom-center uk-hidden" uk-scroll></a>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large uk-margin-medium">
        <h3 class="title_partner uk-text-uppercase uk-text-center">đối tác</h3>
        <div id="slider_brand" uk-slider="autoplay: true; autoplay-interval: 3000;">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-text-center uk-flex-middle uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-5@l" uk-grid>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/CFE.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/Kepco.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/aes%20dot%20com.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/nepal.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/tenaga.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/CFE.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/Kepco.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/aes%20dot%20com.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/nepal.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="uk-padding">
                                    <img src="imgs/brand/tenaga.png" alt="">
                                </div>
                            </a>
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
            <div class="uk-width-auto@l uk-visible@m">
                <figure class="logo_f uk-invisible">
                    <a href="#"><img src="imgs/logo.svg" alt=""></a>
                </figure>
            </div>
            <div class="uk-width-expand@l">
                <form class="uk-grid-small uk-grid-collapse box_register uk-grid" uk-grid="">
                    <div class="uk-width-expand uk-first-column">
                        <input class="uk-input" type="email" placeholder="Đăng ký email ở đây để nhận các thông tin mới nhất từ EVNSPC">
                    </div>
                    <div class="uk-width-auto">
                        <button type="submit" class="uk-button uk-button-primary">Gửi</button>
                    </div>
                </form>
            </div>
            <div class="uk-width-1-6@l uk-visible@m">
                <figure class="logo_f uk-invisible uk-visible@l">
                    <a href="#"><img src="imgs/logo.svg" alt=""></a>
                </figure>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>