<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
        <li class="{{request()->is('/')? 'active':''}}"><a href="/">  <i class="fa fa-home"></i> <span>Home</span>
        <li class="{{request()->is('guru')? 'active':''}}"><a href="/guru">  <i class="fa fa-dashboard"></i> <span>Guru</span>
        <li class="{{request()->is('siswa')? 'active':''}}"><a href="/siswa">  <i class="fa fa-dashboard"></i> <span>Siswa</span>
        <li class="{{request()->is('user')? 'active':''}}"><a href="/user">  <i class="fa fa-dashboard"></i> <span>User</span>
        <li class="{{request()->is('penjualan')? 'active':''}}"><a href="/penjualan"><i class="fa fa-circle-o"></i>Penjualan</a></li>
        </li>        

        <ul class="treeview-menu">
            <li><a href="/penjualan"><i class="fa fa-circle-o"></i> Penjualan</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>       
</ul>