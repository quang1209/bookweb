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
       <div class="head-logo">
        <a href=""><img src="/images/vnb_logo_2x.png" alt=""></a>
       </div>
       <div class="title-giohang">
        giỏ hàng
       </div>
        <div class="body">
            <div class="app-contain white">
                <div class="grid wide">
                    <div class="row-bill">
                        <div class="box-list-cart">
                            <div class="title-product">
                                Sản phẩm
                            </div>
                            <div>
                                @if(session('cart'))
                                @php
                                    $tong = 0
                                @endphp
                                @foreach (session('cart') as $id=>$detail)
                                @php
                                    $tong += $detail['gia'] * $detail['soluong']
                                @endphp
                                 <div class="product-detail">
                                      <div class="img-thumb">
                                        <img src="/images/{{$detail['hinhanh']}}" alt="" width="43px" height="57px">
                                      </div>
                                      <div class="detail-product pro-left" >
                                        <div class="title-sp">
                                            {{$detail['ten']}}
                                        </div>
                                        <div class="input-group">
                                            <form method="POST" action="{{route('decreaseCart',$detail['id'])}}" style="float: left; margin-right: 5px">
                                                @csrf
                                                @method('put')
                                                <button class="button">-</button>
                                            </form>
                                        <input class="num" value="{{$detail['soluong']}}" disabled style="float: left; margin-right: 5px">
                                        <form method="POST" action="{{route('increaseCart',$detail['id'])}}">
                                            @csrf
                                            @method('put')
                                            <button class="button">+</button>
                                        </form>
                                        </div>
                                      </div>
                                      <div class="detail-product pro-right" >
                                        <div class="title-price">
                                            {{$detail['soluong']}} x {{$detail['gia']}}.000đ
                                        </div>
                                        <div class="delete-sp">
                                            <form method="POST" action="{{route('removecart',$detail['id'])}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style="border: none; background-color: white">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>

                                            </form>
                                        </div>
                                      </div>
                                 </div>
                                @endforeach
                            </div>


                        </div>

                        <div>

                        </div>
                        <div class="list-tom-tat">
                            <div class="title-tomtat">
                                TÓM TẮT ĐƠN HÀNG
                            </div>
                            <div class="list-tom-tat-bill">
                                <div class="list-bill-top">
                                    <div class="bill-left">
                                        <div class="bill-detail">Sản phẩm</div>
                                        <div class="bill-detail">Phí vận chuyển</div>
                                        <div class="bill-detail" style="font-weight: 500;text-transform: uppercase" >TẠM TÍNH</div>
                                    </div>
                                    <div class="bill-right">
                                        <div class="bill-detail">{{count((array) session('cart'))}}</div>
                                        <div class="bill-detail">Miễn phí</div>
                                        <div class="bill-detail" style="font-weight: 500;color: #117c47" >{{$tong}}.000 đ</div>
                                    </div>
                                </div>
                                <div class="list-bill-bot">
                                    (Đã bao gồm Thuế VAT và Phí đóng gói cơ bản).
                                </div>
                                <div class="total-bill">
                                    <div class="bill-detail" style="font-weight: 500;text-transform: uppercase" >Tổng cộng</div>
                                    <div class="bill-detail" style="font-weight: 500;" >{{$tong}}.000 đ</div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                <div class="bt-payment">
                    @if (Cookie::has('user_id'))
                    <a href="{{route('order.create')}}" class="bt-thanh-toan">Thanh toán</a>
                    <a href="{{route('trangchu.index')}}" class="bt-quay-lai">Quay lại</a>
                    @else
                    <a href="{{route('login')}}" class="bt-thanh-toan">Thanh toán</a>
                    <a href="{{route('trangchu.index')}}" class="bt-quay-lai">Quay lại</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="footer" style="padding-top:0px">
          @include('footerclient')
        </div>

        <script src="asset/js/modal.js"></script>
        <script src="/js/cart.js"></script>
        <script src="asset/js/trangchuproduct.js"></script>
    </div>
</body>
</html>
