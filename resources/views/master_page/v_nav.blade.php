<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
                <li class="{{request()->is('/')? 'active':''}}"><a href="/">  <i class="fa fa-home"></i> <span>Home</span>
        @if (auth()->user()->level == 1)
                <li class="{{request()->is('guru')? 'active':''}}"><a href="/guru">  <i class="fa fa-dashboard"></i> <span>Guru</span>
                <li class="{{request()->is('siswa')? 'active':''}}"><a href="/siswa">  <i class="fa fa-dashboard"></i> <span>Siswa</span>
                <li class="{{request()->is('penjualan')? 'active':''}}"><a href="/penjualan"><i class="fa fa-circle-o"></i>Penjualan</a></li>
        @elseif(auth()->user()->level == 2)
                <li class="{{request()->is('user')? 'active':''}}"><a href="/user">  <i class="fa fa-dashboard"></i> <span>User</span>
        @else   
                <li class="{{request()->is('pelanggan')? 'active':''}}"><a href="/pelanggan">  <i class="fa fa-dashboard"></i> <span>Pelanggan</span>
        @endif

        </li>             
</ul>