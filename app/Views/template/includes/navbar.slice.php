<!-- Put your navbar here! -->

<!-- Navbar -->

<nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background-color: #6EC1E4;">
   <div class="container">
      <a href="javascript:void(0)" class="navbar-brand">
         <img src="<?php echo base_url(); ?>/public/assets/img/upp-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-bold d-none d-lg-inline">U PICK A PALLET LLC</span>
         <span class="brand-text font-weight-bold text-sm d-inline d-lg-none">U PICK A PALLET LLC</span>
      </a>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
         <form class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
               <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
               <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>

      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
         <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
               <i class="fas fa-envelope"></i>
               <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
               <a href="#" class="dropdown-item">
                  <div class="media">
                     <img data-cfsrc="<?php echo base_url(); ?>/public/assets/AdminLTE/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" style="display:none;visibility:hidden;"><noscript><img src="<?php echo base_url(); ?>/public/assets/AdminLTE/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle"></noscript>
                     <div class="media-body">
                        <h3 class="dropdown-item-title">
                           Brad Diesel
                           <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                     </div>
                  </div>
               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">

                  <div class="media">
                     <img data-cfsrc="<?php echo base_url(); ?>/public/assets/AdminLTE/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" style="display:none;visibility:hidden;"><noscript><img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"></noscript>
                     <div class="media-body">
                        <h3 class="dropdown-item-title">
                           John Pierce
                           <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                     </div>
                  </div>

               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">

                  <div class="media">
                     <img data-cfsrc="<?php echo base_url(); ?>/public/assets/AdminLTE/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" style="display:none;visibility:hidden;"><noscript><img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"></noscript>
                     <div class="media-body">
                        <h3 class="dropdown-item-title">
                           Nora Silvester
                           <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                     </div>
                  </div>

               </a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
               <i class="fas fa-shopping-cart"></i>
               <span class="badge badge-danger navbar-badge">0</span>
            </a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-user"></i>
           </a>
           <div class="dropdown-menu dropdown-menu-right">
             <span class="dropdown-header">
               <i class="far fa-user-circle mr-2"></i>
               <span id="lbl_thisUserCompleteName2"></span>
             </span>
             <!-- <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-envelope mr-2"></i> 4 new messages
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-users mr-2"></i> 8 friend requests
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-file mr-2"></i> 3 new reports
             </a> -->
             <div class="dropdown-divider"></div>
             <a href="<?php echo base_url(); ?>/customer-logout" class="dropdown-item dropdown-footer">
               <i class="fa fa-lock mr-2"></i>Log out
             </a>
           </div>
         </li>
      </ul>
   </div>
</nav>

<!-- /.navbar -->

