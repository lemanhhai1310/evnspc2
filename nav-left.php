<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav>
    <?php
    $nav = array
    (
        array(
            'href' => 'vechungtoi-tongquan.php',
            'title' => 'tổng quan',
        ),
        array(
            'href' => 'vechungtoi-chinhsachchatluong.php',
            'title' => 'chính sách chất lượng',
        ),
        array(
            'href' => '',
            'title' => 'QUÁ TRÌNH HÌNH THÀNH VÀ PHÁT TRIỂN',
        ),
        array(
            'href' => '',
            'title' => 'ban điều hành',
        ),
        array(
            'href' => '',
            'title' => 'sơ đồ tổ chức',
        ),
        array(
            'href' => '',
            'title' => 'đơn vị thành viên',
        ),
        array(
            'href' => '',
            'title' => 'công bố thông tin',
            'sub' => array(
                array(
                    'href' => '',
                    'title' => 'thông cáo báo chí',
                ),
                array(
                    'href' => '',
                    'title' => 'công bố thông tin evn spc',
                ),
                array(
                    'href' => '',
                    'title' => 'đề án tái cơ cấu doanh nghiệp',
                ),
            ),
        ),
        array(
            'href' => '',
            'title' => 'văn hóa doanh nghiệp',
        ),
        array(
            'href' => '',
            'title' => 'thành tích evnspc',
        ),
        array(
            'href' => 'vechungtoi-doitac.php',
            'title' => 'đối tác evnspc',
        ),
    );
    foreach ($nav as $key => $value) { ?>
        <li <?php echo (isset($value['sub'])) ? 'class="uk-parent"' : ''; ?>>
            <a href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a>
            <?php if (isset($value['sub'])) { ?>
                <ul class="uk-nav-sub">
                    <?php foreach ($value['sub'] as $k => $v) { ?>
                        <li><a href="<?php echo $v['href']; ?>"><?php echo $v['title']; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
    <?php } ?>
</ul>