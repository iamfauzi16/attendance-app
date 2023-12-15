<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Attendance Blibli</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Attendance
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Attendance Menu</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        
          <div class="bg-white py-2 collapse-inner rounded">
          
              <h6 class="collapse-header">Attendance</h6>
              <a class="collapse-item" href="{{ route('attendance.create') }}">Check In</a>
              {{-- <a class="collapse-item" href="{{ route('attendance.out') }}">Check Out</a> --}}


              <hr class="sidebar-divider-dark"> 
              <h6 class="collapse-header">Attendance Menu</h6>
              <a class="collapse-item" href="{{ route('attendance.index') }}">Attendance Report</a>
              <a class="collapse-item" href="{{ route('shift-attendance.index') }}">Attendance Shift</a>
              <a class="collapse-item" href="{{ route('status-attendance.index') }}">Attendance Status</a>
              

          </div>
      </div>
  </li>

  
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Management Account
  </div>


  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Account Setup</span>
      </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('management-app.logo.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Setting Icon</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>