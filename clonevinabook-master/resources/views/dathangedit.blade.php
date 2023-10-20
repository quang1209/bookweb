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
            Địa chỉ và dịch vụ
       </div>
        <div class="body">
            <div class="app-contain white">
                <div class="grid wide">
                    @if ($errors->any()){
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    }

                    @endif
                    <form method="POST" action="{{route('order.update',$hoadon->id_hoadon)}}" >
                        @csrf
                        @method('put')
                    <div class="step-one-wrapped">

                        <div class="order-left">
                           <div class="order-tilte">
                                Địa chỉ giao hàng
                            </div>

                            <div class="order-address-form">
                                <div class="order-address-form-group">
                                    <div class="order-address-form-text">
                                        Họ và tên
                                    </div>
                                    <input type="text" name="hovaten" value="{{$hoadon->hovaten}}" placeholder="Họ và tên" class="order-address-form-input">
                                </div>
                                <div class="order-address-form-group">
                                    <div class="order-address-form-text">
                                        Điện thoại
                                    </div>
                                    <input type="text" name="sodiethoai" value="{{$hoadon->sodiethoai}}" placeholder="Điện thoại" class="order-address-form-input">
                                </div>
                                <div class="order-address-form-group">
                                    <div class="order-address-form-text">
                                        Địa chỉ
                                    </div>
                                    <input type="text" name="diachi" value="{{$hoadon->diachi}}" placeholder="Địa chỉ" class="order-address-form-input">
                                </div>
                            </div>
                            <div class="order-tilte">
                                Ghi chú giao hành
                            </div>
                            <textarea name="note" id="" class="order-note"></textarea>
                        </div>
                        <div class="order-right">
                            <div class="order-tilte">
                                HÌNH THỨC THANH TOÁN
                            </div>
                            <div class="radio-dichvu">
                                <label class="container-check">Giao hàng và thu tiền tận nơi
                                    <input type="radio" name="hinhthucthanhtoan" value="Cod">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container-check">Thẻ ATM có Internet Banking
                                    <input type="radio" name="hinhthucthanhtoan" value="ATM">
                                    <span class="checkmark"></span>
                                </label>


                            </div>

                        </div>


                    </div>

                <div class="bt-payment">
                    <button type="submit" class="bt-thanh-toan">Thanh toán</button>
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
