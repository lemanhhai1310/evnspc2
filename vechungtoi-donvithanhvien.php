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
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực An Giang        
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/ANGIANG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Hậu Giang
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/HAUGIANG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Bạc Liêu
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/BACLIEU.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Kiên Giang
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/KIENGIANG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Bà Rịa Vũng Tàu
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/BRVT.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Tiền Giang
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/TIENGIANG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Bến Tre
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/BENTRE.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Trà Vinh
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/TRAVINH.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Bình Dương
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/BINHDUONG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Vĩnh Long
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/VINHLONG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Bình Phước
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/BINHPHUOC.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Cần Thơ
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/CANTHO.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Lâm Đồng
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/LAMDONG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Sóc Trăng
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/SOCTRANG.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Tây Ninh
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/TAYNINH.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Cà Mau
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/CAMAU.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Đồng Nai
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/DONGNAI.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Ninh Thuận
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/NINHTHUAN.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Long An
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/LONGAN.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Bình Thuận
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/BINHTHUAN.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Đồng Tháp
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/logo-cty/DONGTHAP.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
            </ul>
            <ul class="box2_tq" uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title uk-text-uppercase uk-text-center" href="#">ĐƠN VỊ PHỤ TRỢ</a>
                    <div class="uk-accordion-content uk-margin-remove">
                        <table class="uk-table uk-table-hover uk-table-divider table1_tq">
                            <tbody>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty điện lực Miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/1.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>Các công ty điện lực Tỉnh Thành phố</td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty thí nghiệm điện miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/2.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty TNHH MTV Tư vấn điện miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/3.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Trường cao đẳng điện lực TPHCM
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/4.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Ban QLDA Lưới điện miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/5.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty dịch vụ điện lực miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/6.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Trung tâm CSKH điện lực miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/7.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Công ty CNTT điện lực miền Nam
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/8.png" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div uk-grid>
                                        <div class="uk-width-expand">
                                            Trung tâm điều hành SCADA
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img src="imgs/donvi-phutro/8.png" alt="">
                                        </div>
                                    </div>
                                </td>
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