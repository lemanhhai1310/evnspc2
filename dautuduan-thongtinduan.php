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
                <li><span>Thông tin dự án</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common">thông tin dự án</h2>
            <table class="uk-table">
                <tbody>
                <tr>
                    <td><b>Tên dự án:</b></td>
                    <td>Mua sắm máy phát điện dự phòng 160kVA</td>
                </tr>
                </tbody>
            </table>
            <h5 class="title_dsgtda uk-text-capitalize">Danh sách gói thầu của dự án</h5>
            <table class="uk-table uk-table-responsive uk-table-hover uk-table-divider table1_tq table1_dautu">
                <thead>
                <tr>
                    <th>Ngày gửi</th>
                    <th>Gói thầu</th>
                    <th>Hình thức</th>
                    <th>Thời điểm đóng thầu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">05-04-2019</a></td>
                    <td>Mua sắm máy phát điện 160kVA</td>
                    <td>Chào hàng cạnh tranh</td>
                    <td>15-04-2019</td>
                </tr>
                </tbody>
            </table>
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