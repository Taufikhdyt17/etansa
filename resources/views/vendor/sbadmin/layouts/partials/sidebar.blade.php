  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="index.html">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Admin
</div>

<!-- Role -->
<li class="nav-item">
  <a class="nav-link" href="{{url('admin/role')}}">
    <i class="fas fa-fw fa-user-lock"></i>
    <span>Role</span></a>
</li>

<!-- Manage User -->
<li class="nav-item">
  <a class="nav-link" href="{{url('admin/manageuser')}}">
    <i class="fas fa-fw fa-user-cog"></i>
    <span>Manage User</span></a>
</li>

<!-- Pejabat -->
<li class="nav-item">
  <a class="nav-link" href="{{url('admin/pejabat')}}">
    <i class="fas fa-fw fa-user-tie"></i>
    <span>Pejabat</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  User
</div>

<!-- Information -->
<li class="nav-item">
  <a class="nav-link" href="{{url('user/information')}}">
    <i class="fas fa-fw fa-user"></i>
    <span>Information</span></a>
</li>

<!-- Task -->
<li class="nav-item">
  <a class="nav-link" href="{{url('surat/task')}}">
    <i class="fas fa-fw fa-tasks"></i>
    <span>Task</span></a>
</li>

<!-- Archive -->
<li class="nav-item">
  <a class="nav-link" href="{{url('surat/archive')}}">
    <i class="fas fa-fw fa-archive"></i>
    <span>Archive</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->