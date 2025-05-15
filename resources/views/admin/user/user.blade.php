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
                        {{-- <a href="/admin/createuser" class="btn btn-primary" style="padding: 5.5px 15px;
                                                                                border: 0;
                                                                                border-radius: 100px;
                                                                                color: #ffffff;
                                                                                font-weight: Bold;
                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;">
                        <i class="fas fa-plus-circle"></i>
                            Add
                        </a> --}}

                        <a
                        href="#" class="btn btn-primary"
                        @click="showModal()"
                        style="padding: 5.5px 15px;
                        border: 0;
                        border-radius: 100px;
                        color: #ffffff;
                        font-weight: Bold;
                        transition: all 0.5s;
                        -webkit-transition: all 0.5s;">
                        <i class="fas fa-plus-circle"></i>
                            Add
                        </a>

                        <a href="/admin/user" class="btn btn-light btn-sm" style="float: right">
                        <i class="fas fa-search"></i></a>
                        <input style="float: right" class="" type="text" name="search" placeholder="Search..">
                    </div>

                    <!-- Modal Add User -->
                    <div class="modal fade" id="staticBackdrop"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="staticBackdropLabel">Create User</h5>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="col-md-6 ">
                                        <label for="inputEmail4" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Your ID">
                                      </div>
                                      <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Name 1</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="User name1">
                                              </div>
                                              <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Name 2</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="User name2">
                                              </div>
                                              <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Contact</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Contact">
                                              </div>
                                              <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Phone">
                                              </div>
                                              <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputEmail4" placeholder="Password">
                                              </div>
                                              <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password">
                                              </div>

                                              <div class="col-md-12 ">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                              </div>
                                              <div class="col-md-12 ">
                                                    <label for="photo">Photo</label>
                                                    <input type="file" id="image" name="image" accept="image/*">
                                                  <div class="card" style="width: 10rem; height: 10rem">
                                                    {{-- <img src="{{asset('dist/img/Noimage.jpg')}}" class="card-img-top" alt="..."> --}}
                                                    <img id="preview" src="{{asset('dist/img/Noimage.jpg')}}" > <br><br>
                                                  </div>
                                              </div>
                                        </div>
                                      </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <div class="col-12">
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
                                    <a  @click="loading()"
                                        href="/admin/user" class="btn btn-sm"
                                        style="padding: 5.5px 15px;
                                        float: right;
                                        border: 0;
                                        border-radius: 100px;
                                        background-color: rgb(14, 144, 14);
                                        color: #ffffff;
                                        font-weight: Bold;
                                        transition: all 0.5s;
                                        -webkit-transition: all 0.5s;">
                                            <i class="fas fa-save"></i>
                                            Save
                                    </a>

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Modal Edit User -->
                    <div class="modal fade" id="EditUder"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="staticBackdropLabel">Edit User</h5>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="col-md-6 ">
                                        <label for="inputEmail4" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Your ID">
                                        </div>
                                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Name 1</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="User name1">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Name 2</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="User name2">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Contact</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Contact">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Phone">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputEmail4" placeholder="Password">
                                                </div>
                                                <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password">
                                                </div>

                                                <div class="col-md-12 ">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                                <div class="col-md-12 ">
                                                    <label for="photo">Photo</label>
                                                    <input type="file" id="image" name="image" accept="image/*">
                                                  <div class="card" style="width: 10rem; height: 10rem">
                                                    {{-- <img src="{{asset('dist/img/Noimage.jpg')}}" class="card-img-top" alt="..."> --}}
                                                    <img id="preview" src="{{asset('dist/img/Noimage.jpg')}}" > <br><br>
                                                  </div>
                                              </div>
                                        </div>
                                        </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <div class="col-12">
                                    <a
                                    @click="hideModalEditUderClose()"
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
                                    <a  @click="loading()"
                                        href="/admin/user" class="btn btn-sm"
                                        style="padding: 5.5px 15px;
                                        float: right;
                                        border: 0;
                                        border-radius: 100px;
                                        background-color: rgb(14, 144, 14);
                                        color: #ffffff;
                                        font-weight: Bold;
                                        transition: all 0.5s;
                                        -webkit-transition: all 0.5s;">
                                            <i class="fas fa-save"></i>
                                            Update
                                    </a>

                                </div>
                            </div>
                        </div>
                        </div>
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
                        <div class="table-responsive; fixTableHead">
                            <table class="table table-sm table-borderless table-striped">
                                <thead>
                                    <tr style="background-color:rgb(35, 124, 188); color:#ffffff">
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Phone</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Edit Date</th>
                                        <th>Edit User</th>
                                        <th>Position</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in 10">
                                        <td>1</td>
                                        <td>12345</td>
                                        <td>John Doe</td>
                                        <td>1234567890</td>
                                        <td>1234567890</td>
                                        <td>password123</td>
                                        <td>johndoe@example.com</td>
                                        <td>2022-01-01 12:00:00</td>
                                        <td>John Doe</td>
                                        <td>Admin</td>
                                        <td>
                                            <a
                                                @click="showModalEditUder"
                                                href="#" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        color: #ffffff;
                                                                                        font-weight: Bold;
                                                                                        transition: all 0.5s;
                                                                                        -webkit-transition: all 0.5s;">
                                                <i class="fas fa-edit"> Edit</i>
                                            </a>
                                            <a  @click="loading()"
                                                href="/admin/user" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        color: #ffffff;
                                                                                        font-weight: Bold;
                                                                                        transition: all 0.5s;
                                                                                        -webkit-transition: all 0.5s;">
                                                <i class="fas fa-trash"> Delete</i>
                                            </a>
                                            <a @click="loading()"
                                                href="/admin/chagecode" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                                        border: 0;
                                                                                        border-radius: 100px;
                                                                                        background-color: rgb(19, 179, 88);
                                                                                        color: #ffffff;
                                                                                        font-weight: Bold;
                                                                                        transition: all 0.5s;
                                                                                        -webkit-transition: all 0.5s;">
                                                <i class="fas fa-barcode"> Code</i>
                                            </a>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/admin/createuser" class="btn btn-danger btn-sm" style="padding: 5.5px 15px;
                                                                        border: 0;
                                                                        border-radius: 100px;
                                                                        color: #ffffff;
                                                                        font-weight: Bold;
                                                                        transition: all 0.5s;
                                                                        -webkit-transition: all 0.5s;">
                            <i class="far fa-arrow-alt-circle-left"></i>
                            Back
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
<!-- jQuery -->
<script src={{asset("plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("dist/js/adminlte.min.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection

@section('js')
        {{-- Model --}}
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                },
                methods:{
                    showModal(){
                        $('#staticBackdrop').modal('show')
                    },
                    showModalEditUder(){
                        $('#EditUder').modal('show')
                    },
                    hideModal(){
                        $('#staticBackdrop').modal('hide')
                    },
                    hideModalEditUderClose(){
                        $('#EditUder').modal('hide')
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
