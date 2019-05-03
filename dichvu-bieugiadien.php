<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'dịch vụ',
            'src' => 'imgs/banner_trangcon/dichvu-bieugiadien.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Giá điện</a></li>
                <li><span>Biểu giá điện</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">Biểu giá điện</h2>
            <div class="uk-child-width-1-2@m uk-grid-medium" uk-grid="masonry: true">
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Biểu giá bán lẻ điện
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Các ngành sản xuất</li>
                                <li>2. Khối hành chính, sự nghiệp</li>
                                <li>3. Kinh doanh</li>
                                <li>4. Sinh hoạt</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Biểu giá buôn điện
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Nông thôn</li>
                                <li>2. Khu tập thể, cụm dân cư</li>
                                <li>3. Giá buôn điện cho tổ hợp thương mại - dịch vụ - sinh hoạt</li>
                                <li>4. Khu công nghiệp</li>
                                <li>5. Giá buôn điện cho chợ 2.383 đ/kWh</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Giá điện theo hình thức ba giá
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Quy định về giờ</li>
                                <li>2. Đối tượng mua điện theo hình thức ba giá</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Giá điện cho hộ nghèo, thu nhập thấp
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Đối tượng</li>
                                <li>2. Mức hỗ trợ</li>
                                <li>3. Hình thức chi trả</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left-dichvu.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>