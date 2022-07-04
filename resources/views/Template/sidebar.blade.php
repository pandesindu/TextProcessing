<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
      <img src="{{asset('/AdminLTE/dist/img/cs.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIPDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/AdminLTE/dist/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/halamanupload" class="nav-link">
                  <i class="nav-icon fas fa-upload"></i>
                  <p>UPLOAD FILE</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/proses" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Hasil</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->