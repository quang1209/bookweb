<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
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
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logout</span>
</div>

<!-- Sidebar/menu -->
@include('admin.sidebar')


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom wrapped">
    <a href="/sach" class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa-solid fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Quản lí sách</h4>
      </div>
    </a>
    <a href="/dichvu" class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa-solid fa-desktop w3-xxxlarge"></i></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Quản lí dịch vụ</h4>
      </div>
    </a>
    <a href="/nhaxb" class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa-solid fa-house w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Quản lý nhà xuất bản</h4>
      </div>
    </a>
    <a href="/nhaxb" class="w3-quarter">
        <div class="w3-container yellow  w3-padding-16 w3-text-white">
          <div class="w3-left"><i class="fa-solid fa-folder w3-xxxlarge"></i></div>
          <div class="w3-right">
          </div>
          <div class="w3-clear"></div>
          <h4>Quản lý thể loại</h4>
        </div>
      </a>
    <a class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white margin-15 w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Danh sách người dùng</h4>
      </div>
    </a>
    <a class="w3-quarter">
        <div class="w3-container purple w3-text-white w3-padding-16">
          <div class="w3-left"><i class="fa-solid fa-print w3-xxxlarge"></i></div>
          <div class="w3-right">
          </div>
          <div class="w3-clear"></div>
          <h4>Danh sách hóa đơn</h4>
        </div>
      </a>
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

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
