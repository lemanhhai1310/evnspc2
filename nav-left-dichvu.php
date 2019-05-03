<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav>
    <?php
    $nav = array
    (
        array(
            'href' => '',
            'title' => 'chương trình tri ân khách hàng',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'hỏi đáp dịch vụ điện',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'giá điện',
            'active' => '',
            'sub' => array(
                array(
                    'href' => 'dichvu-bieugiadien.php',
                    'title' => 'biểu giá điện',
                    'active-sub' => 'dichvu-bieugiadien',
                ),
                array(
                    'href' => '',
                    'title' => 'thông tin giá điện',
                    'active-sub' => '',
                ),
            ),
        ),
        array(
            'href' => '',
            'title' => 'tư vấn sử dụng dịch vụ điện',
            'active' => '',
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