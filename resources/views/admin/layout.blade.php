<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project SA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css")}}>
  <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css")}}>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"  style="background-color:rgb(33, 115, 174)">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color:rgb(255, 255, 255)"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/dashboard" class="nav-link" style="color:rgb(255, 255, 255)">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a
            @click="loading()"
            href="https://t.me/chamroeun_BLUE" class="nav-link" style="color:rgb(255, 255, 255)">
            Contact
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="mr-3 img-size-50 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="mr-1 far fa-clock"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="mr-3 img-size-50 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="mr-1 far fa-clock"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="mr-3 img-size-50 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="mr-1 far fa-clock"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" style="color:rgb(255, 255, 255)">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="mr-2 fas fa-envelope"></i> 1 new messages
            <span class="float-right text-sm text-muted">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="color:rgb(255, 255, 255)">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="color:rgb(255, 255, 255)">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color:rgb(33, 115, 174)">
      <img src="{{asset('dist/img/AdminLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            <strong>Stock Control</strong>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/dashboard" class="d-block">ADMIN</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link {{$module == 'dashboard' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>
                   Dashboard
                  </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/admin/user" class="nav-link {{$module == 'user' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    User Management
                  </p>
                </a>
              </li>
              {{-- administrator --}}
          <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
            <a href="/admin/administrator" class="nav-link {{$mainmodule == 'admin' ? 'active' : ''}}">
              <i class="fas fa-bars"></i>
              <p>
                Administrator
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/createuser" class="nav-link {{$module == 'createuser' ? 'active' : ''}}">
                    <i class="fas fa-user"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/company" class="nav-link {{$module == 'company' ? 'active' : ''}}">
                    <i class="far fa-question-circle"></i>
                  <p>Company Information</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/location" class="nav-link {{$module == 'location' ? 'active' : ''}}">
                    <i class="fas fa-compass"></i>
                  <p>Location</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/product" class="nav-link {{$module == 'product' ? 'active' : ''}}">
                    <i class="fab fa-product-hunt"></i>
                  <p>Product Line</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/unit" class="nav-link {{$module == 'unit' ? 'active' : ''}}">
                    <i class="fas fa-sort-amount-up-alt"></i>
                  <p>Unit of Measure</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/vendor" class="nav-link {{$module == 'vendor' ? 'active' : ''}}">
                    <i class="fas fa-share-alt"></i>
                  <p>Vendor</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/item" class="nav-link {{$module == 'item' ? 'active' : ''}}">
                    <i class="fas fa-suitcase"></i>
                  <p>Item Master</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/chageitem" class="nav-link {{$module == 'chageitem' ? 'active' : ''}}">
                    <i class="fas fa-exchange-alt"></i>
                  <p>Change Item Code</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/chagecode" class="nav-link {{$module == 'chagecode' ? 'active' : ''}}">
                    <i class="fab fa-stack-exchange"></i>
                  <p>Change Code</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/customer" class="nav-link {{$module == 'customer' ? 'active' : ''}}">
                    <i class="fas fa-handshake"></i>
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin' ? 'menu-open' : ''}}">
                <a href="/admin/payment" class="nav-link {{$module == 'payment' ? 'active' : ''}}">
                    <i class="fab fa-cc-apple-pay"></i>
                  <p>Payment Method</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Account Receivable --}}
          <li class="nav-item {{$mainmodule == 'admin1' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{$mainmodule == 'admin1' ? 'active' : ''}}">
                <i class="fab fa-stripe-s"></i>
              <p>
                Account Receivable
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{$mainmodule == 'admin1' ? 'menu-open' : ''}}">
                <a href="/admin/newqoute" class="nav-link {{$module == 'newqoute' ? 'active' : ''}}">
                    <i class="fas fa-user"></i>
                  <p>New Quote</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin1' ? 'menu-open' : ''}}">
                <a href="/admin/saleinvoice" class="nav-link {{$module == 'saleinvoice' ? 'active' : ''}}">
                    <i class="far fa-question-circle"></i>
                  <p>Sale Invoice</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin1' ? 'menu-open' : ''}}">
                <a href="/admin/creditmemo" class="nav-link {{$module == 'creditmemo' ? 'active' : ''}}">
                    <i class="fas fa-compass"></i>
                  <p>Sale Credit Memo</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin1' ? 'menu-open' : ''}}">
                <a href="/admin/receivepayment" class="nav-link {{$module == 'receivepayment' ? 'active' : ''}}">
                    <i class="fab fa-product-hunt"></i>
                  <p>Receive Payment</p>
                </a>
              </li>
              <li class="nav-item bg-success menu-open">
                <a href="" class="bg-danger nav-link {{$mainmodule == 'admin2' ? 'active' : ''}}">
                  <i class="fas fa-bars"></i>
                  <p>
                    Report
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item {{$mainmodule == 'admin1' ? 'menu-open' : ''}}">
                    <a href="/admin/rp-newqoute" class="nav-link {{$module == 'rp-newqoute' ? 'active' : ''}}">
                        <i class="fas fa-window-restore"></i>
                      <p>Quote Report</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin1' ? 'active' : ''}}">
                    <a href="/admin/invoice-register" class="nav-link {{$module == 'invoice-register' ? 'active' : ''}}">
                        <i class="fas fa-file-invoice-dollar"></i>
                      <p>Invoice Register</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin1' ? 'active' : ''}}">
                    <a href="/admin/customer-balance" class="nav-link {{$module == 'customer-balance' ? 'active' : ''}}">
                        <i class="fas fa-user-clock"></i>
                      <p>Customer Balance</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin1' ? 'active' : ''}}">
                    <a href="/admin/customer-list" class="nav-link {{$module == 'customer-list' ? 'active' : ''}}">
                        <i class="fas fa-server"></i>
                      <p>Customer List</p>
                    </a>
                  </li>
            </ul>
          </li>
        </ul>
        <!-- Inventory Control -->
        <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{$mainmodule == 'admin2' ? 'active' : ''}}">
                <i class="fas fa-layer-group"></i>
              <p>
                Inventory Control
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/resive-item" class="nav-link {{$module == 'resive-item' ? 'active' : ''}}">
                    <i class="fas fa-file-invoice"></i>
                  <p>Receive Item</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                <a href="/admin/issue-item" class="nav-link {{$module == 'issue-item' ? 'active' : ''}}">
                    <i class="far fa-id-card"></i>
                  <p>Issue Item</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                <a href="/admin/adjustment-item" class="nav-link {{$module == 'adjustment-item' ? 'active' : ''}}">
                    <i class="fas fa-sliders-h"></i>
                  <p>Adjustment Item</p>
                </a>
              </li>
              <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                <a href="/admin/adjustment-cost" class="nav-link {{$module == 'adjustment-cost' ? 'active' : ''}}">
                    <i class="fab fa-kickstarter"></i>
                  <p>Adjust Cost Value</p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="bg-danger nav-link active1">
                  <i class="fas fa-bars"></i>
                  <p>
                    Report
                  </p>
                </a>
                <ul class="nav nav-treeview bg-success">
                  <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                    <a href="/admin/item-list" class="nav-link {{$module == 'item-list' ? 'active' : ''}}">
                        <i class="fas fa-list-ul"></i>
                      <p>Item List</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                    <a href="/admin/resive-report" class="nav-link {{$module == 'resive-report' ? 'active' : ''}}">
                        <i class="fas fa-file-invoice"></i>
                      <p>Receive Report</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                    <a href="/admin/rp-issueitem" class="nav-link {{$module == 'rp-issueitem' ? 'active' : ''}}">
                        <i class="far fa-id-card"></i>
                      <p>Issue Item</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                    <a href="/admin/vendor-list" class="nav-link {{$module == 'vendor-list' ? 'active' : ''}}">
                        <i class="fas fa-stream"></i>
                      <p>Vendor List</p>
                    </a>
                  </li>
                  <li class="nav-item {{$mainmodule == 'admin2' ? 'menu-open' : ''}}">
                    <a href="/admin/stock-movement" class="nav-link {{$module == 'stock-movement' ? 'active' : ''}}">
                        <i class="fas fa-warehouse"></i>
                      <p>Stock Movement</p>
                    </a>
                  </li>
            </ul>
          </li>
      </nav>
        <div class="nav-item; btn btn-danger">
        <a href="/" class="nav-link active">
            <h4>Logout</h4>
        </a>
        </li>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    @yield('main-content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="background-color:rgb(33, 115, 174)">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5><center>Contact - Support</center></h5>
      <p>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://t.me/chamroeun_BLUE" class="nav-link active">
                    <i class="fas fa-headset"> IT Supports</i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-users"> Team Sales</i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-vote-yea"> OT Supports</i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-mail-bulk"> Office Management</i>
                </a>
              </li>
      </p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <h5>ST15 Stock Control</h5>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024-2025 <a href="https://www.blue.com.kh/">ST15.CO.LTD</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src={{asset("plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("dist/js/adminlte.min.js")}}></script>
<!--  VueJS -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</body>
    @yield('js')
</html>
