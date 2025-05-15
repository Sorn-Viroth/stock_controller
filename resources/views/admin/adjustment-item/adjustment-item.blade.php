@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Adjustment Item</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Adjustment Item</li>
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
                        <a  @click="loading()"
                            href="/admin/resive-item" class="btn btn-primary btn-sm" style="padding: 5.5px 15px;
                            border: 0;
                            border-radius: 100px;
                            color: #ffffff;
                            font-weight: Bold;
                            transition: all 0.5s;
                            -webkit-transition: all 0.5s;">
                            <i class="fas fa-plus"> New</i></a>

                        <a  @click="loading()"
                            href="/admin/resive-item" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                            border: 0;
                            border-radius: 100px;
                            color: #ffffff;
                            font-weight: Bold;
                            transition: all 0.5s;
                            -webkit-transition: all 0.5s;">
                            <i class="fas fa-edit"> Edit</i>
                        </a>

                        <a  @click="loading()"
                            href="/admin/resive-item" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                            border: 0;
                            border-radius: 100px;
                            color: #ffffff;
                            font-weight: Bold;
                            transition: all 0.5s;
                            -webkit-transition: all 0.5s;">
                        <i class="fas fa-trash"> Delete</i>
                        </a>

                        <a  @click="loading()"
                            href="/admin/resive-item" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
                            border: 0;
                            border-radius: 100px;
                            color: #ffffff;
                            font-weight: Bold;
                            transition: all 0.5s;
                            -webkit-transition: all 0.5s;">
                            <i class="fas fa-save"> Save</i>
                        </a>

                        <a @click="showModalPreview()"
                            href="#" class="btn btn-outline-success btn-sm" style="padding: 5.5px 15px;
                            border-radius: 100px;
                            font-weight: Bold;
                            transition: all 0.5s;
                            -webkit-transition: all 0.5s;">
                            <i class="far fa-eye"> Preview</i>
                        </a>

                        <a href="/admin/user" class="btn btn-light btn-sm" style="float: right">
                            <i class="fas fa-search"></i>
                        </a>
                        <input style="float: right" class="" type="text" name="search" placeholder="Search...">
                    </div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-6 ">
                            <label for="inputEmail4" class="form-label">Vendor ID</label>
                            <div class="mb-3 input-group">
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

                            <label for="inputEmail4" class="form-label">Document No</label>
                            <a type="text" class="form-control" id="inputEmail4" placeholder="...">AM0000001</a>
                            </div>
                            <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Vendor Name</label>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            </div>


                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Receive Data</label>
                                <input type="date" class="form-control" id="inputEmail4" placeholder="...">
                            </div>
                            </div>
                        </form>
                    </div>
                    </div>
                <!-- Modal Preview-->
                <div class="modal fade" id="Preview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="p-3 mb-3 invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <p><h2>INVOICE</h2></p>
                                    <h4>Control Stock.
                                    <small class="float-right">Date: 2/10/2025</small>
                                </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>Admin.</strong><br>
                                    Sensok.Phnom Penh<br>
                                    street 18No<br>
                                    Phone: (885) 974-444-14<br>
                                    Email: controlstock@gmail.com
                                </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>Bong Heng</strong><br>
                                    Sensok.Phnom Penh<br>
                                    street 18No<br>
                                    Phone: (885) 539-1037<br>
                                    Email: ...................
                                </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                <b>Invoice IN0000001</b><br>
                                <br>
                                <b> Invoice Date:</b> 2/10/2025<br>
                                <b>Account:</b> ...................
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Item Code</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Unit Price</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(item, index) in 2">
                                    <td>1</td>
                                    <td>B-001</td>
                                    <td>Baby Care</td>
                                    <td>10</td>
                                    <td>case</td>
                                    <td>$10.50</td>
                                    <td>$105.00</td>
                                    </tr>
                                    <tr>
                                    </tbody>
                                </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                <p class="lead">Payment Methods:</p>
                                <img src="{{asset('dist/img/ABA.jpg')}}" alt="User Image" class="" style="width: 40px;">
                                <img src="{{asset('dist/img/aceleda.jpg')}}" alt="User Image" class="" style="width: 71px;">
                                <img src="{{asset('dist/img/wing.png')}}" alt="User Image" class="" style="width: 82px;">

                                <p class="shadow-none text-muted well well-sm" style="margin-top: 10px;">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                    plugg
                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                <p class="lead">Amount Due 2/22/2014</p>

                                <div class="table-responsive">
                                    <table class="table">
                                    <tbody><tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td>$..........</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$...........</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    </tbody></table>
                                </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <button type="button" class="float-right btn btn-success"><i class="far fa-credit-card"></i> Submit
                                    Payment
                                </button>
                                <button type="button" class="float-right btn btn-primary" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </button>
                                </div>
                            </div>
                            </div>

                        <div class="modal-footer">
                            <a
                            @click="hideModalPreviewclose()"
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
                <!-- Modal Vendor-->
                <div class="modal fade" id="vendor" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    <th>ID</th>
                                    <th>Name1</th>
                                    <th>Name2</th>
                                    <th>Phone</th>
                                    <th>Contact</th>
                                    <th>Register Date</th>
                                    <th>User Register</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in 10">
                                        <td>1</td>
                                        <td>00001</td>
                                        <td>Vendor-01</td>
                                        <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">អ្នកផ្គត់ផ្គង់-01</td>
                                        <td>015454314</td>
                                        <td>Number Phone</td>
                                        <td>MM-DD-YYYY</td>
                                        <td>Admin</td>
                                        <td>
                                            <a
                                                @click="loading()"
                                                href="/admin/adjustment-item" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        background-color: rgb(26, 160, 19);
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
                            @click="showModalvendorclose()"
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
                                            href="/admin/adjustment-item" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                background-color: rgb(26, 160, 19);
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
                                                            height:350px;line-height:2em;
                                                            overflow:auto;padding:5px;">
                                            <table class="table table-head-fixed text-nowrap table-striped">
                                                <thead>
                                                    <tr style="color:#000000">
                                                        <th>No</th>
                                                        <th>Item Code</th>
                                                        <th>Description1</th>
                                                        <th>Product Line</th>
                                                        <th>Qty</th>
                                                        <th>Unit</th>
                                                        <th>Amount</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(item, index) in 50">
                                                        <td>1</td>
                                                        <td>B-001</td>
                                                        <td>Baby Care</td>
                                                        <td>P-Baby</td>
                                                        <td>
                                                            <input type="number" class="form-control; btn-sm" style="padding: 5.5px 15px;
                                                            border: 0;
                                                            border-radius: 100px;
                                                            background-color:rgb(188, 215, 236);
                                                            color: #333333;
                                                            font-weight: Bold;
                                                            transition: all 0.5s;
                                                            -webkit-transition: all 0.5s;">
                                                        </td>
                                                        <td>
                                                            <select class="form-select; btn-sm" aria-label="Default select example" style="padding: 5.5px 15px;
                                                            border: 0;
                                                            border-radius: 100px;
                                                            background-color:rgb(188, 215, 236);
                                                            color: #333333;
                                                            font-weight: Bold;
                                                            transition: all 0.5s;
                                                            -webkit-transition: all 0.5s;">
                                                                <option selected>select</option>
                                                                <option value="1">unit</option>
                                                                <option value="2">case</option>
                                                              </select>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control; btn-sm" style="padding: 5.5px 15px;
                                                            border: 0;
                                                            border-radius: 100px;
                                                            background-color:rgb(188, 215, 236);
                                                            color: #333333;
                                                            font-weight: Bold;
                                                            transition: all 0.5s;
                                                            -webkit-transition: all 0.5s;">
                                                        </td>
                                                        <td>100$</td>
                                                        {{-- <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេ</td> --}}
                                                        <td>
                                                            <a  @click="showModalitem()"
                                                                href="#" class="btn btn-sm" style="padding: 5.5px 15px;
                                                                border: 0;
                                                                border-radius: 100px;
                                                                background-color: rgb(223, 166, 8);
                                                                color: #ffffff;
                                                                font-weight: Bold;
                                                                transition: all 0.5s;
                                                                -webkit-transition: all 0.5s;">
                                                                <i class="fas fa-mouse-pointer"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                                        border: 0;
                                                                                                        border-radius: 100px;
                                                                                                        color: #ffffff;
                                                                                                        font-weight: Bold;
                                                                                                        transition: all 0.5s;
                                                                                                        -webkit-transition: all 0.5s;">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                                        border: 0;
                                                                                                        border-radius: 100px;
                                                                                                        color: #ffffff;
                                                                                                        font-weight: Bold;
                                                                                                        transition: all 0.5s;
                                                                                                        -webkit-transition: all 0.5s;">
                                                                <i class="fas fa-trash"></i>
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
        <!-- /.row -->
        </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection

@section('js')
    <script>
        var app = new Vue({
        el: '#app',
        data: {
        },
        methods:{
            showModalvendor(){
                $('#vendor').modal('show')
            },
            showModalitem(){
                $('#item').modal('show')
            },
            showModalPreview(){
                $('#Preview').modal('show')
            },
            hideModalitem(){
                $('#item').modal('hide')
            },
            hideModalPreviewclose(){
                $('#Preview').modal('hide')
            },
            showModalvendorclose(){
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
