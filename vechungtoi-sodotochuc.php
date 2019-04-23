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
            <div class="cthd">
                <div class="uk-grid-medium uk-child-width-1-4@m uk-margin-large uk-flex-center" uk-grid>
                    <div>
                        <div class="uk-card card3 uk-card-primary gd uk-card-body">
                            <h3 class="uk-card-title uk-text-uppercase">hội đồng thành viên</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bgd">
                <div class="uk-grid-medium sdtc1 uk-child-width-1-4@m uk-margin-large uk-flex-between" uk-grid>
                    <div>
                        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                            <div>
                                <div class="uk-card card3 uk-card-primary uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title uk-text-uppercase">ban chiến lược phát triển</h3>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card card3 uk-card-primary uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title uk-text-uppercase">Ban kiểm toán nội bộ và giám sát tài chính</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card card3 uk-card-primary gd uk-card-body">
                            <h3 class="uk-card-title uk-text-uppercase">tổng giám đốc</h3>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card card3 uk-card-primary uk-card-body uk-padding-small">
                            <h3 class="uk-card-title uk-text-uppercase">ban tổng hợp</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-5@m sdtc1 uk-grid-medium uk-margin-large" uk-grid uk-height-match="target: > div > .uk-card">
                <?php
                $cars = array
                (
                    'Phó tgđ phụ trách sản xuất',
                    'Phó tgđ phụ trách kinh doanh',
                    'Phó tgđ phụ trách kinh tế tài chính',
                    'Phó tgđ phụ trách đầu tư xây dựng',
                    'Phó tgđ phụ trách quan hệ quốc tế và thu xếp vốn nước ngoài',
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="uk-card card3 uk-card-primary uk-card-body uk-padding-small">
                        <h3 class="uk-card-title uk-text-uppercase"><?php echo $value; ?></h3>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="uk-grid-medium sdtc1 uk-child-width-1-3@m uk-margin-large" uk-grid>
                <?php
                $cars = array
                (
                    'ban kỹ thuật sản xuất',
                    'ban tổ chức và nhân sự',
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
                    'ban thị trường điện',
                    'ban quản lý xây dựng',
                    'ban quản lý đầu tư vốn',
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="uk-card card3 uk-card-default uk-card-body">
                        <h3 class="uk-card-title uk-text-uppercase"><?php echo $value; ?></h3>
                    </div>
                </div>
                <?php } ?>
            </div>
            <ul class="box2_tq dvtt" uk-accordion>
                <li class="uk-open">
                    <a class="uk-accordion-title uk-text-uppercase uk-text-center" href="#">đơn vị trực thuộc công ty mẹ</a>
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