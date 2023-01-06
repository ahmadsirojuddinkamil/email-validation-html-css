<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>website</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span data-feather="layout"></span>
                    Halaman Web
                </a>
            </li>

            @can('admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/banner*') ? 'active' : '' }}" href="/dashboard/banner">
                        <span data-feather="shopping-cart"></span>
                        Banner
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categorie*') ? 'active' : '' }}"
                        href="/dashboard/categorie">
                        <span data-feather="package"></span>
                        Categorie
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/product*') ? 'active' : '' }}" href="/dashboard/product">
                        <span data-feather="bar-chart-2"></span>
                        Product
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/blog*') ? 'active' : '' }}" href="/dashboard/blog">
                        <span data-feather="layers"></span>
                        Blog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/promo*') ? 'active' : '' }}" href="/dashboard/promo">
                        <span data-feather="layers"></span>
                        Promo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/jumbotron*') ? 'active' : '' }}"
                        href="/dashboard/jumbotron">
                        <span data-feather="layers"></span>
                        Jumbotron
                    </a>
                </li>
            @endcan

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>User</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
                    <span data-feather="user"></span>
                    Edit Profile
                </a>
            </li>

        </ul>
    </div>
</nav>
