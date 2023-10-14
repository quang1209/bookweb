<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" url('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href=" url('https://fonts.googleapis.com">
    <link rel="preconnect" href=" url('https://fonts.googleapis.com">
    <link rel="preconnect" href="url('https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/ff7b6d55a9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/" />

    <link rel="stylesheet" href="{{asset('css/sackchuyenganh.css')}}">

</head>

<body>
    <div class="helper-containner" id="main_containner">
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
                    <a href="{{ url('/vinabook/index.blade.php') }}">
                        <img width="252" height="33" src="{{ asset('images/logovnb.png') }}" /></a>
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
                    <a class="popup-a">
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
                    <span>Trang chủ ></span>
                    <span style="margin-left: 10px">Sáck Chuyên Ngành</span>
                </div>
                <div class="centre-body">
                    <div class="aside-left">
                        <div class="into-box-left">
                            <a href="{{ url('#') }}">Kho sách giảm giá</a>
                        </div>
                        <div class="into-box-left"><a href="{{ url('#') }}">Sách Bán Chạy</a></div>
                        <div class="into-box-left">
                            <a href="{{ url('#') }}">Sách Mới Phát Hành</a>
                        </div>
                        <div class="into-box-left">
                            <a href="{{ url('#') }}">Sách Sắp Phát Hành</a>
                        </div>
                        <div class="into-box-left"><a href="{{ url('#') }}">Combo ưu đãi</a></div>
                        <div class="category into-box-left">
                            <span href="{{ url('#') }}" style="height: 50.8px; line-height: 40px">Danh Mục</span>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Âm Nhạc<span class="count">(445)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhạc Dân Tộc</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhạc Lý</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhạc Quốc Tế</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhạc Sĩ,Ca Sĩ, Ca Từ</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhạc Tiền Chiến</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhạc Trẻ</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Các Thể Loại Nhạc Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Chính Trị,Triết Học<span class="count">(760)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Sáck Chính Trị</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Triết Học Phương Tây</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Triết Học Phương Đông</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Du Lịch<span class="count">(284)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Du Lịch Nước Ngoài</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Du Lịch Trong Nước</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Khoa Học Cơ Bản<span class="count">(406)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Hóa Học </a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Khảo Cổ Học </a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Sinh Học</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Thiên Văn Học</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Toán Học</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Vật Lý</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Địa Chất</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Lĩnh Vực Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Khoa Học Kỹ Thuật<span class="count">(1253)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Cầu Đường</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Cơ Khí Chế Tạo Máy</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Dầu Khí</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Kỹ Thuật Công Nghệ</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Môi Trường</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Ô Tô- Xe Máy</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Xây Dựng</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Điện,ĐiệnTử,TựĐộngHóa</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Lĩnh Vực Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Khoa Học Tự Nhiên Xã Hội<span class="count">(1385)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Lịch Sử Địa Lý<span class="count">(1529)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Châu Âu</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Châu Á</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Châu Mỹ</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Châu Phi</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Thế Giới</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Trung Quốc</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Trung Đông</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Việt Nam</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Mỹ Thuật , Kiến Trúc<span class="count">(731)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Hội Họa</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Kiến Trúc</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Các Loại Mỹ Thuật Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nông Lâm Nghiệp<span class="count">(616)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Chăn Nuôi</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Lâm Nghiệp</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Trồng Trọt</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Pháp Luật<span class="count">(1324)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Luật Doanh Nghiệp</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Luật Lao Động Tiền Lương</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Luật Lao Động Quốc Tế</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Luật Lao Động Thương Mại</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Luật Đất Đai Nhà Ở</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Các Bộ Luật Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Sáck Học Nghề<span class="count">(64)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Sáck Tôn Giáo<span class="count">(1340)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Hồi Giáo</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Phật Giáo</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Thiên Chúa Giáo</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Tôn Giáo Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Thể Thao<span class="count">(695)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Bóng Đá</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Cờ Vua Cờ Tướng</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Thể Dục/Yoga/Thiền</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Võ Thuật</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Các Môn Thể Thao Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Văn Hóa Nghệ Thuật<span class="count">(302)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhiếp Ảnh/Sáck Ảnh</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Sân Khấu,Điện Ảnh,Nhân Vật</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Thời Trang</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Y Học<span class="count">(2129)</span></a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nhị Khoa</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Nội Khoa</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Sản Khoa Khoa</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Y Học Cổ Truyền</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Y Học Thường Thức</a>
                        </div>
                        <div class="into-box-left a-text-bottom list-special-text">
                            <a href="{{ url('#') }}">Các Khoa Khác</a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nghiệp Vụ Báo Chí<span class="count">(81)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Các Chủ Đề Khác<span class="count">(120)</span></a>
                        </div>
                        <div class="category into-box-left">
                            <span href="{{ url('#') }}" style="height: 50.8px; line-height: 30px">TÁC GIẢ SÁCH CHUYÊN
                                NGÀNH</span>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}"><span class="count">(722)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nhiều Tác Giả<span class="count">(198)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nhiều Dịck Giả<span class="count">(133)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nguyễn Kim Dân<span class="count">(81)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}"><span class="count">(78)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Hà Sơn<span class="count">(73)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Gia Bảo<span class="count">(52)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Khánh Linh<span class="count">(46)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">SaiGon Books<span class="count">(45)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Kiến Văn<span class="count">(44)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Việt Chương<span class="count">(44)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nguyễn Minh Tiến<span class="count">(40)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Hoàng Anh<span class="count">(39)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Minh Đức <span class="count">(38)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Đoàn Trung Côn <span class="count">(38)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nguyễn Mạnh Chính <span class="count">(33)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Thiên Kim<span class="count">(31)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nguyễn Lân Dũng<span class="count">(31)</span></a>
                        </div>
                        <div class="img-2-arrow-2x into-box-left">
                            <img src="{{ asset('images/2_arow_2x.png') }}" width="9" height="15" /><a class="read-more"
                                href="{{ url('#') }}">Xem
                                Tất Cả</a>
                        </div>
                        <div class="category into-box-left">
                            <span href="{{ url('#') }}" style="height: 50.8px; line-height: 30px">NHÀ PHÁT HÀNH SÁCH
                                CHUYÊN
                                NGÀNH</span>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Chưa Có<span class="count">(1615)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Thăng Long<span class="count">(1030)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">NSB Trẻ<span class="count">(896)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Văn Lang<span class="count">(890)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">NXB KHKT<span class="count">(733)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Quang Minh<span class="count">(550)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Thái Hà<span class="count">(459)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Alpha Books<span class="count">(443)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Phương Nam<span class="count">(423)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Fahasa<span class="count">(334)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">NSB Nông Nghiệp<span class="count">(322)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Kinh Tế<span class="count">(314)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">NSBTH TPHCM<span class="count">(293)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nhã Nam<span class="count">(290)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Thành Nghĩa<span class="count">(280)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Huy Hoàng<span class="count">(237)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Kinh Đô 2<span class="count">(224)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Trí Việt<span class="count">(213)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">NXB Phụ Nữ<span class="count">(204)</span></a>
                        </div>
                        <div class="name-category into-box-left">
                            <a href="{{ url('#') }}">Nhà Sáck Hoa Sen<span class="count">(179)</span></a>
                        </div>
                        <div class="img-2-arrow-2x into-box-left">
                            <img src="{{ asset('images/2_arow_2x.png') }}" width="9" height="15" /><a class="read-more"
                                href="{{ url('#') }}">Xem
                                Tất Cả</a>
                        </div>
                    </div>
                    <div class="mid-handle-box">
                        <div class="aside-right">
                            <div class="containner-right">
                                <p class="color-text-green">
                                    Sáck chuyên Ngành Mới Phát Hàng
                                </p>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/376129_nhung-van-de-lich-su-va-van-hoa-champa.jpg') }}" />
                                        <span class="sale-book-10">-8%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('thongtinbook?bookIndex=0') }}">Những Vấn Đề Lịch Sử
                                            Và Văn</a>
                                    </div>
                                    <div class="author">Nhiều tác giả</div>
                                    <div class="real-price">329.000đ</div>
                                    <div class="sale-price">302.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/376258_the-usborne-bach-khoa-lich-su-the-gioi-encyclopedia-of-world-history.jpg') }}" />
                                        <span class="sale-book-10">-10%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('thongtinbook?bookIndex=1') }}">The Usborne: Bách Khoa
                                            Lịch Sử Thế
                                            Giới
                                            - Encyclopedia Of World History</a>
                                    </div>
                                    <div class="author">Jame BingHam</div>
                                    <div class="real-price">550.000đ</div>
                                    <div class="sale-price">495.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/376171_yoga-cuoi-nhung-bai-tap-cuoi-hang-ngay-de-co-suc-khoe-va-hanh-phuc-dai-lau.jpg') }}" />
                                        <span class="sale-book-10">-13%</span><br />
                                    </div>
                                    <div class="name-book"><a href="{{ url('thongtinbook?bookIndex=2') }}">Yoga cười
                                            Những
                                            bài
                                            tập cười hàng ngày để có sức khoẻ và hạnh phúc dài lâu</a></div>
                                    <div class="author">MaDan Katarina,MD</div>
                                    <div class="real-price">109.000đ</div>
                                    <div class="sale-price">95.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/376134_xa-hoi-hoc-khai-luoc-nhung-tu-tuong-lon.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book"><a href="{{ url('thongtinbook?bookIndex=3') }}">Xã
                                            Hội Học - Khái
                                            Lược Những Tư Tưởng Lớn</a></div>
                                    <div class="author">DK</div>
                                    <div class="real-price">390.000đ</div>
                                    <div class="sale-price">331.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/376423_viet-nam-phong-tuc.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book"><a href="{{ url('thongtinbook?bookIndex=4') }}">Việt Nam
                                            phong
                                            tục</a></div>
                                    <div class="author">Phan Kế Binh</div>
                                    <div class="real-price">159.000đ</div>
                                    <div class="sale-price">135.000đ</div>
                                </div>
                            </div>
                            <div class="img-2-arrow-2x-2 img-2-arrow-2x">
                                <img src="{{ asset('images/2_arow_2x.png') }}" width="9" height="15" /><a
                                    class="read-more" style="font-size: 13px" href="{{ url('#') }}">Xem Tất Cả</a>
                            </div>
                        </div>

                        <div class="aside-right">
                            <div class="containner-right">
                                <p class="color-text-green">Sáck chuyên Ngành</p>
                            </div>
                            <div class="arrange">
                                <span id="sort_fiend">
                                    <a>Sắp xếp theo trạng thái sách <i class="fa-solid fa-sort-down"></i></a>
                                </span>
                                <a class="qr-a" style="    padding: 5px 22px 20px 9px;">
                                    <img src="{{ asset('images/imges-3/images (1).png') }}" width="15" height="16">
                                </a>
                                <a class="qr-a" style="    padding: 5px 22px 20px 9px;">
                                    <img src="{{ asset('images/imges-3/4427124.png') }}" width="15" height="16">
                                </a>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/376171_yoga-cuoi-nhung-bai-tap-cuoi-hang-ngay-de-co-suc-khoe-va-hanh-phuc-dai-lau (1).jpg') }}" />
                                        <span class="sale-book-10">-13%</span><br />
                                    </div>
                                    <div class="name-book"><a
                                            href="{{ url('thongtinbook.blade.php?bookIndex=2') }}">Yoga cười-Những
                                            bài
                                            tập</a></div>
                                    <div class="author">Madan Katarina,MD</div>
                                    <div class="real-price">109.000đ</div>
                                    <div class="sale-price">95.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/373224_nam-ky-va-cu-dan-cac-tinh-mien-tay.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book"><a href="{{ url('#') }}">Nam Kỹ và Cư Dân Các Tỉnh</a></div>
                                    <div class="author">JC Baurac</div>
                                    <div class="real-price">299.000đ</div>
                                    <div class="sale-price">254.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/373224_nam-ky-va-cu-dan-cac-tinh-mien-tay.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book"><a href="{{ url('#') }}">Nam Kỹ Và Cư Dân Các Tỉnh</a></div>
                                    <div class="author">J C Baurac</div>
                                    <div class="real-price">299.000đ</div>
                                    <div class="sale-price">254.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/372082_sapiens-luoc-su-loai-nguoi.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book"><a href="{{ url('#') }}">Sapiens lược Sử Loài Người</a></div>
                                    <div class="author">Yuval Noah Harari</div>
                                    <div class="real-price">299.000đ</div>
                                    <div class="sale-price">254.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/372171_sapiens-luoc-su-loai-nguoi-bang-tranh-tap-2-nhung-tru-cot-cua-nen-van-minh.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Sapiens - Lược Sử Loài Người Bằng Tranh - Tập 2: Những
                                            Trụ
                                            Cột Của Nền Văn Minh</a>
                                    </div>
                                    <div class="author">Yuval Noah Harari</div>
                                    <div class="real-price">354.000đ</div>
                                    <div class="sale-price">293.000đ</div>
                                </div>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/371442_hoi-dap-tu-trai-tim-tai-ban-2021.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Hỏi Đáp Từ Trái Tim(Tái Bản 2021)</a>
                                    </div>
                                    <div class="author">Thíck Nhất Hạnh</div>
                                    <div class="real-price">149.000đ</div>
                                    <div class="sale-price">127.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/371395_tay-thay-trong-tay-con-tai-ban-2019.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Tay Thầy Trong Tay Con (Tái Bản 2019)</a>
                                    </div>
                                    <div class="author">Thíck Nhất Hạnh</div>
                                    <div class="real-price">79.000đ</div>
                                    <div class="sale-price">67.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/372871_hanh-phuc-cam-tay-tai-ban-2021.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Hạnh Phúc Cầm Tay (Tái Bản 2021)</a>
                                    </div>
                                    <div class="author">Thích Nhất Hạnh</div>
                                    <div class="real-price">75.000đ</div>
                                    <div class="sale-price">64.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/372864_lich-su-israel-cau-chuyen-ve-su-hoi-sinh-cua-mot-dan-toc.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}"> Lịch Sử Israel - Câu Chuyện Về Sự Hồi Sinh Của Một Dân
                                            Tộc</a>
                                    </div>
                                    <div class="author">Daniel Gordis</div>
                                    <div class="real-price">389.000đ</div>
                                    <div class="sale-price">331.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/370516_lieu-phap-mien-dich-buoc-dot-pha-trong-chua-tri-ung-thu.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Liệu Pháp Miễn Dịch - Bước Đột Phá Trong Chữa Trị Ung
                                            Thư</a>
                                    </div>
                                    <div class="author">Charles Graeber</div>
                                    <div class="real-price">199.000đ</div>
                                    <div class="sale-price">169.000đ</div>
                                </div>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/370342_vietnamese-fruit-other-stories.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Vietnamese Fruit &amp; Other Stories</a>
                                    </div>
                                    <div class="author">Cao Thị Lan Phương</div>
                                    <div class="real-price">286.000đ</div>
                                    <div class="sale-price">243.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/370229_ung-dung-cong-nghe-truy-dau-tiep-xuc-de-ung-pho-voi-covid-19.jpg') }}" />
                                        <span class="sale-book-10">-50%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Ứng Dụng Công Nghệ Truy Dấu Tiếp Xúc Để Ứng Phó Với
                                            Covid-19</a>
                                    </div>
                                    <div class="author">Jeffrey P Kahn</div>
                                    <div class="real-price">158.000đ</div>
                                    <div class="sale-price">79.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/372053_quan-he-anh-viet-nam-1614-1705-tu-tu-do-thuong-mai-den-xung-dot-chinh-tri-quan.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Quan Hệ Anh – Việt Nam (1614-1705) - Từ Tự Do Thương
                                            Mại
                                            Đến Xung Đột Chính Trị, Quân Sự</a>
                                    </div>
                                    <div class="author">Trần Ngọc Dũng</div>
                                    <div class="real-price">299.000đ</div>
                                    <div class="sale-price">254.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369866_combo-sach-cua-tac-gia-do-huu-chien.jpg') }}" />
                                        <span class="sale-book-10">-60%</span><br />
                                    </div>
                                    <div class="name-book">
                                        ,<a href="{{ url('#') }}">Combo Sách Của Tác Giả Đỗ Hữu Chiến</a>
                                    </div>
                                    <div class="author">Luật Sư Đỗ Hữu</div>
                                    <div class="real-price">598.000đ</div>
                                    <div class="sale-price">239.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369746_mat-ma-ung-thu-hieu-biet-moi-dot-pha-ve-bi-an-ung-thu.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Ung Thư - Hiểu Biết Mới Đột Phá Về Bí Ẩn Ung Thư</a>
                                    </div>
                                    <div class="author">BS Jason Fung</div>
                                    <div class="real-price">209.000đ</div>
                                    <div class="sale-price">178.000đ</div>
                                </div>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369642_bo-sach-nam-ky-va-cu-dan-cac-tinh-bo-2-cuon.jpg') }}" />
                                        <br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Bộ Sách Nam Kỳ Và Cư Dân Các Tỉnh (Bộ 2 Cuốn)</a>
                                    </div>
                                    <div class="author">JC Baurac</div>
                                    <div class="real-price"></div>
                                    <div class="sale-price">598.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369314_tu-dien-tieng-viet-tai-ban-2022.jpg') }}" />
                                        <span class="sale-book-10">-5%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Từ Điển Tiếng Việt (Tái Bản 2022)</a>
                                    </div>
                                    <div class="author">Nguyễn Tôn Nhan</div>
                                    <div class="real-price">138.000đ</div>
                                    <div class="sale-price">131.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369281_huyen-thuat-va-cac-dao-si-tay-tang.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Huyền Thuật Và Các Đạo Sĩ Tây Tạng</a>
                                    </div>
                                    <div class="author">Elexandra-David</div>
                                    <div class="real-price">108.000đ</div>
                                    <div class="sale-price">92.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369255_but-la-hinh-hai-but-la-tam-thuc-tai-ban-lan-4.jpg') }}" />
                                        <span class="sale-book-10">-10%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Bụt Là Hình Hài, Bụt Là Tâm Thức (Tái Bản Lần 4)</a>
                                    </div>
                                    <div class="author">Thíck Nhất Hạnh</div>
                                    <div class="real-price">99.000đ</div>
                                    <div class="sale-price">89.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/369001_sung-vi-trung-va-thep-tai-ban-2022.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}"> Súng, Vi Trùng Và Thép (Tái Bản 2022)</a>
                                    </div>
                                    <div class="author">Jared Diamond</div>
                                    <div class="real-price">299.000đ</div>
                                    <div class="sale-price">254.000đ</div>
                                </div>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/imges-3/368029_nang-cao-he-mien-dich.jpg') }}" />
                                        <span class="sale-book-10">-21%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Nâng Cao Hệ Miễn Dịck<< /a>
                                    </div>
                                    <div class="author">Thùy Hương</div>
                                    <div class="real-price">58.000đ</div>
                                    <div class="sale-price">46.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/imges-3/367831_than-so-hoc.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Thần Số Học</a>
                                    </div>
                                    <div class="author">Hans Decoz</div>
                                    <div class="real-price">219.000đ</div>
                                    <div class="sale-price">186.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367799_10-bai-hoc-cho-the-gioi-hau-dai-dich-ten-lessons-for-a-post-pandemic-world (1).jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">10 Bài Học Cho Thế Giới Hậu Đại Dịch - Ten Lessons For
                                            A
                                            Post-Pandemic World</a>
                                    </div>
                                    <div class="author">Fareed Zakaria</div>
                                    <div class="real-price">190.000đ</div>
                                    <div class="sale-price">162.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367685_honjok-yen-binh-song-mot-minh.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Honjok: Yên Bình Sống Một Mình</a>
                                    </div>
                                    <div class="author">Francie Healey</div>
                                    <div class="real-price">149.000đ</div>
                                    <div class="sale-price">127.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367579_thong-diep-cua-nuoc-tai-ban-2021.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Thông Điệp Của Nước (Tái bản 2021)</a>
                                    </div>
                                    <div class="author">Thanh Huyền</div>
                                    <div class="real-price">89.000đ</div>
                                    <div class="sale-price">76.000đ</div>
                                </div>
                            </div>
                            <div class="newbook-middle">
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367514_ho-chi-minh-tac-pham-bao-vat-quoc-gia.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Hồ Chí Minh - Tác Phẩm Bảo Vật Quốc Gia</a>
                                    </div>
                                    <div class="author">Hồ Chí Minh</div>
                                    <div class="real-price">175.000đ</div>
                                    <div class="sale-price">149.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <<a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367500_tin-tuc-kien-tao-constructive-news.jpg') }}" />
                                        <span class="sale-book-10">-14%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Tin Tức Về Kiến Tạo</a>
                                    </div>
                                    <div class="author">Nhiều Dịck gỉa</div>
                                    <div class="real-price">90.000đ</div>
                                    <div class="sale-price">77.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367415_duong-ve-tinh-thuc-what-is-mindfulness.jpg') }}" />
                                        <span class="sale-book-10">-21%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Đường Về Tỉnh Thức - What Is Mindfulness?</a>
                                    </div>
                                    <div class="author">Tamara Russell</div>
                                    <div class="real-price">78.000đ</div>
                                    <div class="sale-price">62.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/367361_tron-ven-cam-nhan-yeu-thuong-tai-ban-2021.jpg') }}" />
                                        <span class="sale-book-10">-15%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Trọn Vẹn Cảm Nhận , Yêu</a>
                                    </div>
                                    <div class="author">Thầy Pháp Nhật</div>
                                    <div class="real-price">85.000đ</div>
                                    <div class="sale-price">72.000đ</div>
                                </div>
                                <div class="new-book">
                                    <div class="watch-before">
                                        <a href="{{ url('#') }}"><img
                                                src="{{ asset('images/icon/icon_xemtruoc_2x.png') }}" width="76"
                                                height="18"></a>
                                    </div>
                                    <div>
                                        <img
                                            src="{{ asset('images/imges-3/368534_hop-dong-bang-loi-noi-nhung-rui-ro-va-cach-khac-phuc.jpg') }}" />
                                        <span class="sale-book-10">-25%</span><br />
                                    </div>
                                    <div class="name-book">
                                        <a href="{{ url('#') }}">Hợp Đồng Bằng Lời Nói - Những Rủi Ro Và Cách Khắc
                                            Phục</a>
                                    </div>
                                    <div class="author">Luật Sư Đỗ Hữu</div>
                                    <div class="real-price">99.000đ</div>
                                    <div class="sale-price">74.000đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-bottom">
                            <span class="pagenumber"> Trang 1/320 </span>
                            <div class="page-number-click">
                                <a href="{{ url('#') }}">1</a>
                                <a href="{{ url('#') }}">2</a>
                                <a href="{{ url('#') }}">3</a>
                                <a href="{{ url('#') }}">4</a>
                                <a href="{{ url('#') }}">5</a>
                                <a href="{{ url('#') }}">6</a>
                                <a href="{{ url('#') }}"> 7</a>
                                <a href="{{ url('#') }}">8</a>
                                <a href="{{ url('#') }}" style="font-size: 15px">></a>
                                <a href="{{ url('#') }}">2-16</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-main">
            <div class="footer-register">
                <div class="register-text-bottom">
                    <span class="text-register">ĐĂNG KÝ NHẬN EMAIL<br /></span>
                    Đăng ký nhận thông tin sách mới , sáck bán
                </div>
                <div class="input-register-bottom">
                    <input type="text" class="txtname" name="txtname" placeholder="Tên Của Bạn" required="required" />
                    <input type="email" class="txtemail" name="txtemail" placeholder="Nhập Email Của Bạn" />
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
                                <a href="{{ url('#') }}">Về công ty</a>
                            </span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('gioithieu') }}">Giới Thiệu Công
                                    ty</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Tuyển Dụng</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Góc Báo trí</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Chương Trình Đại
                                    Lý</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Chính Sáck Bảo
                                    Mật</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Chính Sáck Dối
                                    Trá</a></span>
                        </div>
                        <div class="company-information" style="width: 180px;">
                            <span class="main-text-bottom">
                                <a href="{{ url('#') }}">trợ giúp</a>
                            </span>
                            <span class="a-text-bottom a-hover-black""
                  ><a href=" {{ url(' #') }}">Quy Định Sử Dụng</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Hướng Dẫn Mua
                                    Hàng</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Phương Thức Thanh
                                    Toán</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Phương Thức Vận
                                    Chuyển</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Các Câu Hỏi Thường
                                    Gặp</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Ứng dụng đọc
                                    ebook</a></span>
                        </div>
                        <div class="company-information" style="max-width: 110px;margin-left: 10px;">
                            <span class="main-text-bottom">
                                <a href="{{ url('#') }}">Tin Tức Sáck</a>
                            </span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Tin Tức</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Chân Dung</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Điểm Sáck</a></span>
                            <span class="a-text-bottom a-hover-black"><a href="{{ url('#') }}">Phê Bình</a></span>
                        </div>
                        <div class="dowload-information">
                            <span class="main-text-bottom">
                                Tải ứng dụng trên điện thoại
                            </span>
                            <div class="logo-app">
                                <img src="{{ asset('images/icon-appstore.png') }}" />
                                <img src="{{ asset('images/icon-googleplay.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="pay-transport-sales-partner">
                        <div class="accepts-pay">
                            <span>CHẤP NHẬN THANH TOÁN</span>
                            <div class="mobie-banking">
                                <img src="{{ asset('images/icon/visa.jpg') }}" />
                                <img src="{{ asset('images/icon/master_card.jpg') }}" />
                                <img src="{{ asset('images/icon/jcb.jpg') }}" alt="" />
                            </div>
                            <div class="mobie-banking">
                                <img src="{{ asset('images/icon/atm.jpg') }}" />
                                <img src="{{ asset('images/icon/cod.jpg') }}" />
                                <img src="{{ asset('images/icon/payoo.jpg') }}" />
                            </div>
                            <span>THANH TOÁN AN TOÀN</span>
                            <div class="mobie-banking">
                                <img src="{{ asset('images/icon/verify_visa.jpg') }}" />
                                <img src="{{ asset('images/icon/mastercard_securecode.jpg') }}" />
                                <img src="{{ asset('images/icon/onepay.jpg') }}" />
                            </div>
                        </div>
                        <div class="accepts-pay">
                            <span>ĐỐI TÁC VẬN CHUYỂN</span>
                            <div class="mobie-banking-transport">
                                <img src="{{ asset('images/logovnb.png') }}" width="184" />
                                <img src="{{ asset('images/icon/vn-post.jpg') }}" width="184" />
                                <img src="{{ asset('images/icon/dhl.jpg') }}" width="184" alt="" />
                            </div>
                        </div>
                        <div class="accepts-pay">
                            <span>ĐỐI TÁC BÁN HÀNG</span>
                            <div class="mobie-banking-transport">
                                <img src="{{ asset('images/icon/lazada.jpg') }}" width="115" />
                                <img src="{{ asset('images/icon/shopee.jpg') }}" width="115" />
                                <img src="{{ asset('images/icon/amazon.jpg') }}" width="115 " />
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
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">truyện dân
                                    brown</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sáck hay về gia
                                    đình</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sáck học tiếng
                                    trung</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sáck
                                    blockchain</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sáck khởi
                                    nghiệp</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sáck quản lý nhân
                                    sự</a></span>
                        </div>
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách warren
                                    buffet</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">giáo trình tiếng anh
                                    trẻ
                                    em</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">tiểu thuyết tình
                                    yêu</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách du
                                    học</a></span>
                            <span class="a-text-bottom"><a href="{{ url('#') }}">sách bán hàng</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách về quản trị kinh
                                    doanh</a></span>
                        </div>
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách digital
                                    marketing</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách hay về kinh
                                    tế</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách y học</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách kỹ năng
                                    mềm</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách về đầu tư chứng
                                    khoán</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách tài
                                    chính</a></span>
                        </div>
                        <div>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">truyện mới của nguyễn
                                    nhật
                                    ánh</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách về đầu
                                    tư</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">tủ sách gia
                                    đình</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách làm
                                    giàu</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách dạy nấu
                                    ăn</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách hay cho thiếu
                                    nhi</a></span>
                        </div>
                        <div style="margin-right: 58px">
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách cho
                                    con</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách doanh
                                    nhân</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách dạy kỹ năng giao
                                    tiếp</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách phong thủy
                                    cổ</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách tâm lý về tình
                                    yêu</a></span>
                            <span class="a-text-bottom a-hover-underline"><a href="{{ url('#') }}">sách tự học tiếng anh
                                    giao
                                    tiếp</a></span>
                        </div>
                    </div>
                </div>
                <div class="bottom-end-containner">
                    <div class="bottom-copyright">
                        <div class="copyright-end">
                            <div class="bottom-system">
                                <div style="width: 276px">
                                    <img src="{{ asset('images/icon/logo_so_cong_thuong.png') }}" />
                                </div>
                                <div class="span-5" style="margin-left: 20px">
                                    <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG </p>
                                    <span>Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân
                                        Phú, Hồ Chí Minh</span><br />
                                    <span>MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày
                                        10/03/2011</span><br />
                                    <span>Tel: 028.73008182 - Fax: 028.39733234 - Email:
                                        <a href="{{ url('#') }}">hotro@vinabook.com</a></span>
                                </div>
                            </div>
                            <div class="likely-system">
                                <div class="website-likely">WEBSITE CÙNG HỆ THỐNG:</div>
                                <div class="img-website-system">
                                    <img src="{{ asset('images/icon/logo_hotdeal_2x.png') }}" />
                                    <img src="{{ asset('images/icon/logo_yesgo_2x.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('js/sackchuyennganh.js')}}"></script>
    <script src="{{asset('js/thongtinbook.js')}}"></script>
    <!-- <script src="{{ asset('js/sackchuyennganh.js"></script>
    <script src="{{ asset('js/thongtinbook.js"></script> -->
</body>

</html>