<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NBTC - สำนักงาน กสทช. เขต 6 ขอนแก่น</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css donut -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" > <!-- fa fa i-con -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

  <link rel="stylesheet" href="../assets/css/main.tower.css">
  <link rel="stylesheet" href="../assets/css/admin/header.css">

  
  <style>
    #map {
        height: 100%;
    }
    .map{
    height: 700px;
    margin-bottom: 30px;
  }

    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
      <!-- SEARCH FORM -->
    </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="../assets/image/" alt="User Image">         -->
          </div>
          <div class="info">
            <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} </a>          
            </div>
        </div>
            <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-map-marker"></i>
                <p>
                    เสาสัญญาณ
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="./map.php" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>หน้าแรก</p>
                    </a>
                  </li>
                <li class="nav-item">
                  <a href="{{ url('towers/edit')}}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ข้อมูลเสาสัญญาณ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./form_license.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>แบบฟอร์มขอใบอนุญาต</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./customer.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ผู้ให้บริการ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./network.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>เครือข่ายร่วม</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./dashboard.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>เพิ่มข้อมูลเสา</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  กฎหมายที่เกี่ยวข้อง
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas  fa-user"></i>
                <p>
                  ผู้ใช้งาน
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ผู้ใช้งานทั่วไป</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ผู้ดูแลระบบ</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-exclamation-circle"></i>
                <p>
                  การแจ้งปัญหา
                  <span class="badge badge-info right">2</span>
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./report.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>การแจ้งปัญหา
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./report_problem.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ประเภทการแจ้งปัญหา</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="./contact.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  ติดต่อเรา
                </p>
              </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-th"></i>
                            <p>{{ __('Logout') }} </p>
                           
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <main class="py-4">
            @yield('content')
    </main>

    <footer class="main-footer">
    <strong>สำนักงานคณะกรรมการกิจการกระจายเสียง กิจการโทรทัศน์ และกิจการโทรคมนาคมแห่งชาติ เขต 6 (ขอนแก่น)</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
</body>
</html>

<script>
      var customLabel = {
        1: {
          label: 'TRU'
        },
        2:{
          label: 'TOT'
        },
        3: {
          label: 'D-TAC'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(16.5178,104.121),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('../models/marker.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              console.log(markerElem);
              var id = markerElem.getAttribute('id');
              var image = markerElem.getAttribute('image');
              var name = markerElem.getAttribute('name');
              var sending = markerElem.getAttribute('sending');
              var parish = markerElem.getAttribute('parish');
              var district = markerElem.getAttribute('district');
              var pravince = markerElem.getAttribute('pravince');
              var code = markerElem.getAttribute('code');
              var customer = markerElem.getAttribute('customer');
              var network = markerElem.getAttribute('network');
              var license_code = markerElem.getAttribute('license_code');
              var license_date = markerElem.getAttribute('license_date');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = `
                <div class="conn-info-tower">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th scope="col" width="120px" class="text-right">หัวข้อ</th>
                        <th scope="col">รายละเอียด</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-right">รูปภาพ</th>
                        <td><img src="../assets/image/tower/${image}" width="150px" hieght="190px"></td>
                        </tr>
                      <tr>
                        <th scope="row" class="text-right">ประเภทใบตั้ง</th>
                        <td>${name}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">ที่อยู่</th>
                        <td>ตำบล${parish} อำเภอ${district} จังหวัด${pravince} ${code}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">ผู้ให้บริการ</th>
                        <td>${customer}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">เครือข่ายร่วม</th>
                        <td>${network}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">รหัสใบอนุญาต</th>
                        <td>${license_code}</td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">วันขอใบอนุญาต</th>
                        <td>${license_date}</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              `;
              
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkgXuCpP3BauX9EIlnHlqtC8IP1SUoYbw&callback=initMap" asyncdefer></script>