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
<header id="header" class="uk-position-top uk-position-z-index uk-width-1-1" uk-sticky>
    <div class="uk-container uk-container-large">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">

                <a class="uk-navbar-item uk-logo logo_f uk-padding-remove-left" href="."><img src="imgs/logo.svg" alt=""></a>

            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="#">về chúng tôi</a></li>
                    <li><a href="#">lĩnh vực hoạt động</a></li>
                    <li>
                        <a href="#">đầu tư & dự án</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">an toàn & tiết kiệm điện</a></li>
                    <li><a href="#">dịch vụ</a></li>
                    <li><a href="#">tin tức & truyền thông</a></li>
                    <li><a href="#">liên hệ</a></li>
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
</header>