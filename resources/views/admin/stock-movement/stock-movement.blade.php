@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Stock Movement</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Stock Movement</li>
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

                        <a href="/admin/user" class="btn btn-light btn-sm" style="float: right">
                        <i class="fas fa-search"></i></a>
                        <input style="float: right" class="" type="text" name="search" placeholder="Search..">
                      </div>
                    <form class="row g-3">
                        <div class="col-md-6 ">
                            <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label"></label>
                              </div>
                          <label for="inputEmail4" class="form-label">From Date</label>
                          <div class="mb-3 input-group">
                            <input type="date" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label"></label>
                              </div>
                          <label for="inputEmail4" class="form-label">To Date</label>
                          <div class="input-group">
                            <input type="date" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
                        </div>
                    </form>
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
                                                                height:450px;line-height:2em;
                                                                overflow:auto;padding:5px;">
                                                <table class="table table-head-fixed text-nowrap table-striped">
                                                    <thead>
                                                        <tr style="color:#000000">
                                                            <th>No</th>
                                                            <th>Document</th>
                                                            <th>Date</th>
                                                            <th>Vendor ID</th>
                                                            <th>Vendor Name</th>
                                                            <th>Item Code</th>
                                                            <th>Description1</th>
                                                            <th>Product</th>
                                                            <th>Status</th>
                                                            <th>Unit</th>
                                                            <th>Price</th>
                                                            <th>Cost</th>
                                                            <th>Total Stock</th>
                                                            <th>Total Cost</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                        v-for="(item, index) in 20"
                                                        >
                                                            <td>1 |</td>
                                                            <td>RI0000001</td>
                                                            <td>MM-DD-YYYY</td>
                                                            <td>Vendor-01</td>
                                                            <td>Vendor-01</td>
                                                            <td>00001</td>
                                                            <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">សាប៊ូក្មេង</td>
                                                            <td>P-Baby</td>
                                                            <td style="color: red"><strong>Sale</strong></td>
                                                            <td style="color: rgb(0, 0, 0)"><strong>100-case</strong></td>
                                                            <td style="color: rgb(8, 141, 37)"><strong>$10.00</strong></td>
                                                            <td style="color: rgb(8, 141, 37)"><strong>Sale</strong></td>
                                                            <td style="color: rgb(0, 89, 255)"><strong>1200-case</strong></td>
                                                            <td style="color: rgb(8, 141, 37)"><strong>$2300.00</strong></td>
                                                            <td>
                                                                <a href="/admin/vendor" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                                            border: 0;
                                                                                                            border-radius: 100px;
                                                                                                            color: #ffffff;
                                                                                                            font-weight: Bold;
                                                                                                            transition: all 0.5s;
                                                                                                            -webkit-transition: all 0.5s;">
                                                                    <i class="fas fa-eye"> View</i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                                            border: 0;
                                                                                                            border-radius: 100px;
                                                                                                            color: #ffffff;
                                                                                                            font-weight: Bold;
                                                                                                            transition: all 0.5s;
                                                                                                            -webkit-transition: all 0.5s;">
                                                                    <i class="fas fa-lock"> Lock</i>
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
<script>
    var app = new Vue({
        el: '#app',
        data: {
        },
        methods:{
        }

      })
</script>
@endsection
