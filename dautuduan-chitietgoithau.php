<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'đầu tư và dự án',
            'src' => 'imgs/banner_trangcon/dautuduan-kehoachdauthau.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Đầu tư và dự án</a></li>
                <li><a href="#">Đấu thầu</a></li>
                <li><a href="#">Kế hoạch đấu thầu</a></li>
                <li><span>Chi tiết gói thầu</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">chi tiết gói thầu</h2>
            <table class="uk-table uk-margin-large-bottom uk-table-small table2_ttda">
                <caption>Mua sắm máy phát điện 160kVA</caption>
                <tbody>
                <tr>
                    <td><b>Chủ đầu tư:</b></td>
                    <td>Công Ty Điện Lực Vĩnh Long</td>
                </tr>
                <tr>
                    <td><b>Bên mời thầu:</b></td>
                    <td>Công Ty Điện Lực Vĩnh Long</td>
                </tr>
                <tr>
                    <td><b>Tên dự án:</b></td>
                    <td>Mua sắm máy phát điện dự phòng 160kVA</td>
                </tr>
                <tr>
                    <td><b>Tên gói thầu</b></td>
                    <td>Mua sắm máy phát điện 160kVA</td>
                </tr>
                <tr>
                    <td><b>Hình thức:</b></td>
                    <td>Chào hàng cạnh tranh</td>
                </tr>
                <tr>
                    <td><b>Hình thức hợp đồng:</b></td>
                    <td>trọn gói</td>
                </tr>
                <tr>
                    <td><b>Bảo đảm dự thầu:</b></td>
                    <td>10700000</td>
                </tr>
                <tr>
                    <td><b>Nguồn vốn dự án:</b></td>
                    <td>Đầu tư xây dựng năm 2019</td>
                </tr>
                <tr>
                    <td><b>Thời gian phát hành
                            hồ sơ mời thầu:</b></td>
                    <td>
                        Từ Ngày: 15:20 05-04-2019 Đến Ngày: 10:00 15-04-2019</td>
                </tr>
                <tr>
                    <td><b>Địa chỉ phát hành
                            hồ sơ mời thầu</b></td>
                    <td>(http://muasamcong.mpi.gov.vn) trên hệ thống mạng đấu thầu quốc gia
                        Điện thoại: 02702210223	Fax: 02703827071</td>
                </tr>
                <tr>
                    <td><b>Địa chỉ nhận hồ sơ:</b></td>
                    <td>(http://muasamcong.mpi.gov.vn) trên hệ thống mạng đấu thầu quốc gia</td>
                </tr>
                <tr>
                    <td><b>Giá bộ HSMT:	</b></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td><b>Khác:</b></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <div class="box_back">
                <hr>
                <a href="#" class="uk-link back1"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> trở về</a>
            </div>
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left-dautuduan.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>