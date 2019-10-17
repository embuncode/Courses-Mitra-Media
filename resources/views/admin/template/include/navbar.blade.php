<!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
         <div class="pull-left image">
           <img src="{{ url ('admin/dist/img/avatar0.png') }}" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
           <p>Administrator</p>
           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="header">MAIN NAVIGATION</li>

         <li>
           <a href="/home" data-render="true">
             <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           </a>
         </li>
         
         <li class="treeview">
            <a href="#">
               <i class="fa fa-globe"></i>
               <span>Berita</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="/berita"><i class="fa fa-circle-o"></i> List Berita</a></li>
               <li><a href="/kategori"><i class="fa fa-circle-o"></i> List Kategori</a></li>
            </ul>
         </li>

         <li class="treeview">
            <a href="#">
               <i class="fa fa-laptop"></i>
               <span>Master Data</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="/siswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
               <li><a href="/pengajar"><i class="fa fa-circle-o"></i> Pengajar</a></li>
               <li><a href="/alumni"><i class="fa fa-circle-o"></i> Alumni</a></li>
               <li><a href="/kegiatan"><i class="fa fa-circle-o"></i> Kegiatan</a></li>
            </ul>
         </li>

         <li>
            <a href="/paket_kursus" data-render="true">
               <i class="fa fa-suitcase"></i> <span>Paket Kursus</span>
            </a>
         </li>

         <li>
            <a href="/kerjasama" data-render="true">
               <i class="fa fa-handshake-o"></i> <span>Kerja Sama</span>
            </a>
         </li>

         <li>
            <a href="/pengaturan" data-render="true">
               <i class="fa fa-cog"></i> <span>Pengaturan</span>
            </a>
         </li>

        <li>
          <a href="/login" data-render="true">
            <i class="fa fa-sign-in"></i> <span>Logout</span>
          </a>
        </li>

      </ul>
   </section>
   <!-- /.sidebar -->