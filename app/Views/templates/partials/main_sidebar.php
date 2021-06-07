<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary nav-child-indent elevation-4">
   <!-- Brand Logo -->
   <a href="<?= site_url() ?>" class="brand-link">
      <img src="<?= base_url("assets/static") ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Naucera CRM</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="<?= base_url("assets/static") ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">User</a>
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
               <a href="<?= site_url('home/dashboard') ?>" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/employeeList') ?>" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Employee List</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/workList') ?>" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>Work List</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>Stock<i class="right fas fa-angle-left"></i></p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= site_url('home/dailyStockUpdate') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Daily Stock Update</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-balance-scale"></i>
                  <p>Sales Target Report<i class="right fas fa-angle-left"></i></p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= site_url('home/targetSaleCTC') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>CTC</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= site_url('home/targetSalePremix') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Premix</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/staffWiseReports') ?>" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>Staff Wise Reports</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/leadReports') ?>" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>Lead Reports</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/masterReports') ?>" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>Master Reports</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/complaints') ?>" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>Complaints<i class="right fas fa-angle-left"></i></p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= site_url('home/VMComplaints') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Vending Machines</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= site_url('home/otherComplaints') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Other Products</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="<?= site_url('home/nauceraGita') ?>" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>Naucera Gita</p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>