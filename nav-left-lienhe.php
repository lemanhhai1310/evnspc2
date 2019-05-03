<ul class="uk-nav-default uk-nav-parent-icon nav-sidebar" uk-nav>
    <?php
    $nav = array
    (
        array(
            'href' => 'lienhe-evnspc.php',
            'title' => 'Liên hệ EVNSPC',
            'active' => 'lienhe-evnspc',
        ),
        array(
            'href' => 'lienhe-lienketnoibo.php',
            'title' => 'Liên kết NỘI BỘ',
            'active' => 'lienhe-lienketnoibo',
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