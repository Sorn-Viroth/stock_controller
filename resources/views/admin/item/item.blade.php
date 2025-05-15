@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Item Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Item Master</li>
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

                        <a href="/admin/item-list" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        color: #ffffff;
                                                                        font-weight: Bold;
                                                                        transition: all 0.5s;
                                                                        -webkit-transition: all 0.5s;">
                          <i class="fas fa-edit"> Edit</i></a>

                        <a href="#" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        color: #ffffff;
                                                                        font-weight: Bold;
                                                                        transition: all 0.5s;
                                                                        -webkit-transition: all 0.5s;">
                        <i class="fas fa-trash"> Delete</i></a>

                        <a href="#" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
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
                          <div class="col-md-6 ">
                            <label for="inputEmail4" class="form-label">Item ID</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Item ID">
                          </div>
                          <div class="col-md-6 ">
                            <label for="inputEmail4" class="form-label"></label>
                          </div>

                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Description1</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Description2">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Description2</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Description2">
                          </div>
                          <div class="col-md-6">
                            <label for="exampleDataList" class="form-label">Product Line</label>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="button">...</button>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <label for="exampleDataList" class="form-label">Unit</label>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="button">...</button>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                            <label for="inputEmail4" class="form-label">Price</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="$-Price">
                          </div>
                          <div class="col-md-6 ">
                            <label for="inputEmail4" class="form-label"></label>
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Note</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="image" name="image" accept="image/*">
                          <div class="card" style="width: 10rem; height: 10rem">
                            {{-- <img src="{{asset('dist/img/Noimage.jpg')}}" class="card-img-top" alt="..."> --}}
                            <img id="preview" src="{{asset('dist/img/Noimage.jpg')}}" alt="Selected Image Preview"><br><br>
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
<script>
    const imageInput = document.getElementById('image');
    const previewImage = document.getElementById('preview');

    imageInput.addEventListener('change', function() {
      const file = this.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          previewImage.src = e.target.result;
          previewImage.style.display = 'block'; // Show the image
        }

        reader.readAsDataURL(file);
      } else {
        previewImage.src = "#";
        previewImage.style.display = 'none'; // Hide if no image selected
      }
    });
</script>
@endsection
