<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-chinhsachchatluong.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Về chúng tôi</a></li>
                <li><span>Chính sách chất lượng</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">chính sách chất lượng</h2>
            <?php
            $cars = array
            (
                'imgs/About/chinhsachchatluong/img1.jpg',
                'imgs/About/chinhsachchatluong/img2.jpg',
                'imgs/About/chinhsachchatluong/img3.jpg',
                'imgs/About/chinhsachchatluong/img4.jpg',
                'imgs/About/chinhsachchatluong/img5.jpg',
            );
            foreach ($cars as $key => $value) { ?>
            <div class="uk-card card2 uk-card-default uk-grid-collapse uk-margin-medium" uk-grid>
                <div class="uk-width-auto@s uk-card-media-left uk-cover-container">
                    <img src="<?php echo $value; ?>" alt="" uk-cover>
                    <canvas width="456" height="360"></canvas>
                </div>
                <div class="uk-width-expand@s">
                    <div class="uk-card-body uk-height-1-1 uk-flex uk-flex-between uk-flex-column">
                        <div>
                            <time>14:00 - 27/02/2015</time>
                            <h3 class="uk-card-title uk-margin-bottom"><a href="#">Chính sách chất lượng 2018</a></h3>
                            <p>Tiếp tục duy trì Chính sách chất lượng (CSCL) như các năm vừa qua, Tổng Giám đốc Tổng Công ty Điện lực miền Nam đã công bố CSCL của Tổng Công ty năm 2019 tại Quyết định số 551/QĐ-...</p>
                        </div>
                        <a href="#" class="uk-link uk-text-uppercase">xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
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
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside>
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>