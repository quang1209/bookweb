<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff7b6d55a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <title>VinaBook</title>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="head__navbar-color">
                <div class="grid wide">
                    <nav class="head__navbar">
                        <ul class="header__navbar-list">
                            <li id="header__navbar-item--a"
                                class="header__navbar-item  header__navbar-item--has-des header__navbar-item--seperate ">
                                <i class="fa-solid fa-truck header__navbar-item--icon"></i>
                                Miễn phí giao hàng
                                <div class="header__des">
                                    <span class="bold">Miễn phí giao hàng toàn quốc</span> cho Đơn hàng từ 250.000đ.
                                </div>
                            </li>
                            <li id="header__navbar-item--b"
                                class="header__navbar-item   header__navbar-item--has-des header__navbar-item--seperate ">
                                <i class="fa-solid fa-book header__navbar-item--icon"></i>
                                80.000 tựa sách
                                <div class="header__des">
                                    Với hơn 80,000 đầu sách trong mọi lĩnh vực (và tiếp tục tăng mỗi ngày), Vinabook.com
                                    tự hào là nhà sách trên mạng có số lượng đầu sách lớn nhất Việt Nam, bạn có thể tìm
                                    được bất kỳ quyển sách nào cho mọi nhu cầu đọc sách của bạn.
                                </div>
                            </li>
                            <li id="header__navbar-item--c" class="header__navbar-item  header__navbar-item--has-des">
                                <i class="fa-solid fa-mobile header__navbar-item--icon"></i>
                                <a class="header__navbar-item-link" href="#">VinaBook Reader</a>
                                <div class="header__des">
                                    Hơn 10,000 tựa sách và tạp chí trong thư viện sách khổng lồ của Vinabook Reader mọi
                                    lúc mọi nơi chỉ từ 825đ/ngày
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
                        <a href="{{ route('trangchu.index') }}" class="header__logo-link">
                            <img src="{{ asset('img/vnb_logo_2x.png') }}" alt="">
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
                        <i class="fa-solid fa-cart-shopping cart "></i>
                        <div class="header_cart-list">
                            <div class="header_cart-list-item">
                                <p>Giỏ hàng rỗng</p>
                            </div>
                        </div>
                    </div>
                    <div class="log-and-reg">
                        @if (Cookie::has('user_id'))
                        <a class="js-logout" style="text-decoration: none;color:black" href="{{ route('dangxuat') }}">Đăng
                            xuất</a>
                        @else
                        <div class="log log-seperate  bold" href="{{ route('login') }}"> Đăng Nhập </div>
                        <div class="reg bold"> <a href="{{ route('dangky') }}"> Đăng Ký</a> </div>
                        @endif
                    </div>


                </div>
            </div>

        </div>
        <div class="body white">
            <div class="body_header-color">
                <div class="grid width">
                    <div class="body_header c-12">
                        <div class="cartergory_books">
                            <i class="fa-solid fa-bars cartergory_books-icon"></i>
                            <span class="cartergory_books-text">Danh Mục Sách</span>

                            <i class="fa-solid fa-chevron-down cartergory_books-icon dropdown-icon"></i>
                            <div id="navbar-dropdowns" class="sidenav dropdown-content">
                                <ul class="sidenav-list ">
                                    <li class="sidenav-list-item">Sách Bán Chạy <i
                                            class="fa-solid fa-chevron-right side-icon"></i></li>
                                    <li class="sidenav-list-item">Sách Mới Phát Hành <i
                                            class="fa-solid fa-chevron-right side-icon"></i></li>
                                    <li class="sidenav-list-item">Sách Sắp Phát Hành <i
                                            class="fa-solid fa-chevron-right side-icon"></i></li>
                                    <li class="sidenav-list-item">Sách Ngoại Văn <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>


                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Blockchain<i
                                            class="fa-solid fa-chevron-right side-icon"></i></li>
                                    <li class="sidenav-list-item">Sách Kinh Tế <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-kinh-te">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Văn Học Trong Nước <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-trong-nuoc">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Văn Học Nước Ngoài <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-nuoc-ngoai">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Thường Thức - Đời Sống <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-doi-song">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Thiếu Nhi <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-thieu-nhi">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Phát Triển Bản Thân <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-ban-than">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Tin Học - Ngoại Ngữ <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-tin-hoc">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Chuyên Ngành <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-chuyen-nghanh">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Sách Giáo Khoa - Giáo Trình <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-giao-khoa">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sidenav-list-item">Tạp chí - Văn Phòng Phẩm <i
                                            class="fa-solid fa-chevron-right side-icon"></i>
                                        <div class="sidenav-list-item-des des-tap-chi">
                                            <div class="sidenav-list-item-des-ul">
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Literature & Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Romance</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Mystery, Thriller &
                                                            Suspense</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Classics</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Contemporary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Action & Adventure</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Short Stories</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Science Fiction &
                                                            Fantasy</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Humor & Satire</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">History</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Poetry</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Xem Tất Cả >></a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Travel</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Adventure Travel</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Travel Writing</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Children's Books</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Animals</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Action &
                                                            Adventure</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Classics</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Children's Literature &
                                                            Fiction</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Fairy Tales, Folk Tales
                                                            & Myths</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Growing Up & Facts Of
                                                            Life</a></li>
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">English As A Second Language</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEIC</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">TOEFL</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">IELTS</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English Skills</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Dictionary</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">English For Adults</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">English Specific
                                                            Purposes</a></li>
                                                </ul>
                                                <ul class="sidenav-sublist">
                                                    <li class="sidenav-sublist-item sidenav-sublist-item-header"><a
                                                            href="">Nhà Phát Hành Nổi Bật</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Oxford University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson Education</a>
                                                    </li>
                                                    <li class="sidenav-sublist-item"><a href="">Pearson</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">McGraw-HillMacmillan
                                                            Education</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Cambridge University
                                                            Press</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Prentice HallNational
                                                            Geographic</a></li>
                                                    <li class="sidenav-sublist-item"><a href="">Heinle Cengage
                                                            Learning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="body_header-contact">
                            <div class="body_header-hotline body_header-hotline--seperate">
                                <i class="fa-solid fa-phone body_header-contact-icon"></i>
                                <span class="bold">Hotline: <span class="bold">1900 6401</span></span>
                                <div class="body_header-contact-des">
                                    Tổng đài chăm sóc và Hỗ trợ Khách hàng hoạt động suốt 6 ngày trong tuần
                                    Thứ 2 - 6: hoạt động từ <span class="bold">8:00 - 17:00</span>
                                    T7 - Chủ nhật: Quý khách vui lòng để lại tin nhắn qua email<a href="#">
                                        hotro@vinabook.com</a> Chúng tôi sẽ xử lý email sớm nhất giúp quý khách.
                                </div>

                            </div>
                            <div class="body_header-help">
                                <i class="fa-solid fa-comments body_header-contact-icon"></i>
                                <a class="bold"> Hỗ trợ trực tuyến</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-contain">
                <div class="grid wide">
                    <div class="company-info">
                        <div class="address-group company-info-wrap">
                            <a href="" class="address">Trang chủ </a><i
                                class="fa-solid fa-chevron-right reg-icon"></i><a href="" class="address">Giới thiệu
                            </a><i class="fa-solid fa-chevron-right reg-icon"></i><span class="address"> Giới thiệu công
                                ty </span>
                        </div>
                        <div class="company-info-contains">
                            <div class="company-info-left">
                                <span class="reg-title ">DANH MỤC PAGES</span>
                                <ul class="about-company">
                                    <li class="about-company-link"><a href="" class="black">Giới thiệu công ty</a></li>
                                    <li class="about-company-link"><a href="">Góc báo chí</a></li>
                                    <li class="about-company-link"><a href="">Hợp tác Phát hành</a></li>
                                    <li class="about-company-link"><a href="">Tuyển dụng</a></li>
                                </ul>
                            </div>
                            <div class="company-info-right">
                                <span class="about-company-tittle">
                                    GIỚI THIỆU CÔNG TY
                                </span>
                                <div class="about-company-text-wrap">
                                    <p class="about-company-text">
                                        CTY Cổ phần Thương Mại và Dịch vụ MEKONG COM (<span><i>Mekong COM
                                                JSC</i></span>) là một trong số ít công ty Thương mại điện tử đầu tiên
                                        tại Việt Nam bắt đầu với Website <a href="">www.vinabook.com</a> từ tháng
                                        12/2004.
                                    </p>
                                    <p class="about-company-text">
                                        Từ khi thành lập đến nay, <span>Vinabook.com</span> luôn là <span>Nhà sách trên
                                            mạng hàng đầu</span> tại Việt Nam và được ghi nhận từ nhiều cơ quan, tổ chức
                                        trong và ngoài nước. Quan trọng hơn hết, Vinabook.com được <span>hàng triệu
                                            khách hàng thường xuyên mua sắm trực tuyến</span> đặt sự tin tưởng và tín
                                        nhiệm của mình trong suốt hơn 10 năm qua để <span>Vinabook.com</span> luôn được
                                        phục vụ và phát triển.
                                    </p>
                                    <p class="about-company-text">
                                        Với sứ mệnh xóa bỏ mọi giới hạn về không gian trong việc phân phối "tri thức"
                                        đến mọi miền đất nước bằng mô hình <span>mua sắm trực tuyến hiện đại</span>, từ
                                        miền núi đến hải đảo xa xôi, từ thành phố đến vùng quê và từ Việt Nam đến kiều
                                        bào ta ở trên toàn thế giới.
                                    </p>
                                    <p class="about-company-text">
                                        Mục tiêu của chúng tôi là luôn mở rộng thị trường sách trực tuyến cùng với đà
                                        phát triển của công nghệ thông tin. Để thực hiện mục tiêu đó, chúng tôi đã có
                                        những nhận thức đúng đắn về vai trò của nguồn nhân lực trong xây dựng và phát
                                        triển kinh doanh. Chúng tôi đã và đang không ngừng hoàn thiện hơn nữa môi trường
                                        làm việc với các trang thiết bị hiện đại, cung cách làm việc hiệu quả để ngày
                                        càng hoàn thiện việc phục vụ khách hàng.
                                    </p>
                                    <p class="about-company-text">
                                        <span class="about-company-text-tittle">Đội ngũ Vinabook.com</span>
                                    </p>
                                    <ul class="about-company-text-list">
                                        <li>Với đội ngũ trẻ trung, yêu mến sách và với mong muốn thúc đẩy văn hóa đọc
                                            của người Việt, các nhân viên Vinabook sẵn sàng đáp ứng mọi nhu cầu quý
                                            khách về sách với chất lượng phục vụ tốt nhất.</li>
                                    </ul>
                                    <p class="about-company-text">
                                        <span class="about-company-text-tittle">Phong cách Vinabook.com</span>
                                    </p>
                                    <ul class="about-company-text-list">
                                        <li>Với đội ngũ trẻ trung, yêu mến sách và với mong muốn thúc đẩy văn hóa đọc
                                            của người Việt, các nhân viên Vinabook sẵn sàng đáp ứng mọi nhu cầu quý
                                            khách về sách với chất lượng phục vụ tốt nhất.</li>
                                        <li>Hiện nay, Vinabook.com là nhà sách trên mạng có số lượng đầu sách lớn nhất
                                            với hơn 60,000 tựa sách và đều cập nhật mới mỗi ngày.</li>

                                    </ul>
                                    <p class="about-company-text">
                                        <span class="about-company-text-tittle">Dịch vụ Vinabook: </span>
                                    </p>
                                    <ul class="about-company-text-list">
                                        <li>Đặt hàng trực tuyến, giao hàng tận nơi</li>
                                        <li>Sách trước khi giao được bao bọc cẩn thận trong thùng giấy hoặc túi giấy
                                            Kraft Vintage, lịch sự và bảo vệ môi trường</li>
                                        <li>Đội ngũ giao hàng trong thành phố thân thiện, tận tâm</li>
                                        <li>Sẵn sàng giao đến mọi miền đất nước thông qua dịch vụ giao hàng của Bưu
                                            Chính Việt Nam</li>
                                        <li>Chuyển sách đi nước ngoài thông qua dịch vụ chuyển phát nhanh DHL hoặc
                                            chuyển phát bằng máy bay.</li>
                                        <li>Nhiều hình thức thanh toán tiện lợi, trả trước bằng thẻ trực tuyến hoặc thu
                                            tiền tận nơi</li>
                                        <li>Dịch vụ bọc sách bằng bọc nhựa cao cấp, thực hiện tỉ mỉ và cẩn thận cho từng
                                            cuốn</li>
                                        <li>Dịch vụ gói quà, giúp quý khách gởi tặng những món quà tinh thần bổ ích đến
                                            những người thân yêu</li>
                                        <li>Dịch vụ chăm sóc khách hàng 7 ngày trong tuần, kể cả thứ 7 và chủ nhật thông
                                            qua tổng đài 19006401 hoặc hệ thống hỗ trợ khách hàng qua email tại
                                            hotro@vinabook.com hoặc các hình thức chat trực tuyến Yahoo Messenger, Skype
                                            và Facebook.</li>
                                    </ul>
                                    <p class="about-company-text">
                                        Trong trường hợp quý khách có bất kỳ nhu cầu hay câu hỏi nào về sách, đừng ngần
                                        ngại gởi email về cho chúng tôi theo địa chỉ: <span>hotro@vinabook.com</span>
                                        hoặc tổng đài Vinabook.com <span>19006401.</span>
                                    </p>
                                    <p class="about-company-text">
                                        <span class="about-company-text-tittle-big">Một số thành tựu của
                                            Vinabook.com</span>
                                    </p>
                                    <ul class="about-company-text-list ">
                                        <li>Năm <span>2007</span>, Vinabook.com được Quỹ đầu tư IDG Việt Nam đầu tư và
                                            trở thành Nhà sách trực tuyến đầu tiên tại Việt Nam nhận được đầu tư từ Quỹ
                                            đầu tư mạo hiểm IDG</li>
                                        <li>Năm <span>2008</span>, lần đầu tiên Sở Công Thương Tp Hồ Chí Minh tổ chức
                                            giải thưởng ECAWARD, giải thưởng website Thương mại điện tử tiêu biểu của
                                            năm, Vinabook.com vinh dự được bình chọn là Nhà sách trực tuyến có dịch vụ
                                            tốt nhất và giải thưởng Nhà sách trực tuyến được yêu thích nhất.</li>
                                        <li>Từ năm <span>2008 đến năm 2013</span>, Vinabook.com là Nhà sách trực tuyến
                                            duy nhất tại Việt Nam 5 năm liền được bình chọn là Nhà sách trực tuyến được
                                            yêu thích nhất do Sở Công thương Tp Hồ Chí Minh tổ chức trao tặng.</li>
                                        <li>Năm <span>2010</span>, Hotdeal.vn là một công ty của MEKONG COM đầu tư cũng
                                            đã được thành lập và nay trở thành Website Thương Mại Điện Tử bán hàng theo
                                            nhóm số 1 tại Việt Nam với khoảng 52% thị phần thị trường mua theo nhóm.
                                        </li>
                                        <li>Năm <span>2013</span>, Vinabook.com vinh dự <span>đứng nhất trong các Nhà
                                                sách trực tuyến được yêu thích nhất</span> do Sở Công Thương trao tặng
                                            và </li>
                                        <li>Năm <span>2013</span>, Nhận Bằng khen của <span>UBND Tp Hồ Chí Minh trao
                                                tặng</span> vì những đóng góp cho sự phát triển của nghành Thương mại
                                            điện tử của Thành Phố.</li>
                                        <li>Năm <span>2013</span>, Mekong COM cũng vinh dự Nhận được giải thưởng Top 100
                                            <span>Công ty Công nghệ Đột Phá của Châu Á</span>, do tạp chí Toàn cầu Red
                                            Herring trao tặng.
                                        </li>
                                        <li>Năm <span>2014</span>, Vinabook.com tiếp tục vinh hạnh được trao tặng
                                            Website Thương mại điện tử tiêu biểu của năm <span>2014</span> </li>
                                        <li>Năm 2015, Vinabook.com là 1 trong 2 đơn vị duy nhất được trình <span>Thủ
                                                tướng chính phủ trao tặng bằng khen cho những đóng góp cho sự phát triển
                                                của nghành Thương Mại Điện Tử Việt Nam</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer white">

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
                                <a href=""><img src="{{ asset('img/icon-appstore.png') }}" alt=""
                                        class="footer-app-left"></a>
                                <a href=""><img src="{{ asset('img/icon-googleplay.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="footer-middle-top-right">
                            <div class="footer-des-info footer-middle-top-right-group">
                                <span class="footer-title">CHẤP NHẬN THANH TOÁN</span>
                                <div class="footer-middle-top-right-pic ">
                                    <div class="footer-middle-top-right-small-pic-group">
                                        <img src="{{ asset('img/visa.jpg') }}" alt="" class="small-pic">
                                        <img src="{{ asset('img/master_card.jpg') }}" alt="" class="small-pic">
                                        <img src="{{ asset('img/jcb.jpg') }}" alt="" class="small-pic">
                                    </div>
                                    <div class="footer-middle-top-right-small-pic-group">
                                        <img src="{{ asset('img/atm.jpg') }}" alt="" class="small-pic">
                                        <img src="{{ asset('img/cod.jpg') }}" alt="" class="small-pic">
                                        <img src="{{ asset('img/payoo.jpg') }}" alt="" class="small-pic">
                                    </div>

                                </div>
                                <span class="footer-title">CHẤP NHẬN THANH TOÁN</span>
                                <div class="footer-middle-top-right-pic ">
                                    <div class="footer-middle-top-right-small-pic-group">
                                        <img src="{{ asset('img/verify_visa.jpg') }}" alt="" class="small-pic">
                                        <img src="{{ asset('img/mastercard_securecode.jpg') }}" alt=""
                                            class="small-pic">
                                        <img src="{{ asset('img/onepay.jpg') }}" alt="" class="small-pic">
                                    </div>
                                </div>
                            </div>
                            <div class="footer-des-info footer-middle-top-right-group">
                                <span class="footer-title">ĐỐI TÁC VẬN CHUYỂN</span>
                                <div class="footer-middle-top-right-pic-middle">'
                                    <div class="footer-middle-top-right-large-pic-group">
                                        <img src="{{ asset('img/logovnb.png') }}" alt="" class="large-pic">
                                        <img src="{{ asset('img/vn-post.jpg') }}" alt="" class="large-pic">
                                        <img src="{{ asset('img/dhl.jpg') }}" alt="" class="large-pic">
                                    </div>
                                </div>
                            </div>
                            <div class="footer-des-info footer-middle-top-right-group">
                                <span class="footer-title">ĐỐI TÁC VẬN CHUYỂN</span>
                                <div class="footer-middle-top-right-pic-middle">'
                                    <div class="footer-middle-top-right-large-pic-group">
                                        <img src="{{ asset('img/lazada.jpg') }}" alt="" class="large-pic-2">
                                        <img src="{{ asset('img/shopee.jpg') }}" alt="" class="large-pic-2">
                                        <img src="{{ asset('img/amazon.jpg') }}" alt="" class="large-pic-2">
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
                        <span class="footer-copyright-top-img"><img
                                src="{{ asset('img/logo_so_cong_thuong.png') }}"></span>
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
                            <img src="{{ asset('img/logo_hotdeal_2x.png') }}" alt=""
                                class="footer-copyright-down-img-left">
                            <img src="{{ asset('img/logo_yesgo_2x.png') }}" alt="">
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
                            Chưa có tài khoản vui lòng <a href="{{ route('dangky') }}"> Đăng ký</a>
                        </div>
                    </div>
                    <div class="modal-container-bot">
                        <span>Hoặc đăng nhập bằng:</span>
                        <div class="modal-container-bot-icon">
                            <a href=""><img src="{{ asset('img/google_signin_dark.png') }}" alt=""></a>
                            <a href=""><img src="{{ asset('img/facebook_signin_dark.png') }}" alt=""
                                    class="img-left"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/cart.js"></script>
    <script src="{{ asset('js/drop-navbar.js"></script>
    <script src="{{ asset('js/modal.js"></script>
    </div>
</body>

</html>
