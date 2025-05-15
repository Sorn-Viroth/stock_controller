{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
<?php
if(isset($_POST['btn'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  if($email=="admin" || $pass=="123"){
    header("http://127.0.0.1:8000/admin/dashboard");
    exit();
  }
  else{
    echo "<div class='error'>Invalid Email or Password</div>";
  }
}
?>

    <div class="wrapper">
        <div class="logo">
            <img src="{{asset('dist/img/user.png')}}" alt="">
        </div>
        <div class="mt-4 text-center name">
            Admin Login
        </div>
        <form class="p-3 mt-3" action="http://127.0.0.1:8000/admin/dashboard">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="mt-3 btn">Login</button>

        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Dynamics NAV Login</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;

        }

        .login-container {
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Adjust width as needed */
        }

        .header {
            background-color: #205081; /* Dark blue header */
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 5px 5px 0 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px); /* Account for padding */
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Include padding in width */
        }

        button {
          background-color: #f0f0f0;
          border: 1px solid #ccc;
          padding: 8px 16px;
          border-radius: 4px;
          cursor: pointer;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
            font-size: small;
        }

        .footer a {
            color: #0078D7; /* Microsoft blue */
        }
    </style>
</head>
<body>

    <?php
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      if($email=="admin" || $pass=="123"){
        header("http://127.0.0.1:8000/admin/dashboard");
        exit();
      }
      else{
        echo "<div class='error'>Invalid Email or Password</div>";
      }
    }
    ?>


    <div id="app" class="login-container">
        <div class="header">
            <h2>Control Stock Dynamics NAV</h2>
        </div>
        <form action="http://127.0.0.1:8000/admin/dashboard">
            <label for="username">User name:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button @click="fetchProduct()" type="submit">Sign In</button>
        </form>
        <div class="footer">
            © st15.CO.LTD. All rights reserved. | <a href="https://t.me/chamroeun_BLUE">Privacy</a>
        </div>
    </div>


            <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- LoadingOverlay -->
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
    <script>
        new Vue({
        el: '#app',
        data: {
            product_list: []
        },
        methods: {
            fetchProduct() {
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
        });
    </script>
</body>
</html>
