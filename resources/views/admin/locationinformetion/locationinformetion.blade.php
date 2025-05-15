@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Location Management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Management Page</li>
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
                      <a href="/admin/location" class="btn btn-primary" style="padding: 5.5px 15px;
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
                                      <th>Location ID</th>
                                      <th>Name1</th>
                                      <th>Name2</th>
                                      <th>Phone</th>
                                      <th>Contact</th>
                                      <th>Email</th>
                                      <th>User Register</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr
                                  v-for="(item, index) in 50"
                                  >
                                    <td>1</td>
                                    <td>0001</td>
                                    <td>WH1</td>
                                    <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">ឃ្លាំង1</td>
                                    <td>0973407985</td>
                                    <td>Telegram</td>
                                    <td>Babyshop@gmail.com</td>
                                    <td>Admin</td>
                                    <td>
                                          <a href="/admin/location" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                      border: 0;
                                                                                      border-radius: 100px;
                                                                                      color: #ffffff;
                                                                                      font-weight: Bold;
                                                                                      transition: all 0.5s;
                                                                                      -webkit-transition: all 0.5s;">
                                              <i class="fas fa-edit"> Edit</i>
                                          </a>
                                          <a href="#" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
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
                      <a href="/admin/location" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
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
