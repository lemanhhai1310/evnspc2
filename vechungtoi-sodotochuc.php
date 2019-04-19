<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'về chúng tôi',
            'src' => 'imgs/banner_trangcon/vechungtoi-congbothongtinevnspc.png',
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
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside>
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>