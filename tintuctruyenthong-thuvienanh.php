<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'liên hệ',
            'src' => 'imgs/banner_trangcon/lienhe-lienketnoibo.png',
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
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">Thư viện ảnh</h2>
            <div uk-grid>
                <div class="uk-width-1-3@s">
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Tất cả lĩnh vực</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="uk-button btn1 uk-button-default uk-width-1-1 uk-text-left" style="background-color: #fff;" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="uk-grid-medium uk-child-width-1-2@m" uk-grid>
                <?php
                $cars = array
                (
                    array(
                        'title' => 'Khánh thành, bàn giao Trường Mẫu giáo Sao Mai, tại huyện Đông Hải, Bạc Liêu do EVN SPC tài trợ',
                        'src' => 'imgs/thuvienanh/img1.png',
                    ),
                    array(
                        'title' => '“Trại hè Thanh Đa - 40 mùa hoa”',
                        'src' => 'imgs/thuvienanh/img2.png',
                    ),
                    array(
                        'title' => 'Hội thi thợ giỏi cấp EVN SPC',
                        'src' => 'imgs/thuvienanh/img3.png',
                    ),
                    array(
                        'title' => 'Hội thi “Nét đẹp phụ nữ ngành Điện” EVN SPC',
                        'src' => 'imgs/thuvienanh/img4.png',
                    ),
                    array(
                        'title' => 'Hội Thao EVNSPC',
                        'src' => 'imgs/thuvienanh/img5.png',
                    ),
                    array(
                        'title' => 'Hội nghị Người lao động',
                        'src' => 'imgs/thuvienanh/img6.png',
                    ),
                    array(
                        'title' => 'Ngày hội gia đình EVN SPC',
                        'src' => 'imgs/thuvienanh/img7.png',
                    ),
                    array(
                        'title' => 'Lênh đênh giữa lũ đầu nguồn, căng mình giữ đường dây điện',
                        'src' => 'imgs/thuvienanh/img8.png',
                    ),
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