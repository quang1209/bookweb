<!DOCTYPE html>
<html>
<head>
<title>admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/box.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/css/form.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
@include("admin.header")

<!-- Sidebar/menu -->
@include("admin.sidebar")


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom wrapped">
    <section class="content">
        <div class="row">
          <!-- left column -->

          <!-- right column -->

          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Thêm Sách</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('sach.update', ['sach' => $sach])}}">
                @csrf
                @method('put')
                <div class="box-body">
                    <div>
                        @if ($errors->any()){
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        }

                        @endif
                    </div>
                  <div class="form-group">
                    <label class="control-label">Tên</label>
                    <div class="input">
                      <input type="text" name="ten" class="form-control" placeholder="Nhập tên sách" required value="{{$sach->ten}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Hình ảnh</label>
                    <div class="input">
                        <img src="/images/{{$sach->hinhanh}}" alt="" style="width: 200px; height: 300px; padding-bottom: 5px">
                      <input type="file" name="hinhanh" class="form-control"  required value="{{$sach->hinhanh}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tác giả</label>
                    <div class="input">
                      <input type="text" name="tacgia" class="form-control" placeholder="Nhập tên tác giả" required value="{{$sach->tacgia}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Nhà xuất bản</label>
                    <div class="input">
                      <select class="form-control" style="width: 100%;" name="idnhaxb" class="input" >
                        <option selected>Chọn Nhà xuất bản</option>
                        @foreach ($nhaxb as $nhaxb)
                            <option value="{{$nhaxb->id}}">{{$nhaxb->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Thể loại</label>
                    <div class="input">
                      <select class="form-control" style="width: 100%;" name="id_theloai" class="input" >
                        <option selected>Chọn thể loại</option>
                        @foreach ($theloai as $theloai)
                            <option value="{{$theloai->id}}">{{$theloai->theloai}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Nhà phát hành</label>
                    <div class="input">
                      <input type="text" name="nhaphathanh" class="form-control" placeholder="Nhập tên tác giả" required value="{{$sach->nhaphathanh}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Ngày phát hành</label>
                    <div class="input">
                        <input type="date" class="form-control" id="datechoose" name="date" required value="{{$sach->date}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Giá</label>
                    <div class="input">
                      <input type="text" name="gia" class="form-control" placeholder="Nhập giá" required value="{{$sach->gia}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Giá khuyến mãi</label>
                    <div class="input">
                      <input type="text" name="giakhuyenmai" class="form-control" placeholder="Nhập giá khuyến mãi" required value="{{$sach->giakhuyenmai}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Mô tả</label>
                    <div class="input">
                        <textarea id="editor1" name="mota" rows="10" cols="80" >{{$sach->mota}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Giấy phép</label>
                    <div class="input">
                      <input type="text" name="giayphep" class="form-control" placeholder="Nhập giấy phép" required value="{{$sach->giayphep}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Ngôn ngữ</label>
                    <div class="input">
                      <input type="text" name="ngonngu" class="form-control" placeholder="Nhập ngôn ngữ" required value="{{$sach->ngonngu}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Kích thước</label>
                    <div class="input">
                      <input type="text" name="kichthuoc" class="form-control" placeholder="Nhập kích thước" required value="{{$sach->kichthuoc}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Số trang</label>
                    <div class="input">
                      <input type="text" name="sotrang" class="form-control" placeholder="Nhập số trang" required value="{{$sach->sotrang}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Khối lượng</label>
                    <div class="input">
                      <input type="text" name="khoiluong" class="form-control" placeholder="Nhập khối lượng" required value="{{$sach->khoiluong}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Định dạng</label>
                    <div class="input">
                      <input type="text" name="dinhdang" class="form-control" placeholder="Nhập định dạng" required value="{{$sach->dinhdang}}">
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                <a href="/sach"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                  <button type="submit" name="create" class="btn btn-create  pull-right">Update</button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->
            <!-- general form elements disabled -->
          <!-- /.box -->
          </div><!--/.col (right) -->
        </div>   <!-- /.row -->
      </section><!-- /.content -->
  </div>
  <!-- Footer -->
  @include("admin.footer")

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
