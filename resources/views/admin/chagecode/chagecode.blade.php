@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Chang Code</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Chang Code</li>
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
                            <a href="#" class="btn btn-outline-secondary btn-sm" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #000000;
                                                                                    background-color: rgb(206, 206, 206);
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                <i class="fas fa-search"> Search</i></a>

                            <a  @click="loading()"
                                href="/admin/chagecode" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                <i class="fas fa-save"> Save</i></a>

                            <a href="#" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                <i class="fas fa-edit"> Edit</i></a>
                    </div>
                    <div class="card-header">
                        <div class="btn-group" role="group" >
                            <a  @click="showModal()"
                                href="#" class="btn btn-outline-info" for="btnradio1">User</a>

                            <a  @click="showModallocation()"
                                href="#" class="btn btn-outline-info" for="btnradio2">Location</a>

                            <a  @click="showModalproduct()"
                                href="#" class="btn btn-outline-info" for="btnradio3">Product Line</a>

                            <a  @click="showModalunit()"
                                href="#" class="btn btn-outline-info" for="btnradio3">Unit of Measure</a>

                            <a  @click="showModalvendor()"
                                href="#" class="btn btn-outline-info" for="btnradio3">Vendor</a>
                        </div>
                        <div class="card-header">
                            <form class="row g-3">
                                <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label">Old Code</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                                </div>

                                <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">New Code</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                                </div>
                                <div class="col-md-8 ">
                                    <label for="inputEmail4" class="form-label"></label>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
            <div class="row">
                <!-- Modal-User -->
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
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User ID</th>
                                        <th>Name1</th>
                                        <th>Name2</th>
                                        <th>Contact</th>
                                        <th>Phone</th>
                                        <th>Password</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(item, index) in 50">
                                    <td>1</td>
                                    <td>0001</td>
                                    <td>Cham</td>
                                    <td>Roeun</td>
                                    <td>010-1234-5678</td>
                                    <td>12345678</td>
                                    <td>123456</td>
                                    <td>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-trash"> Delete</i>
                                    </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalUser()"
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
                        <h5 class="modal-title" id="staticBackdropLabel">User List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div>
                            <div class="p-0 card-body table-responsive" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Location ID</th>
                                        <th>Name1</th>
                                        <th>Name2</th>
                                        <th>Phone</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(item, index) in 50">
                                    <td>1</td>
                                    <td>0001</td>
                                    <td>Baby Shop</td>
                                    <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">ហាងក្មេង</td>
                                    <td>0975731097</td>
                                    <td>Phnom Penh</td>
                                    <td>babyshop@gmail.com</td>
                                    <td>
                                        <img src="{{asset('dist/img/AdminLogo.png')}}" class="card-img-top" alt="..."
                                        style="width: 2rem; height: 2rem">
                                    </td>
                                    <td>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-trash"> Delete</i>
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
                <!-- Modal-Product -->
                <div class="modal fade" id="product" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Description1</th>
                                        <th>Description2</th>
                                        <th>User Register</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(item, index) in 50">
                                    <td>1</td>
                                    <td>00001</td>
                                    <td>Coffee</td>
                                    <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេ</td>
                                    <td>Admin</td>
                                    <td>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                            border: 0;
                                                                            border-radius: 100px;
                                                                            color: #ffffff;
                                                                            font-weight: Bold;
                                                                            transition: all 0.5s;
                                                                            -webkit-transition: all 0.5s;">
                                        <i class="fas fa-trash"> Delete</i>
                                    </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalproductclose()"
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
                <!-- Modal-Unit -->
                <div class="modal fade" id="unit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Unit ID</th>
                                        <th>Description1</th>
                                        <th>Description2</th>
                                        <th>Unit Factor</th>
                                        <th>User Register</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in 50">
                                        <td>1</td>
                                        <td>00001</td>
                                        <td>Cash</td>
                                        <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កេស</td>
                                        <td>24</td>
                                        <td>Admin</td>
                                        <td>
                                            <a  @click="loading()"
                                                href="/admin/chagecode" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #ffffff;
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                                <i class="fas fa-edit"> Edit</i>
                                            </a>
                                            <a  @click="loading()"
                                                href="#" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #ffffff;
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                                <i class="fas fa-trash"> Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalunitclose()"
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
                        <h5 class="modal-title" id="staticBackdropLabel">User List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div>
                            <div class="p-0 card-body table-responsive" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Name1</th>
                                        <th>Name2</th>
                                        <th>Phone</th>
                                        <th>Contact</th>
                                        <th>Register Date</th>
                                        <th>User Register</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in 50">
                                        <td>1</td>
                                        <td>00001</td>
                                        <td>Vendor-01</td>
                                        <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">អ្នកផ្គត់ផ្គង់-01</td>
                                        <td>015454314</td>
                                        <td>Number Phone</td>
                                        <td>MM-DD-YYYY</td>
                                        <td>Admin</td>
                                        <td>
                                            <a  @click="loading()"
                                                href="/admin/chagecode" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #ffffff;
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                                <i class="fas fa-edit"> Edit</i>
                                            </a>
                                            <a  @click="loading()"
                                                href="/admin/chagecode" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #ffffff;
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                                <i class="fas fa-trash"> Delete</i>
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
                $('#user').modal('show')
            },
            showModallocation(){
                $('#location').modal('show')
            },
            showModalproduct(){
                $('#product').modal('show')
            },
            showModalunit(){
                $('#unit').modal('show')
            },
            showModalvendor(){
                $('#vendor').modal('show')
            },
            hideModalUser(){
                $('#user').modal('hide')
            },
            hideModallocationclose(){
                $('#location').modal('hide')
            },
            hideModalproductclose(){
                $('#product').modal('hide')
            },
            hideModalunitclose(){
                $('#unit').modal('hide')
            },
            hideModalvendorclose(){
                $('#vendor').modal('hide')
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
