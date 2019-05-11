<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'liên hệ',
            'src' => 'imgs/banner_trangcon/lienhe-lienketnoibo.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><span>Liên kết nội bộ</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">Liên kết nội bộ</h2>
            <img class="uk-margin" src="imgs/MAP.svg" alt="">
            <div class="uk-overflow-auto">
                <table class="uk-table table3 uk-table-hover uk-table-middle uk-table-divider uk-table-striped">
                    <tbody>
                    <tr>
                        <td>
                            <figure class="logo_f">
                                <a href="#"><img src="imgs/Logos/Hậu%20Giang%20EVN.png" alt=""></a>
                            </figure>
                        </td>
                        <td>
                            <div>A: Phước Dân Town, Quận Ninh Phước, tỉnh Hậu Giang</div>
                            <div>P: 0268.2210241 - F: 0268.2210241</div>
                            <div>E: info@evn.com</div>
                        </td>
                    </tr>
                    <?php for ($i=1;$i<=5;$i++) { ?>
                    <tr>
                        <td>Công ty điện lực Hậu Giang <?= $i; ?></td>
                        <td>
                            <div>A: Phước Dân Town, Quận Ninh Phước, tỉnh Hậu Giang</div>
                            <div>P: 0268.2210241 - F: 0268.2210241</div>
                            <div>E: info@evn.com</div>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left-lienhe.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>