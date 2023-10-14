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
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Quản lý thể loại</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered table-striped dataTable">
          <thead >
            <tr >
              <th class="title boxcontent">Thể loại</th>
              <th class="edit boxcontent">Tác vụ</th>
            </tr>
            @foreach ($theloai as $theloai)
            <tr >
              <td class="boxcontent">{{$theloai->theloai}}</td>
              <td class="boxcontent ">

                <form method="POST" action="{{route('theloai.delete',['theloai'=>$theloai])}}">

                    @csrf
                    @method('delete')
                    <a href="{{route('theloai.edit',['theloai'=>$theloai])}}" class="editbtn btn "><i class="fa-solid fa-pen-to-square"></i></a>
                    <button type="submit" class="deletebtn btn"><i class="fa-solid fa-trash"></i></button></td>
                </form>

            </tr>
            @endforeach

          </thead>
        </table>
        <div  style="text-align:left">
      <a class="btn editbtn "href="/theloai/create">
          Thêm thể loại</a>
      </div>
      </div><!-- /.box-body -->


    </div><!-- /.box -->
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
