<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-bandieuhanh.png',
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
            <h2 class="uk-text-uppercase title_common">ban điều hành</h2>
            <div class="uk-flex-center uk-margin-large" uk-grid>
                <div class="uk-width-auto">
                    <div class="box1_bdh">
                        <img src="imgs/About/bandieuhanh/nguyenvanhop.png" alt="">
                        <h3 class="title uk-text-uppercase">nguyễn văn hợp</h3>
                        <small>Chủ Tịch Hội Đồng Quản Trị</small>
                    </div>
                </div>
            </div>
            <div class="uk-flex-center uk-margin-large" uk-grid>
                <div class="uk-width-auto">
                    <div class="box1_bdh">
                        <img src="imgs/About/bandieuhanh/nguyenphuocduc.png" alt="">
                        <h3 class="title uk-text-uppercase">nguyễn phước đức</h3>
                        <small>Tổng Giám Đốc</small>
                    </div>
                </div>
            </div>
            <div class="uk-flex-center uk-margin-large" uk-grid>
                <div class="uk-width-auto">
                    <div class="box1_bdh">
                        <img src="imgs/About/bandieuhanh/phamngocle.png" alt="">
                        <h3 class="title uk-text-uppercase">PHẠM NGỌC LỄ</h3>
                        <small>Phó Tổng Giám Đốc Đầu Tư Xây Dựng</small>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="box1_bdh">
                        <img src="imgs/About/bandieuhanh/lamxuantuan.png" alt="">
                        <h3 class="title uk-text-uppercase">LÂM XUÂN TUẤN</h3>
                        <small>Phó Tổng Giám Đốc Kỹ Thuật Sản Xuất</small>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="box1_bdh">
                        <img src="imgs/About/bandieuhanh/nguyenconghau.png" alt="">
                        <h3 class="title uk-text-uppercase">NGUYỄN CÔNG HẦU</h3>
                        <small>Phó Tổng Giám Đốc CNTT</small>
                    </div>
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