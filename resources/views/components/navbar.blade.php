<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Dropdown - Messages -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
    </div>
    </li>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello SUSII</span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="pengguna.html">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Kelola User
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">

                        <button type="submit">Logout</button>
                </form>
                </i>

            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->
