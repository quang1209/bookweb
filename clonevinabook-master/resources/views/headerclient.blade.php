<header class="header">
    <div class="head__navbar-color">
        <div class="grid wide">
        <nav class="head__navbar">
            <ul class="header__navbar-list">
                <li id="header__navbar-item--a" class="header__navbar-item  header__navbar-item--has-des header__navbar-item--seperate">
                    <i class="fa-solid fa-truck header__navbar-item--icon"></i>
                     Miễn phí giao hàng
                     <div class="header__des">
                        Miễn phí giao hàng toàn quốc cho Đơn hàng từ 250.000đ.
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
          @if(session('cart'))
          <i class="fa-solid fa-cart-shopping cart cart-icon"></i>
            <span class="countsp drop" id="countsp">{{count((array) session('cart'))}}</span>
            <div class="header_cart-list">
                @foreach (session('cart') as $id=>$detail)
               <div class="header_cart-list-item-top">
                <div class="header_cart-list-item-img"><img src="/images/{{$detail['hinhanh']}}" alt=""></div>
                <div class="header_cart-list-item-des">
                    <a href="" class="header_cart-list-item-header">{{$detail['ten']}}</a>
                    <div class="header_cart-list-item-quantity-and-price">
                        <span class="header_cart-list-item-quantity">
                            {{$detail['soluong']}}
                        </span> X
                        <span class="header_cart-list-item-price">
                            {{$detail['gia']}}.000đ
                        </span>
                    </div>
                    <form method="POST" action="{{route('removecart',$detail['id'])}}">
                        @csrf
                        @method('delete')
                    <button style="position: absolute;top: 0px;right: 0px;padding: 0">
                        <i class="fa-sharp fa-solid fa-circle-xmark header_cart-list-item-icon none" ></i>
                    </button>
                    </form>
                    </div>
                </div>
                @endforeach
                <div class="header_cart-list-item-bot" >
                    @php
                        $tong = 0
                    @endphp
                    @foreach ((array) session('cart') as $id=>$detail)
                     @php
                    $tong += $detail['gia'] * $detail['soluong']
                     @endphp
                    @endforeach
                        <div class="header_cart-list-item-total">
                        Tổng cộng: <span class="header_cart-list-item-total-price">{{$tong}}.000đ</span>
                        </div>

                <a href="{{route('giohang')}}" class="header_cart-list-item-add">XEM GIỎ HÀNG</a>

                </div>
            </div>
          @else
          <span class="countsp" id="countsp"></span>
          <i class="fa-solid fa-cart-shopping cart cart-icon"></i>
          <div class="header_cart-list">
              <div class="header_cart-list-item" id="header_cart-list-item">
                  <p id="header_cart-list-item-empty">Giỏ hàng rỗng</p>
              </div>
          </div>
          @endif
      </div>
      <div class="log-and-reg">
        @if (Cookie::has('user_id'))
            <a class="js-logout" href="{{ route('dangxuat') }}" style="color: black; text-decoration: none;">Đăng xuất</a>
            @else
            <a href="{{ route('login') }}" style="color: black;text-decoration: none">Đăng nhập</a>
            <span class="arrow">&nbsp;</span>
            <span>|</span>
            <span class="arrow">&nbsp;</span>
            <a href="{{ route('dangky') }}" style="color: black;text-decoration: none">Đăng Ký</a>
            @endif
      </div>


  </div>
    </div>

</div>
