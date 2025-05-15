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
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                        <a href="#" class="btn btn-info btn-sm">
                            <i class="fas fa-search"> Search</i></a>

                        <a href="#" class="btn btn-success btn-sm">
                            <i class="fas fa-save"> Save</i></a>
                  </div>
                  <div class="card-header">
                    <div class="btn-group" role="group" >
                        <label class="btn btn-outline-info" for="btnradio1">User</label>

                        <label class="btn btn-outline-info" for="btnradio2">Location</label>

                        <label class="btn btn-outline-info" for="btnradio3">Product Line</label>

                        <label class="btn btn-outline-info" for="btnradio3">Unit of Measure</label>

                        <label class="btn btn-outline-info" for="btnradio3">Vendor</label>
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
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection
