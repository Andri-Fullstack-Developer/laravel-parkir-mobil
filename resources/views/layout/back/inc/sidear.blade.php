 <!-- Silender -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="mdi mdi-grid-large menu-icon"></i>
                 <span class="z-50 text-primary">Dashboard</span>
             </a>
         </li>
         <li class="nav-item nav-category">UI Elements</li>
         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                 aria-controls="ui-basic">
                 <i class="menu-icon mdi mdi-floor-plan"></i>
                 <span class="menu-title">UI Elements</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-basic">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="#">Buttons</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Dropdowns</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Typography</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item nav-category">Forms and Datas</li>
         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                 aria-controls="form-elements">
                 <i class="menu-icon mdi mdi-card-text-outline"></i>
                 <span class="menu-title">Form elements</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="form-elements">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="#">Basic Elements</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                 <i class="menu-icon mdi mdi-chart-line"></i>
                 <span class="menu-title">Charts</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="charts">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="3">ChartJs</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                 <i class="menu-icon mdi mdi-table"></i>
                 <span class="menu-title">Tables</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="tables">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"><a class="nav-link" href="3">Basic table</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item nav-category">pages</li>
         <li class="nav-item">
             {{-- <a class="nav-link" href="{{ route('admin.logout') }}" aria-expanded="false" aria-controls="auth">
                 <i class="menu-icon mdi mdi-power"></i>
                 <span class="menu-title">{{ __('logout') }}</span>
             </a> --}}
         </li>
     </ul>
 </nav>
 <!-- Silender end -->
