@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">User Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">User Page</li>
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
                      <a    @click="loading()"
                            href="/admin/payment" class="btn btn-primary" style="padding: 5.5px 15px;
                                                                              border: 0;
                                                                              border-radius: 100px;
                                                                              color: #ffffff;
                                                                              font-weight: Bold;
                                                                              transition: all 0.5s;
                                                                              -webkit-transition: all 0.5s;">
                      <i class="fas fa-plus-circle"></i>
                          Add
                      </a>
                  </div>
                  <div class="card-body">
                      <style>
                          .fixTableHead {
                          overflow-y: auto;
                          height: 500px;
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
                          background-color: rgb(63, 151, 194);
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
                                  <tr style="background-color:rgb(35, 124, 188); color:#ffffff">
                                      <th>No</th>
                                      <th>Payment Type</th>
                                      <th>Register Date</th>
                                      <th>User Register</th>
                                      <th>Edit Date</th>
                                      <th>User Edit</th>
                                      <th>Image</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr
                                  v-for="(item, index) in 5"
                                  >
                                      <td>1</td>
                                      <td>ABA</td>
                                      <td>2021-07-15</td>
                                      <td>Admin</td>
                                      <td>2022-07-15</td>
                                      <td>Admin-01</td>
                                      <td><img src="{{asset('dist/img/ABA.jpg')}}" alt="User Image" class="" style="width: 40px;"></td>  <!-- Image Placeholder -->
                                      <td>
                                          <a    @click="loading()"
                                                href="/admin/payment" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                      border: 0;
                                                                                      border-radius: 100px;
                                                                                      color: #ffffff;
                                                                                      font-weight: Bold;
                                                                                      transition: all 0.5s;
                                                                                      -webkit-transition: all 0.5s;">
                                              <i class="fas fa-edit"> Edit</i>
                                          </a>
                                          <a    @click="loading()"
                                                href="/admin/paymentlist" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
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
                  <div class="card-footer">
                      <a    @click="loading()"
                            href="/admin/payment" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                      border: 0;
                                                                      border-radius: 100px;
                                                                      color: #ffffff;
                                                                      font-weight: Bold;
                                                                      transition: all 0.5s;
                                                                      -webkit-transition: all 0.5s;">
                          <i class="far fa-arrow-alt-circle-left">Back</i>
                      </a>
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
