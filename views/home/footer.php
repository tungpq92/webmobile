<div class="footer">
    <div class="container">
        <div class="plc">
            <div class="col-xs-12 col-12 col-sm-6 col-md-3 col-lg-3" id="plcOne">
                <ul><p>Tin tức</p>
                    <li><a href="#">Tin mới</a></li>
                    <li><a href="#">Khuyến mại</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Tags</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-12 col-sm-6 col-md-3 col-lg-3" id="plcOne">
                <ul><p>Chính sách</p>
                    <li><a href="#">Chính sách giao hàng</a></li>
                    <li><a href="#">Chính sách đổi hàng</a></li>
                    <li><a href="#">Chính sách bảo hành</a></li>
                    <li><a href="#">Chính sách trả góp</a></li>
                    <li><a href="#">Giới thiệu máy đổi trả</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-12 col-sm-6 col-md-3 col-lg-3" id="plcOne">
                <ul><p>Dịch vụ & hỗ trợ</p>
                    <li><a href="#">Hệ thống cửa hàng</a></li>
                    <li><a href="#">Hướng dẫn mua hàng</a></li>
                    <li><a href="#">Hướng dẫn thanh toán</a></li>
                    <li><a href="#">Hướng dẫn tích điểm </a></li>
                    <li><a href="#">Các câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-12 col-sm-6 col-md-3 col-lg-3" id="plcOne">
                <ul class="danhmuc"><p>Các nhãn hàng yêu thích</p>
                    <?php
                        $data = DB::fetchAll("SELECT * FROM categories WHERE parent_id = 0");
                     ?>
                    <?php foreach ($data as $rows) : ?>
                    <li>
                        <span><?php echo $rows->name; ?></span>
                        <ul class="sub-categories">
                            <?php
                                //lay cac danh muc cap con
                                $subCategory = DB::fetchAll("SELECT * FROM categories WHERE parent_id = ".$rows->id." ORDER BY id");
                                foreach($subCategory as $subRows):
                            ?>
                                <li><a href="index.php?controller=products&action=categories&catid=<?php echo $subRows->id; ?>"><?php echo $subRows->name; ?>,</a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="btnFooter">
        <div class="container" style="border-top: 1px solid #8a8a8a;">
            <div class="col-xs-12 col-12 col-sm-6 col-md-6 col-lg-6" id="thanhtoan">
                <ul><h4>Hỗ trợ thanh toán</h4>
                    <li><a href="#"><img src="public/img/thanhtoan/visa.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/megacard.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/baokim.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/tien-mat.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/chuyenkhoan.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/atm.jpg" alt=""></a></li>
                    <div style="color: #676767;font-size: 12px;margin-top: 10px;">
                        <span>© 2007 - 2015 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số TH-Company</span><br>
                        <span>Địa chỉ: Số 404 đường Kim Giang P. Đại Kim - Q.Hoàng Mai - TP Hà Nội</span><br>
                        <span>GPĐKKD số 0000000000 do Sở KHĐT TP.Hà Nội cấp ngày 20/12/2019.</span>
                    </div>
                </ul>
            </div>
            <div class="col-xs-12 col-12 col-sm-6 col-md-6 col-lg-6">
                <ul><h4>Chứng nhận giải thưởng</h4>
                    <li><a href="#"><img src="public/img/thanhtoan/thvn.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/bocongthuong.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/san-pham.jpg" alt=""></a></li>
                    <li><a href="#"><img src="public/img/thanhtoan/dmca.jpg" alt=""></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="btn-fa">
                    <h4>Các kênh kết nối</h4>
                    <li><a class="fa fa-facebook"></a></li>
                    <li><a class="fa fa-twitter"></a></li>
                    <li><a class="fa fa-google"></a></li>
                    <li><a class="fa fa-youtube"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>