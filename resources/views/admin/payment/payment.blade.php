@extends('admin.layout')
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Payment Method</h1></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Payment Method page</li>
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->

              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div id="app" class="row">
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
                        href="/admin/paymentlist" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                      <i class="fas fa-edit"> Edit</i></a>

                    <a  @click="loading()"
                        href="/admin/payment" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                    <i class="fas fa-trash"> Delete</i></a>

                    <a  @click="loading()"
                        href="/admin/payment" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
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

                    <div class="card-tools">
                      <ul class="pagination pagination-sm">
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <label for="inputEmail4" class="form-label"></label>
                </div>
                  <div class="col-auto col-md-7"  style="display:flex;
                  justify-content:center;
                  align-items:center;">
                        <div class="col-md-8 ">
                            <label for="inputEmail4" class="form-label"></label>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                              <label for="inputPassword6" class="col-form-label">Payment Type</label>
                            </div>
                            <div class="col-auto col-md-9">
                              <input type="text" id="inputPassword6" class="form-control" placeholder="Payment Type ...">
                            </div>
                          </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display:flex;
                  justify-content:center;
                  align-items:center;">
                          <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="image" name="image" accept="image/*">
                          <div class="card" style="width: 15rem; height: 15rem">
                            {{-- <img src="{{asset('dist/img/Noimage.jpg')}}" class="card-img-top" alt="..."> --}}
                            <img id="preview" src="{{asset('dist/img/Noimage.jpg')}}" alt="Selected Image Preview"> <br><br>
                          </div>
                  </div>
                  <!-- /.card-body -->

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

{{-- image --}}
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
