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
                <li><span>Thư viện video</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin">Thư viện video</h2>
            <iframe width="100%" height="550" src="https://www.youtube.com/embed/aGgrF78zPEE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="tvha_detail uk-margin">
                <h4 class="title_tvha">Tiềm năng từ mô hình năng lượng mặt trời Côn Đảo</h4>
                <p>Côn Đảo hiện vẫn chưa có điện lưới quốc gia và vẫn phải sử dụng điện máy nổ. Tuy nhiên, một phương án khả dĩ đã được tìm ra chính là năng lượng mặt trời. Tuy chưa thể thay thế hoàn toàn điện máy nổ nhưng sự thành công của dự án thí điểm đã mở ra hướng cấp điện cho Côn Đảo nói riêng và các vùng biển đảo nói chung.</p>
                <p>Mặc dù chi phí đầu tư ban đầu cao nhưng Tổng Công ty Điện lực miền Nam vẫn quyết định đầu tư vì thành công của dự án thí điểm về điện năng lượng mặt trời được triển khai trước đó.</p>
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