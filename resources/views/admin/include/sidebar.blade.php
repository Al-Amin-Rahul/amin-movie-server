<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Manage
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Movie Category</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route("admin.category.create") }}"><i class="fas fa-fw fa-plus"></i> Add Category</a>
        <a class="collapse-item" href="{{ route("admin.category.index") }}"><i class="fas fa-fw fa-wrench"></i> Manage Category</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#posts" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Movie</span>
    </a>
    <div id="posts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route("admin.movie.create") }}"><i class="fas fa-fw fa-plus"></i> Add Movie</a>
        <a class="collapse-item" href="{{ route("admin.movie.index") }}"><i class="fas fa-fw fa-wrench"></i> Manage Movie</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#software" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Software</span>
    </a>
    <div id="software" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route("admin.software.create") }}"><i class="fas fa-fw fa-plus"></i> Add Software</a>
        <a class="collapse-item" href="{{ route("admin.software.index") }}"><i class="fas fa-fw fa-wrench"></i> Manage Software</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#games" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Games</span>
    </a>
    <div id="games" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route("admin.games.create") }}"><i class="fas fa-fw fa-plus"></i> Add Games</a>
        <a class="collapse-item" href="{{ route("admin.games.index") }}"><i class="fas fa-fw fa-wrench"></i> Manage Games</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tv" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Tv Link</span>
    </a>
    <div id="tv" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route("admin.tv.create") }}"><i class="fas fa-fw fa-plus"></i> Add Tv Link</a>
        <a class="collapse-item" href="{{ route("admin.tv.index") }}"><i class="fas fa-fw fa-wrench"></i> Manage Tv Link</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ftp" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Ftp Link</span>
    </a>
    <div id="ftp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route("admin.ftp.create") }}"><i class="fas fa-fw fa-plus"></i> Add FTP Link</a>
        <a class="collapse-item" href="{{ route("admin.ftp.index") }}"><i class="fas fa-fw fa-wrench"></i> Manage FTP Link</a>
        </div>
    </div>
</li>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#slider" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-image"></i>
    <span>Image Slider</span>
</a>
<div id="slider" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
    <a class="collapse-item" href="{{route("admin.slider.create")}}"><i class="fas fa-fw fa-plus"></i> Add Slider Image</a>
    <a class="collapse-item" href="{{route("admin.slider.index")}}"><i class="fas fa-fw fa-wrench"></i> Manage Slider Image</a>
    </div>
</div>
</li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->