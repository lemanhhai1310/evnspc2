<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-sodotochuc.png',
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
                <li><span>Sơ đồ tổ chức</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">sơ đồ tổ chức</h2>
            <div class="bgd1">
                <div class="uk-grid-medium sdtc1 uk-flex-middle uk-child-width-1-4@m uk-margin-large uk-flex-between" uk-grid>
                    <div>
                        <div class="uk-grid-medium uk-child-width-1-1 uk-grid-large hai" uk-grid>
                            <div>
                                <div class="uk-card card3 uk-card-primary gd hdtv uk-card-body">
                                    <h3 class="uk-card-title uk-text-uppercase uk-text-truncate">hội đồng thành viên</h3>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card card3 uk-card-primary gd tgd uk-card-body">
                                    <h3 class="uk-card-title uk-text-uppercase">tổng giám đốc</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex-first@m">
                        <div class="uk-card card3 uk-card-primary uk-card-body uk-padding-small">
                            <h3 class="uk-card-title uk-text-uppercase">BAN KIỂM SOÁT</h3>
                        </div>
                    </div>

                    <div>
                        <div class="uk-grid-medium ban2 uk-child-width-1-1" uk-grid>
                            <div>
                                <div class="uk-card card3 ban1 uk-card-primary uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title uk-text-uppercase">BAN TỔNG HỢP</h3>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card card3 ban1 uk-card-primary uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title uk-text-uppercase">Ban kiểm toán nội bộ và giám sát tài chính</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hai1">
                <div class="uk-child-width-1-4@m sdtc1 uk-grid-medium uk-margin-large" uk-grid uk-height-match="target: > div > .uk-card">
                    <?php
                    $cars = array
                    (
                        'PHÓ TGĐ KỸ THUẬT SẢN XUẤT',
                        'PHÓ TGĐ THỊ TRƯỜNG ĐIỆN',
                        'PHÓ TGĐ ĐẦU TƯ XÂY DỰNG',
                        'PHÓ TGĐ CÔNG NGHỆ THÔNG TIN',
                    );
                    foreach ($cars as $key => $value) { ?>
                        <div>
                            <div class="uk-card card3 uk-card-primary uk-card-body uk-padding-small">
                                <h3 class="uk-card-title uk-text-uppercase"><?php echo $value; ?></h3>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="uk-grid-small sdtc1 x1 uk-child-width-expand@l uk-margin-large uk-grid-match" uk-grid>
                <?php
                $cars = array
                (
                    'ban tổ chức và nhân sự',
                    'ban kỹ thuật sản xuất',
                    'ban viễn thông & cntt',
                    'ban khcn & môi trường',
                    'ban kế hoạch',
                    'ban thanh tra bảo vệ',
                    'ban an toàn',
                    'ban pháp chế',
                    'ban quan hệ cộng đồng',
                    'ban kinh doanh',
                    'ban quản lý đầu tư',
                    'ban tài chính kế toán',
                    'văn phòng',
                    'ban quản lý đấu thầu',
                    'ban quan hệ quốc tế',
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="uk-card card3 card-rolate uk-card-default uk-padding-small uk-card-body">
                        <h3 class="uk-card-title title-rolate uk-text-uppercase"><?php echo $value; ?></h3>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="sdtc1 c2 uk-child-width-expand@l uk-margin-large uk-grid-small uk-grid-match" uk-grid>
                <?php
                $cars = array
                (
                    'CÔNG TY dịch vụ ĐIỆN LỰC MIỀN NAM',
                    'CÁC CÔNG TY ĐIỆN LỰC TỈNH THÀNH PHỐ',
                    'CÔNG TY THÍ NGHIỆM ĐIỆN MIỀN NAM',
                    'CÔNG TY TNHH MTV TƯ VẤN ĐIỆN MIỀN NAM',
                    'TRƯỜNG CAO ĐẲNG ĐIỆN LỰc TPHCM',
                    'BAN QLDA LƯỚI ĐIỆN MIỀN NAM',
                    'CÔNG TY DỊCH VỤ  ĐIỆN LỰC MIỀN NAM',
                    'TRUNG TÂM CSKH  ĐIỆN LỰC MIỀN NAM',
                    'CÔNG TY CNTT ĐIỆN LỰC MIỀN NAM',
                    'TRUNG TÂM ĐIỀU HÀNH SCADA',
                );
                foreach ($cars as $key => $value) { ?>
                    <div>
                        <div class="uk-card card3 c1 uk-card-default uk-padding-small uk-card-body">
                            <h3 class="uk-card-title uk-text-uppercase"><?php echo $value; ?></h3>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="uk-grid-small sdtc1 x1 uk-child-width-expand@l uk-margin-large uk-grid-match" uk-grid>
                <?php
                $cars = array
                (
                    'an giang',
                    'bà rịa vũng tàu',
                    'bạc liêu',
                    'bến tre',
                    'bình dương',
                    'bình phước',
                    'bình thuận',
                    'cà mau',
                    'cần thơ',
                    'đồng tháp',
                    'hậu giang',
                    'kiên giang',
                    'lâm đồng',
                    'long an',
                    'ninh thuận',
                    'sóc trăng',
                    'tây ninh',
                    'tiền giang',
                    'trà vinh',
                    'vĩnh long',
                    'đồng nai (tnhh)',
                );
                foreach ($cars as $key => $value) { ?>
                    <div>
                        <div class="uk-card card3 card-rolate uk-card-default uk-padding-small uk-card-body" style="background-color: #fff; border: 1px solid #000000;">
                            <h3 class="uk-card-title title-rolate uk-text-uppercase"><?php echo $value; ?></h3>
                        </div>
                    </div>
                <?php } ?>
            </div>

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