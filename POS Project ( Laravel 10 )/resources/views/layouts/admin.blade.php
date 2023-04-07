
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Hisekawa Store</title>
      
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="assets/css/main/app.css" />
      <link rel="stylesheet" href="assets/css/main/app-dark.css" />
      <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
      <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />
      <link rel="stylesheet" href="assets/css/pages/fontawesome.css" />
      <link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
      <link rel="stylesheet" href="assets/css/pages/datatables.css" />
      @stack('css')
    </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--system-uicons"
                  width="20"
                  height="20"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 21 21"
                >
                  <g
                    fill="none"
                    fill-rule="evenodd"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                      opacity=".3"
                    ></path>
                    <g transform="translate(-210 -1)">
                      <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                      <circle cx="220.5" cy="11.5" r="4"></circle>
                      <path
                        d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"
                      ></path>
                    </g>
                  </g>
                </svg>
                <div class="form-check form-switch fs-6">
                  <input
                    class="form-check-input me-0"
                    type="checkbox"
                    id="toggle-dark"
                    style="cursor: pointer"
                  />
                  <label class="form-check-label"></label>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--mdi"
                  width="20"
                  height="20"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"
                  ></path>
                </svg>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item">
                <a href="dashboard" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Master</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="{{ route('member.index')}}">Member</a>
                  </li>
                  <li class="submenu-item">
                    <a href="{{ route('kategori.index')}}">Kategori</a>
                  </li>
                  <li class="submenu-item">
                    <a href="{{ route('produk.index')}}">Produk</a>
                  </li>
                  <li class="submenu-item">
                    <a href="{{ route('supplier.index')}}">Supplier</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-basket-fill"></i>
                  <span>Transaksi</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="{{ route('pengeluaran.index')}}">Pengeluaran</a>
                  </li>
                  <li class="submenu-item">
                    <a href="{{ route('pembelian.index')}}">Daftar Pembelian</a>
                  </li>
                  <li class="submenu-item">
                    <a href="{{ route('penjualan.index')}}">Daftar Penjualan</a>
                  </li>

                  <li class="submenu-item">
                    <a href="{{ route('transaksi.index')}}">Transaksi Lama</a>
                  </li>

                  <li class="submenu-item">
                    <a href="{{ route('transaksi.baru')}}">Transaksi Baru</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Report</span>
                </a>
                <ul class="submenu ">
                <li class="submenu-item">
                    <a href="{{ route('laporan.index')}}">Laporan</a>
                </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="{{ route('user.index')}}" class="sidebar-link">
                  <i class="bi bi-people"></i>
                  <span>User Kasir</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="{{ route('setting.index')}}" class="sidebar-link">
                  <i class="bi bi-gear"></i>
                  <span> Pengaturan </span>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>

    
      <div id="main" class="layout-navbar navbar-fixed">
        <header class="mb-3">
          <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
              <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
              </a>

              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                  <li class="nav-item dropdown me-1">
                    <a
                      class="nav-link active dropdown-toggle text-gray-600"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="bi bi-envelope bi-sub fs-4"></i>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <li>
                        <h6 class="dropdown-header">Mail</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">No new mail</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown me-3">
                    <a
                      class="nav-link active dropdown-toggle text-gray-600"
                      href="#"
                      data-bs-toggle="dropdown"
                      data-bs-display="static"
                      aria-expanded="false"
                    >
                      <i class="bi bi-bell bi-sub fs-4"></i>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end notification-dropdown"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <li class="dropdown-header">
                        <h6>Notifications</h6>
                      </li>
                      <li class="dropdown-item notification-item">
                        <a class="d-flex align-items-center" href="#">
                          <div class="notification-icon bg-primary">
                            <i class="bi bi-cart-check"></i>
                          </div>
                          <div class="notification-text ms-4">
                            <p class="notification-title font-bold">
                              Successfully check out
                            </p>
                            <p class="notification-subtitle font-thin text-sm">
                              Order ID #256
                            </p>
                          </div>
                        </a>
                      </li>
                      <li class="dropdown-item notification-item">
                        <a class="d-flex align-items-center" href="#">
                          <div class="notification-icon bg-success">
                            <i class="bi bi-file-earmark-check"></i>
                          </div>
                          <div class="notification-text ms-4">
                            <p class="notification-title font-bold">
                              Homework submitted
                            </p>
                            <p class="notification-subtitle font-thin text-sm">
                              Algebra math homework
                            </p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <p class="text-center py-2 mb-0">
                          <a href="#">See all notification</a>
                        </p>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="dropdown">
                  <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                      <div class="user-name text-end me-3">
                        <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                        <p class="mb-0 text-sm text-gray-600">Hisekawa Store</p>
                      </div>
                      <div class="user-img d-flex align-items-center">
                        <div class="avatar avatar-md">
                          <img src="{{ asset('assets\img\user.png')}}" class="img-circle img-profil" alt="User Image" />
                        </div>
                      </div>
                    </div>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton"
                    style="min-width: 11rem"
                  >
                    <li>
                      <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}</h6>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('user.profil')}}"
                        ><i class="icon-mid bi bi-gear me-2"></i> Edit Profil </a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
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
              </div>
            </div>
          </nav>
        </header>
        <div id="main-content">
          <div class="page-heading">
            @yield('content')
          </div>
        </div>
      </div>
    </div>


    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <!--jquery-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/jquery-ui/jquery-ui.min.js"></script>

    <!--datatable-->
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>

    <!-- Validator  -->

    <script src="assets/js/validator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" 
    integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer"></script>

    @stack('scripts')
</body>
</html>
