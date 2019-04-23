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
                <li><span>Kết quả lựa chọn nhà thầu</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">Kết quả lựa chọn nhà thầu</h2>
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
                    <th>Tên gói thầu</th>
                    <th>Hình thức lựa chọn nhà thầu</th>
                    <th>Giá trúng thầu</th>
                    <th>Nhà thầu trúng thầu</th>
                    <th>Quyết định phê duyệt</th>
                    <th>Hình thức hợp đồng</th>
                    <th>Thời gian thực hiện hợp đồng</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">Dây cáp điện các loại</a></td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>4.113.888.130 VNĐ</td>
                    <td>Công ty TNHH MTV Thương Mại - Sản Xuất Liên Đạt</td>
                    <td><a href="#">0596/QĐ-PCVL</a></td>
                    <td>Trọn gói</td>
                    <td>Trong vòng 08 tháng, kể từ ngày hợp đồng có hiệu lực, chia làm nhiều đợt giao hàng.</td>
                </tr>
                <tr>
                    <td><a href="#">Mua sắm hệ thống định tuyến dữ liệu (Router) và an toàn thông tin (Firewall)</a></td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>4.914.580.000 VNĐ</td>
                    <td>Công ty CP Viễn thông Siêu Tốc</td>
                    <td><a href="#">0519/QĐ-PCVL ngày 19/3/2019</a></td>
                    <td>Trọn gói</td>
                    <td>Trong vòng 90 ngày</td>
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