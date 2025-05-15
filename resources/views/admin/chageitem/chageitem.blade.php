@extends('admin.layout')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Chang Item Code</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Chang Item Code</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div id="app" class="content">
    <div class="container-fluid">
      <div class="row" style="display:flex;
      justify-content:center;
      align-items:center;">
          <div class="col-4">
              <div class="card">
                  <div class="card-header">
                        <a
                        @click="showModal()"
                        href="#" class="btn btn-info btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                            <i class="fas fa-search"> Search</i></a>

                        <a  @click="loading()"
                            href="/admin/chageitem" class="btn btn-success btn-sm" style="padding: 5.5px 15px;
                                                                    border: 0;
                                                                    border-radius: 100px;
                                                                    color: #ffffff;
                                                                    font-weight: Bold;
                                                                    transition: all 0.5s;
                                                                    -webkit-transition: all 0.5s;">
                            <i class="fas fa-save"> Save</i></a>
                  </div>
                  <div class="card-body">
                        <form class="row g-3" style="display:flex;
                                                justify-content:center;
                                                align-items:center;">

                            <div class="row g-3 align-items-center col-12">
                                <div class="col-12">
                                    <div href="#" class="mb-3 input-group">
                                        <input type="text" class="form-control" placeholder="Search Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <a    @click="showModal()"
                                                href="#" class="btn btn-outline-secondary" type="button">...</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                  <input type="text" class="form-control" placeholder="Old Code" aria-label="First name">
                                </div>
                                <div class="col-6">
                                  <input type="text" class="form-control" placeholder="New Code" aria-label="Last name">
                                </div>
                              </div>
                        </form>
                  </div>
                    <!-- Modal-Location -->
                <div class="modal fade" id="search" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Item List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                            <div>
                                <div class="p-0 card-body table-responsive" style="height: 500px;">
                                    <table class="table table-head-fixed text-nowrap">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Item ID</th>
                                          <th>Description1</th>
                                          <th>Description2</th>
                                          <th>Product Line</th>
                                          <th>Price</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr v-for="(item, index) in 50">
                                          <td>1</td>
                                          <td>0001</td>
                                          <td>Baby Care</td>
                                          <td style="font-family: 'Khmer OS Battambang';font-size: 16px;">សាប៊ូកូនក្មេង</td>
                                          <td>PD-BABY</td>
                                          <td>1000 $</td>
                                          <td>
                                            <a  @click="loading()"
                                                href="/admin/chageitem" class="btn btn-sm btn-info" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #ffffff;
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                                <i class="fas fa-edit"> Select</i>
                                            </a>
                                            <a href="/admin/item" class="btn btn-sm btn-success" style="padding: 5.5px 15px;
                                                                                    border: 0;
                                                                                    border-radius: 100px;
                                                                                    color: #ffffff;
                                                                                    font-weight: Bold;
                                                                                    transition: all 0.5s;
                                                                                    -webkit-transition: all 0.5s;">
                                                <i class="fas fa-eye"> View</i>
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
              $('#search').modal('show')
          },
          hideModal(){
              $('#search').modal('hide')
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
@endsection
