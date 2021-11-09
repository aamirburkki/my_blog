<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">My Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name ?? 'No Name' }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashbaord
              </p>
            </a>
          </li>
<<<<<<< HEAD
=======
          @hasanyrole('admin')
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
<<<<<<< HEAD

=======
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('users') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
            </ul>
          </li>
<<<<<<< HEAD

=======
          @endhasanyrole
          @hasanyrole('admin|user')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ (request()->segment(1) == 'blogs') ? 'active' : '' }}">
                <a href="{{ url('blogs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('blogs/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create Blog</p>
                </a>
              </li>
            </ul>
          </li>
          @endhasanyrole
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
<<<<<<< HEAD
  </aside>
=======
  </aside>
>>>>>>> 5cb28c979634828028105e9f774cc081bdbea5bb
