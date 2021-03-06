<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{auth()->user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <li class="{{Request::is('admin')?'active':''}}"><a href="/admin"><i class="fa fa-dashboard "></i> <span>Dashboard</span></a></li>
      <li><a href="/siswa"><i class=" fa fa-user"></i> <span>Siswa</span></a></li>
      <li class="treeview {{Request::is('artikel','artikel/new-artikel')?'active':''}}">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Article</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{Request::is('artikel/new-artikel')?'active':''}}"><a href="/artikel/new-artikel"><i class="fa fa-circle-o"></i> Add new Article</a></li>
          <li class="{{Request::is('artikel')?'active':''}}"><a href="/artikel"><i class="fa fa-circle-o"></i> All Article</a></li>
        </ul>
      </li>
      <li class="{{Request::is('kategori')?'active':''}}"><a href="/kategori"><i class="fa fa-tags"></i> <span>Category</span></a></li>
      <li class="treeview {{Request::is('extracurricular', 'extracurricular/new-extracurricular')?'active':''}}">
        <a href="#"><i class="fa fa-users"></i> <span>Extracurricular</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{Request::is('extracurricular/new-extracurricular')?'active':''}}"><a href="/extracurricular/new-extracurricular"><i class="fa fa-circle-o"></i> Add new Extracurricular</a></li>
          <li class="{{Request::is('extracurricular')?'active':''}}"><a href="/extracurricular"><i class="fa fa-circle-o"></i> All Extracurricular</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>