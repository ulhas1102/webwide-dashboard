<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') |  webwide IT </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  @include('layouts._css')
  @yield('backend-page-style')
  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" />
  <style>
  body{
  padding-bottom: 6vh;
}
  </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    {{-- <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> --}}
    <h1 class="brand-text font-weight-light">webwide IT</h1 >

  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    @include('layouts._header')

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('layouts._sidebar')
  
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('layouts._footer')
  </footer>
</div>
<!-- ./wrapper -->
@include('layouts._script')
@yield('backend-page-script') 
</body>
</html>
