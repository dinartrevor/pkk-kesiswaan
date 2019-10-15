<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/pi.jpeg') }}" type="image/ico" />
    <title>Absensi - Web Kesiswaan</title>

    <!-- Bootstrap -->
    <link href="{{ asset('asset-admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('asset-admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <!-- iCheck -->
    <link href="{{ asset('asset-admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('asset-admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('asset-admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/admin" class="site_title"><span>Kesiswaan SMK PI</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/pi.jpeg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang!</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</span></a>
                  </li>
                  <li><a href="/jurusan"><i class="fa fa-home"></i> Jurusan</span></a>
                  </li>
                  <li><a href="/absensi"><i class="fa fa-edit"></i> Absensi</a>
                    <ul class="nav child_menu"></ul>
                  </li>
                  <li><a href="{{route('kategori.index')}}"><i class="fa fa-desktop"></i> Kategori Artikel </span></a>
                    <ul class="nav child_menu"></ul>
                  </li>
                  <li><a href="/artikel"><i class="fa fa-desktop"></i> Artikel </span></a>
                    <ul class="nav child_menu"></ul>
                  </li>
                <li><a href="{{route('eskul.index')}}"><i class="fa fa-table"></i> Ekstrakurikuler</a>
                    <ul class="nav child_menu"></ul>
                  </li>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/pi.jpeg') }}" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('images/pi.jpeg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Absensi Siswa</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action text-center">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>NISN</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Keterangan</th>
                          <th>Pengaturan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>17102359</td>
                          <td>Akbar Mahmudin</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 5 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></<td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>17102364</td>
                          <td>Dinar Abdul Holik Firdaus</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 3 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></<td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>17102366</td>
                          <td>Ferdiansyah</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 15 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>17102368</td>
                          <td>Ikhlas Suherlan</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 7 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>17102369</td>
                          <td>Juan Rizal Alviano</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 9 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>6.</td>
                          <td>17102371</td>
                          <td>Mochamad Rizky Sanjaya</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 2 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>7.</td>
                          <td>17102372</td>
                          <td>Muhamad Fajar</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 10 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>8.</td>
                          <td>17102373</td>
                          <td>Muhamad Rezky Rizaldi</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 1 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>9.</td>
                          <td>17102374</td>
                          <td>Muhamad Rio</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 8 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>10.</td>
                          <td>17102380</td>
                          <td>Surya Ilham Maulana</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 4 Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>11.</td>
                          <td>17102385</td>
                          <td>Yogi Saputra</td>
                          <td>XII</td>
                          <td>Rekayasa Perangkat Lunak 1</td>
                          <td>Terlambat 6  Menit</td>
                          <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                        </tr>                 
                        <tr>
                            <td>11.</td>
                            <td>17102385</td>
                            <td>Yogi Saputra</td>
                            <td>XII</td>
                            <td>Rekayasa Perangkat Lunak 1</td>
                            <td>Terlambat 6  Menit</td>
                            <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                          </tr>                 
                          <tr>
                              <td>11.</td>
                              <td>17102385</td>
                              <td>Yogi Saputra</td>
                              <td>XII</td>
                              <td>Rekayasa Perangkat Lunak 1</td>
                              <td>Terlambat 6  Menit</td>
                              <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                            </tr>                 
                            <tr>
                                <td>11.</td>
                                <td>17102385</td>
                                <td>Yogi Saputra</td>
                                <td>XII</td>
                                <td>Rekayasa Perangkat Lunak 1</td>
                                <td>Terlambat 6  Menit</td>
                                <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                              </tr>                 
                              <tr>
                                  <td>11.</td>
                                  <td>17102385</td>
                                  <td>Yogi Saputra</td>
                                  <td>XII</td>
                                  <td>Rekayasa Perangkat Lunak 1</td>
                                  <td>Terlambat 6  Menit</td>
                                  <td><a href="#">Edit <i class="fa fa-edit"></i></a> || <a href="#">Hapus <i class="fa fa-trash"></i></a></td>
                                </tr>                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div>
            Copyright &copy; 2019 SMK Prakarya Internasional || All Rights Reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('asset-admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('asset-admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('asset-admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('asset-admin/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('asset-admin/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('asset-admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('asset-admin/build/js/custom.min.js') }}"></script>

  </body>
</html>