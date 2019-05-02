<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav>
    <?php
    $nav = array
    (
        array(
            'href' => '',
            'title' => 'an toàn điện',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'tiết kiệm điện',
            'active' => '',
        ),
        array(
            'href' => '',
            'title' => 'năng lượng xanh',
            'active' => '',
            'sub' => array(
                array(
                    'href' => '',
                    'title' => 'điện áp mái',
                    'active-sub' => '',
                ),
                array(
                    'href' => '',
                    'title' => 'mô hình esco',
                    'active-sub' => '',
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