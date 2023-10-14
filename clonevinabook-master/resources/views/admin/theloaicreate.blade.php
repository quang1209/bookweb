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
                <h3 class="box-title">Thêm thể loại</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{route('theloai.store')}}">
                @csrf
                @method('post')
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
                    <label class="control-label">Thể loại</label>
                    <div class="input">
                      <input type="text" name="theloai" class="form-control" placeholder="Nhập thể loại" required>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                <a href="/theloai"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                  <button type="submit" name="create" class="btn btn-create  pull-right">Create</button>
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
