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
            <h2 class="uk-text-uppercase title_common">site map</h2>
            <ul class="uk-nav-default uk-nav-parent-icon sitemap" uk-nav="multiple: true">
                <li class="uk-parent uk-open">
                    <a href="#">Giới thiệu</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Tổng quan về EVN</a></li>
                        <li><a href="#">Tổ chức</a></li>
                        <li><a href="#">Nhân lực</a></li>
                        <li><a href="#">Lĩnh vực hoạt động</a></li>
                        <li><a href="#">Lịch sử và phát triển</a></li>
                        <li><a href="#">Báo cáo thường niên</a></li>
                        <li><a href="#">Ấn phẩm nội bộ</a></li>
                        <li><a href="#">Văn bản</a></li>
                        <li><a href="#">Thông tin doanh nghiệp</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Thông cáo báo chí</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Thông cáo báo chí</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">EVN & khách hàng</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sub item</a></li>
                        <li>
                            <a href="#">Sub item</a>
                            <ul>
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                    </ul>
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