<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'dịch vụ',
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
                <li><a href="#">Dịch vụ</a></li>
                <li><span>Hỏi đáp dịch vụ điện</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">hỏi đáp dịch vụ điện</h2>
            <form class="uk-grid-medium" uk-grid>
                <div class="uk-width-3-4@s">
                    <input class="uk-input" type="text" placeholder="Yêu cầu hỗ trợ">
                </div>
                <div class="uk-width-1-4@s">
                    <button type="submit" class="uk-button uk-button-primary btn-send uk-width-1-1">tìm kiếm</button>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Trong tất cả</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="uk-button btn1 uk-button-default uk-width-1-1 uk-text-left" style="background-color: #fff;" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-icon" uk-icon="icon: chevron-down"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg></span>
                        </button>
                    </div>
                </div>
                <div class="uk-width-1-4@s">
                    <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Từ ngày</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="uk-button btn1 uk-button-default uk-width-1-1 uk-text-left" style="background-color: #fff;" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-icon" uk-icon="icon: chevron-down"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg></span>
                        </button>
                    </div>
                </div>
                <div class="uk-width-1-4@s">
                    <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Đến ngày</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="uk-button btn1 uk-button-default uk-width-1-1 uk-text-left" style="background-color: #fff;" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-icon" uk-icon="icon: chevron-down"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg></span>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="hoidap" uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">Thắc mắc về biểu giá điện tại Gia Lai?</a>
                    <div class="uk-accordion-content">
                        <div class="uk-grid-divider uk-grid-small" uk-grid>
                            <div class="uk-width-expand@s">
                                <p>Hiện tại tôi ở huyện Mang Yang, tỉnh Gia Lai. Giá điện như thế nào?</p>
                            </div>
                            <div class="uk-width-1-5@s">
                                <small class="time2">20/03/2019</small>
                                <h5 class="name_hd">Đỗ Quyết Thắng</h5>
                            </div>
                        </div>
                        <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <?php
                $nav = array
                (
                    array(
                        'title' => 'Muốn mua điện khi tạm trú?',
                    ),
                    array(
                        'title' => 'Muốn lắp điện kế tại Tiền Giang?',
                    ),
                    array(
                        'title' => 'Hình thức thanh toán tiền điện?',
                    ),
                    array(
                        'title' => 'Chương trình hỗ trợ lắp đặt máy nước nóng dùng năng lượng mặt trời tại Quảng Ngãi?',
                    ),
                    array(
                        'title' => 'Thanh toán online tiền điện cho người thân?',
                    ),
                    array(
                        'title' => 'Tìm mã khách hàng?',
                    ),
                    array(
                        'title' => 'Giả điện máy nổ bỏng?',
                    ),
                    array(
                        'title' => 'Thủ tục mua điện 3 pha?',
                    ),
                    array(
                        'title' => 'Xem hóa đơn tiền điện ở Bến Tre?',
                    ),
                    array(
                        'title' => 'Có thể lắp đồng hồ điện ở khu quy hoạch?',
                    ),
                );
                foreach ($nav as $key => $value) { ?>
                <li>
                    <a class="uk-accordion-title" href="#"><?php echo $value['title']; ?></a>
                    <div class="uk-accordion-content">
                        <div class="uk-grid-divider uk-grid-small" uk-grid>
                            <div class="uk-width-expand@s">
                                <p>Hiện tại tôi ở huyện Mang Yang, tỉnh Gia Lai. Giá điện như thế nào?</p>
                            </div>
                            <div class="uk-width-1-5@s">
                                <small class="time2">20/03/2019</small>
                                <h5 class="name_hd">Đỗ Quyết Thắng</h5>
                            </div>
                        </div>
                        <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <?php } ?>
            </ul>
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
            <h3 class="title1_dv uk-text-uppercase">GỬI YÊU CẦU HỖ TRỢ CHO CHÚNG TÔI</h3>
            <form class="uk-grid-medium" uk-grid>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Họ và tên">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Email">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Điện thoại">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Địa chỉ liên hệ">
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Chuyên mục</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="uk-button btn1 uk-button-default uk-width-1-1 uk-text-left" style="background-color: #fff;" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-icon" uk-icon="icon: chevron-down"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"></polyline></svg></span>
                        </button>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Đơn vị">
                </div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="text" placeholder="Yêu cầu hỗ trợ">
                </div>
                <div class="uk-width-1-1">
                    <textarea class="uk-textarea" rows="5" placeholder="Nội dung yêu cầu hỗ trợ"></textarea>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-2-3">
                            <input class="uk-input" type="text" placeholder="Nhập  vào mã captcha">
                        </div>
                        <div class="uk-width-1-3">
                            <img src="imgs/Captcha.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-text-right">
                    <button type="submit" class="uk-button uk-button-primary btn-send">gửi yêu cầu</button>
                </div>
            </form>
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