<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="{{ asset('asset-admin/images/pi.jpeg') }}" type="image/icon" />
    <title>Tambah Artikel - Web Kesiswaan</title>

    <!-- Bootstrap -->
    <link href="{{ asset('asset-admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('asset-admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('asset-admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('asset-admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('asset-admin/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('asset-admin/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('asset-admin/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('asset-admin/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('asset-admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('asset-admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <a href="/artikel"><i class="fa fa-arrow-left" style="font-size:30px;"></i></a>
                <h3>Buat Artikel Baru</h3>
              </div>

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
              <div class="col-md-9 col-sm-9 col-xs-9">
                <div class="x_panel">
                  <div class="x_title">
                    <ul style="transform: translate(23px, 0);" class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <label>Judul</label>
                        <input type="text" placeholder="Masukkan Judul" class="form-control">
                        <span style="transform: translate(4px, 21px);" class="fa fa-space-shuttle form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <div class="form-group">
                      <div class="x_content">
                          <label>Isi Artikel</label>
                        <div id="alerts"></div>
                        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                          <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            </ul>
                          </div>
                          <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li>
                                <a data-edit="fontSize 5">
                                  <p style="font-size:17px">Huge</p>
                                </a>
                              </li>
                              <li>
                                <a data-edit="fontSize 3">
                                  <p style="font-size:14px">Normal</p>
                                </a>
                              </li>
                              <li>
                                <a data-edit="fontSize 1">
                                  <p style="font-size:11px">Small</p>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="btn-group">
                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                          </div>
      
                          <div class="btn-group">
                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                          </div>
      
                          <div class="btn-group">
                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                          </div>
      
                          <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                            <div class="dropdown-menu input-append">
                              <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                              <button class="btn" type="button">Add</button>
                            </div>
                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                          </div>
      
                          <div class="btn-group">
                            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                          </div>
      
                          <div class="btn-group">
                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                          </div>
                        </div>
      
                        <div id="editor-one" class="editor-wrapper"></div>
                        <textarea name="descr" id="descr"style="display:none;"></textarea>
                        
                        <br />
      
                      </div>
                    </div>
                    <div class="form-group">
                      <div style="transform: translate(15%, -60%);" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div  class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" placeholder="Masukkan Kategori" class="form-control">
                  <span style="transform: translate(4px, 21px);" class="fa fa-i-cursor form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" placeholder="Masukkan Kategori" class="form-control">
                </div>
              </div>
            </form>
            </div>
            

        <!-- footer content -->
        <footer>
          <div>
              Copyright &copy; 2019 SMK Prakarya Internasional || All Rights Reserved.
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
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('asset-admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('asset-admin/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('asset-admin/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('asset-admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('asset-admin/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('asset-admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('asset-admin/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('asset-admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('asset-admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('asset-admin/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('asset-admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('asset-admin/vendors/starrr/dist/starrr.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('asset-admin/build/js/custom.min.js') }}"></script>

  </body>
</html>
