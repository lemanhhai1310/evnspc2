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
                <li><span>Kế hoạch đấu thầu</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">Kế hoạch đấu thầu</h2>
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
            <table class="uk-table uk-table-hover uk-table-divider table1_tq table1_dautu">
                <thead>
                <tr>
                    <th>Tên dự án</th>
                    <th>Tên và phạm vi gói thầu</th>
                    <th class="uk-width-small">Nguồn vốn</th>
                    <th class="uk-width-small">Hình thức lựa chọn nhà thầu</th>
                    <th class="uk-width-small">Thời gian tổ chức đấu thầu</th>
                    <th class="uk-width-small">Hình thức hợp đồng</th>
                    <th>Nội dung khác</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">Đường dây trung thế 3P-22kV đường Phù Đổng nối dài, TP Cao Lãnh</a></td>
                    <td>Gói thầu 27: Đường dây trung thế 3P-22kV đường Phù Đổng nối dài, TP Cao Lãnh</td>
                    <td>ĐTXD năm 2019.</td>
                    <td>Chào hàng cạnh tranh</td>
                    <td>04-04-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#">Mua sắm thiết bị bảo vệ và đóng cắt trung thế phục vụ nhu cầu SXKD khác 9 tháng năm 2019</a></td>
                    <td>Mua sắm thiết bị bảo vệ và đóng cắt trung thế phục vụ nhu cầu SXKD khác 9 tháng năm 2019</td>
                    <td>Sản xuất kinh doanh</td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>03-04-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#">Mua sắm phụ kiện đấu nối, thiết bị đóng cắt và bảo vệ cho công tác lắp điện kế phục vụ nhu cầu SXKD khác năm 2019</a></td>
                    <td>Mua sắm phụ kiện đấu nối, thiết bị đóng cắt và bảo vệ cho công tác lắp điện kế phục vụ nhu cầu SXKD khác năm 2019</td>
                    <td>Sản xuất kinh doanh</td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>03-04-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#">Sửa chữa lưới trung áp khu vực thành phố Trà Vinh năm 2019; Sửa chữa lưới điện khu vực Tiểu Cần năm 2019</a></td>
                    <td>Gói thầu số 05 - Thi công xây dựng, lắp đặt thiết bị khu vực thành phố Trà Vinh và huyện Tiểu Cần</td>
                    <td>Sửa chữa lớn năm 2019</td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>02-04-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#">Mua sắm VTTB phục vụ công tác mắc dây đặt điện & sửa chữa điện khách hàng đợt 1 năm 2019</a></td>
                    <td>Thiết bị đóng cắt các loại</td>
                    <td>Sản xuất kinh doanh năm 2019</td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>10-01-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#">Công trình Xây dựng nhà kho Đội quản lý vận hành lưới điện cao thế Vĩnh Long</a></td>
                    <td>Tư vấn “Khảo sát lập BCKTKT – thiết kế bản vẽ thi công xây dựng”</td>
                    <td>ĐTXD năm 2019</td>
                    <td>Đấu thầu rộng rãi trong nước</td>
                    <td>01-04-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#">Mua sắm tài sản năm 2019 của Công ty Điện lực Trà Vinh</a></td>
                    <td>Thiết bị wifi chuyên dụng (gói 5)</td>
                    <td>Vốn ĐTXD năm 2019</td>
                    <td>Đấu thầu rộng rãi trong nước (qua mạng)</td>
                    <td>01-04-2019</td>
                    <td>Trọn gói</td>
                    <td></td>
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