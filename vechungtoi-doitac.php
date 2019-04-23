<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-doitac.png',
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
            <h2 class="uk-text-uppercase title_common">đối tác evnspc</h2>
            <?php
            $cars = array
            (
                array(
                    'title' => 'JINED mong muốn thúc đẩy quan hệ hợp tác với EVN',
                    'desc' => 'Ngày 27/3, Tổng giám đốc EVN Trần Đình Nhân đã tiếp và làm việc với ông Shimizu Shigenobu, Tổng giám đốc Công ty Phát triển Năng lượng hạt nhân quốc tế Nhật Bản (JINED).',
                    'src' => 'imgs/About/doitac/img1.jpg',
                ),
                array(
                    'title' => 'EVN và Seychelle: Nhiều triển vọng hợp tác trong lĩnh vực năng lượng tái tạo',
                    'desc' => 'Ngày 26/3, tại Hà Nội, Phó Tổng giám đốc EVN Ngô Sơn Hải đã tiếp và làm việc với ông Nico Barito - Đặc phái viên Tổng thống nước Cộng hòa',
                    'src' => 'imgs/About/doitac/img2.jpg',
                ),
                array(
                    'title' => 'Chủ tịch HĐTV EVN làm việc với lãnh đạo Tập đoàn Doosan',
                    'desc' => 'Ngày 22/3, tại Hà Nội, Chủ tịch HĐTV EVN Dương Quang Thành đã tiếp và làm việc với ông Park In Won, Phó Tổng giám đốc Tập đoàn Công nghiệp nặng và Xây dựng Doosan (Tập đoàn Doosan)..',
                    'src' => 'imgs/About/doitac/img3.jpg',
                ),
                array(
                    'title' => 'EVN sẵn sàng phối hợp để phát triển dự án điện gió Kê Gà',
                    'desc' => 'Đây là khẳng định của Tổng giám đốc EVN Trần Đình Nhân trong buổi tiếp và làm việc với ông Ian Hatton - Chủ tịch Công ty Enterprize Energy, đại diện Tổ hợp các nhà đầu tư dự án điện gió ngoài khơi mũi Kê Gà..',
                    'src' => 'imgs/About/doitac/img4.jpg',
                ),
                array(
                    'title' => 'Hội đồng Kinh doanh Hoa Kỳ - ASEAN làm việc với lãnh đạo EVN',
                    'desc' => 'Ngày 13/3, tại trụ sở Tập đoàn Điện lực Việt Nam, Phó Tổng giám đốc EVN Nguyễn Tài Anh đã tiếp và làm việc với đoàn doanh nghiệp cấp cao Hội đồng Kinh doanh Hoa Kỳ - ASEAN.',
                    'src' => 'imgs/About/doitac/img5.jpg',
                ),
            );
            foreach ($cars as $key => $value) { ?>
            <div class="uk-card card2 uk-card-default uk-grid-collapse uk-margin-medium" uk-grid>
                <div class="uk-width-auto@s uk-card-media-left uk-cover-container">
                    <img src="<?php echo $value['src']; ?>" alt="" uk-cover>
                    <canvas width="456" height="360"></canvas>
                </div>
                <div class="uk-width-expand@s">
                    <div class="uk-card-body uk-height-1-1 uk-flex uk-flex-between uk-flex-column">
                        <div>
                            <time>14:00 - 27/02/2015</time>
                            <h3 class="uk-card-title uk-margin-bottom"><a href="#"><?php echo $value['title']; ?></a></h3>
                            <p><?php echo $value['desc']; ?></p>
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
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>