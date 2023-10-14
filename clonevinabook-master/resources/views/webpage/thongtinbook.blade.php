<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/sackchuyenganh.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">


    <script src="https://kit.fontawesome.com/ff7b6d55a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/thongtin.css" />
    <link href="/js/sackchuyennganh.js" />
</head>

<body>
    <div class="helper-containner" id="main-containenr">
        <div class="main-top">
            <div class="top-containner">
                <div class="header-top">
                    <i class="fas fa-truck vnb"></i>
                    <span class="text-top hover-free">Miễn phí giao hàng</span>
                    <span class="arrow">&nbsp;</span>
                </div>
                <div class="header-top">
                    <i class="fa-solid fa-book vnb"></i>
                    <span class="text-top hover-book">80.000 tựa sáck</span>
                    <span class="arrow">&nbsp;</span>
                </div>
                <div class="header-top">
                    <i class="fa-solid fa-mobile-screen vnb"></i>
                    <span class="text-top hover-phone">Vinabook Reader</span>
                    <span class="arrow">&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="containner-main-search">
            <div class="search-bar">
                <div class="into-search-bar">
                    <a href="sackchuyennganh.php">
                        <img width="252" height="33"
                            src="https://www.vinabook.com/images/thumbnails/img/252/33/vnb_logo_2x.png" />
                    </a>
                </div>
                <div class="input-group">
                    <div class="center-icon">
                        <i class="fa fa-search vnb" onclick=""></i>
                    </div>
                    <input type="text" class="input-search" name="q" id="searchInput"
                        placeholder="Tìm kiếm tựa sách, tác giả" value="" />
                    <ul id="searchResults"></ul>
                    <button title="Tìm sách" class="button-search" type="submit">
                        Tìm sách
                    </button>
                </div>
                <div class="cart-shopping">
                    <a>
                        <i class="fa-solid fa-cart-shopping" style="color: #057a45" id="cart-status"></i>
                    </a>
                    <div class="total-book"></div>
                </div>

                <div class="login-logout">
                    @if (Cookie::has('user_id'))
                    <a class="js-logout" href="{{ route('logout') }}">Đăng xuất</a>
                    @else
                    <a href="{{ route('login') }}">Đăng nhập</a>
                    <span class="arrow">&nbsp;</span>
                    <span>|</span>
                    <span class="arrow">&nbsp;</span>
                    <a href="{{ route('dangky') }}">Đăng Ký</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="list-hotline-support">
            <div class="na-mid">
                <div class="list-icon">
                    <i class="fa-solid fa-list"></i>
                    <span>Danh Mục Sáck</span>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="hotline-support">
                    <i class="fa-solid fa-phone" style="color: #fff; line-height: 40px"></i>
                    <span class="arrow">&nbsp;</span>
                    <span>Hotline:</span>
                    <span class="arrow">&nbsp;</span>
                    <b>1900 6401</b>
                    <span class="arrow">&nbsp;</span>
                    <span class="arrow">&nbsp;</span>
                    <span>|</span>
                    <span class="arrow">&nbsp;</span>
                    <i class="fa-solid fa-question" style="color: #fff; line-height: 40px"></i>
                    <span class="arrow">&nbsp;</span>
                    <span class="arrow">Hỗ Trợ Trực Tuyến</span>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="containner-body">
                <div class="middle-body">
                    <span>Trang chủ &nbsp;></span>
                    <span style="margin-left: 10px">Sáck Chuyên Ngành&nbsp;></span>
                    <span style="margin-left: 10px">Văn Hóa Nghệ Thuật&nbsp;></span>
                    <span id="name-book-aka"></span>
                </div>
                <div class="main-body">
                    <div class="img-auto">
                        <a href="#">
                            <img src="/images/icon/icon_xemtruoc_2x.png" width="98" height="23" />
                        </a>
                        <img class="img-inject" src="" />
                    </div>
                    <div class="middle-information">
                        <div id="mid-information-book"></div>
                        <div class="sub-title">Thông Tin Kèm Theo</div>
                        <div>
                            <img src="/images/icon/dot_check.png" />
                            <span class="font-size-14">Có Dịck Vụ Bọc Sáck plastic Cao Cấp Cho Sáck Này(<span
                                    class="gray-gray-text">Chi Tiết)
                                </span> </span><br />
                        </div>
                        <div>
                            <img src="/images/icon/dot_check.png" />
                            <span class="font-size-14">Miễn Phí Giao Hàng Toàn Quốc Cho Đơn Hàng Từ 250K(Áp Dụng từ
                                1/2/2015.(<span class="gray-gray-text"> Xem Chi Tiết) </span>
                            </span>
                        </div>
                    </div>
                    <div class="product-info-right">
                        <div class="information-price">Thông Tin Thanh Toán</div>
                        <div class="product-prices"></div>
                        <div class="button-prices-containner"></div>
                    </div>
                </div>
                <div class="gt-tt-bl">
                    <div class="presentation-book">
                        <a href="#">Giới Thiệu</a>
                        <a href="#">Thông Tin chi Tiết </a>
                        <a href="#">Đánh Giá&Bình Luận</a>
                    </div>
                    <div class="information-this-book"></div>
                    <div class="render-information-full"></div>
                </div>
            </div>
        </div>
        <div class="footer-main">
            <div class="footer-register">
                <div class="register-text-bottom">
                    <span class="text-register">ĐĂNG KÝ NHẬN EMAIL<br></span>
                    Đăng ký nhận thông tin sách mới , sáck bán
                </div>
                <div class="input-register-bottom">
                    <input type="text" class="txtname" name="txtname" placeholder="Tên Của Bạn" required="required">
                    <input type="email" class="txtemail" name="txtemail" placeholder="Nhập Email Của Bạn">
                    <select name="select-name" class="select-name">
                        <option value="" class="theloaiyeuthick">
                            Thể Loại Yêu Thíck
                        </option>
                        <option value="123" class="theloaiyeuthick">Tất Cả</option>
                        <option value="234" class="theloaiyeuthick">
                            Sáck Văn Học Trong Nước
                        </option>
                        <option value="" class="theloaiyeuthick">Sáck Kinh Tế</option>
                        <option value="" class="theloaiyeuthick">Sáck Khoa Học</option>
                        <option value="" class="theloaiyeuthick">
                            Sáck Văn Học Nước Ngoài
                        </option>
                        <option value="" class="theloaiyeuthick">
                            Sáck Thường Thức - Đời Sống
                        </option>
                        <option value="" class="theloaiyeuthick">Sáck Thiếu Nhi</option>
                        <option value="" class="theloaiyeuthick">
                            Sáck Phát Triển Bản Thân
                        </option>
                        <option value="" class="theloaiyeuthick">
                            Sáck Tin Học-Ngoại Ngữ
                        </option>
                        <option value="" class="theloaiyeuthick">
                            Sáck Chuyên Ngành
                        </option>
                        <option value="" class="theloaiyeuthick">
                            Sáck Giáo Khoa-Giáo Trình
                        </option>
                        <option value="" class="theloaiyeuthick">
                            Tạp Chí - Văn Phòng Phẩm
                        </option>
                    </select>
                    <button value="Đăng Ký" type="submit" class="newsletter-button" name="txtbutton">
                        Đăng Ký Ngay
                    </button>
                </div>
            </div>
            <div class="bottom-information">
                <div class="containner-bottom">
                    <div class="company-support-news">
                        <div class="company-information">
                            <span class="main-text-bottom">
                                <a href="#">Về công ty</a>
                            </span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ route('gioithieu') }}">Giới Thiệu Công
                                    ty</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Tuyển Dụng</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Góc Báo trí</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Chương Trình Đại Lý</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Chính Sáck Bảo Mật</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Chính Sáck Dối Trá</a></span>
                        </div>
                        <div class="company-information" style="width: 180px;">
                            <span class="main-text-bottom">
                                <a href="#">trợ giúp</a>
                            </span>
                            <span class="a-text-bottom a-hover-black" "=""><a href=" #">Quy Định Sử Dụng</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Hướng Dẫn Mua Hàng</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Phương Thức Thanh Toán</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Phương Thức Vận Chuyển</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Các Câu Hỏi Thường Gặp</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Ứng dụng đọc ebook</a></span>
                        </div>
                        <div class="company-information" style="max-width: 110px;margin-left: 10px;">
                            <span class="main-text-bottom">
                                <a href="#">Tin Tức Sáck</a>
                            </span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Tin Tức</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Chân Dung</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Điểm Sáck</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="#">Phê Bình</a></span>
                        </div>
                        <div class="dowload-information">
                            <span class="main-text-bottom">
                                Tải ứng dụng trên điện thoại
                            </span>
                            <div class="logo-app">
                                <img src="/images/icon-appstore.png">
                                <img src="/images/icon-googleplay.png">
                            </div>
                        </div>
                    </div>
                    <div class="pay-transport-sales-partner">
                        <div class="accepts-pay">
                            <span>CHẤP NHẬN THANH TOÁN</span>
                            <div class="mobie-banking">
                                <img src="/images/icon/visa.jpg">
                                <img src="/images/icon/master_card.jpg">
                                <img src="/images/icon/jcb.jpg" alt="">
                            </div>
                            <div class="mobie-banking">
                                <img src="/images/icon/atm.jpg">
                                <img src="/images/icon/cod.jpg">
                                <img src="/images/icon/payoo.jpg">
                            </div>
                            <span>THANH TOÁN AN TOÀN</span>
                            <div class="mobie-banking">
                                <img src="/images/icon/verify_visa.jpg">
                                <img src="/images/icon/mastercard_securecode.jpg">
                                <img src="/images/icon/onepay.jpg">
                            </div>
                        </div>
                        <div class="accepts-pay">
                            <span>ĐỐI TÁC VẬN CHUYỂN</span>
                            <div class="mobie-banking-transport">
                                <img src="/images/logovnb.png" width="184">
                                <img src="/images/icon/vn-post.jpg" width="184">
                                <img src="/images/icon/dhl.jpg" width="184" alt="">
                            </div>
                        </div>
                        <div class="accepts-pay">
                            <span>ĐỐI TÁC BÁN HÀNG</span>
                            <div class="mobie-banking-transport">
                                <img src="/images/icon/lazada.jpg" width="115">
                                <img src="/images/icon/shopee.jpg" width="115">
                                <img src="/images/icon/amazon.jpg" width="115 ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="containner-bottom-2">
                    <div style="margin-bottom: 20px">
                        <span>THƯỜNG ĐƯỢC TÌM KIẾM</span>
                    </div>
                    <div class="usually-famous">
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="#">truyện dân brown</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sáck hay về gia đình</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sáck học tiếng trung</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sáck blockchain</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sáck khởi nghiệp</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sáck quản lý nhân sự</a></span>
                        </div>
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách warren buffet</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">giáo trình tiếng anh trẻ
                                    em</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">tiểu thuyết tình yêu</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách du học</a></span>
                            <span class="a-text-bottom"><a href="#">sách bán hàng</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách về quản trị kinh
                                    doanh</a></span>
                        </div>
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách digital marketing</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách hay về kinh tế</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách y học</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách kỹ năng mềm</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách về đầu tư chứng
                                    khoán</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách tài chính</a></span>
                        </div>
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="#">truyện mới của nguyễn nhật
                                    ánh</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách về đầu tư</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">tủ sách gia đình</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách làm giàu</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách dạy nấu ăn</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách hay cho thiếu nhi</a></span>
                        </div>
                        <div style="margin-right: 58px">
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách cho con</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách doanh nhân</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách dạy kỹ năng giao
                                    tiếp</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách phong thủy cổ</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách tâm lý về tình yêu</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="#">sách tự học tiếng anh giao
                                    tiếp</a></span>
                        </div>
                    </div>
                </div>
                <div class="bottom-end-containner">
                    <div class="bottom-copyright">
                        <div class="copyright-end">
                            <div class="bottom-system">
                                <div style="width: 276px">
                                    <img src="/images/icon/logo_so_cong_thuong.png">
                                </div>
                                <div class="span-5" style="margin-left: 20px">
                                    <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM</p>
                                    <span>Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân
                                        Phú, Hồ Chí Minh</span><br>
                                    <span>MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày
                                        10/03/2011</span><br>
                                    <span>Tel: 028.73008182 - Fax: 028.39733234 - Email:
                                        <a href="">hotro@vinabook.com</a></span>
                                </div>
                            </div>
                            <div class="likely-system">
                                <div class="website-likely">WEBSITE CÙNG HỆ THỐNG:</div>
                                <div class="img-website-system">
                                    <img src="/images/icon/logo_hotdeal_2x.png">
                                    <img src="/images/icon/logo_yesgo_2x.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal ">
            <div class="modal_overlay">

            </div>
            <div class="modal_body">
                <div class="modal_inner">
                    <div class="modal_header">
                        Đăng nhập
                        <div class="modal-close js-modal-close">
                            <span>X</span>
                        </div>
                    </div>
                    <div class="modal-container">
                        <div class="modal-container-top">
                            <div class="modal-container-input">
                                <span class="modal-container-title">Email<span class="red"> * </span></span>
                                <input type="email" value="" name="email">
                            </div>
                            <div class="modal-container-input pass">
                                <span class="modal-container-title">Mật khẩu<span class="red"> * </span></span>
                                <input type="password" value="" name="pass">
                            </div>
                            <div class="modal-container-check-and-forget">
                                <span><input type="checkbox" name="check">Ghi nhớ thông tin</span>
                                <a href="">Quên mật khẩu</a>
                            </div>
                            <button>Đăng nhập</button>
                            <div class="modal-container-reg">
                                Chưa có tài khoản vui lòng <a href="">ĐĂNG KÝ</a>
                            </div>
                        </div>
                        <div class="modal-container-bot">
                            <span>Hoặc đăng nhập bằng:</span>
                            <div class="modal-container-bot-icon">
                                <a href=""><img height="40" src="/images/google_signin_dark.png" alt=""></a>
                                <a href=""><img height="40" style="margin-left: 5px;"
                                        src="/images/facebook_signin_dark.png" alt="" class="img-left"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/thongtinbook.js " defer></script>
    <script src="/js/sackchuyennganh.js"></script>
</body>

</html>