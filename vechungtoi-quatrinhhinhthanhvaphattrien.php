<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-quatrinhhinhthanhvaphattrien.png',
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
                <li><span>Quá trình hình thành và phát triển</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">Quá Trình Hình Thành Và Phát Triển</h2>
            <?php
            $cars = array
            (
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img1.jpg',
                    'title' => 'Giai đoạn từ tháng 4/1975 – 7/1976',
                    'desc' => 'Tháng 04/1975 – 07/1975: Tiếp quảnTiểu Ban Quân quản công nghiệp thuộc Ủy ban Quân quản Thành phố tiếp quản Công ty Điện Lực Việt Nam (CĐV); đoàn gồm 61 đồng chí..…',
                    'time' => '03:28 - 23/12/2014',
                ),
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img2.jpg',
                    'title' => 'Thời kỳ từ tháng 8/1976 – 4/1981: Công Ty Điện Lực Miền Nam',
                    'desc' => 'Ngày 7/8/1976 Bộ Trưởng Bộ Điện và Than ra Quyết định số 1592/QĐ-TCCB.3 về việc đổi tên Tổng cục Điện lực thành Công ty Điện lực Miền Nam, chịu trách nhiệm quản lý điện từ Thuận Hải, Lâm Đồng đến Minh Hải..',
                    'time' => '10:41 - 23/12/2014',
                ),
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img3.jpg',
                    'title' => 'Thời Kỳ Từ Tháng 5/1981 – 3/2010: Công Ty Điện Lực 2',
                    'desc' => 'Ngày 9/5/1981 Công ty Điện lực Miền Nam được đổi tên thành Công ty Điện lực 2 theo Quyết định số 15/ĐL/TCCB.3 của Bộ Trưởng Bộ Điện lực.…',
                    'time' => '03:28 - 23/12/2014',
                ),
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img4.jpg',
                    'title' => 'Thời kỳ từ tháng 4/2010 -  3/2015: Tổng Công Ty Điện Lực Miền Nam',
                    'desc' => 'Tổng Công ty Điện lực miền Nam được thành lập theo Văn bản số 60/TTg-ĐMDN ngày 12/01/2010 của Thủ tướng Chính phủ về việc thành lập các Tổng Công ty quản lý và phân phối điện trực thuộc Tập đoàn Điện lực Việt Nam ...',
                    'time' => '10:26 - 23/12/2014',
                ),
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img5.jpg',
                    'title' => 'Thời kỳ từ tháng 3/2015- 12/2016',
                    'desc' => 'Bộ máy tổ chức của Tổng Công ty gồm 17 Ban nghiệp vụ, Văn phòng Tổng Công ty; 21 Công ty Điện lực Tỉnh/ Thành phố và Công ty TNHH MTV Điện lực Đồng Nai; 8 đơn vị phụ trợ: Công ty Thí nghiệm điện miền Nam, Công ty TNHH MTV Tư vấn Xây dựng điện miền Nam..',
                    'time' => '09:48 - 23/12/2014',
                ),
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img6.jpg',
                    'title' => 'Thời kỳ từ tháng 1/2017 - 7/2018',
                    'desc' => 'Bộ máy tổ chức của Tổng Công ty gồm 17 Ban nghiệp vụ, Văn phòng Tổng Công ty; 21 Công ty Điện lực Tỉnh/ Thành phố và Công ty TNHH MTV Điện lực Đồng Nai; 8 đơn vị phụ trợ: Công ty Thí nghiệm điện miền Nam, Công ty TNHH MTV Tư vấn Xây dựng điện miền Nam...',
                    'time' => '09:48 - 23/12/2014',
                ),
                array(
                    'src' => 'imgs/About/quatrinhhinhthanhvaphattrien/img7.jpg',
                    'title' => 'Thời kỳ từ tháng 8/2018 đến nay',
                    'desc' => 'Bộ máy tổ chức của Tổng Công ty gồm 17 Ban nghiệp vụ, Văn phòng Tổng Công ty; 21 Công ty Điện lực Tỉnh/ Thành phố và Công ty TNHH MTV Điện lực Đồng Nai; 8 đơn vị phụ trợ...',
                    'time' => '09:48 - 23/12/2014',
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
                            <time><?php echo $value['time']; ?></time>
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
            <aside>
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>