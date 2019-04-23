<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-donvithanhvien.png',
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
                <li><span>Đơn vị thành viên</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">đơn vị thành viên</h2>
            <div class="uk-margin-medium">
                <img src="imgs/MAP.svg" alt="">
            </div>
            <ul class="box2_tq" uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title uk-text-uppercase uk-text-center" href="#">danh sách các đơn vị thành viên</a>
                    <div class="uk-accordion-content uk-margin-remove">
                        <table class="uk-table uk-table-hover uk-table-divider table1_tq">
                            <tbody>
                            <tr>
                                <td>Công ty điện lực An Giang</td>
                                <td>Công ty điện lực Hậu Giang</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Bạc Liêu</td>
                                <td>Công ty điện lực Kiên Giang</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Bà Rịa Vũng Tàu</td>
                                <td>Công ty điện lựcTiền Giang</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Bến Tre</td>
                                <td>Công ty điện lực Trà Vinh</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Bình Dương</td>
                                <td>Công ty điện lực Vĩnh Long</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Bình Phước</td>
                                <td>Công ty điện lực Cần Thơ</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Lâm Đồng</td>
                                <td>Công ty điện lực Sóc Trăng</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Tây Ninh</td>
                                <td>Công ty điện lực Cà Mau</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Đồng Nai</td>
                                <td>Công ty điện lực Ninh Thuận</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Long An</td>
                                <td>Công ty điện lực Bình Thuận</td>
                            </tr>
                            <tr>
                                <td>Công ty điện lực Đồng Tháp</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
            </ul>
            <div class="uk-section-xsmall"></div>
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