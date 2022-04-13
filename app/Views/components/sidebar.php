<!-- Sidebar -->


<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">KONI SUMSEL <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= Base_url(); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<?php if(in_groups('admin')) :?>
<li class="nav-item">
    <a class="nav-link" href="<?= Base_url(); ?>">
     <i class=" fas fa-thin fa-user"></i>
        <span>Profil</span></a>
</li>
<?php endif;?>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading text-white">
    Data
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="index.html" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-light fa-users "></i> 
        <span>Data Kepengurusan Koni</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data KONI:</h6>
            <a class="collapse-item" href="buttons.html">Data</a>


            <a class="collapse-item" href="cards.html">Edit Data</a>
            
        </div>
    </div>
    
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-light fa-users "></i>   
        <span>Data Atlet</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Atlet:</h6>
            <a class="collapse-item" href="utilities-color.html">Atlet</a>
            <a class="collapse-item" href="utilities-border.html">Cabang Olahraga</a>
            
        </div>
    </div>

    <li class="nav-item">
    <a class="nav-link" href="<?= Base_url(); ?>/home/dokumenadmin">
    <i class=" fas fa-solid fa-file"></i>
        <span>Dokumen</span></a>


</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= Base_url(); ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Table Data</span></a>
</li>
<?php if(in_groups('admin')) :?>
 <!-- Nav Item - Tables -->
 <li class="nav-item">
    <a class="nav-link" href="tables.html">
         <i class=" fas fa-solid fa-user-plus"></i>
        <span>Tambahkan Akun</span></a>
</li>
<?php endif;?>

<li class="nav-item">
    <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
    <span>Logout</span>
</a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
