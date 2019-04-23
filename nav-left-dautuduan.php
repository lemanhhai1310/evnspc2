<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav>
    <?php
    $nav = array
    (
        array(
            'href' => 'dautuduan-thongtinduan.php',
            'title' => 'Thông tin dự án',
            'active' => 'dautuduan-thongtinduan',
        ),
        array(
            'href' => '',
            'title' => 'Kêu gọi đầu tư',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'Quan hệ quốc tế',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'Tin đầu tư dự án',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'Đấu thầu',
            'active' => '',
            'sub' => array(
                array(
                    'href' => 'dautuduan-kehoachdauthau.php',
                    'title' => 'Kế hoạch đấu thầu',
                    'active-sub' => 'dautuduan-kehoachdauthau',
                ),
                array(
                    'href' => 'dautuduan-thongbaomoithau.php',
                    'title' => 'thông báo mời thầu',
                    'active-sub' => 'dautuduan-thongbaomoithau',
                ),
                array(
                    'href' => 'dautuduan-ketqualuachonnhathau.php',
                    'title' => 'kết quả lựa chọn nhà thầu',
                    'active-sub' => 'dautuduan-ketqualuachonnhathau',
                ),
            ),
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