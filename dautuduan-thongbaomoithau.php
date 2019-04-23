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
                <li><span>Thông báo mời thầu</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">Thông báo mời thầu</h2>
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-1-2@s">
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Tất cả hình thức</option>
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
                <div class="uk-width-1-2@s">
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Tất cả đơn vị</option>
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
            <table class="uk-table uk-table-responsive uk-table-hover uk-table-divider table1_tq table1_dautu">
                <thead>
                <tr>
                    <th>Bên mời thầu</th>
                    <th>Tên và phạm vi gói thầu</th>
                    <th class="uk-width-small">Tên dự án</th>
                    <th class="uk-width-small">Hình thức lựa chọn nhà thầu</th>
                    <th class="uk-width-small">Thời gian bán HSMT</th>
                    <th class="uk-width-small">Thời điểm đóng thầu</th>
                    <th class="uk-text-nowrap">Xem chi tiết</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Công Ty Điện Lực Đồng Tháp</td>
                    <td><a href="#">Gói thầu 27: Đường dây trung thế 3P-22kV đường Phù Đổng nối dài, TP Cao Lãnh</a></td>
                    <td><a href="#">Đường dây trung thế 3P-22kV đường Phù Đổng nối dài, TP Cao Lãnh</a></td>
                    <td>Chào hàng cạnh tranh</td>
                    <td>Từ 8:00 04-04-2019
                        đến 14:00 10-04-2019</td>
                    <td>đến 14:00 10-04-2019</td>
                    <td><a href="#">Xem</a></td>
                </tr>
                <tr>
                    <td>Công Ty Điện Lực Tây Ninh</td>
                    <td><a href="#">Mua sắm thiết bị bảo vệ và đóng cắt trung thế phục vụ nhu cầu SXKD khác 9 tháng năm 2019</a></td>
                    <td><a href="#">Mua sắm thiết bị bảo vệ và đóng cắt trung thế phục vụ nhu cầu SXKD khác 9 tháng năm 2019</a></td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>Từ 0:00 03-04-2019
                        đến 11:00 18-04-2019</td>
                    <td>đến 11:00 18-04-2019</td>
                    <td><a href="#">Xem</a></td>
                </tr>
                </tbody>
            </table>
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
                <?php include('nav-left-dautuduan.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>