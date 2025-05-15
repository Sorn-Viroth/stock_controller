@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Item List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Item List</li>
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
                        <div class="card-header">

                            <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-filter"> Filter</i></a>

                            <a href="#" class="btn btn-outline-success btn-sm">
                                <i class="fas fa-file-excel"> Report</i></a>

                            <a  @click="showModalitem()"
                                href="#" class="btn btn-light btn-sm" style="float: right">
                                <i class="fas fa-search"></i>
                            </a>
                            <input style="float: right" class="" type="text" name="search" placeholder="Search..">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-6 ">
                                <div class="col-md-6 ">
                                    <label for="inputEmail4" class="form-label"></label>
                                    </div>
                                <label for="inputEmail4" class="form-label">Customer ID</label>
                                <div class="mb-3 input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <a  @click="showModalCustomer()"
                                        href="#"
                                        class="btn btn-outline-secondary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col-md-6 ">
                                    <label for="inputEmail4" class="form-label"></label>
                                    </div>
                                <label for="inputEmail4" class="form-label">Description</label>
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <a  @click="showModalitem()"
                                        href="#"
                                        class="btn btn-outline-secondary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                                <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label">Vendor ID</label>
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <a  @click="showModalvendor()"
                                        href="#"
                                        class="btn btn-outline-secondary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                            </div>
                                <div class="col-md-8 ">
                                <label for="inputEmail4" class="form-label"></label>
                                </div>
                                <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label">User</label>
                                <div class="mb-3 input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <a  @click="showModalUser()"
                                        href="#"
                                        class="btn btn-outline-secondary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Date</label>
                                <div class="mb-3 input-group">
                                <input type="date" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <form>
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
                                                                height:250px;line-height:2em;
                                                                overflow:auto;padding:5px;">
                                                <table class="table table-head-fixed text-nowrap table-striped">
                                                    <thead>
                                                        <tr style="color:#000000">
                                                            <th>No</th>
                                                            <th>Vendor ID</th>
                                                            <th>ID</th>
                                                            <th>Description1</th>
                                                            <th>Description2</th>
                                                            <th>Product Line</th>
                                                            <th>Unit</th>
                                                            <th>Price</th>
                                                            <th>Register Date</th>
                                                            <th>User Register</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                        v-for="(item, index) in 50">
                                                        <td>1</td>
                                                        <td>Vendor-01</td>
                                                        <td>00001</td>
                                                        <td>Coffee-1</td>
                                                        <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេលេខ-1</td>
                                                        <td>Coffee</td>
                                                        <td>Case24</td>
                                                        <td>$100</td>
                                                        <td>MM-DD-YYYY</td>
                                                        <td>Admin</td>
                                                        <td>
                                                            <a  @click="loading()"
                                                                href="/admin/item" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                                        border: 0;
                                                                                                        border-radius: 100px;
                                                                                                        color: #ffffff;
                                                                                                        font-weight: Bold;
                                                                                                        transition: all 0.5s;
                                                                                                        -webkit-transition: all 0.5s;">
                                                                <i class="fas fa-edit"> Edit</i>
                                                            </a>
                                                            <a  @click="loading()"
                                                                href="/admin/item-list" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                                        border: 0;
                                                                                                        border-radius: 100px;
                                                                                                        color: #ffffff;
                                                                                                        font-weight: Bold;
                                                                                                        transition: all 0.5s;
                                                                                                        -webkit-transition: all 0.5s;">
                                                                <i class="fas fa-trash"> Delete</i>
                                                            </a>
                                                            <a  @click="loading()"
                                                                href="/admin/chagecode" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                                        border: 0;
                                                                                                        border-radius: 100px;
                                                                                                        background-color: rgb(19, 179, 88);
                                                                                                        color: #ffffff;
                                                                                                        font-weight: Bold;
                                                                                                        transition: all 0.5s;
                                                                                                        -webkit-transition: all 0.5s;">
                                                                <i class="fas fa-trash"> Code</i>
                                                            </a>
                                                        </td>
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
            </form>
            <!-- Modal User-->
            <div class="modal fade" id="user" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">User List</h5>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Phone</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(item, index) in 50">
                                <td>1</td>
                                <td>12345</td>
                                <td>John Doe</td>
                                <td>1234567890</td>
                                <td>John Doe</td>
                                <td>Admin</td>
                                <td>
                                    <a  @click="loading()"
                                    href="/admin/item-list" class="btn btn-sm" style="padding: 5.5px 15px;
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
                        @click="hideModalUserclose()"
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
            <!-- Modal Item-->
            <div class="modal fade" id="item" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Item List</h5>
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
                                <th>Location</th>
                                <th>ID</th>
                                <th>Description1</th>
                                <th>Description2</th>
                                <th>Product Line</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(item, index) in 50">
                                <td>1</td>
                                <td>WH1</td>
                                <td>00001</td>
                                <td>Coffee-1</td>
                                <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេលេខ-1</td>
                                <td>Coffee</td>
                                <td>$10</td>
                                <td>
                                    <a  @click="loading()"
                                        href="/admin/item-list" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            background-color: rgb(54, 174, 30);
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-mouse-pointer"></i>
                                        Select
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a
                        @click="hideModalitem()"
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
                                        href="/admin/item-list" class="btn btn-sm" style="padding: 5.5px 15px;
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
            <!-- Modal-Vendor -->
            <div class="modal fade" id="vendor" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Vendor List</h5>
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
                                                href="/admin/item-list" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
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
                        @click="hideModalvendorclose()"
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
  </div>
  <!-- /.content -->
</div>
<!-- jQuery -->
<script src={{asset("plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("dist/js/adminlte.min.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>
@endsection
@section('js')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
            },
            methods:{
                showModalitem(){
                    $('#item').modal('show')
                },
                showModalCustomer(){
                    $('#customer').modal('show')
                },
                showModalvendor(){
                    $('#vendor').modal('show')
                },
                showModalUser(){
                    $('#user').modal('show')
                },
                hideModal(){
                    $('#newqoute').modal('hide')
                },
                hideModalitem(){
                    $('#item').modal('hide')
                },
                hideModalCustomerclose(){
                    $('#customer').modal('hide')
                },
                hideModalvendorclose(){
                    $('#vendor').modal('hide')
                },
                hideModalUserclose(){
                    $('#user').modal('hide')
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
