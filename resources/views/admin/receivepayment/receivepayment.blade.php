  @extends('admin.layout')
  @section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="mb-2 row">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<style>
    body{

background-color: #eee;
}

.container{

height: 100vh;

}


.card{
border:none;
}

.form-control {
border-bottom: 2px solid #eee !important;
border: none;
font-weight: 600
}

.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #8bbafe;
outline: 0;
box-shadow: none;
border-radius: 0px;
border-bottom: 2px solid blue !important;
}



.inputbox {
position: relative;
margin-bottom: 20px;
width: 100%
}

.inputbox span {
position: absolute;
top: 7px;
left: 11px;
transition: 0.5s
}

.inputbox i {
position: absolute;
top: 13px;
right: 8px;
transition: 0.5s;
color: #3F51B5
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0
}

.inputbox input:focus~span {
transform: translateX(-0px) translateY(-15px);
font-size: 12px
}

.inputbox input:valid~span {
transform: translateX(-0px) translateY(-15px);
font-size: 12px
}

.card-blue{

background-color: #6896c0;
}

.hightlight{

background-color: #5737d9;
padding: 10px;
border-radius: 10px;
margin-top: 15px;
font-size: 14px;
}

.yellow{

color: #fdcc49;
}

.decoration{

text-decoration: none;
font-size: 14px;
}

.btn-success {
color: #fff;
background-color: #492bc4;
border-color:#492bc4;
}

.btn-success:hover {
color: #fff;
background-color:#492bc4;
border-color: #492bc4;
}


.decoration:hover{

text-decoration: none;
color: #fdcc49;
}
</style>
    <!-- Main content -->
    <div id="app" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container px-5 mt-5">

                    <div class="mb-4">

                        <h2>Recevie Payment</h2>
                    <span>please Check your payment.</span>

                    </div>

                <div class="row">

                    <div class="col-md-8">


                        <div class="p-3 card">

                            <h6 class="text-uppercase">Payment details</h6>
                            <div class="mt-3 inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Customer ID</span>
                                 <a href="/admin/customer-balance" class="btn btn-block bg-gradient-info">Customer ID</a> </div>


                            <div class="row">

                                <div class="col-md-6">

                                    <div class="mt-3 mr-2 inputbox"> <input type="text" name="name" class="form-control" required="required">
                                        <i class="fa fa-credit-card"></i> <span>Card Type </span>
                                        <a  @click="showModalPayment()"
                                            href="#" class="btn btn-block bg-gradient-info btn-xs">
                                        Card</a>
                                    </div>


                                </div>

                                <div class="col-md-6">

                                     <div class="flex-row d-flex">


                                         <div class="mt-3 mr-2 inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Name1</span> </div>

                                      <div class="mt-3 mr-2 inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Name2</span> </div>


                                     </div>


                                </div>


                            </div>



                            <div class="mt-4 mb-4">

                                <h6 class="text-uppercase">Balance Detail</h6>


                                <div class="mt-3 row">

                                    <div class="col-md-6">

                                        <div> <address type="text" name="name" class="form-control" required="required"> <span>$1,502</span> </div>
                                            <div class="mt-3 mr-2 inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Receive Amount</span> </div>

                                    </div>





                                </div>


                                <div class="mt-2 row">

                                    <div class="col-md-6">

                                        <div class="mt-3 mr-2 inputbox"> <input type="number" name="name" class="form-control" required="required"><span>Last Balance</span></div>


                                    </div>


                                     <div class="col-md-6">

                                        <div class="mt-3 mr-2 inputbox"> <input type="date" name="name" class="form-control" required="required"></div>


                                    </div>




                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="p-3 mb-3 text-white card card-blue">

                           <span>You have to pay</span>
                            <div class="flex-row mb-3 d-flex align-items-end">
                                <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
                            </div>

                            <span>Enjoy all the features and perk after you complete the payment</span>
                            <a href="#" class="yellow decoration">Know all the features</a>

                            <div>

                                <button type="button" class="btn btn-block btn-lg hightlight btn-success" style="background-color: #492bc4; color:#fff">Pay</button>


                            </div>

                        </div>

                    </div>

                </div>


              </div>
            </div>
        </div>
          <div class="row">
                <!-- Modal-Payment -->
                <div class="modal fade" id="payment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Payment List</h5>
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
                                            <th>Payment Type</th>
                                            <th>Photo</th>
                                            <th>User Register</th>
                                            <th>Register Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                        v-for="(item, index) in 5"
                                        >
                                            <td>1</td>
                                            <td>ABA Bank</td>
                                            <td>
                                                <img src="{{asset('dist/img/ABA.jpg')}}" class="card-img-top" alt="..."
                                                    style="width: 3rem; height: 3rem">
                                            </td>
                                            <td>Admin</td>
                                            <td>2022-01-01</td>
                                            <td>
                                                <a  @click="loading()"
                                                href="/admin/receivepayment" class="btn btn-sm" style="padding: 5.5px 15px;
                                                border: 0;
                                                border-radius: 100px;
                                                background-color: rgb(54, 174, 30);
                                                color: #ffffff;
                                                font-weight: Bold;
                                                transition: all 0.5s;
                                                -webkit-transition: all 0.5s;">
                                                <i class="fas fa-mouse-pointer"></i>
                                                select
                                            </a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a
                            @click="hideModalPayment()"
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

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  @endsection

  @section('js')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
            },
            methods:{
                showModalPayment(){
                    $('#payment').modal('show')
                },
                hideModalPayment(){
                    $('#payment').modal('hide')
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
