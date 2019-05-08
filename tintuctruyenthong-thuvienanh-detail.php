<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'TIN TỨC & TRUYỀN THÔNG',
            'src' => 'imgs/banner_trangcon/tintuctruyenthong-thuvienhinhanh.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Tin tức & Truyền thông</a></li>
                <li><span>Thư viện ảnh</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin">Thư viện ảnh</h2>
            <div id="sync1" class="owl-carousel owl-theme uk-margin">
                <?php
                $src = array
                (
                    'imgs/thuvienanh/img1.png',
                    'imgs/thuvienanh/img2.png',
                    'imgs/thuvienanh/img3.png',
                    'imgs/thuvienanh/img4.png',
                    'imgs/thuvienanh/img5.png',
                    'imgs/thuvienanh/img6.png',
                    'imgs/thuvienanh/img7.png',
                    'imgs/thuvienanh/img8.png',
                    'imgs/thuvienanh/img9.png',
                    'imgs/thuvienanh/img10.png',
                );
                foreach ($src as $k => $v) { ?>
                <div class="item">
                    <div class="uk-cover-container">
                        <img src="<?= $v ?>" alt="" uk-cover>
                        <canvas width="1137" height="650"></canvas>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div id="sync2" class="owl-carousel owl-theme uk-margin">
                <?php
                $src = array
                (
                    'imgs/thuvienanh/img1.png',
                    'imgs/thuvienanh/img2.png',
                    'imgs/thuvienanh/img3.png',
                    'imgs/thuvienanh/img4.png',
                    'imgs/thuvienanh/img5.png',
                    'imgs/thuvienanh/img6.png',
                    'imgs/thuvienanh/img7.png',
                    'imgs/thuvienanh/img8.png',
                    'imgs/thuvienanh/img9.png',
                    'imgs/thuvienanh/img10.png',
                );
                foreach ($src as $k => $v) { ?>
                <div class="item">
                    <div class="uk-cover-container">
                        <img src="<?= $v ?>" alt="" uk-cover>
                        <canvas width="116" height="80"></canvas>
                    </div>
                </div>
                <?php } ?>
            </div>
            <script>
                $( document ).ready(function() {
                    // Run code
                    var sync1 = $("#sync1");
                    var sync2 = $("#sync2");
                    var slidesPerPage = 8; //globaly define number of elements per page
                    var syncedSecondary = true;

                    sync1.owlCarousel({
                        items: 1,
                        slideSpeed: 2000,
                        nav: true,
                        autoplay: true,
                        dots: false,
                        loop: true,
                        responsiveRefreshRate: 200,
                        navText: ['<span uk-icon="chevron-left"></span>', '<span uk-icon="chevron-right"></span>'],
                    }).on('changed.owl.carousel', syncPosition);

                    sync2
                        .on('initialized.owl.carousel', function() {
                            sync2.find(".owl-item").eq(0).addClass("current");
                        })
                        .owlCarousel({
                            items: slidesPerPage,
                            dots: false,
                            nav: false,
                            smartSpeed: 200,
                            margin: 15,
                            slideSpeed: 500,
                            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                            responsiveRefreshRate: 100,
                            navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                            responsive : {
                                // breakpoint from 0 up
                                0 : {
                                    // items: slidesPerPage -1,
                                    // slideBy: slidesPerPage - 1,
                                    margin: 5,
                                },
                                // breakpoint from 480 up
                                480 : {

                                },
                                // breakpoint from 768 up
                                768 : {

                                }
                            },
                        }).on('changed.owl.carousel', syncPosition2);

                    function syncPosition(el) {
                        //if you set loop to false, you have to restore this next line
                        //var current = el.item.index;

                        //if you disable loop you have to comment this block
                        var count = el.item.count - 1;
                        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                        if (current < 0) {
                            current = count;
                        }
                        if (current > count)  {
                            current = 0;
                        }

                        //end block

                        sync2
                            .find(".owl-item")
                            .removeClass("current")
                            .eq(current)
                            .addClass("current");
                        var onscreen = sync2.find('.owl-item.active').length - 1;
                        var start = sync2.find('.owl-item.active').first().index();
                        var end = sync2.find('.owl-item.active').last().index();

                        if (current > end) {
                            sync2.data('owl.carousel').to(current, 100, true);
                        }
                        if (current < start) {
                            sync2.data('owl.carousel').to(current - onscreen, 100, true);
                        }
                    }

                    function syncPosition2(el) {
                        if (syncedSecondary) {
                            var number = el.item.index;
                            sync1.data('owl.carousel').to(number, 100, true);
                        }
                    }

                    sync2.on("click", ".owl-item", function(e) {
                        e.preventDefault();
                        var number = $(this).index();
                        sync1.data('owl.carousel').to(number, 300, true);
                    });
                });
            </script>
            <div class="tvha_detail">
                <h4 class="title_tvha">Hội thợ giỏi cấp EVN SPC</h4>
                <p>Hội thi là dịp để rà soát và phân loại chất lượng lao động theo từng nhóm nghề, từ đó giúp Ban lãnh đạo Công ty có kế hoạch đào tạo và bồi dưỡng chuyên môn, đảm bảo các công nhân được làm đúng ngành nghề, phát huy hết sở trường, tăng năng suất lao động. Ngoài ra sẽ chọn được những thí sinh vững lý thuyết, chắc tay nghề để chuẩn bị cho kỳ thi thợ giỏi cấp Tổng Công ty</p>
            </div>
            <h3 class="title2">ALBUM HÌNH ẢNH LIÊN QUAN</h3>
            <div class="uk-grid-medium uk-child-width-1-2@m" uk-grid>
                <?php
                $cars = array
                (
                    array(
                        'title' => 'EVN SPC ra mắt đội Hotline',
                        'src' => 'imgs/thuvienanh/img9.png',
                    ),
                    array(
                        'title' => 'Những người giữ điện ở Côn Đảo',
                        'src' => 'imgs/thuvienanh/img10.png',
                    ),
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="card1_tin">
                        <div class="uk-cover-container uk-margin-small-bottom">
                            <img src="<?php echo $value['src']; ?>" alt="" uk-cover>
                            <canvas width="554" height="340"></canvas>
                        </div>
                        <h5 class="title1_tin"><a href="#"><?php echo $value['title']; ?></a></h5>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="uk-section-xsmall">
                <ul class="uk-pagination uk-flex-center" uk-margin>
                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span>7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </div>
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left-tintuctruyenthong.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>