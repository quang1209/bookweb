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
        <a href="{{route('trangchu.index')}}"><img src="/images/vnb_logo_2x.png" alt=""></a>
       </div>
       <div class="title-giohang">
            Xác nhận & đặt hàng
       </div>
        <div class="body">
            <div class="app-contain white">
                <div class="grid wide">
                    <div class="xacnhan-wrapped">
                    <div class="product-left">
                        <div class="order-tilte">
                            Sản phẩm
                        </div>
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
                              </div>
                              <div class="detail-product pro-right" >
                                <div class="title-price">
                                    {{$detail['soluong']}} x {{$detail['gia']}}.000đ
                                </div>
                              </div>
                         </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="product-right">
                        <div class="order-tilte">
                            Địa chỉ giao hàng
                            <a href="{{route('order.edit',$hoadon->id_hoadon)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        </div>
                        <p class="user-info bold">{{$hoadon->hovaten}}</p>
                        <p class="user-info">{{$hoadon->diachi}}</p>
                        <p class="user-info bold">{{$hoadon->sodiethoai}}</p>
                        <div class="order-tilte">
                            GHI CHÚ GIAO HÀNG
                        </div>
                        <p class="user-info">Thời gian giao hàng dự kiến 3-7 ngày</p>

                        <div class="order-tilte">
                            HÌNH THỨC THANH TOÁN
                        </div>
                        <p class="user-info bold">{{$hoadon->hinhthucthanhtoan}}</p>

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
                <form method="POST" action="{{route('order.xacnhan',$hoadon->id_hoadon)}}">
                    @csrf
                    @method('put')
                <div class="bt-payment">
                    <button type="submit" class="bt-thanh-toan">xác nhận</button>
                    <a href="" class="bt-quay-lai">Quay lại</a>

                </div>
                </form>
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
