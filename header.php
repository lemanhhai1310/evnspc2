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
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
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
                                <li><a href="#">Quá trình hình thành phát triển</a></li>
                                <li><a href="vechungtoi-bandieuhanh.php">Ban điều hành</a></li>
                                <li><a href="#">Sơ đồ tổ chức</a></li>
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
                                <li><a href="vechungtoi-thanhtic.php">Thành tích EVNSPC</a></li>
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
                                        <li><a href="#">Kế hoạch đấu thầu</a></li>
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
                                <li><a href="#">Liên hệ EVNSPC</a></li>
                                <li><a href="#">Liên kết nội bộ</a></li>
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
</header>
<?php include('fixed1.php'); ?>