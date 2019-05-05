<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav>
    <?php
    $nav = array
    (
        array(
            'href' => '',
            'title' => 'Tin hoạt động trong evnspc',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'Đảng - đoàn thể',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'Hoạt động cộng đồng',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'Tin ngành điện',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'PCTT & TKCN',
            'active' => '',
        ),
        array(
            'href' => 'tintuctruyenthong-thuvienanh.php',
            'title' => 'Thư viện Ảnh',
            'active' => 'tintuctruyenthong-thuvienanh',
        ),
        array(
            'href' => 'tintuctruyenthong-thuvienvideo.php',
            'title' => 'Thư viện Video',
            'active' => 'tintuctruyenthong-thuvienvideo',
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