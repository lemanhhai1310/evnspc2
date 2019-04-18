<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-tongquan.png',
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
                <li><span>Tổng quan</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">tổng quan</h2>
            <p class="desc_c">Thực hiện văn bản số 60/TTg – ĐMDN ngày 12-01-2010 của Thủ tướng Chính phủ và Quyết định số 799/QD9-BCT ngày 05-02-2010 của Bộ Công thương về việc thành lập Công ty mẹ - Tổng công ty Điện lực miền Nam thuộc Tập đoàn Điện lực Việt Nam trên cơ sở tổ chức lại Công ty Điện lực 2 và tiếp nhận quyền đại diện chủ sở hữu vốn nhà nước của Tập đoàn Điện lực Việt Nam tại Công ty TNHH MTV Điện lực Đồng Nai.</p>
            <p class="desc_c">Tổng công ty Điện lực miền Nam quản lý lưới điện phân phối từ 110 kV trở xuống và kinh doanh bán điện trên địa bàn 21 tỉnh / thành phố phía Nam với các nhiệm vụ và chỉ tiêu kinh tế kỹ thuật (kể cả Đồng Nai) như sau :</p>
            <h3 class="title_c1 uk-text-uppercase">địa bàn hoạt động</h3>
            <img src="imgs/MAP.svg" alt="">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-auto@s">
                    <div class="boximg_tq">
                        <img src="imgs/About/Frame1.svg" alt="">
                    </div>
                </div>
                <div class="uk-width-expand@s">
                    <div class="uk-padding-small">
                        <h4 class="title_tq1 uk-text-uppercase">sản lượng điện thương phẩm</h4>
                        <h3 class="title_tq2">66 tỷ 669 triệu kWh</h3>
                        <time class="time1">(năm 2018)</time>
                    </div>
                </div>
            </div>
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-auto@s">
                    <div class="boximg_tq">
                        <img src="imgs/About/Frame2.svg" alt="">
                    </div>
                </div>
                <div class="uk-width-expand@s">
                    <div class="uk-padding-small">
                        <h4 class="title_tq1 uk-text-uppercase">tổng khách hàng sử dụng điện</h4>
                        <h3 class="title_tq2">7 triệu 966 khách hàng</h3>
                        <time class="time1">(Tính đến 31/12/2018)</time>
                    </div>
                </div>
            </div>
            <h3 class="title_c1 uk-text-uppercase">ngành nghề kinh doanh</h3>
            <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-medium" uk-grid>
                <?php
                $cars = array
                (
                    array(
                        'title' => 'Sản xuất, phân phối và kinh doanh mua bán điện năng',
                        'src' => 'imgs/About/Icons/electric1.svg',
                    ),
                    array(
                        'title' => 'Xuất nhập khẩu điện năng',
                        'src' => 'imgs/About/Icons/electric2.svg',
                    ),
                    array(
                        'title' => 'Thí nghiệm, hiệu chỉnh thiết bị điện; kiểm định an toàn kỹ thuật cho các thiết bị, dụng cụ điện',
                        'src' => 'imgs/About/Icons/electric5.svg',
                    ),
                    array(
                        'title' => 'Quản lý vận hành, sản xuất, sửa chữa, bảo dưỡng, đại tu, cải tạo, nâng cấp thiết bị điện, cơ khí, điều khiển, tự động hoá thuộc các công trình lưới điện đến cấp điện áp 110kV và các công trình lưới điện 220kV có tính chất phân phối',
                        'src' => 'imgs/About/Icons/electric4.svg',
                    ),
                    array(
                        'title' => 'Tư vấn quy hoạch điện lực; khảo sát, thiết kế; tư vấn quản lý dự án; tư vấn lập dự án đầu tư, tư vấn đấu thầu, lập dự toán và giám sát thi công các công trình đường dây và trạm biến áp, các công trình thủy điện vừa vả nhỏ',
                        'src' => 'imgs/About/Icons/electric8.svg',
                    ),
                    array(
                        'title' => 'Kiểm định, hiệu chuẩn, thử nghiệm, lắp đặt, kiểm tra: các loại thiết bị điện, phương tiện đo lường điện, dụng cụ đo lường điện, trang thiết bị điện, bảo vệ, điều khiển',
                        'src' => 'imgs/About/Icons/electric6.svg',
                    ),

                    array(
                        'title' => 'Đào tạo và phát triển nguồn nhân lực phục vụ cho quản lý, vận hành, sửa chữa lưới điện',
                        'src' => 'imgs/About/Icons/electric9.svg',
                    ),
                    array(
                        'title' => 'Đầu tư phát triển lưới điện có tính chất phân phối; các dự án năng lượng mới, năng lượng tái tạo, các công trình thủy điện vừa và nhỏ',
                        'src' => 'imgs/About/Icons/electric3.svg',
                    ),
                    array(
                        'title' => 'Đào tạo và phát triển nguồn nhân lực phục vụ cho quản lý, vận hành, sửa chữa lưới điện',
                        'src' => 'imgs/About/Icons/electric7.svg',
                    ),
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="uk-text-center">
                        <img src="<?php echo $value['src'];?>" alt="">
                        <h6 class="title"><?php echo $value['title'];?></h6>
                    </div>
                </div>
                <?php } ?>
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