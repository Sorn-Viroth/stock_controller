@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Report Qoute</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Report Page</li>
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
          <div class="col-12">
              <div class="card">
                <div class="card-header">

                    <a href="#" class="btn btn-outline-primary btn-sm" style="padding: 5.5px 15px;
                    border-radius: 100px;
                    font-weight: Bold;
                    transition: all 0.5s;
                    -webkit-transition: all 0.5s;">
                    <i class="fas fa-filter"> Filter</i></a>

                    <a href="#" class="btn btn-outline-success btn-sm" style="padding: 5.5px 15px;
                    border-radius: 100px;
                    font-weight: Bold;
                    transition: all 0.5s;
                    -webkit-transition: all 0.5s;">
                    <i class="fas fa-file-excel"> Report</i></a>

                    <a href="/admin/user" class="btn btn-light btn-sm" style="float: right">
                    <i class="fas fa-search"></i></a>
                    <input style="float: right" class="" type="text" name="search" placeholder="Search..">
                </div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6 ">
                          <label for="inputEmail4" class="form-label">Customer ID</label>
                          <div class="mb-3 input-group">
                            <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a   @click="showModalCustomer()"
                                    href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">

                          <label for="inputEmail4" class="form-label">Document No</label>
                          <a type="text" class="form-control" id="inputEmail4" placeholder="...">Q-0000001</a>
                        </div>
                          <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Location ID</label>
                          <div class="mb-3 input-group">
                            <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <a @click="showModalLocation()"
                                href="#"
                                class="btn btn-outline-secondary" type="button">
                                <i class="fas fa-search"></i>
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                        </div>
                          <div class="col-md-6 ">
                          <label for="inputEmail4" class="form-label">Name 1</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>

                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Name 2</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>
                          <div class="col-md-6 ">
                          <label for="inputEmail4" class="form-label">Contact</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>

                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Phone</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Quote Data</label>
                            <input type="date" class="form-control" id="inputEmail4" placeholder="...">
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
                <!-- Modal Customer-->
                <div class="modal fade" id="customer" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Customer List</h5>
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
                                    <th>Customer ID</th>
                                    <th>Name1</th>
                                    <th>Name2</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Contact</th>
                                    <th>Create Date</th>
                                    <th>User Register</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(item, index) in 50">
                                    <td>1</td>
                                    <td>C-001</td>
                                    <td>Bong Heng</td>
                                    <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">បង ហេង</td>
                                    <td>Phnom Penh</td>
                                    <td>015-454-314</td>
                                    <td>Telegram</td>
                                    <td>02-10-2025</td>
                                    <td>Admin</td>
                                    {{-- <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេ</td> --}}
                                    <td>
                                        <a  @click="loading()"
                                            href="/admin/rp-newqoute" class="btn btn-sm" style="padding: 5.5px 15px;
                                            border: 0;
                                            border-radius: 100px;
                                            background-color: rgb(54, 174, 30);
                                            color: #ffffff;
                                            font-weight: Bold;
                                            transition: all 0.5s;
                                            -webkit-transition: all 0.5s;">
                                            <i class="fas fa-mouse-pointer"></i>
                                            select
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalCustomerclose()"
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
                                                <a @click="loading()"
                                                    href="/admin/rp-newqoute" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                            border: 0;
                                                                                            border-radius: 100px;
                                                                                            background-color: rgb(54, 174, 30);
                                                                                            color: #ffffff;
                                                                                            font-weight: Bold;
                                                                                            transition: all 0.5s;
                                                                                            -webkit-transition: all 0.5s;">
                                                    <i class="fas fa-mouse-pointer"></i>
                                                    select
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModallocationclose()"
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
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="col-12">
                                    <div class="content">
                                        <div class="table-responsive; fixTableHead">
                                            <div class="p-0 card-body table-responsive"
                                                    style="width:100%;
                                                            height:150px;line-height:1em;
                                                            overflow:auto;padding:5px;">
                                            <table class="table table-head-fixed text-nowrap table-striped">
                                                <thead>
                                                    <tr style="color:#000000">
                                                        <th>No</th>
                                                        <th>Customer ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Document</th>
                                                        <th>From Quote</th>
                                                        <th>Invoice Date</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>User Create</th>
                                                        <th>Counter</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(item, index) in 10">
                                                        <td>1</td>
                                                        <td>C-001</td>
                                                        <td>Bong Heng</td>
                                                        <td>IN0000001</td>
                                                        <td style="color: rgb(189, 13, 13)">Q-0000001</td>
                                                        <td>02-20-2025</td>
                                                        <td>100$</td>
                                                        <td>
                                                            <strong style="color: green">
                                                                Complete
                                                            </strong>
                                                        </td>
                                                        <td>Admin</td>
                                                        <td>SERVER-PC</td>
                                                        {{-- <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេ</td> --}}
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            showModalCustomer(){
                $('#customer').modal('show')
            },
            showModalLocation(){
                $('#location').modal('show')
            },
            hideModalCustomerclose(){
                $('#customer').modal('hide')
            },
            hideModallocationclose(){
                $('#location').modal('hide')
            },
            loading(){
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
