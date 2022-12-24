 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">ADMIN DASHBOARD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} {{ Auth::user()->pname }}</a>
        </div>
      </div>

    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{ url('admin/dashboard/')}}" class="nav-link {{ 'admin/dashboard/' == request() -> path() ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
        
           <li class="nav-header">ADMINISTRATION</li>
           <li class="nav-item">
              <a href="{{ route('admindashboardusers') }}" class="nav-link  {{ Request::routeIs('admindashboardusers') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
         
        
          <li class="nav-header">ENTREPRISE PAR UTILISATEURS</li>  
          <li class="nav-item">
            <a href="{{ route('entreprisesadmin')}}" class="nav-link {{ Request::routeIs('entreprisesadmin') ? 'active' : '' }}">
              <i class="fas fa-circle nav-icon"></i>
              <p>Entreprises </p>
            </a>
            
          </li>
          <li class="nav-item">
          <a href="{{ route('ResponsableController')}}" class="nav-link {{ Request::routeIs('ResponsableController') ? 'active' : ''}}">
            
              <i class="fas fa-circle nav-icon"></i>
              <p>Responsables</p>
            </a>
            
          </li>

          <li class="nav-header">ENTREPRISE PAR ADMIN</li>  

          <li class="nav-item">
          <a href="{{ route('addaddentreprise')}}" class="nav-link {{ Request::routeIs('addaddentreprise') ? 'active' : ''}}">
            
              <i class="fas fa-circle nav-icon"></i>
              <p>Ajouter entreprise</p>
            </a>
            
          </li>
          <li class="nav-item">
          <a href="{{ route('entreprisesbyadmin')}}" class="nav-link {{ Request::routeIs('entreprisesbyadmin') ? 'active' : ''}}">
            
              <i class="fas fa-circle nav-icon"></i>
              <p> Entreprises</p>
            </a>
            
          </li>

          <li class="nav-header">LABORATOIRES</li>
          <li class="nav-item">
          <a href="{{ route('laboratoiresadmin')}}" class="nav-link {{ Request::routeIs('laboratoiresadmin') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Laboratoires</p>

              
            </a>
          </li>
          <li class="nav-header">PNR 2021</li>
           <li class="nav-item">
           <a href="{{ route('pnr2021')}}" class="nav-link {{ Request::routeIs('pnr2021') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('addpnr2021')}}" class="nav-link {{ Request::routeIs('addpnr2021') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>