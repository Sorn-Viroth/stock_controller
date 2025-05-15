  @extends('admin.layout')
  @section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="mb-2 row">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div id="app" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>27,000<sup style="font-size: 20px">$</sup></h3>

                  <p>Customer Balance</p>
                </div>
                <div class="icon">
                  <i class="fas fa-comments-dollar"></i>
                </div>
                <a
                    @click="loading()"
                    href="/admin/customer-balance" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>4,150<sup style="font-size: 20px">៛</sup></h3>

                  <p>Exchange Rate</p>
                </div>
                <div class="icon">
                  <i class="fas fa-percent"></i>
                </div>
                    <a
                        @click="showModalexchange()"
                        href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>10</h3>

                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                    <a
                        @click="loading()"
                        href="/admin/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>6,500<sup style="font-size: 20px">$</sup></h3>

                  <p>AP Balance</p>
                </div>
                <div class="icon">
                  <i class="fas fa-balance-scale-right"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="mr-1 ion ion-clipboard"></i>
                        <a
                        @click="showModal()"
                        href="#" class="btn btn-sm" style="padding: 5.5px 30px;
                        border: 0;
                        border-radius: 100px;
                        color: #ffffff;
                        background-color: rgb(0, 204, 255);
                        font-weight: Bold;
                        transition: all 0.5s;
                        -webkit-transition: all 0.5s;">
                        <i class="fas fa-building"></i>
                        Company
                        </a>
                        <a
                        @click="showModalLocation()"
                        href="#" class="btn btn-sm" style="padding: 5.5px 30px;
                        border: 0;
                        border-radius: 100px;
                        color: #ffffff;
                        background-color: rgb(238, 194, 61);
                        font-weight: Bold;
                        transition: all 0.5s;
                        -webkit-transition: all 0.5s;">
                        <i class="fas fa-warehouse"></i>
                        Location
                        </a>
                        <a
                        @click="showModalPayment()"
                        href="#" class="btn btn-sm" style="padding: 5.5px 30px;
                        border: 0;
                        border-radius: 100px;
                        color: #ffffff;
                        background-color: rgb(36, 164, 57);
                        font-weight: Bold;
                        transition: all 0.5s;
                        -webkit-transition: all 0.5s;">
                        <i class="fab fa-amazon-pay"></i>
                        Payment</a>
                      </h3>

                      <div class="card-tools">
                        <ul class="pagination pagination-sm">
                          <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                          <li class="page-item"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                        </ul>
                      </div>
                    </div>
                <!-- Modal-Company -->
                <div class="modal fade" id="company" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Company List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div>
                            <div class="p-0 card-body table-responsive" style="height: 500px;">
                                <table class="table table-head-fixed text-nowrap table-striped">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>User ID</th>
                                      <th>Name1</th>
                                      <th>Name2</th>
                                      <th>Phone</th>
                                      <th>Address</th>
                                      <th>Email</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr v-for="(item, index) in 50">
                                      <td>1</td>
                                      <td>0001</td>
                                      <td>BABY SHOP</td>
                                      <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">ហាងក្មេង</td>
                                      <td>010-1234-5678</td>
                                      <td>Phnom Penh</td>
                                      <td>Babyshop@gmail.com</td>
                                      <td>
                                        <a
                                            @click="loading()"
                                            href="/admin/company" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                color: #ffffff;
                                                                                font-weight: Bold;
                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;">
                                            <i class="fas fa-edit"> Edit</i>
                                        </a>
                                        <a  @click="loading()"
                                            href="/admin/dashboard" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                color: #ffffff;
                                                                                font-weight: Bold;
                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;">
                                            <i class="fas fa-trash"> Delete</i>
                                        </a>
                                        <a
                                            @click="loading()"
                                            href="/admin/chagecode" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                background-color: rgb(5, 151, 5);
                                                                                color: #ffffff;
                                                                                font-weight: Bold;
                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;">
                                                <i class="fas fa-barcode"> Code</i>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModal()"
                            href="#" class="btn btn-sm"
                            style="padding: 5.5px 15px;
                                float: left;
                                border: 0;
                                border-radius: 100px;
                                background-color: rgb(209, 28, 28);
                                color: #ffffff;
                                font-weight: Bold;
                                transition: all 0.5s;
                                -webkit-transition: all 0.5s;">
                                    <i class="fas fa-window-close"></i>
                                    Cancel
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal-Location -->
                <div class="modal fade" id="location" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Location List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div>
                            <div class="p-0 card-body table-responsive" style="height: 500px; wire:500px">
                                <table class="table table-head-fixed text-nowrap table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Location ID</th>
                                            <th>Name1</th>
                                            <th>Name2</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>User Register</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                        v-for="(item, index) in 50"
                                        >
                                            <td>1</td>
                                            <td>0001</td>
                                            <td>Baby Shop</td>
                                            <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">ហាងក្មេង</td>
                                            <td>0973407985</td>
                                            <td>Phnom Penh</td>
                                            <td>Admin</td>
                                            <td>
                                                <a
                                                    @click="loading()"
                                                    href="/admin/company" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a  @click="loading()"
                                                    href="/admin/dashboard" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                                <a
                                                    @click="loading()"
                                                    href="/admin/chagecode" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            background-color: rgb(26, 160, 19);
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-barcode"></i>
                                                    Code
                                                </a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalclose()"
                            href="#" class="btn btn-sm"
                            style="padding: 5.5px 15px;
                                float: left;
                                border: 0;
                                border-radius: 100px;
                                background-color: rgb(209, 28, 28);
                                color: #ffffff;
                                font-weight: Bold;
                                transition: all 0.5s;
                                -webkit-transition: all 0.5s;">
                                    <i class="fas fa-window-close"></i>
                                    Cancel
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal-Payment -->
                <div class="modal fade" id="payment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Payment List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div>
                            <div class="p-0 card-body table-responsive" style="height: 500px;">
                                <table class="table table-head-fixed text-nowrap table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Payment Type</th>
                                            <th>Photo</th>
                                            <th>User Register</th>
                                            <th>Register Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                        v-for="(item, index) in 5"
                                        >
                                            <td>1</td>
                                            <td>ABA Bank</td>
                                            <td>
                                                <img src="{{asset('dist/img/ABA.jpg')}}" class="card-img-top" alt="..."
                                                    style="width: 2rem; height: 2rem">
                                            </td>
                                            <td>Admin</td>
                                            <td>2022-01-01</td>
                                            <td>
                                                <a
                                                    @click="loading()"
                                                    href="/admin/company" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a  @click="loading()"
                                                    href="/admin/dashboard" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                                <a
                                                    @click="loading()"
                                                    href="/admin/chagecode" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            background-color: rgb(26, 160, 19);
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-barcode"></i>
                                                    Code
                                                </a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalPayment()"
                            href="#" class="btn btn-sm"
                            style="padding: 5.5px 15px;
                                float: left;
                                border: 0;
                                border-radius: 100px;
                                background-color: rgb(209, 28, 28);
                                color: #ffffff;
                                font-weight: Bold;
                                transition: all 0.5s;
                                -webkit-transition: all 0.5s;">
                                    <i class="fas fa-window-close"></i>
                                    Cancel
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal-exchange -->
                <div class="modal fade" id="exchange" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Exchange Rate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">USD</label>
                                                <a type="text" class="form-control" id="inputEmail4" placeholder="..."><strong>1.00$</strong></a>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">KHM</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="....">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <div class="modal-footer">
                            <a
                            @click="loading()"
                            href="/admin/dashboard" class="btn btn-sm"
                            style="padding: 5.5px 15px;
                                float: left;
                                border: 0;
                                border-radius: 100px;
                                background-color: rgb(24, 155, 56);
                                color: #ffffff;
                                font-weight: Bold;
                                transition: all 0.5s;
                                -webkit-transition: all 0.5s;">
                                    <i class="fas fa-save"></i>
                                    Save
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Customer Chart -->
                <div class="card direct-chat direct-chat-primary" style="position: relative; left: 0px; top: 0px;">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                      <h3 class="card-title">Direct Chat</h3>

                      <div class="card-tools">
                        <span title="3 New Messages" class="badge badge-primary">3</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                          <i class="fas fa-comments"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!-- Conversations are loaded here -->
                      <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="clearfix direct-chat-infos">
                            <span class="float-left direct-chat-name">Alexander Pierce</span>
                            <span class="float-right direct-chat-timestamp">23 Jan 2:00 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="{{asset('dist/img/user.png')}}" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Is this template really for free? That's unbelievable!
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                          <div class="clearfix direct-chat-infos">
                            <span class="float-right direct-chat-name">Sarah Bullock</span>
                            <span class="float-left direct-chat-timestamp">23 Jan 2:05 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="{{asset('dist/img/AdminLogo.png')}}" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            You better believe it!
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="clearfix direct-chat-infos">
                            <span class="float-left direct-chat-name">Alexander Pierce</span>
                            <span class="float-right direct-chat-timestamp">23 Jan 5:37 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="{{asset('dist/img/user.png')}}" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Working with AdminLTE on a great new app! Wanna join?
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                          <div class="clearfix direct-chat-infos">
                            <span class="float-right direct-chat-name">Sarah Bullock</span>
                            <span class="float-left direct-chat-timestamp">23 Jan 6:10 pm</span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="{{asset('dist/img/AdminLogo.png')}}" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            I would love to.
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                      </div>
                      <!--/.direct-chat-messages-->

                      <!-- Contacts are loaded here -->
                      <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="{{asset('dist/img/user.png')}}" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="float-right contacts-list-date">2/28/2015</small>
                                </span>
                                <span class="contacts-list-msg">How have you been? I was...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="{{asset('dist/img/AdminLogo.png')}}" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="float-right contacts-list-date">2/23/2015</small>
                                </span>
                                <span class="contacts-list-msg">I will be waiting for...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="float-right contacts-list-date">2/20/2015</small>
                                </span>
                                <span class="contacts-list-msg">I'll call you back at...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="float-right contacts-list-date">2/10/2015</small>
                                </span>
                                <span class="contacts-list-msg">Where is your new...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="float-right contacts-list-date">1/27/2015</small>
                                </span>
                                <span class="contacts-list-msg">Can I take a look at...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="float-right contacts-list-date">1/4/2015</small>
                                </span>
                                <span class="contacts-list-msg">Never mind I found...</span>
                              </div>
                              <!-- /.contacts-list-info -->
                            </a>
                          </li>
                          <!-- End Contact Item -->
                        </ul>
                        <!-- /.contacts-list -->
                      </div>
                      <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <form action="#" method="post">
                        <div class="input-group">
                          <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                          <span class="input-group-append">
                            <button type="button" class="btn btn-primary">Send</button>
                          </span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <i class="mr-1 ion ion-clipboard"></i>
                  <a
                  @click="showModal()"
                  href="#" class="btn btn-sm" style="padding: 5.5px 30px;
                  border: 0;
                  color: #ffffff;
                  background-color: rgb(0, 204, 255);
                  font-weight: Bold;
                  transition: all 0.5s;
                  -webkit-transition: all 0.5s;">
                  <i class="fas fa-comment-alt"></i>
                  Chart List Customer Information.
                  </a>
                  </div>
                    {{-- Order List --}}
                    <div class="card">
                        <div class="border-transparent card-header">
                          <h3 class="card-title">Latest Orders</h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="p-0 card-body">
                          <div class="table-responsive">
                            <table class="table m-0">
                              <thead>
                              <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Popularity</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                </td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                </td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                </td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-info">Processing</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                </td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                </td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                </td>
                              </tr>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                </td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="clearfix card-footer">
                          <a href="javascript:void(0)" class="float-left btn btn-sm btn-info">Place New Order</a>
                          <a href="javascript:void(0)" class="float-right btn btn-sm btn-secondary">View All Orders</a>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  @endsection

  @section('js')
    {{-- modal --}}
        <script>
            var app = new Vue({
            el: '#app',
            data: {
            },
            methods:{
                showModal(){
                    $('#company').modal('show')
                },
                showModalLocation(){
                    $('#location').modal('show')
                },
                showModalPayment(){
                    $('#payment').modal('show')
                },
                showModalexchange(){
                    $('#exchange').modal('show')
                },
                hideModal(){
                    $('#company').modal('hide')
                },
                hideModalclose(){
                    $('#location').modal('hide')
                },
                hideModalPayment(){
                    $('#payment').modal('hide')
                },
                hideModalexchange(){
                    $('#exchange').modal('hide')
                },
                loading() {
                $.LoadingOverlay("show"); // Show loading overlay
                    axios.get('https://fakestoreapi.com/products')
                    .then((response) => {
                    this.product_list = response.data; // Assign data to product_list
                    console.log(response.data);
                    })
                    .catch((error) => {
                    console.error('Error fetching products:', error);
                    alert('Failed to load products. Check the console for details.');
                    })
                    .finally(() => {
                    $.LoadingOverlay("hide"); // Hide loading overlay
                    });
                }

            }

        })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>

  @endsection

