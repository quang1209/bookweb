<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://kit.fontawesome.com/ff7b6d55a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/grid.css">
    <title>VinaBook</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="head__navbar-color">
                <div class="grid wide">
                <nav class="head__navbar">
                    <ul class="header__navbar-list">
                        <li id="header__navbar-item--a" class="header__navbar-item  header__navbar-item--has-des header__navbar-item--seperate">
                            <i class="fa-solid fa-truck header__navbar-item--icon"></i>
                             Miễn phí giao hàng
                             <div class="header__des">
                                <span class="bold">Miễn phí giao hàng toàn quốc</span> cho Đơn hàng từ 250.000đ.
                             </div>
                        </li>
                        <li id="header__navbar-item--b" class="header__navbar-item   header__navbar-item--has-des header__navbar-item--seperate">
                            <i class="fa-solid fa-book header__navbar-item--icon"></i>
                            80.000 tựa sách
                            <div class="header__des">
                                Với hơn 80,000 đầu sách trong mọi lĩnh vực (và tiếp tục tăng mỗi ngày), Vinabook.com tự hào là nhà sách trên mạng có số lượng đầu sách lớn nhất Việt Nam, bạn có thể tìm được bất kỳ quyển sách nào cho mọi nhu cầu đọc sách của bạn.
                             </div>
                        </li>
                        <li id="header__navbar-item--c" class="header__navbar-item  header__navbar-item--has-des ">
                            <i class="fa-solid fa-mobile header__navbar-item--icon"></i>
                            <a class="header__navbar-item-link" href="#">VinaBook Reader</a>
                            <div class="header__des">
                                Hơn 10,000 tựa sách và tạp chí trong thư viện sách khổng lồ của Vinabook Reader mọi lúc mọi nơi chỉ từ 825đ/ngày
                             </div>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </header>
        <div class="head-with-search-color">
            <div class="grid wide">
              <div class="header-with-search">
               <div class="header__logo">
                <a href="#" class="header__logo-link">
                  <img src="/images/vnb_logo_2x.png" alt="">
                </a>
              </div>
              <div class="header__search">
                  <i class="fa-solid fa-magnifying-glass header__search-icon"></i>
                  <div class="header__search-input-wrap">
                      <input type="text" class="header__search-input" placeholder="Tìm kiếm tựa sách,tách giả">
                      <div class="header__search-hot">
                      <h3 class="header__search-hot-list-heading bold">Từ khóa hot</h3>
                      <ul class="header__search-hot-list">
                          <li class="header__search-hot-list-item">
                              <a href="">Blockchain</a>
                          </li>
                          <li class="header__search-hot-list-item">
                              <a href="">Nguyễn Nhật Ánh</a>
                          </li>
                          <li class="header__search-hot-list-item">
                              <a href="">Mắt biếc</a>
                          </li>
                          <li class="header__search-hot-list-item">
                              <a href="">Kinh Tế</a>
                          </li>
                          <li class="header__search-hot-list-item">
                              <a href="">Nguyễn Ngọc Tư</a>
                          </li>
                      </ul>
                      </div>
                  </div>
                  <button class="header__search-btn ">Tìm sách</button>
              </div>
              <div class="circle">
                  <i class="fa-solid fa-cart-shopping cart cart-icon"></i>
                  <span class="countsp" id="countsp"></span>
                  <div class="header_cart-list">
                      <div class="header_cart-list-item" id="header_cart-list-item">
                          <p id="header_cart-list-item-empty">Giỏ hàng rỗng</p>

                      </div>
                  </div>
              </div>
              <div class="log-and-reg">
                  <div class="log log-seperate js-log">
                      Đăng Nhập
                  </div>
                  <div class="reg">
                      <a href="dangky.html">Đăng Ký</a>
                  </div>
              </div>


          </div>
            </div>

          </div>
        <div class="body">
            <div class="body_header-color">
                <div class="grid width">
                    <div class="body_header c-12">
                        <div class="cartergory_books">
                            <i class="fa-solid fa-bars cartergory_books-icon"></i>
                            <span class="cartergory_books-text">Danh Mục sách</span>
                            <i class="fa-solid fa-chevron-down cartergory_books-icon"></i>
                        </div>
                        <div class="body_header-contact">
                            <div class="body_header-hotline body_header-hotline--seperate">
                                <i class="fa-solid fa-phone body_header-contact-icon"></i>
                                <span>Hotline: <span class="bold">1900 6401</span></span>
                                <div class="body_header-contact-des">
                                    Tổng đài chăm sóc và Hỗ trợ Khách hàng hoạt động suốt 6 ngày trong tuần
Thứ 2 - 6: hoạt động từ <span class="bold">8:00 - 17:00</span>
T7 - Chủ nhật: Quý khách vui lòng để lại tin nhắn qua email<a href="#"> hotro@vinabook.com</a> Chúng tôi sẽ xử lý email sớm nhất giúp quý khách.
                                </div>

                            </div>
                            <div class="body_header-help">
                                <i class="fa-solid fa-comments body_header-contact-icon"></i>
                                <a> Hỗ trợ trực tuyến</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-contain">
                <div class="grid wide">
                    <div class="navbar-content">
                        <div class="sidenav">
                            <ul class="sidenav-list ">
                                <li class="sidenav-list-item">Sách Bán Chạy <i class="fa-solid fa-chevron-right side-icon"></i></li>
                                <li class="sidenav-list-item">Sách Mới Phát Hành <i class="fa-solid fa-chevron-right side-icon"></i></li>
                                <li class="sidenav-list-item">Sách Sắp Phát Hành <i class="fa-solid fa-chevron-right side-icon"></i></li>
                                <li class="sidenav-list-item">Sách Ngoại Văn <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">Literature & Fiction</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Mystery, Thriller & Suspense</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Action & Adventure</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Science Fiction & Fantasy</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">Travel</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Adventure Travel</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">Children's Books</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Children's Action & Adventure</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Children's Classics</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Children's Literature & Fiction</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales & Myths</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of Life</a></li>
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">English As A Second Language</a></li>
                                                <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                <li class="sidenav-sublist-item"><a href="">English For Adults</a></li>
                                                <li class="sidenav-sublist-item"><a href="">English Specific Purposes</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">Nhà Phát Hành Nổi Bật</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Oxford University Press</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Pearson Education</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan Education</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cambridge University Press</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Prentice HallNational Geographic</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Heinle Cengage Learning</a></li>
                                            </ul>
                                        </div>


                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Blockchain<i class="fa-solid fa-chevron-right side-icon"></i></li>
                                <li class="sidenav-list-item">Sách Kinh Tế <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-kinh-te">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Marketing – Bán Hàng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Ngoại Thương</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Sự & Việc Làm</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Vật & Bài Học Kinh Doanh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phân Tích & Môi Trường Kinh Tế</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quản Trị - Lãnh Đạo</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tài Chính & Tiền Tệ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tài Chính – Kế Toán</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Bản Luật</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đầu Tư & Chứng Khoán</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ SÁCH KINH TẾ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Philip Kotler</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Robert T. Kiyosaki</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Brian Tracy</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sharon L. Lechter</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Napoleon Hill</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Ken Blanchard</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Adam Khoo</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Robert C. Guell</a></li>
                                                <li class="sidenav-sublist-item"><a href="">PGS.TS.Võ Văn Nhị</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Alpha Books</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kinh Tế</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trí Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thái Hà</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Bookshop-Loc</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Văn Học Trong Nước <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-trong-nuoc">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phê Bình Văn Học</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phóng Sự, Ký Sự</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Về Nhân Vật Văn Học</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thơ Ca</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiểu Thuyết Lãng Mạn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiểu Thuyết Lịch Sử</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện & Thơ Ca Dân Gian</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Dài</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Giả Tưởng – Thần Bí</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Kiếm Hiệp</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Ngắn – Tản Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Thiếu Nhi</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Trinh Thám, Vụ Án</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tự Truyện - Hồi Ký</a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Nhật Ánh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tô Hoài</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hồ Biểu Chánh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hồ Anh Thái</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Vũ Trọng Phụng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Ngọc Tư</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Quang Sáng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Dương Thụy</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Gào</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Anh Khang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Gia Đoàn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhã Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thành Nghĩa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Chương</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Đông</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Kim Đồng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Văn Hóa Văn Nghệ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">BachvietBooks</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Phụ Nữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đông Tây</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đinh Tị</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đông A DC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quang Minh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Văn Học Nước Ngoài <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-nuoc-ngoai">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cổ Tích & Thần Thoại</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phê Bình Văn Học</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phóng Sự, Ký Sự</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Về Nhân Vật Văn Học</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thơ Ca</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiểu Thuyết Tình Yêu</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Kiếm Hiệp - Phiêu Lưu</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Lịch Sử</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Ngắn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Trinh Thám, Vụ Án</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tự Truyện - Hồi Ký</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiểu Thuyết Ngôn Tình</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiểu Thuyết Đam Mỹ</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Huỳnh Dị</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cổ Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đặng Phi Bằng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Bắc Cuồng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đinh Mặc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Danielle Steel</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Alexandre Dumas</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Rick Riordan</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thanh Vân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhã Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">BachvietBooks</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đinh Tị</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đông A DC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Alpha Books</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Kim Đồng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">ChiBooks</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Huy Hoàng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Phụ Nữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả ></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Thường Thức - Đời Sống <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-doi-song">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Bí Quyết Làm Đẹp</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hạnh Phúc Gia Đình</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nữ Công Gia Chánh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nuôi Dạy Con</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Nấu Ăn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cây, Cá Cảnh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Vật Nuôi Trong Nhà</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cẩm Nang Tuổi Mới Lớn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quan Hệ Giới Tính</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sinh Lý Học</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thiên Kim</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quỳnh Hương</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Kim Dân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Triệu Thị Chơi</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quỳnh Chi</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Thị Phụng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Dzoãn Cẩm Vân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cẩm Tuyết</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiểu Quỳnh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kiến Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đỗ Kim Trung</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Việt Chương</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Phụ Nữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trí Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quang Minh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thăng Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Huy Hoàng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thái Hà</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đinh Tị</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Alpha Books</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Kim Đồng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả ></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Thiếu Nhi <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-thieu-nhi">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Khoa Học Tự Nhiên</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Khoa Học Xã Hội</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Mỹ Thuật, Âm Nhạc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Ngoại Ngữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Truyện Tranh</a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tuệ Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Ngô Minh Vân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Ngọc Linh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Aoyama Gosho</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fujiko.F.Fujio</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thu Hoa - First News</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Giang Hồng, Hồng Trang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Yoshito UsuiMorris & Goscinny</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hồng Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Ngô Thừa Ân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kyo Won</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Kim Đồng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đông A DC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đinh Tị</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trí Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Phụ Nữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Alpha Books</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Huy Hoàng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhã Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">TTTV Hà Nội</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXBTH TPHCM</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Phát Triển Bản Thân <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-ban-than">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Học Làm Người</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Danh Nhân Văn Hoá</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hồi Ký</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhà Khoa Học</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Triết Gia, Chính Trị Gia, Nhà Quân Sự</a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">First News</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Mark Victor Hansen</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Jack Canfield</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kiến Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Dale Carnegie</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lê Huy Lâm</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trần Giang Sơn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lại Thế Luyện</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quang Ngọc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hoàng Mai</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tony Buzan</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Việt Thư</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trí Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thăng Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Alpha Books</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Chương</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thái Hà</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thành Nghĩa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đinh Tị</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quang Minh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Phụ Nữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Tin Học - Ngoại Ngữ <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-tin-hoc">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiếng Anh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiếng Hoa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Từ Điển</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Từ Điển Chuyên Ngành</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cơ Sở Dữ Liệu</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hệ Điều Hành</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Internet & Mạng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lập Trình & Phần Mềm Ứng Dụng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lập Trình Web</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tin Học Cơ Bản</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tin Học Văn Phòng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đồ Họa</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Thành Yến</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lê Huy Lâm</a></li>
                                                <li class="sidenav-sublist-item"><a href="">VN-Guide</a></li>
                                                <li class="sidenav-sublist-item"><a href="">The Windy</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hồng Phúc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phạm Quang Huy</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trí Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quang Huy</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Ngọc Tuấn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lữ Đức Hào</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trần Mạnh Tường</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Tâm</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trí Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đất Việt</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Lâm</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Khai</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Mcbooks</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Ngọc Mai</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Huy Hoàng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quỳnh Mai</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Chuyên Ngành <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-chuyen-nghanh">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Âm Nhạc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Chính Trị, Triết Học</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Du Lịch</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Khoa Học Cơ Bản</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Khoa Học Kỹ Thuật</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Khoa Học Xã Hội</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lịch Sử, Địa Lý</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Mỹ Thuật, Kiến Trúc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nông Lâm Nghiệp</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Pháp Luật</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thể Thao</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Hoá Nghệ Thuật</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nghiệp Vụ Báo Chí</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Các Chủ Đề Khác</a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Kim Dân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hà Sơn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Gia Bảo</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Khánh Linh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Văn Tuyến</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thích Nhất Hạnh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kiến Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Việt Chương</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Minh Tiến</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Đức</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đoàn Trung Còn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Hoàng Anh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Mạnh Chinh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thiên Kim</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả ></a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thăng Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Lang</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB KHKT</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quang Minh</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Fahasa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Nông Nghiệp</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB TH TPHCM</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Phụ Nữ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Lâm</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thời Đại</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Văn Nghệ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả ></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Sách Giáo Khoa - Giáo Trình <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-giao-khoa">
                                        <div class="sidenav-list-item-des-ul">

                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">DANH MỤC</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cấp I</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cấp II</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Cấp III</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Tham Khảo Cấp I</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Tham Khảo Cấp II</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sách Tham Khảo Cấp III</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Đại Học</a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TÁC GIẢ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trần Văn Sáu</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhóm Sư Phạm VHP</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lê Văn Thông</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Hải Châu</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Trần Tước Nguyên</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nguyễn Xuân Lạc</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">NHÀ PHÁT HÀNH</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nhân Văn</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kinh Đô 2</a></li>
                                                <li class="sidenav-sublist-item"><a href="">NXB Giáo Dục</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Nxb Trẻ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">HS Hoa Hồng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Long</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Kinh Tế</a></li>
                                                <li class="sidenav-sublist-item"><a href="">CTCP Sách DịchD</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Minh Thắng</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quỳnh Mai</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Công Ty TNHH TM DV VHP</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidenav-list-item">Tạp chí - Văn Phòng Phẩm <i class="fa-solid fa-chevron-right side-icon"></i>
                                    <div class="sidenav-list-item-des des-tap-chi">
                                        <div class="sidenav-list-item-des-ul">
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">VĂN PHÒNG PHẨM</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lịch Xuân Bính Thân</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Lịch Xuân Phương Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Sổ Tay - Giấy In - Tập Vở</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Dụng Cụ Vẽ - Bút Màu</a></li>

                                            </ul>
                                            <ul class="sidenav-sublist">
                                                <li class="sidenav-sublist-item sidenav-sublist-item-header"><a href="">TẠP CHÍ</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tạp Chí Sắp Phát Hành</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thế Giới Vi Tính</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Forbes Việt Nam</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Tiếp Thị & Gia Đình</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Thế Giới Văn Hóa</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Người Thành Thị - Cosmopolitan</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Quý Ông - Esquire</a></li>
                                                <li class="sidenav-sublist-item"><a href="">Phái Đẹp - ElleWomen's Health - Phụ Nữ Khỏe Đẹp</a></li>

                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="content-pic">
                            <div class="pic-up">
                                <img src="/images/363192_tpchforbes2023.jpg" alt="" srcset="" class="pic-up-left">
                                <div class="pic-up-right">
                                    <img src="/images/363119_1111.jpg" alt="" class="pic-up-right-item">
                                    <img src="/images/363501_bschehon.jpg" alt="" class="pic-up-right-item">
                                </div>
                            </div>
                            <div class="pic-down">
                                <img src="/images/363107_thayicucsng.jpg" alt="" class="pic-down-item">
                                <img src="/images/363104_qgkn1.jpg" alt="" class="pic-down-item">
                                <img src="/images/363109_f1131000x15001.jpg" alt="" class="pic-down-item">
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-conten-left c-9">
                            <div class="product-bestsell-group">
                             <div class="product-title">
                                <span>Sách Mới hay</span>
                            </div>
                            <div class="product-bestsell" >
                               <div class="product-bestsell-img"><img src="/images/374705_bach-khoa-toan-thu-content-dai-bieu-mau.jpg" alt="" ></div>

                                    <div class="product-bestsell-title">
                                        <a href="">Bách Khoa Toàn Thư Content: Đại Biểu Mẫu</a>
                                        <span>Nhiều tác giả</span>
                                    </div>
                                    <div class="product-bestsell-info">
                                        Bạn thân mến, Bạn đang sống trong một thời đại mà khi khép mắt vào, điều còn đọng lại trong đầu bạn có khi không phải là những lời thì thầm chúc ngủ ngon, mà là lời lẽ mời gọi từ một chiếc email bạn nhận được lúc nửa đêm. Và khi mở mắt ra, điều đầu tiên bạn nhìn thấy có thể không phải là một gương mặt của <span> thân quen, hay của chính mình trong gương. Đó có thể là những dòng tin trên chiếc điện thoại của bạn, một hình ảnh trên mạng xã hội, một vài video quảng cáo, một clip Tiktok vui nhộn… Vâng, đúng thế. Chào ngày mới, chúng ta đang sống...
                                    </div>

                                        <div class="product-bestsell-buy-left">
                                            <div class="product-bestsell-sale">
                                                10%
                                            </div>
                                            <div class="product-bestsell-old-price">
                                                200.000 ₫
                                            </div>
                                            <div class="product-bestsell-new-price">
                                                108.000 ₫
                                            </div>
                                        </div>

                                    <button class="product-bestsell-buy-now" onclick="themgiohang(this)" >
                                                Mua Ngay
                                    </button>



                            </div>
                            </div>
                            <div class="product-book-group">
                                <div class="product-title-2">
                                    <span>Sách Bán Chạy</span>
                                    <div class="product-title-2-link">
                                      <a href="">Xem thêm</a>
                                      <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                    </div>

                                </div>
                                <div class="product-books-group " id="spbanchay">
                                    @foreach ($sachbanchay as $sachbanchay)
                                    <div class="product-book-info ">
                                        <div class="product-book-info-pic-and-des">
                                            <div class="product-book-info-imgs">
                                                <img src='/images/{{$sachbanchay->hinhanh}}' alt="" class="product-book-info-img">
                                            </div>
                                            <div class="product-book-info-des">
                                                <div class="product-book-info-des-up">
                                                    <div class="product-book-info-des-link">
                                                        <a href="">{{$sachbanchay->ten}}</a>
                                                    </div>
                                                    <span>{{$sachbanchay->tacgia}}</span>
                                                </div>
                                                <div class="product-book-info-des-down">
                                                    <div class="product-book-info-intro">
                                                        <span class="black">{{$sachbanchay->mota}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-book-info-price">
                                            <div class="product-book-info-price-left">
                                                15%
                                            </div>
                                            <div class="product-book-info-price-right">
                                                <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="product-bestsell-group">
                                <div class="product-title">
                                   <span>Sách Mới hay</span>
                               </div>
                               <div class="product-bestsell background-2" >
                                <div class="product-bestsell-img"><img src="/images/376544_tap-chi-forbes-so-115-thang-32023.jpg" alt="" width="210px"></div>

                                       <div class="product-bestsell-title">
                                           <a href="">Tạp chí Forbes - Số 115 (Tháng 3/2023)</a>
                                           <span>Nhiều tác giả</span>
                                       </div>
                                       <div class="product-bestsell-info">
                                        Điểm Chạm Khách Hàng Để trả lời cho câu hỏi sau đại dịch COVID-19 chân dung của người tiêu dùng đã thay đổi như thế nào, NielsenIQ đã tiến hành nhiều khảo sát với những nhóm khách hàng khác nhau. Kết quả cho thấy hành vi khách hàng đã có sự thay đổi đáng kể so với trước khi dịch bệnh bùng phát. Chân dung mới của khách hàng được phác thảo: Họ cân nhắc kỹ lưỡng về yếu tố thương hiệu sản phẩm song song với yếu tố sức khỏe và bền vững. Do tâm lý bất an về vấn đề tài chính, người tiêu dùng quan tâm so sánh công năng của sản phẩm với số tiền bỏ ra...
                                       </div>

                                           <div class="product-bestsell-buy-left">
                                               <div class="product-bestsell-sale">

                                               </div>
                                               <div class="product-bestsell-old-price">
                                                   120.000 đ
                                               </div>
                                               <div class="product-bestsell-new-price">
                                                    95.000 ₫
                                               </div>
                                           </div>

                                               <button class="product-bestsell-buy-now" onclick="themgiohang(this)">
                                                   Mua Ngay
                                               </button>



                               </div>
                               </div>
                            <div class="product-book-group">
                                <div class="product-title-2">
                                    <span>Sách Văn Học Mới</span>
                                    <div class="product-title-2-link">
                                      <a href="">Xem thêm</a>
                                      <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                    </div>

                                </div>
                                <div class="product-books-group " id="spvanhoc">
                                    @foreach ($sachvh as $sach)
                                    <div class="product-book-info ">
                                        <div class="product-book-info-pic-and-des">
                                            <div class="product-book-info-imgs">
                                            <img src='/images/{{$sach->hinhanh}}' alt="" class="product-book-info-img">
                                            </div>
                                            <div class="product-book-info-des">
                                                <div class="product-book-info-des-up">
                                                    <div class="product-book-info-des-link">
                                                        <a href="">{{$sach->ten}}</a>
                                                    </div>
                                                    <span>{{$sach->tacgia}}</span>
                                                </div>
                                                <div class="product-book-info-des-down">
                                                    <div class="product-book-info-intro">
                                                        <span class="black">{{$sachbanchay->mota}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-book-info-price">
                                            <div class="product-book-info-price-left">
                                                15%
                                            </div>
                                            <div class="product-book-info-price-right">
                                                <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="product-bestsell-group">
                                <div class="product-title">
                                   <span>Sách Mới hay</span>
                               </div>
                               <div class="product-bestsell background-3">
                                <div class="product-bestsell-img"><img src="/images/368244_combo-lucky-luke-bo-4-tap-so-ngau-hien.jpg" alt="" style="width: 210px;"></div>

                                     <div class="product-bestsell-title">
                                           <a href=""> Combo Lucky Luke - Bộ 4 Tập (Số Ngẫu hiên)</a>
                                           <span>First News</span>
                                       </div>
                                       <div class="product-bestsell-info">
                                        Nhân vật trung tâm của loạt truyện là Lucky Luke - chàng cao bồi không bao giờ biết sợ, luôn khoác chiếc áo ghi-lê đen, sơ mi vàng và cổ đeo chiếc khăn màu đỏ, làm bạn cùng chú ngựa Jolly Jumper đặc biệt. Đó là người anh hùng hào phóng và dũng cảm, người bắn nhanh hơn cả cái bóng của mình. Các tập truyện luôn kết thúc bằng một hình ảnh đã trở thành bất hủ trong lịch sử truyện tranh: "gã cao bồi nghèo đơn độc" rong ruổi trên con ngựa của mình vào buổi hoàng hôn, sau khi đánh bại những kẻ xấu.
                                       </div>

                                           <div class="product-bestsell-buy-left">
                                               <div class="product-bestsell-sale">
                                                   30%
                                               </div>
                                               <div class="product-bestsell-old-price">
                                                106.000 đ
                                               </div>
                                               <div class="product-bestsell-new-price">
                                                   75.000 đ
                                               </div>
                                           </div>

                                               <button class="product-bestsell-buy-now" onclick="themgiohang(this)">
                                                   Mua Ngay
                                               </button>



                               </div>
                               </div>
                               <div class="product-book-group">
                                <div class="product-title-2">
                                    <span>Sách Kinh Tế Mới</span>
                                    <div class="product-title-2-link">
                                      <a href="">Xem thêm</a>
                                      <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                    </div>

                                </div>
                                <div class="product-books-group " id="spkinhte">
                                    @foreach ($sachkinhte as $sach)
                                    <div class="product-book-info ">
                                        <div class="product-book-info-pic-and-des">
                                            <div class="product-book-info-imgs">
                                            <img src='/images/{{$sach->hinhanh}}' alt="" class="product-book-info-img">
                                            </div>
                                            <div class="product-book-info-des">
                                                <div class="product-book-info-des-up">
                                                    <div class="product-book-info-des-link">
                                                        <a href="">{{$sach->ten}}</a>
                                                    </div>
                                                    <span>{{$sach->tacgia}}</span>
                                                </div>
                                                <div class="product-book-info-des-down">
                                                    <div class="product-book-info-intro">
                                                        <span class="black">{{$sachbanchay->mota}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-book-info-price">
                                            <div class="product-book-info-price-left">
                                                15%
                                            </div>
                                            <div class="product-book-info-price-right">
                                                <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="product-author-group">
                                <div class="product-title">
                                    <span>Tác giả nổi bật</span>
                                </div>
                                <div class="product-author">
                                    <div class="product-author-wrap">
                                       <img src="/images/360353_129910542144506789460598800290180602601678n1.jpg" alt="">
                                       <div class="product-author-des">
                                            <span>
                                                Nguyên Phong
                                            </span>
                                            <div class="product-author-des-intro">
                                                Nguyên Phong tên thật là Vũ Văn Du, sinh năm 1950 tại Hà Nội. Năm 1968, ông rời khỏi Việt Nam, sang Hoa Kỳ du học hai nghành Sinh vật học và Điện toán, sau đó ông sống và làm việc tại Hoa Kỳ cho đến nay.Bên cạnh vai trò là một nhà khoa học, Nguyên Phong còn là dịch giả của hàng loạt sách về văn hóa và tâm linh phương Đông rất nổi tiếng. Trong số đó, có thể kể đến: Hành Trình Về Phương Đông, Ngọc Sáng Trong Hoa Sen, Bên Rặng Tuyết Sơn, Hoa Sen Trên Tuyết, Hoa Trôi Trên Sóng Nước, Trở Về Từ Xứ Tuyết, Minh Triết Trong Đời Sống Ăn Uống, Đường Mây Qua Xứ Tuyết...
                                            </div>
                                            <a href="">Xem thêm</a>
                                        </div>
                                    </div>
                                    <div class="product-author-books-wrap ">
                                        <div class="product-author-book" >
                                            <img src="/images/369281_huyen-thuat-va-cac-dao-si-tay-tang.jpg" alt="" class="product-author-book-img">
                                            <a href="">Huyền Thuật Và Các Đạo Sĩ Tây Tạng</a>
                                        </div>
                                        <div class="product-author-book left">
                                            <img src="/images/369095_duong-may-qua-xu-tuyet-tai-ban-2021.jpg" alt="" class="product-author-book-img">
                                            <a href="">Huyền Thuật Và Các Đạo Sĩ Tây Tạng</a>
                                        </div>
                                        <div class="product-author-book left">
                                            <img src="/images/369281_huyen-thuat-va-cac-dao-si-tay-tang.jpg" alt="" class="product-author-book-img">
                                            <a href="">Huyền Thuật Và Các Đạo Sĩ Tây Tạng</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-book-group" >
                                <div class="product-title-2">
                                    <span>Tạp chí bán chạy nhất</span>
                                    <div class="product-title-2-link">
                                      <a href="">Xem thêm</a>
                                      <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                    </div>

                                </div>
                                <div class="product-books-group "id="sptapchi">
                                    @foreach ($tapchi as $sach)
                                    <div class="product-book-info ">
                                        <div class="product-book-info-pic-and-des">
                                            <div class="product-book-info-imgs">
                                            <img src='/images/{{$sach->hinhanh}}' alt="" class="product-book-info-img">
                                            </div>
                                            <div class="product-book-info-des">
                                                <div class="product-book-info-des-up">
                                                    <div class="product-book-info-des-link">
                                                        <a href="">{{$sach->ten}}</a>
                                                    </div>
                                                    <span>{{$sach->tacgia}}</span>
                                                </div>
                                                <div class="product-book-info-des-down">
                                                    <div class="product-book-info-intro">
                                                        <span class="black">{{$sachbanchay->mota}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-book-info-price">
                                            <div class="product-book-info-price-left">
                                                15%
                                            </div>
                                            <div class="product-book-info-price-right">
                                                <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="product-book-group">
                                <div class="product-title-2">
                                    <span>Sách Nuôi Dạy Trẻ</span>
                                    <div class="product-title-2-link">
                                      <a href="">Xem thêm</a>
                                      <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                    </div>

                                </div>
                                <div class="product-books-group " id="spdaytre">
                                    @foreach ($sachdaytre as $sach)
                                    <div class="product-book-info ">
                                        <div class="product-book-info-pic-and-des">
                                            <div class="product-book-info-imgs">
                                            <img src='/images/{{$sach->hinhanh}}' alt="" class="product-book-info-img">
                                            </div>
                                            <div class="product-book-info-des">
                                                <div class="product-book-info-des-up">
                                                    <div class="product-book-info-des-link">
                                                        <a href="">{{$sach->ten}}</a>
                                                    </div>
                                                    <span>{{$sach->tacgia}}</span>
                                                </div>
                                                <div class="product-book-info-des-down">
                                                    <div class="product-book-info-intro">
                                                        <span class="black">{{$sachbanchay->mota}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-book-info-price">
                                            <div class="product-book-info-price-left">
                                                15%
                                            </div>
                                            <div class="product-book-info-price-right">
                                                <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-book-group">
                                <div class="product-title-2">
                                    <span>Sách Thiếu Nhi Mới</span>
                                    <div class="product-title-2-link">
                                      <a href="">Xem thêm</a>
                                      <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                    </div>

                                </div>
                                <div class="product-books-group " id="spthieunhi">
                                    @foreach ($sachthieunhi as $sach)
                                    <div class="product-book-info ">
                                        <div class="product-book-info-pic-and-des">
                                            <div class="product-book-info-imgs">
                                            <img src='/images/{{$sach->hinhanh}}' alt="" class="product-book-info-img">
                                            </div>
                                            <div class="product-book-info-des">
                                                <div class="product-book-info-des-up">
                                                    <div class="product-book-info-des-link">
                                                        <a href="">{{$sach->ten}}</a>
                                                    </div>
                                                    <span>{{$sach->tacgia}}</span>
                                                </div>
                                                <div class="product-book-info-des-down">
                                                    <div class="product-book-info-intro">
                                                        <span class="black">{{$sachbanchay->mota}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-book-info-price">
                                            <div class="product-book-info-price-left">
                                                15%
                                            </div>
                                            <div class="product-book-info-price-right">
                                                <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                                <div class="product-book-group">
                                    <div class="product-title-2">
                                        <span>Sách Kỹ Năng</span>
                                        <div class="product-title-2-link">
                                          <a href="">Xem thêm</a>
                                          <i class="fa-solid fa-chevron-right product-title-2-link-icon"></i>
                                        </div>

                                    </div>
                                    <div class="product-books-group " id="spkinang">
                                        @foreach ($sachkynang as $sach)
                                        <div class="product-book-info ">
                                            <div class="product-book-info-pic-and-des">
                                                <div class="product-book-info-imgs">
                                                <img src='/images/{{$sach->hinhanh}}' alt="" class="product-book-info-img">
                                                </div>
                                                <div class="product-book-info-des">
                                                    <div class="product-book-info-des-up">
                                                        <div class="product-book-info-des-link">
                                                            <a href="">{{$sach->ten}}</a>
                                                        </div>
                                                        <span>{{$sach->tacgia}}</span>
                                                    </div>
                                                    <div class="product-book-info-des-down">
                                                        <div class="product-book-info-intro">
                                                            <span class="black">{{$sachbanchay->mota}}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-book-info-price">
                                                <div class="product-book-info-price-left">
                                                    15%
                                                </div>
                                                <div class="product-book-info-price-right">
                                                    <span class="product-book-info-price-old">{{$sachbanchay->gia}}.000 ₫</span>
                                                    <span class="product-book-info-price-new">{{$sachbanchay->giakhuyenmai}}.000 ₫</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                        </div>
                        <div class="product-conten-right c-3">
                            <div class="product-side-conten" >
                                <div class="product-title">
                                    <span>Sách Bán Chạy Trong Tuần</span>
                                </div>
                                <div id="sptrongtuan">

                                    @foreach ( $sachtrongtuan as $sach )
                                        <div class="product-side">
                                        <img src="/images/{{$sach->hinhanh}}" alt="">
                                        <div class="product-side-des">
                                            <a href="#">{{$sach->ten}}</a>
                                            <span class="product-side-des-author">{{$sach->tacgia}}</span>
                                            <div class="star-group">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="product-side-price">
                                                <span class="product-side-price-old">{{$sach->gia}}.000 ₫</span>
                                                <span class="product-side-price-new">{{$sach->giakhuyenmai}}.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                            <div class="product-side-conten" >
                                <div class="product-title">
                                    <span>Báo Chí Giới Thiệu</span>
                                </div>
                                <div id="spbaochi">
                                    @foreach ( $sachtrongtuan as $sach )
                                    <div class="product-side">
                                    <img src="/images/{{$sach->hinhanh}}" alt="">
                                    <div class="product-side-des">
                                        <a href="#">{{$sach->ten}}</a>
                                        <span class="product-side-des-author">{{$sach->tacgia}}</span>
                                        <div class="star-group">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="product-side-price">
                                            <span class="product-side-price-old">{{$sach->gia}}.000 ₫</span>
                                            <span class="product-side-price-new">{{$sach->giakhuyenmai}}.000 ₫</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="product-side-conten">
                                <div class="product-title">
                                    <span>Sách Mới Nhập Về</span>
                                </div>
                                <div id="spmoi">
                                @foreach ( $sachtrongtuan as $sach )
                                    <div class="product-side">
                                    <img src="/images/{{$sach->hinhanh}}" alt="">
                                    <div class="product-side-des">
                                        <a href="#">{{$sach->ten}}</a>
                                        <span class="product-side-des-author">{{$sach->tacgia}}</span>
                                        <div class="star-group">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="product-side-price">
                                            <span class="product-side-price-old">{{$sach->gia}}.000 ₫</span>
                                            <span class="product-side-price-new">{{$sach->giakhuyenmai}}.000 ₫</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="product-side-conten">
                                <div class="product-title">
                                    <span>Truyện Kể Cho Bé</span>
                                </div>
                                <div id="spkechuyen">
                                    @foreach ( $sachthieunhi as $sach )
                                    <div class="product-side">
                                    <img src="/images/{{$sach->hinhanh}}" alt="">
                                    <div class="product-side-des">
                                        <a href="#">{{$sach->ten}}</a>
                                        <span class="product-side-des-author">{{$sach->tacgia}}</span>
                                        <div class="star-group">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="product-side-price">
                                            <span class="product-side-price-old">{{$sach->gia}}.000 ₫</span>
                                            <span class="product-side-price-new">{{$sach->giakhuyenmai}}.000 ₫</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="product-side">
    <img src=".//images/224012_tho-peter-va-cac-ban-song-ngu.jpg" alt="">
    <div class="product-side-des">
        <a href="#"></a>
        <span class="product-side-des-author">asdfasdfasd</span>
        <div class="star-group">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="product-side-price">
            <span class="product-side-price-old">100.000 ₫</span>
            <span class="product-side-price-new">100.000 ₫</span>
        </div>
    </div>
</div>
                                </div>
                            </div>
                            <div class="product-conten-right-link">
                                <a href="">Vinabook</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">

            <div class="footer-socical-color">
                <div class="grid wide">
                    <div class="footer-socical">
                        <div class="footer-socical-label">
                            <span class="footer-socical-label-title">ĐĂNG KÝ NHẬN EMAIL</span>
                            <span class="footer-socical-label-des">Đăng ký nhận thông tin sách mới, sách bán</span>
                        </div>
                        <div class="footer-socical-input-group">
                            <input type="text" class="footer-socical-input" placeholder="Tên của bạn">
                            <input type="text" class="footer-socical-input long" placeholder="Nhập email của bạn">
                            <select name="" id="" class="footer-socical-input ">
                                <option value="">Thể loại yêu thích</option>
                                <option value="">Tất cả</option>
                                <option value="">Sách Ngoại Văn</option>
                                <option value="">Sách Kinh Tế</option>
                                <option value="">Sách Văn học Trong Nước</option>
                            </select>
                            <button class="footer-socical-input ">Đăng ký ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-color">
                <div class="wide grid">
                    <div class="footer-middle">
                        <div class="footer-middle-top">
                            <div class="footer-middle-top-left">
                                <div class="footer-middle-top-left-up">
                                    <div class="footer-des-info">
                                    <span class="footer-title">VỀ CÔNG TY</span>
                                    <div class="footer-content  ">
                                        <ul>
                                            <li><a href="gioithieu.html">Giới thiệu công ty</a></li>
                                            <li><a href="">Tuyển dụng</a></li>
                                            <li><a href="">Góc báo chí</a></li>
                                            <li><a href="">Chương trình đại lý</a></li>
                                            <li><a href="">Chính sách bảo mật</a></li>
                                            <li><a href="">Chính sách đổi trả</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="footer-des-info">
                                        <span class="footer-title">TRỢ GIÚP</span>
                                        <div class="footer-content  ">
                                            <ul>
                                                <li><a href="">Quy định sử dụng</a></li>
                                                <li><a href="">Hướng dẫn mua hàng</a></li>
                                                <li><a href="">Phương thức thanh toán</a></li>
                                                <li><a href="">Phương thức vận chuyển</a></li>
                                                <li><a href="">Các câu hỏi thường gặp</a></li>
                                                <li><a href="">Ứng dụng đọc ebook</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="footer-des-info">
                                        <span class="footer-title">TIN TỨC SÁCH</span>
                                        <div class="footer-content  ">
                                            <ul>
                                                <li><a href="">Tin tức</a></li>
                                                <li><a href="">Chân dung</a></li>
                                                <li><a href="">Điểm sách</a></li>
                                                <li><a href="">Phê bình</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span class="footer-title">TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</span>
                                <div class="footer-app">
                                    <a href=""><img src="/images/icon-appstore.png" alt="" class="footer-app-left"></a>
                                    <a href=""><img src="/images/icon-googleplay.png" alt=""></a>
                                </div>
                            </div>
                            <div class="footer-middle-top-right">
                                <div class="footer-des-info footer-middle-top-right-group">
                                    <span class="footer-title">CHẤP NHẬN THANH TOÁN</span>
                                    <div class="footer-middle-top-right-pic ">
                                        <div class="footer-middle-top-right-small-pic-group">
                                        <img src="/images/visa.jpg" alt="" class="small-pic">
                                        <img src="/images/master_card.jpg" alt="" class="small-pic">
                                        <img src="/images/jcb.jpg" alt="" class="small-pic">
                                        </div>
                                        <div class="footer-middle-top-right-small-pic-group">
                                            <img src="/images/atm.jpg" alt="" class="small-pic">
                                            <img src="/images/cod.jpg" alt="" class="small-pic">
                                            <img src="/images/payoo.jpg" alt="" class="small-pic">
                                        </div>

                                    </div>
                                    <span class="footer-title">CHẤP NHẬN THANH TOÁN</span>
                                    <div class="footer-middle-top-right-pic ">
                                        <div class="footer-middle-top-right-small-pic-group">
                                            <img src="/images/verify_visa.jpg" alt="" class="small-pic">
                                            <img src="/images/mastercard_securecode.jpg" alt="" class="small-pic">
                                            <img src="/images/onepay.jpg" alt="" class="small-pic">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-des-info footer-middle-top-right-group">
                                    <span class="footer-title">ĐỐI TÁC VẬN CHUYỂN</span>
                                    <div class="footer-middle-top-right-pic-middle">'
                                        <div class="footer-middle-top-right-large-pic-group">
                                            <img src="/images/logovnb.png" alt="" class="large-pic">
                                            <img src="/images/vn-post.jpg" alt="" class="large-pic">
                                            <img src="/images/dhl.jpg" alt="" class="large-pic">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-des-info footer-middle-top-right-group">
                                    <span class="footer-title">ĐỐI TÁC VẬN CHUYỂN</span>
                                    <div class="footer-middle-top-right-pic-middle">'
                                        <div class="footer-middle-top-right-large-pic-group">
                                            <img src="/images/lazada.jpg" alt="" class="large-pic-2">
                                            <img src="/images/shopee.jpg" alt="" class="large-pic-2">
                                            <img src="/images/amazon.jpg" alt="" class="large-pic-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-middle-bot">
                            <span class="footer-title">THƯỜNG ĐƯỢC TÌM KIẾM</span>
                            <div class="footer-middle-bot-conten">
                                <div class="footer-content footer-content-bot">
                                    <ul>
                                        <li><a href="">truyện dan brown</a></li>
                                        <li><a href="">sách warren buffett</a></li>
                                        <li><a href="">sách digital marketing</a></li>
                                        <li><a href="">truyện mới của nguyễn nhật ánh</a></li>
                                        <li><a href="">sách cho con</a></li>
                                        <li><a href="">sách hay về gia đình</a></li>
                                    </ul>
                                </div>
                                <div class="footer-content footer-content-bot">
                                    <ul>
                                        <li><a href="">giáo trình tiếng anh trẻ em</a></li>
                                        <li><a href="">sách hay về kinh tế</a></li>
                                        <li><a href="">sách về đầu tư</a></li>
                                        <li><a href="">sách doanh nhân</a></li>
                                        <li><a href="">sach hoc tieng trung</a></li>
                                        <li><a href="">tiểu thuyết tình yêu</a></li>
                                    </ul>
                                </div>
                                <div class="footer-content footer-content-bot">
                                    <ul>
                                        <li><a href="">sách y học</a></li>
                                        <li><a href="">tủ sách gia đình</a></li>
                                        <li><a href="">Góc báo chí</a></li>
                                        <li><a href="">sách dạy kỹ năng giao tiếp</a></li>
                                        <li><a href="">sách blockchaint</a></li>
                                        <li><a href="">sách du học</a></li>
                                    </ul>
                                </div>
                                <div class="footer-content footer-content-bot">
                                    <ul>
                                        <li><a href="">sách kỹ năng mềm</a></li>
                                        <li><a href="">sách làm giàu</a></li>
                                        <li><a href="">sách phong thủy cổ</a></li>
                                        <li><a href="">sách khởi nghiệp</a></li>
                                        <li><a href="">sách bán hàng</a></li>
                                        <li><a href="">sách về đầu tư chứng khoán</a></li>
                                    </ul>
                                </div>
                                <div class="footer-content footer-content-bot">
                                    <ul>
                                        <li><a href="">sách dạy nấu ăn</a></li>
                                        <li><a href="">sách tâm lý về tình yêu</a></li>
                                        <li><a href="">Góc báo chí</a></li>
                                        <li><a href="">sách quản lý nhân sự</a></li>
                                        <li><a href="">sách về quản trị kinh doanh</a></li>
                                        <li><a href="">sách tài chính</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-color">
                <div class="wide grid">
                    <div class="footer-copyright">
                        <div class="footer-copyright-top">
                            <span class="footer-copyright-top-img"><img src="/images/logo_so_cong_thuong.png"></span>
                            <div class="footer-copyright-top-right">
                                <span class="footer-copyright-title">CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM</span>
                                <span class="footer-copyright-top-right-des">
                                    Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân Phú, Hồ Chí Minh
                                </span>
                                <span class="footer-copyright-top-right-des">
                                    MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011
                                </span>
                                <span class="footer-copyright-top-right-des">
                                    Tel: 028.73008182 - Fax: 028.39733234 - Email: <a href="">hotro@vinabook.com</a>
                                </span>
                            </div>
                        </div>
                        <div class="footer-copyright-down">
                            <span class="footer-copyright-title">WEBSITE CÙNG HỆ THỐNG</span>
                            <div class="footer-copyright-down-img">
                                <img src="/images/logo_hotdeal_2x.png" alt="" class="footer-copyright-down-img-left">
                                <img src="/images/logo_yesgo_2x.png" alt="">
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
                    <div class="modal-header">
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
                                <a href=""><img src="/images/google_signin_dark.png" alt=""></a>
                                <a href=""><img src="/images/facebook_signin_dark.png" alt="" class="img-left"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="asset/js/modal.js"></script>
        <script src="asset/js/cart.js"></script>
        <script src="asset/js/trangchuproduct.js"></script>
    </div>
</body>
</html>
