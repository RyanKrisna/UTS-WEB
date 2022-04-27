<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active'  : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()->is('produk') ? 'active'  : ''}}"><a href="/produk"><i class="fa fa-dropbox"></i> <span>Produk</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="{{ request()->is('baju & penjahit') ? 'active' : ''}} fa  fa-truck"></i> <span>Pemesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/penjahit"><i class="fa fa-circle-o"></i>Penjahit</a></li>
            <li><a href="/baju"><i class="fa fa-circle-o"></i>Baju</a></li>
          </ul>
          <li class="{{ request()->is('keranjang') ? 'active' : ''}}"><a href="/keranjang"><i class="fa fa-cart-arrow-down"></i> <span>Keranjang</span></a></li>
          <li class="{{ request()->is('keranjang') ? 'active' : ''}}"><a href="/data_penjahit"><i class="fa fa-cart-arrow-down"></i> <span>Data Penjahit</span></a></li>
    </li>
</ul>