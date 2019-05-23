<?php include('header.php'); ?>
<div class="uk-container uk-container-large">
    <?php
    $cars = array
    (
        array(
            'title' => 'dịch vụ',
            'src' => 'imgs/banner_trangcon/dichvu-bieugiadien.png',
        )
    );
    foreach ($cars as $key => $value) { ?>
        <?php include('block_top_trangcon.php'); ?>
    <?php } ?>
    <div class="uk-grid-divider common" uk-grid>
        <div class="uk-width-expand@m">
            <ul class="uk-breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Giá điện</a></li>
                <li><span>Biểu giá điện</span></li>
            </ul>
            <h2 class="uk-text-uppercase title_common uk-margin-medium-bottom">Biểu giá điện</h2>
            <div class="uk-child-width-1-2@m uk-grid-medium uk-hidden" uk-grid="masonry: true">
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Biểu giá bán lẻ điện
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Các ngành sản xuất</li>
                                <li>2. Khối hành chính, sự nghiệp</li>
                                <li>3. Kinh doanh</li>
                                <li>4. Sinh hoạt</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Biểu giá buôn điện
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Nông thôn</li>
                                <li>2. Khu tập thể, cụm dân cư</li>
                                <li>3. Giá buôn điện cho tổ hợp thương mại - dịch vụ - sinh hoạt</li>
                                <li>4. Khu công nghiệp</li>
                                <li>5. Giá buôn điện cho chợ 2.383 đ/kWh</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Giá điện theo hình thức ba giá
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Quy định về giờ</li>
                                <li>2. Đối tượng mua điện theo hình thức ba giá</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default card1_dv">
                        <div class="uk-card-header uk-card-primary uk-padding-small">
                            Giá điện cho hộ nghèo, thu nhập thấp
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <ul class="uk-list">
                                <li>1. Đối tượng</li>
                                <li>2. Mức hỗ trợ</li>
                                <li>3. Hình thức chi trả</li>
                            </ul>
                            <a class="uk-link" href="#">Xem chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2@m uk-grid-small">
                <div>

                </div>
            </div>
            <ul class="uk-subnav bieugiadien uk-subnav-pill uk-child-width-1-2@m uk-grid-small" uk-grid uk-switcher>
                <?php
                $cars = array
                (
                    'Biểu giá bán lẻ điện',
                    'Biểu giá buôn điện',
                    'Giá bán điện theo giờ',
                    'Giá điện cho hộ nghèo, thu nhập thấp',
                );
                foreach ($cars as $k => $v) { ?>
                    <li><a href="#"><?= $v; ?></a></li>
                <?php } ?>
            </ul>

            <div class="uk-switcher uk-margin">
                <div>
                    <h3 class="title2_dv uk-text-uppercase uk-text-center">CÁC NGÀNH SẢN XUẤT</h3>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-divider table1_dv">
                            <thead>
                            <tr>
                                <th>THỨ TỰ</th>
                                <th>NHÓM ĐỐI TƯỢNG KHÁCH HÀNG</th>
                                <th>GIÁ BÁN ĐIỆN (đồng/kWh)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><h5 class="title1_table">Cấp điện áp từ 110 kV trở lên</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>1.536</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>970</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>2.759</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><h5 class="title1_table">Cấp điện áp từ 22 kV đến dưới 110 kV</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>1.555</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>1.007</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>2.871</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><h5 class="title1_table">Cấp điện áp từ 6 kV đến dưới 22 kV</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>1.611</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>1.044</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>2.964</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><h5 class="title1_table">Cấp điện áp dưới 6 kV</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>1.685</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>1.100</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>3.076</td>
                            </tr>
                            <tr>
                                <td class="chuthich" colspan="3">* Khách hàng mua điện tại cấp điện áp 20kV được tính theo giá t ại cấp điện áp từ 22kV đến dưới 110kV</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="title2_dv uk-text-uppercase uk-text-center">KHỐI HÀNH CHÍNH, SỰ NGHIỆp</h3>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-divider table1_dv">
                            <thead>
                            <tr>
                                <th>THỨ TỰ</th>
                                <th>NHÓM ĐỐI TƯỢNG KHÁCH HÀNG</th>
                                <th>GIÁ BÁN ĐIỆN (đồng/kWh)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><h5 class="title1_table">Bệnh viện, nhà trẻ, mẫu giáo, trường phổ thông </h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Cấp điện áp từ 6 kV trở lên</td>
                                <td>1.659</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Cấp điện áp dưới 6 kV </td>
                                <td>1.771</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><h5 class="title1_table">Chiếu sáng công cộng; đơn vị hành chính sự nghiệp</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Cấp điện áp từ 6 kV trở lên</td>
                                <td>1.827</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Cấp điện áp dưới 6 kV </td>
                                <td>1.1902</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="title2_dv uk-text-uppercase uk-text-center">KINH DOANH</h3>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-divider table1_dv">
                            <thead>
                            <tr>
                                <th>THỨ TỰ</th>
                                <th>NHÓM ĐỐI TƯỢNG KHÁCH HÀNG</th>
                                <th>GIÁ BÁN ĐIỆN (đồng/kWh)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><h5 class="title1_table">Cấp điện áp từ 110 kV trở lên</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>2.442</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>1.361</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>4.251</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><h5 class="title1_table">Cấp điện áp từ 22 kV đến dưới 110 kV</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>2.629</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>1.547</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>2.871</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><h5 class="title1_table">Cấp điện áp từ 6 kV đến dưới 22 kV</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Giờ bình thường</td>
                                <td>2.666</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Giờ thấp điểm</td>
                                <td>1.622</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Giờ cao điểm</td>
                                <td>4.587</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="title2_dv uk-text-uppercase uk-text-center">sinh hoạt</h3>
                    <div class="uk-overflow-auto">
                        <table class="uk-table uk-table-divider table1_dv">
                            <thead>
                            <tr>
                                <th>THỨ TỰ</th>
                                <th>NHÓM ĐỐI TƯỢNG KHÁCH HÀNG</th>
                                <th>GIÁ BÁN ĐIỆN (đồng/kWh)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><h5 class="title1_table">Giá bán lẻ điện sinh hoạt</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bậc 1: Cho kWh từ 0 - 50</td>
                                <td>1.678</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bậc 2: Cho kWh từ 51 - 100</td>
                                <td>1.734</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bậc 3: Cho kWh từ 101 - 200</td>
                                <td>2.014</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bậc 4: Cho kWh từ 201 - 300</td>
                                <td>2.536</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bậc 5: Cho kWh từ 301 - 400</td>
                                <td>2.834</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bậc 6: Cho kWh từ 401 trở lên</td>
                                <td>2.927</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><h5 class="title1_table">Giá bán lẻ điện sinh hoạt dùng công tơ thẻ trả trước</h5></td>
                                <td>2.461</td>
                            </tr>
                            <tr>
                                <td class="chuthich" colspan="3">
                                    <p>Đối với sinh viên và người lao động thuê nhà để ở:</p>
                                    <p>- Trường hợp thời hạn cho thuê nhà dưới 12 tháng và chủ nhà không thực hiện kê khai được đầy đủ số người sử dụng điện thì áp dụng giá bán lẻ điện sinh hoạt của bậc 3: Từ 101 - 200 kWh cho toàn bộ sản lượng điện đo đếm được tại công tơ.</p>
                                    <p>- Trường hợp chủ nhà kê khai được đầy đủ số người sử dụng điện thì Bên bán điện có trách nhiệm cấp định mức cho chủ nhà căn cứ vào sổ tạm trú hoặc chứng từ xác nhận tạm trú của cơ quan Công an quản lý địa bàn; cứ 04 người được tính là một hộ sử dụng điện để tính số định mức áp dụng giá bán lẻ điện sinh hoạt.</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <div>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</div>
                <div>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</div>
            </div>
            <div class="uk-section-xsmall"></div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <aside uk-sticky="offset: 100; bottom: true;">
                <h3 class="title_aside uk-text-uppercase uk-margin-small">chuyên mục</h3>
                <?php include('nav-left-dichvu.php'); ?>
            </aside>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>