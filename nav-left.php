<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav  uk-sticky="offset: 100">
    <?php
    $nav = array
    (
        array(
            'href' => 'vechungtoi-tongquan.php',
            'title' => 'tổng quan',
            'active' => 'vechungtoi-tongquan',
        ),
        array(
            'href' => 'vechungtoi-chinhsachchatluong.php',
            'title' => 'chính sách chất lượng',
            'active' => 'vechungtoi-chinhsachchatluong',
        ),
        array(
            'href' => '',
            'title' => 'QUÁ TRÌNH HÌNH THÀNH VÀ PHÁT TRIỂN',
            'active' => '',
        ),
        array(
            'href' => 'vechungtoi-bandieuhanh.php',
            'title' => 'ban điều hành',
            'active' => 'vechungtoi-bandieuhanh',
        ),
        array(
            'href' => 'vechungtoi-sodotochuc.php',
            'title' => 'sơ đồ tổ chức',
            'active' => 'vechungtoi-sodotochuc',
        ),
        array(
            'href' => 'vechungtoi-donvithanhvien.php',
            'title' => 'đơn vị thành viên',
            'active' => 'vechungtoi-donvithanhvien',
        ),
        array(
            'href' => '',
            'title' => 'công bố thông tin',
            'active' => '',
            'sub' => array(
                array(
                    'href' => '',
                    'title' => 'thông cáo báo chí',
                    'active-sub' => '',
                ),
                array(
                    'href' => 'vechungtoi-congbothongtinevnspc.php',
                    'title' => 'công bố thông tin evn spc',
                    'active-sub' => 'vechungtoi-congbothongtinevnspc',
                ),
                array(
                    'href' => '',
                    'title' => 'đề án tái cơ cấu doanh nghiệp',
                    'active-sub' => '',
                ),
            ),
        ),
        array(
            'href' => '',
            'title' => 'văn hóa doanh nghiệp',
            'active' => '',
            'sub' => array(
                array(
                    'href' => '',
                    'title' => 'tin mới',
                    'active-sub' => '',
                ),
                array(
                    'href' => '',
                    'title' => 'câu chuyện văn hóa',
                    'active-sub' => '',
                ),
                array(
                    'href' => '',
                    'title' => 'Văn hóa EVNSPC VỚI KHÁCH HÀNG',
                    'active-sub' => '',
                ),
                array(
                    'href' => '',
                    'title' => 'gương điển hình',
                    'active-sub' => '',
                ),
                array(
                    'href' => '',
                    'title' => 'sự kiện văn hóa',
                    'active-sub' => '',
                ),
            ),
        ),
        array(
            'href' => 'vechungtoi-thanhtich.php',
            'title' => 'thành tích evnspc',
            'active' => 'vechungtoi-thanhtich',
        ),
        array(
            'href' => 'vechungtoi-doitac.php',
            'title' => 'đối tác evnspc',
            'active' => 'vechungtoi-doitac',
        ),
    );
    foreach ($nav as $key => $value) { ?>
        <li class="<?= ($activePage == $value['active']) ? 'uk-open' : ''; ?><?= (isset($value['sub'])) ? 'uk-parent' : ''; ?>">
            <a href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a>
            <?php if (isset($value['sub'])) { ?>
                <ul class="uk-nav-sub">
                    <?php foreach ($value['sub'] as $k => $v) { ?>
                        <li class="<?= ($activePage == $v['active-sub']) ? 'uk-open' : ''; ?>"><a href="<?php echo $v['href']; ?>"><?php echo $v['title']; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
    <?php } ?>
</ul>