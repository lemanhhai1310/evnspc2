<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'dịch vụ',
            'src' => 'imgs/banner_trangcon/dichvu-hoidapdichvudien.png',
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
            <ul class="hoidap" uk-accordion="multiple: true">
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
                    </div>
                </li>
                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">Thắc mắc về biểu giá điện tại Gia Lai?</a>
                    <div class="uk-accordion-content">
                        <div class="uk-grid-divider uk-grid-small" uk-grid>
                            <div class="uk-width-expand@s">
                                <p>Sau khi nhận được câu hỏi của độc giả. Ban biên tập website evn.com.vn đã liên hệ với Trung tâm Chăm sóc khách hàng Tổng công ty Điện lực miền Nam và nhận được trả lời như sau:</p>
                                <p>Kính thưa Quý khách!</p>
                                <p>Hiện Bộ Công Thương đã ban hành Quyết định số 648/QĐ - BCT ngày 20/03/2019 “Về việc điều chỉnh mức giá bán lẻ điện bình quân và quy định giá bán điện”. Quý khách có thể tham khảo về biểu giá điện trên website của Trung tâm Chăm sóc khách hàng Điện lực miền trung theo đường link sau:
                                    <a href="#">https://cskh.cpc.vn/frm_GiaBanDien.aspx</a>.</p>
                                <p>Nếu có thắc mắc gì thêm, Quý khách vui lòng liên hệ Trung tâm Chăm sóc khách hàng qua đầu số tổng đài 19001909 để được hỗ trợ trực tiếp, hoặc gửi thông tin qua Email cskh@cpc.vn. Trung tâm luôn sẵn sàng hỗ trợ Quý Khách.</p>
                            </div>
                            <div class="uk-width-1-5@s">
                                <small class="time2">20/03/2019</small>
                                <h5 class="name_hd">Ban biên tập</h5>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <h3 class="title1_dv uk-text-uppercase">PHẢN HỒI YÊU CẦU NÀY</h3>
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
                    <input class="uk-input" type="text" placeholder="Phản hồi">
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
                    <button type="submit" class="uk-button uk-button-primary btn-send">phản hồi</button>
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