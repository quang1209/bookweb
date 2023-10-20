<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="/images/Sample_User_Icon.png" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="w3-col s8 w3-bar">
        <span>Welcome, <strong>Admin</strong></span><br>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
      <a href="" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
      <a href="{{route('admin.dashboard')}}" class="w3-bar-item w3-button w3-padding "><i class="fa-solid fa-gauge"></i> Trang quản trị</a>
      <a href="{{route('sach.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa-regular fa-circle"></i> Quản lý sách</a>
      <a href="{{route('nhaxb.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa-regular fa-circle"></i> Quản lý Nhà xuất bản</a>
      <a href="{{route('theloai.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa-regular fa-circle"></i> Quản lý Thể loại</a>
      <a href="{{route('admin.hoadon')}}" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-receipt"></i> Danh sách hóa đơn</a>
    </div>
  </nav>
