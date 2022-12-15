<aside class="main-sidebar sidebar-blue-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    <img src="{{ asset('AdminLte/dist/img/kuning-removebg-preview.png')}}" height="100" width="95">
    <font color="white">
      <span class="brand-text font-weight-light">Sidawai Nasngan</span>
      </font> 
    </a>
    <head>
      <style media="screen">
        body{
          background-color: #6A2929;
        }
        </style>
        </head>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><font color="yellow">{{ Auth::user()->name }} <br><i class="fa fa-circle text-success"></i> Online</font></a>  
        </div>
      </div>
     
      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               @if(Auth::user()->level == 'admin')  
               <li class="nav-item ">
            <a href="{{ route('data-jenjab') }}" class="nav-link ">
            <i class="fa fa-bars"></i>
              <p><font color="white">
                Jenis Jabatan
                <i class=""></i>
              </font> </p>
            </a>
            </li>

            <li class="nav-item ">
            <a href="{{ route('data-jabatan') }}" class="nav-link ">
            <i class="fa fa-th-list"></i>
              <p><font color="white">
                Nama Jabatan
                <i class=""></i>
                </font></p>
            </a>
            </li>
            @endif

          

            <li class="nav-item ">
            <a href="{{ route('data-biodata') }}" class="nav-link ">
            <i class="fa fa-address-card"></i>
              <p><font color="white">
                Biodata Pegawai
                <i class=""></i>
                </font></p>
            </a>
            </li>

           
            <li class="nav-item ">
            <a href="{{ route('data-diklat') }}" class="nav-link ">
            <i class="fa fa-file"></i>
              <p><font color="white">
                Diklat Pegawai
                <i class=""></i>
                </font></p>
            </a>
            </li>

           <!--  <li class="nav-item">
            <a href="#" class="nav-link ">       
            <i class="fas fa-chart-line"></i>
              <p>
                Kenaikan Gaji Berkala
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-gaji') }}" class="nav-link ">
                <i class="fa fa-newspaper"></i>
                  <p>Data KGB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link ">
                <i class="fa fa-file-pdf"></i>
                  <p>SK KGB</p>
                </a>
              </li>
            </ul>
          </li>-->

          <li class="nav-item ">
            <a href="{{ route('data-gaji') }}" class="nav-link ">
            <i class="fas fa-chart-line"></i>
              <p><font color="white">
                Kenaikan Gaji Berkala
                <i class=""></i>
                </font></p>
            </a>
            </li>


            <li class="nav-item ">
            <a href="{{ route('data-cuti') }}" class="nav-link ">
            <i class="fa fa-calendar"></i>
              <p><font color="white">
              Data Cuti Pegawai
                <i class=""></i>
                </font></p>
            </a>
            </li>
          

          <li class="nav-item">
           <a href="{{ route('logout') }}" class="nav-link">
           <i class="fas fa-sign-out-alt"></i>
             <p><font color="white">
               Logout
               </font></p>
           </a>
         </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>