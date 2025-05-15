@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">adjustment-cost</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">adjustment-cost Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  {{-- <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"> New</i></a>

                    <a href="#" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-ban">Void</i></a>

                    <a href="#" class="btn btn-info btn-sm">
                      <i class="fas fa-edit"> Edit</i></a>

                    <a href="#" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"> Delete</i></a>

                    <a href="#" class="btn btn-success btn-sm">
                        <i class="fas fa-save"> Save</i></a>

                    <a href="#" class="btn btn-light btn-sm" style="float: right">
                      <i class="fas fa-search"></i></a>
                    <input style="float: right" type="search" placeholder="search user ID">
                </div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6 ">
                          <label for="inputEmail4" class="form-label">Location ID</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>

                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Document No</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>
                          <div class="col-md-8 ">
                            <label for="inputEmail4" class="form-label"></label>
                          </div>
                          <div class="col-md-6 ">
                          <label for="inputEmail4" class="form-label">Vendor ID</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>

                        <div class="col-md-6">
                        </div>
                          <div class="col-md-8 ">
                            <label for="inputEmail4" class="form-label"></label>
                          </div>
                          <div class="col-md-6 ">
                          <label for="inputEmail4" class="form-label">Name 1</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>

                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Name 2</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                        </div>
                          <div class="col-md-8 ">
                            <label for="inputEmail4" class="form-label"></label>
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
                            <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label"></label>
                              </div>
                            <label for="inputEmail4" class="form-label">Adjustment Cost</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="...">
                          </div>
                        </div>

                      </form>
                  </div>

              </div>
          </div>
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <style>
                        .fixTableHead {
                            overflow-y: auto;
                            height: 110px;
                        }

                        .fixTableHead thead th {
                            position: sticky;
                            top: 0;
                        }

                        table {
                            border-collapse: collapse;
                            width: 100%;
                        }

                        th {
                            background: #3350e2;
                        }

                        th,
                        td {
                            padding: 8px 15px;
                            border: 2px solid #ffffff;
                        }
                    </style>
                </head>

                <body>
                    <div class="fixTableHead">
                        <table class="table table-sm table-borderless table-striped">
                            <thead>
                                <tr class="bg-primary">
                                    <th>No</th>
                                    <th>Item Code</th>
                                    <th>Description1</th>
                                    <th>Description2</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Position</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>00001</td>
                                    <td>Coca_Cola</td>
                                    <td>កូកា</td>
                                    <td>2</td>
                                    <td>1.00</td>
                                    <td>4.00</td>
                                    <td>Admin</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>00002</td>
                                    <td>Sting</td>
                                    <td>ស្ទិង</td>
                                    <td>2</td>
                                    <td>1.00</td>
                                    <td>4.00</td>
                                    <td>Admin</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>00003</td>
                                    <td>Vital 500ml</td>
                                    <td>វីតាល់ 500ml</td>
                                    <td>2</td>
                                    <td>1.00</td>
                                    <td>4.00</td>
                                    <td>Admin</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>00004</td>
                                    <td>Hanuman Beer</td>
                                    <td></td>
                                    <td>2</td>
                                    <td>1.00</td>
                                    <td>4.00</td>
                                    <td>Admin</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>00005</td>
                                    <td>ABC Beer</td>
                                    <td></td>
                                    <td>2</td>
                                    <td>1.00</td>
                                    <td>4.00</td>
                                    <td>Admin</td>
                                    <td></td>
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

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div> --}}
  <!-- /.content -->
</div>
@endsection
