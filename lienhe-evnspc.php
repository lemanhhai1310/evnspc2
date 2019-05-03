<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'liên hệ',
            'src' => 'imgs/banner_trangcon/lienhe-lienheevnspc.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><span>Liên hệ EVNSPC</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">Liên hệ EVNSPC</h2>
            <figure class="logo_f">
                <a href="#"><img src="imgs/logo.svg" alt=""></a>
            </figure>
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-1-3@m">
                    <address class="box_add_lh">
                        <h3>TỔNG CÔNG TY ĐIỆN LỰC <br> MIỀN NAM</h3>
                        A: 72 Hai Bà Trưng, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam. <br>
                        T: (+84) 28 3822 1605 <br>
                        F: (+84) 28 3822 1751 - 3939 0138 <br>
                        E: info@evnspc.vn
                    </address>
                </div>
                <div class="uk-width-2-3@m">
                    <form class="uk-form-stacked">

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Họ và tên *</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="Nhập tên của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Email *</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="Nhập vào địa chỉ email">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Nội dung tin nhắn *</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea" rows="6" placeholder="Nhập vào nội dung tin nhắn"></textarea>
                            </div>
                        </div>
                        <div class="uk-margin uk-text-right">
                            <button type="submit" class="uk-button uk-button-primary btn-send">gửi</button>
                        </div>

                    </form>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29785.423479148965!2d105.7879371!3d21.065554350000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1556872872710!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left-lienhe.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>