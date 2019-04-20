<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-thanhtich.png',
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
            <h2 class="uk-text-uppercase title_common">THÀNH TÍCH EVNSPC</h2>
            <div class="uk-flex-middle uk-margin-medium" uk-grid>
                <div class="uk-width-auto@s">
                    <div class="boximg_thanhtic"><img src="imgs/About/thanhtich/img1.png" alt=""></div>
                </div>
                <div class="uk-width-expand@s">
                    <h5 class="uk-text-uppercase title_thanhtic">Anh hùng Lao độngthời kỳ đổi mới (năm 2005)</h5>
                </div>
            </div>
            <div class="uk-flex-middle uk-margin-medium" uk-grid>
                <div class="uk-width-auto@s">
                    <div class="boximg_thanhtic"><img src="imgs/About/thanhtich/img2.png" alt=""></div>
                </div>
                <div class="uk-width-expand@s">
                    <h5 class="uk-text-uppercase title_thanhtic">1 Huân chương Độc lập hạng Nhì</h5>
                    <h5 class="uk-text-uppercase title_thanhtic">1 Huân chương Độc lập hạng Ba</h5>
                </div>
            </div>
            <div class="uk-flex-middle uk-margin-medium" uk-grid>
                <div class="uk-width-auto@s">
                    <div class="boximg_thanhtic"><img src="imgs/About/thanhtich/img3.png" alt=""></div>
                </div>
                <div class="uk-width-expand@s">
                    <h5 class="uk-text-uppercase title_thanhtic">1 Huân chương Lao động hạng Nhất</h5>
                    <h5 class="uk-text-uppercase title_thanhtic">1 Huân chương Lao động hạng Nhì</h5>
                    <h5 class="uk-text-uppercase title_thanhtic">2 Huân chương Lao động hạng Ba</h5>
                    <h5 class="uk-text-uppercase title_thanhtic">1 Huân chương Lao động hạng Nhất (năm 2014)</h5>
                </div>
            </div>
            <div class="uk-flex-middle uk-margin-medium" uk-grid>
                <div class="uk-width-auto@s">
                    <div class="boximg_thanhtic"><img src="imgs/About/thanhtich/img4.png" alt=""></div>
                </div>
                <div class="uk-width-expand@s">
                    <h5 class="uk-text-uppercase title_thanhtic">Cờ Chính phủ (2008)</h5>
                    <h5 class="uk-text-uppercase title_thanhtic">Cờ Thi đua Bộ Công thương (2014)</h5>
                </div>
            </div>
            <div class="uk-section-xsmall"></div>
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