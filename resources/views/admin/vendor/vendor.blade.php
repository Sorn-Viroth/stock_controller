@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Vendor</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Vendor Page</li>
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
                        <a href="#" class="btn btn-primary btn-sm" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        color: #ffffff;
                                                                        font-weight: Bold;
                                                                        transition: all 0.5s;
                                                                        -webkit-transition: all 0.5s;">
                            <i class="fas fa-plus"> New</i></a>

                        <a  @click="showModal()"
                            href="#" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        color: #ffffff;
                                                                        font-weight: Bold;
                                                                        transition: all 0.5s;
                                                                        -webkit-transition: all 0.5s;">
                          <i class="fas fa-edit"> Edit</i></a>

                        <a  @click="loading()"
                            href="/admin/vendor" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        color: #ffffff;
                                                                        font-weight: Bold;
                                                                        transition: all 0.5s;
                                                                        -webkit-transition: all 0.5s;">
                        <i  @click="loading()"
                            class="fas fa-trash"> Delete</i></a>

                        <a  @click="loading()"
                            href="/admin/vendor" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
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
                            <label for="inputEmail4" class="form-label">Vendor ID</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Vendor ID">
                          </div>
                          <div class="col-md-6 ">
                            <label for="inputEmail4" class="form-label"></label>
                          </div>

                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Name 1</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Name1">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Name 2</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Name2">
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Phone">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Contact">
                          </div>

                          <div class="col-md-12 ">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>

                          <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="image" name="image" accept="image/*">
                          <div class="card" style="width: 15rem; height: 15rem">
                            {{-- <img src="{{asset('dist/img/Noimage.jpg')}}" class="card-img-top" alt="..."> --}}
                            <img id="preview" src="{{asset('dist/img/Noimage.jpg')}}" alt="Selected Image Preview"> <br><br>
                          </div>
                        </form>
                  </div>
              </div>
          </div>
        </div>

        <!-- Modal-Vendor -->
        <div class="modal fade" id="vendor" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Vendor List</h5>
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
                                                href="/admin/vendor" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        color: #ffffff;
                                                                                        font-weight: Bold;
                                                                                        transition: all 0.5s;
                                                                                        -webkit-transition: all 0.5s;">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>
                                            <a  @click="loading()"
                                                href="/admin/vendor" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        color: #ffffff;
                                                                                        font-weight: Bold;
                                                                                        transition: all 0.5s;
                                                                                        -webkit-transition: all 0.5s;">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </a>
                                            <a
                                                @click="loading()"
                                                href="/admin/chagecode" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        background-color: rgb(26, 160, 19);
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
                <div class="modal-footer">
                    <a
                    @click="hideModal()"
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
                $('#vendor').modal('show')
            },
            hideModal(){
                $('#vendor').modal('hide')
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
