@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Product Line</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <a href="#" class="btn btn-primary btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                        <i class="fas fa-plus"> New</i></a>

                    <a  @click="loading()"
                        href="/admin/product" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                      <i class="fas fa-edit"> Edit</i></a>

                    <a  @click="loading()"
                        href="/admin/product" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                    <i class="fas fa-trash"> Delete</i></a>

                    <a  @click="loading()"
                        href="/admin/product" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                        <i class="fas fa-save"> Save</i></a>

                    <a href="/admin/user" class="btn btn-light btn-sm" style="float: right">
                    <i class="fas fa-search"></i></a>
                    <input style="float: right" class="" type="text" name="search" placeholder="Search..">
                </div>
                <div class="card-body">
                        <form class="row g-3">
                          <div class="col-md-3 ">
                            <label for="inputEmail4" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Product ID">
                          </div>
                          <div class="col-md-8 ">
                            <label for="inputEmail4" class="form-label"></label>
                          </div>

                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Description1</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Description1">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Description2</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Description1">
                          </div>
                        </form>
                    </div>

                </div>
              </div>
        </div>
        <div class="col-13">
            <div class="card">
              <div class="card-header">
                <style>
                    .fixTableHead {
                    overflow-y: auto;
                    height: 400px;
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
                        background-color: rgb(36, 135, 184);
                    }

                    th,
                    td {
                        padding: 8px 15px;
                        border: 2px solid #ffffff;
                    }
                </style>
                <div id="app" class="table-responsive; fixTableHead">
                    <table class="table table-sm table-borderless table-striped">
                        <thead>
                            <tr style="color:#ffffff">
                                <th>No</th>
                                <th>ID</th>
                                <th>Description1</th>
                                <th>Description2</th>
                                <th>User Register</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                            v-for="(item, index) in 50"
                            >
                                <td>1</td>
                                <td>00001</td>
                                <td>Coffee</td>
                                <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">កាហ្វេ</td>
                                <td>Admin</td>
                                <td>
                                    <a  @click="loading()"
                                        href="/admin/product" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                color: #ffffff;
                                                                                font-weight: Bold;
                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <a  @click="loading()"
                                        href="/admin/product" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                color: #ffffff;
                                                                                font-weight: Bold;
                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;">
                                        <i class="fas fa-trash"> Delete</i>
                                    </a>
                                    <a  @click="loading()"
                                        href="/admin/chagecode" class="btn btn-sm btn-danger" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        background-color: rgb(5, 151, 5);
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
            </div>
        </div>
      </div>
        <div class="row">

        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
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
