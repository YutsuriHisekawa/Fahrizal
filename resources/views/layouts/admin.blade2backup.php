
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link
      rel="shortcut icon"
      href="assets/images/logo/favicon.svg"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="assets/images/logo/favicon.png"
      type="image/png"
    />

    <link rel="stylesheet" href="assets/css/shared/iconly.css" />
  </head>

  <body>
    <div id="app">
      <div id="main" class="layout-horizontal">
        <header class="mb-5">
          <div class="header-top">
            <div class="container">
            <div class="form-check form-switch fs-6">
                  <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                  <label class="form-check-label"></label>
                </div>
              <div class="logo">
                <a href="index.html"></a>
              </div>
              <div class="header-top-right">
                <div class="dropdown">
                  <a
                    href="#"
                    id="topbarUserDropdown"
                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="avatar avatar-md2">
                      <img src="assets/images/faces/1.jpg" alt="Avatar" />
                    </div>
                    <div class="text">
                      <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                    </div>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end shadow-lg"
                    aria-labelledby="topbarUserDropdown"
                  >
                    <li><a class="dropdown-item" href="#">My Account</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault(); 
                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                  </ul>
                </div>

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                  <i class="bi bi-justify fs-3"></i>
                </a>
              </div>
            </div>
          </div>
          <nav class="main-navbar">
            <div class="container">
              <ul>
                <li class="menu-item">
                  <a href="home" class="menu-link">
                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                  </a>
                </li>

                <li class="menu-item has-sub">
                  <a href="#" class="menu-link">
                    <span><i class="bi bi-person-badge-fill"></i>Master</span>
                  </a>
                  <div class="submenu">


                    <div class="submenu-group-wrapper">
                      <ul class="submenu-group">
                        <li class="submenu-item">
                          <a href="component-alert.html" class="submenu-link"
                            >Member</a
                          >
                        </li>

                        <li class="submenu-item">
                          <a href="component-badge.html" class="submenu-link"
                            >Kategori</a
                          >
                        </li>

                        <li class="submenu-item">
                          <a
                            href="component-breadcrumb.html"
                            class="submenu-link"
                            >Produk</a
                          >
                        </li>

                        <li class="submenu-item">
                          <a href="component-button.html" class="submenu-link"
                            >Supplier</a
                          >
                        </li>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <li class="menu-item active has-sub">
                  <a href="#" class="menu-link">
                    <span><i class="bi bi-basket-fill"></i> Transaksi </span>
                  </a>
                  <div class="submenu">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                      <ul class="submenu-group">
                        <li class="submenu-item">
                          <a href="layout-default.html" class="submenu-link"
                            >Pengeluaran</a
                          >
                        </li>

                        <li class="submenu-item">
                          <a
                            href="layout-vertical-1-column.html"
                            class="submenu-link"
                            >Daftar Pembelian</a
                          >
                        </li>

                        <li class="submenu-item">
                          <a
                            href="layout-vertical-navbar.html"
                            class="submenu-link"
                            >Transaksi Pembelian</a
                          >
                        </li>

                        <li class="submenu-item">
                          <a href="layout-rtl.html" class="submenu-link"
                            >Daftar Penjualan</a
                          >
                        </li>

                        <li class="submenu-item active">
                          <a href="layout-horizontal.html" class="submenu-link"
                            >Transaksi Penjualan</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <li class="menu-item has-sub">
                  <a href="#" class="menu-link">
                    <span
                      ><i class="bi bi-file-earmark-medical-fill"></i>Report</span>
                  </a>
                  <div class="submenu">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                      <ul class="submenu-group">
                        <li class="submenu-item has-sub">
                          <a href="#">Laporan</a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      @yield('content')
     
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
  </body>
</html>
