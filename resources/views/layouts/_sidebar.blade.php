<?php
$blogcount = DB::table('blogs')->count();
$departmentcount = DB::table('department')->count();
$teamcount = DB::table('team')->count();
$testimonialcount = DB::table('testimonial')->count();
?>
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link text-center">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">webwide IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="{{url('/dashboard')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item {{ request()->is(['testimonial-list', 'add-testimonial']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is(['testimonial-list', 'add-testimonial']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Testimonial
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{$testimonialcount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('testimonial-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-testimonial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonial</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item {{ request()->is(['team-list', 'add-team']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is(['team-list', 'add-team']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Team
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{$teamcount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('team-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-team')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team Member</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ request()->is(['department-list', 'add-department']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is(['department-list', 'add-department']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Department
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{$departmentcount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('department-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-department')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Department</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Digital Marketing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Back Office</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>HR/Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Owner</p>
                </a>
              </li> --}}
              
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">0</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ request()->is(['blog-list', 'add-blog']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is(['blog-list', 'add-blog']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Blogs
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">{{$blogcount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('blog-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item {{ request()->is(['home-page-seo', 'about-us-page-seo', 'contact-us-page-seo','blog-page-seo','privacy-policy-page-seo','terms-condition-page-seo']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is(['home-page-seo', 'about-us-page-seo', 'contact-us-page-seo','blog-page-seo','privacy-policy-page-seo','terms-condition-page-seo']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                SEO
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">{{$blogcount}}</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('home-page-seo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('about-us-page-seo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About us Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('contact-us-page-seo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us Page</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('blog-page-seo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog List Page</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('privacy-policy-page-seo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('terms-condition-page-seo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terms & Conditions Page</p>
                </a>
              </li>
              
            </ul>
          </li>
			
			<li class="nav-item {{ request()->is(['contact-list', 'career-list']) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is(['contact-list', 'career-list']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Custom Pages
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('contact-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('career-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Careers List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Logout
              
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  

  <!-- Content Wrapper. Contains page content -->