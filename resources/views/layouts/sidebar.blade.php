<div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Coffee-House
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url('master')}}">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('kategori')}}">
                        <i class="ti-harddrives"></i>
                        <p>Kategori Produk</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('produk')}}">
                        <i class="ti-package"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('pelanggan')}}">
                        <i class="ti-shopping-cart-full"></i>
                        <p>Pembelian</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('pelanggan')}}">
                        <i class="ti-user"></i>
                        <p>Pelanggan</p>
                    </a>
                </li>
                <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ti-close"></i>
                        <p>Logout</p>
                </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>