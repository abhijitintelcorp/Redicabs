     <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="index3.html" class="brand-link">
             <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
             <span class="brand-text font-weight-light">RediCab</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
             <!-- Sidebar user panel (optional) -->

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
                     <li class="nav-item ">
                         <a href="./index.php" class="nav-link active">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                         <!-- <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="./index.php" class="nav-link active">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Dashboard </p>
                                 </a>
                             </li>
                         </ul> -->
                     </li>
                     <!-- <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-tree"></i>
                             <p>
                                 Category
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="pages/category.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Add Category</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="pages/managecategory.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>ManageCategory</p>
                                 </a>
                             </li>
                         </ul>
                     </li> -->

                     <!-- <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-tree"></i>
                             <p>
                                 SubCategory
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="pages/subcategory.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Add SubCategory</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="pages/managesubcategory.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>ManageSubCategory</p>
                                 </a>
                             </li>
                         </ul>
                     </li> -->
                     <!-- <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="fa fa-car"></i>
                             <p>
                                 Vehicle Management
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="pages/postvehicle.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>PostAVehicle</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="pages/managevehicle.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>ManageVehicles</p>
                                 </a>
                             </li>
                         </ul>
                     </li> -->

                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="fa fa-user"></i>
                             <p>
                                 Owner
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="owner.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Add Owner</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="manageowner.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>ManageOwner</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="fa fa-user"></i>
                             <p>
                                 Booking
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="new-bookings.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>NewBooking</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="quick-bookings.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>QuickBooking</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="confirmed-bookings.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>confirmed</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="canceled-bookings.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Cancelled</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="delayed-bookings.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Delayed Pickup</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="fas fa-comment"></i>
                             <p>
                                 FeedBack
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="pages/add_feedback.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>AddFeedback</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="pages/manage_feedback.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>ManageFeedback</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="pages/testimonials.php" class="nav-link">
                             <i class="fa fa-table"></i>
                             <p>ManageTestimonials</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/manage-conactusquery.php" class="nav-link">
                             <i class="fa fa-desktop"></i>
                             <p>ManageContactusQuery</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/reg-users.php" class="nav-link">
                             <i class="fa fa-users"></i>
                             <p>RegUser</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/manage-pages.php" class="nav-link">
                             <i class="fa-solid fa-file"></i>
                             <p>ManagePages</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="update-contactinfo.php" class="nav-link">
                             <i class="fa fa-files-o"></i>
                             <p>UpdateContactInfo</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="../update-contactinfo.php" class="nav-link">
                             <i class="fa fa-table"></i>
                             <p>ManageSubscriber</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-book"></i>
                             <p>
                                 Pages
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">


                             <li class="nav-item">
                                 <a href="pages/examples/projects.html" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Projects</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="pages/examples/project-add.html" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Project Add</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="pages/examples/project-edit.html" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Project Edit</p>
                                 </a>
                             </li>


                             <li class="nav-item">
                                 <a href="pages/examples/contact-us.php" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Contact us</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon far fa-plus-square"></i>
                             <p>
                                 Extras
                                 <i class="fas fa-angle-left right"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>
                                         Login & Register
                                         <i class="fas fa-angle-left right"></i>
                                     </p>
                                 </a>
                                 <ul class="nav nav-treeview">
                                     <li class="nav-item">
                                         <a href="pages/examples/login.php" class="nav-link">
                                             <i class="far fa-circle nav-icon"></i>
                                             <p>Login </p>
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="pages/examples/register.php" class="nav-link">
                                             <i class="far fa-circle nav-icon"></i>
                                             <p>Register </p>
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="pages/examples/forgot-password.php" class="nav-link">
                                             <i class="far fa-circle nav-icon"></i>
                                             <p>Forgot Password </p>
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="pages/examples/recover-password.php" class="nav-link">
                                             <i class="far fa-circle nav-icon"></i>
                                             <p>Recover Password </p>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </nav>
             <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
     </aside>

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container-fluid">

             </div><!-- /.container-fluid -->

         </div>